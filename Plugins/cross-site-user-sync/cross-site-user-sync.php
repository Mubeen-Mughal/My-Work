<?php
/*
Plugin Name: Cross Site User Sync
Description: Deletes or creates users across connected WordPress sites when an action is taken on one.
Version: 1.3
Author: Mubeen Arshad
*/

if (!defined('ABSPATH')) exit;

class Cross_Site_User_Sync {
    private $option_key = 'csus_plugin_settings';
    private $api_key_option = 'csus_api_key';

    public function __construct() {
        add_action('delete_user', [$this, 'on_user_deleted'], 10, 1);
        add_action('user_register', [$this, 'on_user_registered'], 10, 1);
        add_action('rest_api_init', [$this, 'register_api_endpoints']);
        add_action('admin_menu', [$this, 'add_plugin_settings_page']);
        add_action('admin_init', [$this, 'register_plugin_settings']);
    }

    public function on_user_deleted($user_id) {
        $user = get_userdata($user_id);
        if (!$user) return;

        $settings = get_option($this->option_key, []);
        $remote_urls = array_filter(array_map('trim', explode("\n", $settings['remote_sites'] ?? '')));
        $api_key = get_option($this->api_key_option);

        foreach ($remote_urls as $url) {
            wp_remote_post(rtrim($url, '/') . '/wp-json/csus/v1/delete-user', [
                'headers' => ['Content-Type' => 'application/json'],
                'body' => json_encode([
                    'email' => $user->user_email,
                    'api_key' => $api_key,
                ]),
                'timeout' => 10,
            ]);
        }
    }

    public function on_user_registered($user_id) {
        $user = get_userdata($user_id);
        if (!$user) return;

        $settings = get_option($this->option_key, []);
        $remote_urls = array_filter(array_map('trim', explode("\n", $settings['remote_sites'] ?? '')));
        $api_key = get_option($this->api_key_option);

        $random_password = wp_generate_password(12, true);

        foreach ($remote_urls as $url) {
            wp_remote_post(rtrim($url, '/') . '/wp-json/csus/v1/add-user', [
                'headers' => ['Content-Type' => 'application/json'],
                'body' => json_encode([
                    'email' => $user->user_email,
                    'username' => $user->user_login,
                    'password' => $random_password,
                    'role' => $user->roles[0] ?? 'subscriber',
                    'api_key' => $api_key,
                ]),
                'timeout' => 10,
            ]);
        }
    }

    public function register_api_endpoints() {
        register_rest_route('csus/v1', '/delete-user', [
            'methods' => 'POST',
            'callback' => [$this, 'handle_remote_user_delete'],
            'permission_callback' => '__return_true',
        ]);

        register_rest_route('csus/v1', '/add-user', [
            'methods' => 'POST',
            'callback' => [$this, 'handle_remote_user_add'],
            'permission_callback' => '__return_true',
        ]);
    }

    public function handle_remote_user_delete($request) {
        $params = $request->get_json_params();
        $api_key = sanitize_text_field($params['api_key'] ?? '');
        $email = sanitize_email($params['email'] ?? '');
        $stored_key = get_option($this->api_key_option);

        if (empty($api_key) || $api_key !== $stored_key) {
            return new WP_REST_Response(['error' => 'Invalid API key'], 403);
        }

        if (empty($email)) {
            return new WP_REST_Response(['error' => 'Missing email'], 400);
        }

        $user = get_user_by('email', $email);
        if ($user) {
            require_once ABSPATH . 'wp-admin/includes/user.php';
            $admin_id = 1; // Transfer posts to this admin
            wp_delete_user($user->ID, $admin_id);
            return new WP_REST_Response(['success' => true], 200);
        }

        return new WP_REST_Response(['message' => 'User not found'], 404);
    }

    public function handle_remote_user_add($request) {
        $params = $request->get_json_params();
        $api_key = sanitize_text_field($params['api_key'] ?? '');
        $email = sanitize_email($params['email'] ?? '');
        $username = sanitize_user($params['username'] ?? '');
        $password = $params['password'] ?? '';
        $role = sanitize_text_field($params['role'] ?? 'subscriber');
        $stored_key = get_option($this->api_key_option);

        if ($api_key !== $stored_key) {
            return new WP_REST_Response(['error' => 'Invalid API key'], 403);
        }

        if (email_exists($email)) {
            return new WP_REST_Response(['message' => 'User already exists'], 200);
        }

        $user_id = wp_create_user($username, $password, $email);
        if (is_wp_error($user_id)) {
            return new WP_REST_Response(['error' => 'Failed to create user'], 500);
        }

        wp_update_user(['ID' => $user_id, 'role' => $role]);

        return new WP_REST_Response(['success' => true], 200);
    }

    public function add_plugin_settings_page() {
        add_options_page('Cross Site User Sync', 'User Sync', 'manage_options', 'csus-settings', [$this, 'render_settings_page']);
    }

    public function register_plugin_settings() {
        register_setting('csus_settings_group', $this->option_key);
        register_setting('csus_settings_group', $this->api_key_option);
    }

    public function render_settings_page() {
        $settings = get_option($this->option_key, []);
        $api_key = get_option($this->api_key_option);
        $masked_api = str_repeat('*', strlen($api_key));

        ?>
        <div class="wrap">
            <h1>Cross Site User Sync</h1>
            <form method="post" action="options.php">
                <?php settings_fields('csus_settings_group'); ?>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Remote Site URLs (one per line)</th>
                        <td>
                            <textarea name="<?php echo esc_attr($this->option_key); ?>[remote_sites]" rows="5" cols="60"><?php echo esc_textarea($settings['remote_sites'] ?? ''); ?></textarea>
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">API Key</th>
                        <td>
                            <input type="text" name="<?php echo esc_attr($this->api_key_option); ?>" value="<?php echo esc_attr($api_key); ?>" size="60" />
                            <p class="description">Use the same API key on all sites. Currently set to: <?php echo esc_html($masked_api); ?></p>
                        </td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
        </div>
        <?php
    }
}

new Cross_Site_User_Sync();