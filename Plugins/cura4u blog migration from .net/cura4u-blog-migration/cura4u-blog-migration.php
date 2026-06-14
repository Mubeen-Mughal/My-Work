<?php
/**
 * Plugin Name: Cura4U Blog Migration
 * Description: Imports Cura4U blogs from .NET API into WordPress, uses BlogUrl for post slugs, and automatically assigns featured images. V1.3 adds BlogUrl slug sync without changing post titles.
 * Version: 1.3.0
 * Author: Cura4U
 */

if (!defined('ABSPATH')) {
    exit;
}

add_filter('upload_mimes', function ($mimes) {
    $mimes['webp'] = 'image/webp';
    $mimes['jpg']  = 'image/jpeg';
    $mimes['jpeg'] = 'image/jpeg';
    $mimes['png']  = 'image/png';
    $mimes['gif']  = 'image/gif';
    return $mimes;
});

add_action('admin_menu', function () {
    add_menu_page(
        'Cura4U Blog Migration',
        'Cura4U Blog Migration',
        'manage_options',
        'cura4u-blog-migration',
        'cura4u_blog_migration_admin_page',
        'dashicons-migrate',
        26
    );
});

function cura4u_blog_migration_admin_page() {
    if (!current_user_can('manage_options')) {
        return;
    }

    @set_time_limit(0);
    @ini_set('max_execution_time', '0');
    @ini_set('memory_limit', '768M');

    echo '<div class="wrap">';
    echo '<h1>Cura4U Blog Migration</h1>';
    echo '<p>This tool imports Cura4U blogs from the .NET API and automatically assigns featured images.</p>';
    echo '<p><strong>V1.3 note:</strong> This version uses <code>BlogUrl</code> for the WordPress post slug without changing the post title. It also tries both <code>ImageUrl</code> and <code>ThumbnailImageUrl</code> for featured images.</p>';

    if (isset($_POST['cura4u_run_migration']) || isset($_POST['cura4u_sync_images_only']) || isset($_POST['cura4u_sync_urls_only'])) {
        check_admin_referer('cura4u_blog_migration_action', 'cura4u_blog_migration_nonce');

        $start_id = isset($_POST['start_id']) ? intval($_POST['start_id']) : 1;
        $end_id   = isset($_POST['end_id']) ? intval($_POST['end_id']) : 370;
        $overwrite_featured_image = !empty($_POST['overwrite_featured_image']);
        $images_only = isset($_POST['cura4u_sync_images_only']);
        $urls_only   = isset($_POST['cura4u_sync_urls_only']);
        $update_post_url_slug = !empty($_POST['update_post_url_slug']) || $urls_only;

        cura4u_run_blog_migration($start_id, $end_id, $overwrite_featured_image, $images_only, $urls_only, $update_post_url_slug);
    }

    echo '<form method="post" style="margin-top:20px; background:#fff; padding:20px; max-width:760px; border:1px solid #ccd0d4;">';
    wp_nonce_field('cura4u_blog_migration_action', 'cura4u_blog_migration_nonce');

    echo '<h2>Migration Controls</h2>';
    echo '<p><strong>Start Blog ID</strong></p>';
    echo '<input type="number" name="start_id" value="1" min="1" required style="width:200px;">';

    echo '<p><strong>End Blog ID</strong></p>';
    echo '<input type="number" name="end_id" value="370" min="1" required style="width:200px;">';

    echo '<p><label><input type="checkbox" name="update_post_url_slug" value="1" checked> Update post URL slug from API <code>BlogUrl</code> without changing post title</label></p>';
    echo '<p><label><input type="checkbox" name="overwrite_featured_image" value="1"> Overwrite existing featured images</label></p>';

    echo '<p>';
    echo '<button type="submit" name="cura4u_run_migration" class="button button-primary">Import Posts + Sync URLs + Featured Images</button> ';
    echo '<button type="submit" name="cura4u_sync_images_only" class="button">Sync Featured Images Only</button> ';
    echo '<button type="submit" name="cura4u_sync_urls_only" class="button">Sync Post URLs Only</button>';
    echo '</p>';

    echo '<p><strong>Recommended:</strong> If posts are already imported, first use <em>Sync Post URLs Only</em>. Then use <em>Sync Featured Images Only</em>. Test with ID range <code>1 to 5</code> first.</p>';
    echo '</form>';

    echo '<hr>';
    echo '<h3>Recommended Batches</h3>';
    echo '<code>1 to 50</code><br><code>51 to 100</code><br><code>101 to 150</code><br><code>151 to 200</code><br><code>201 to 250</code><br><code>251 to 300</code><br><code>301 to 370</code>';
    echo '</div>';
}

function cura4u_run_blog_migration($start_id, $end_id, $overwrite_featured_image = false, $images_only = false, $urls_only = false, $update_post_url_slug = true) {
    echo '<hr>';
    if ($urls_only) {
        echo '<h2>Post URL Slug Sync Started</h2>';
    } else {
        echo $images_only ? '<h2>Featured Image Sync Started</h2>' : '<h2>Migration Started</h2>';
    }

    if ($start_id <= 0 || $end_id <= 0 || $end_id < $start_id) {
        echo '<p style="color:red;"><strong>Invalid ID range.</strong></p>';
        return;
    }

    for ($blog_id = $start_id; $blog_id <= $end_id; $blog_id++) {
        $api_url = 'https://api.cura4u.com/api/getblogbyid/' . $blog_id;

        echo '<div style="padding:12px; margin:12px 0; background:#fff; border-left:4px solid #2271b1;">';
        echo '<strong>Processing Blog ID: ' . esc_html($blog_id) . '</strong><br>';

        $response = wp_remote_get($api_url, [
            'timeout'     => 45,
            'redirection' => 5,
            'headers'     => [
                'Accept'     => 'application/json',
                'User-Agent' => 'Mozilla/5.0 Cura4U-WordPress-Migration/1.3',
            ],
        ]);

        if (is_wp_error($response)) {
            echo '<span style="color:red;">API request failed: ' . esc_html($response->get_error_message()) . '</span>';
            echo '</div>';
            continue;
        }

        $status_code = wp_remote_retrieve_response_code($response);
        if ($status_code !== 200) {
            echo '<span style="color:red;">API returned status code: ' . esc_html($status_code) . '</span>';
            echo '</div>';
            continue;
        }

        $data = json_decode(wp_remote_retrieve_body($response), true);
        if (empty($data) || empty($data['BlogId'])) {
            echo '<span>No valid blog found.</span>';
            echo '</div>';
            continue;
        }

        $old_blog_id = intval($data['BlogId']);
        $title = isset($data['BlogTitle']) ? wp_strip_all_tags($data['BlogTitle']) : '';

        $post_id = cura4u_find_existing_post($old_blog_id, $title);

        if (!$post_id && !$images_only && !$urls_only) {
            $post_id = cura4u_create_wordpress_post($data);
            if ($post_id) {
                echo '<span style="color:green;">Post created successfully. Post ID: ' . esc_html($post_id) . '</span><br>';
            }
        } elseif ($post_id) {
            update_post_meta($post_id, '_cura4u_old_blog_id', $old_blog_id);
            echo '<span>Found existing Post ID: ' . esc_html($post_id) . '</span><br>';
        }

        if (!$post_id) {
            echo '<span style="color:red;">No matching WordPress post found. Run full import first or check title matching.</span>';
            echo '</div>';
            continue;
        }

        if ($update_post_url_slug || $urls_only) {
            $slug_result = cura4u_update_post_slug_from_blog_url($post_id, $data, $title);

            if (!empty($slug_result['updated'])) {
                echo '<span style="color:green;">Post URL slug updated: ' . esc_html($slug_result['slug']) . '</span><br>';
            } elseif (!empty($slug_result['slug'])) {
                echo '<span>Post URL slug already correct: ' . esc_html($slug_result['slug']) . '</span><br>';
            } else {
                echo '<span style="color:#b32d2e;">BlogUrl missing or invalid. Slug not updated.</span><br>';
            }
        }

        if ($urls_only) {
            echo '</div>';
            if (function_exists('flush')) {
                flush();
            }
            continue;
        }

        $image_paths = cura4u_get_image_paths_from_api_data($data);

        if (empty($image_paths)) {
            echo '<span>No ImageUrl or ThumbnailImageUrl found in API response.</span><br>';
            echo '</div>';
            continue;
        }

        $debug = [];
        $image_result = cura4u_attach_featured_image_to_post($image_paths, $post_id, $old_blog_id, $overwrite_featured_image, $debug);

        if ($image_result === 'already_exists') {
            echo '<span>Featured image already exists. Skipped.</span><br>';
        } elseif ($image_result) {
            echo '<span style="color:green;">Featured image attached successfully. Attachment ID: ' . esc_html($image_result) . '</span><br>';
        } else {
            echo '<span style="color:red;">Featured image failed to attach.</span><br>';
            if (!empty($debug)) {
                echo '<p style="color:#b32d2e; margin-bottom:0;"><strong>Debug:</strong></p>';
                echo '<div style="color:#b32d2e; font-size:12px; line-height:1.55; white-space:pre-wrap; max-height:260px; overflow:auto; background:#fff7f7; padding:8px; border:1px solid #f0c2c2;">' . esc_html(implode("\n", $debug)) . '</div>';
            }
        }

        echo '</div>';
        if (function_exists('flush')) {
            flush();
        }
    }

    if ($urls_only) {
        echo '<h2>Post URL Slug Sync Completed</h2>';
    } else {
        echo $images_only ? '<h2>Featured Image Sync Completed</h2>' : '<h2>Migration Completed</h2>';
    }
}

function cura4u_find_existing_post($old_blog_id, $title) {
    $posts = get_posts([
        'post_type'      => 'post',
        'post_status'    => 'any',
        'posts_per_page' => 1,
        'fields'         => 'ids',
        'meta_key'       => '_cura4u_old_blog_id',
        'meta_value'     => $old_blog_id,
    ]);

    if (!empty($posts)) {
        return intval($posts[0]);
    }

    if (empty($title)) {
        return false;
    }

    global $wpdb;
    $post_id = $wpdb->get_var(
        $wpdb->prepare(
            "SELECT ID FROM {$wpdb->posts}
             WHERE post_type = %s
             AND post_title = %s
             AND post_status NOT IN ('trash', 'auto-draft')
             LIMIT 1",
            'post',
            $title
        )
    );

    if (!empty($post_id)) {
        update_post_meta(intval($post_id), '_cura4u_old_blog_id', intval($old_blog_id));
        return intval($post_id);
    }

    return false;
}

function cura4u_create_wordpress_post($data) {
    $old_blog_id = intval($data['BlogId']);
    $title       = isset($data['BlogTitle']) ? wp_strip_all_tags($data['BlogTitle']) : '';
    $content     = isset($data['BlogDescription']) ? $data['BlogDescription'] : '';
    $excerpt     = isset($data['BlogShortDescription']) ? wp_strip_all_tags($data['BlogShortDescription']) : '';
    $date        = isset($data['BlogDate']) ? $data['BlogDate'] : current_time('mysql');

    if (empty($title) || empty($content)) {
        return false;
    }

    $post_date = current_time('mysql');
    if (!empty($date) && strtotime($date)) {
        $post_date = date('Y-m-d H:i:s', strtotime($date));
    }

    $post_id = wp_insert_post([
        'post_title'   => $title,
        'post_content' => $content,
        'post_excerpt' => $excerpt,
        'post_status'  => 'publish',
        'post_type'    => 'post',
        'post_name'    => cura4u_get_slug_from_blog_url($data, $title),
        'post_date'    => $post_date,
    ]);

    if (is_wp_error($post_id) || empty($post_id)) {
        return false;
    }

    update_post_meta($post_id, '_cura4u_old_blog_id', $old_blog_id);
    update_post_meta($post_id, '_cura4u_api_imported', 'yes');

    return intval($post_id);
}


function cura4u_get_slug_from_blog_url($data, $title = '') {
    if (!empty($data['BlogUrl'])) {
        $blog_url = trim((string) $data['BlogUrl']);
        $blog_url = html_entity_decode($blog_url);

        /*
         * API can return BlogUrl as:
         * 1) "seven natural ways to increase mch in blood"
         * 2) "/blog/seven-natural-ways-to-increase-mch-in-blood"
         * 3) "https://cura4u.com/blog/seven-natural-ways-to-increase-mch-in-blood"
         * In all cases, we only need the final post slug. This does not change the post title.
         */
        $path = parse_url($blog_url, PHP_URL_PATH);

        if (!empty($path)) {
            $parts = explode('/', trim($path, '/'));
            $slug = end($parts);
        } else {
            $slug = $blog_url;
        }

        $slug = sanitize_title($slug);

        if (!empty($slug)) {
            return $slug;
        }
    }

    return sanitize_title($title);
}

function cura4u_update_post_slug_from_blog_url($post_id, $data, $title = '') {
    $new_slug = cura4u_get_slug_from_blog_url($data, $title);

    if (empty($new_slug) || empty($post_id)) {
        return [
            'updated' => false,
            'slug'    => '',
        ];
    }

    $current_slug = get_post_field('post_name', $post_id);

    if ($current_slug === $new_slug) {
        return [
            'updated' => false,
            'slug'    => $new_slug,
        ];
    }

    $updated_post_id = wp_update_post([
        'ID'        => intval($post_id),
        'post_name' => $new_slug,
    ], true);

    if (is_wp_error($updated_post_id)) {
        return [
            'updated' => false,
            'slug'    => '',
        ];
    }

    update_post_meta($post_id, '_cura4u_old_blog_url', isset($data['BlogUrl']) ? sanitize_text_field($data['BlogUrl']) : '');
    update_post_meta($post_id, '_cura4u_slug_synced_from_blog_url', 'yes');

    return [
        'updated' => true,
        'slug'    => $new_slug,
    ];
}
function cura4u_get_image_paths_from_api_data($data) {
    $paths = [];

    // Try full blog image first, then thumbnail. If full image is missing/404, the plugin will automatically try thumbnail.
    if (!empty($data['ImageUrl'])) {
        $paths[] = $data['ImageUrl'];
    }

    if (!empty($data['ThumbnailImageUrl'])) {
        $paths[] = $data['ThumbnailImageUrl'];
    }

    // Final fallback: first image inside blog content, if available.
    if (!empty($data['BlogDescription']) && preg_match('/<img[^>]+src=["\']([^"\']+)["\']/i', $data['BlogDescription'], $m)) {
        if (!empty($m[1])) {
            $paths[] = $m[1];
        }
    }

    $paths = array_values(array_unique(array_filter(array_map('trim', $paths))));
    return $paths;
}

function cura4u_attach_featured_image_to_post($image_paths, $post_id, $old_blog_id, $overwrite_featured_image = false, &$debug = []) {
    if (empty($image_paths) || empty($post_id)) {
        $debug[] = 'Empty image paths or post ID.';
        return false;
    }

    if (!$overwrite_featured_image && has_post_thumbnail($post_id)) {
        return 'already_exists';
    }

    if (!is_array($image_paths)) {
        $image_paths = [$image_paths];
    }

    foreach ($image_paths as $image_path_index => $image_path) {
        $debug[] = 'Source image field #' . ($image_path_index + 1) . ': ' . $image_path;
        $candidate_urls = cura4u_get_candidate_image_urls($image_path);

        if (empty($candidate_urls)) {
            $debug[] = 'No candidate URLs could be built for image path.';
            continue;
        }

        foreach ($candidate_urls as $candidate_url) {
            $debug[] = 'Trying: ' . $candidate_url;

            $existing_attachment = cura4u_find_existing_attachment_by_source_url($candidate_url);
            if ($existing_attachment) {
                set_post_thumbnail($post_id, $existing_attachment);
                $debug[] = 'Existing attachment found and assigned: ' . $existing_attachment;
                return $existing_attachment;
            }

            $file_name = cura4u_get_file_name_from_image_url($candidate_url, $old_blog_id);
            $download = cura4u_download_image_to_temp_file($candidate_url, $file_name, $old_blog_id, $debug);

            if (empty($download) || empty($download['tmp_file'])) {
                continue;
            }

            $attachment_id = cura4u_insert_downloaded_image_as_attachment(
                $download['tmp_file'],
                $download['file_name'],
                $post_id,
                $candidate_url,
                $old_blog_id,
                $debug
            );

            if ($attachment_id) {
                set_post_thumbnail($post_id, $attachment_id);
                return intval($attachment_id);
            }
        }
    }

    return false;
}

function cura4u_get_candidate_image_urls($image_path) {
    $image_path = html_entity_decode(trim((string) $image_path));
    if (empty($image_path)) {
        return [];
    }

    $candidates = [];

    $hosts = [
        'https://cura4u.com',
        'https://www.cura4u.com',
        'https://api.cura4u.com',
    ];

    $raw_urls = [];
    if (preg_match('#^https?://#i', $image_path)) {
        $raw_urls[] = $image_path;

        $parts = parse_url($image_path);
        $path_and_query = isset($parts['path']) ? $parts['path'] : '';
        if (!empty($parts['query'])) {
            $path_and_query .= '?' . $parts['query'];
        }
        if (!empty($path_and_query)) {
            foreach ($hosts as $host) {
                $raw_urls[] = $host . $path_and_query;
            }
        }
    } else {
        if (strpos($image_path, '/') !== 0) {
            $image_path = '/' . $image_path;
        }
        foreach ($hosts as $host) {
            $raw_urls[] = $host . $image_path;
        }
    }

    foreach ($raw_urls as $url) {
        foreach (cura4u_expand_image_url_variants($url) as $variant) {
            $candidates[] = $variant;
        }
    }

    return array_values(array_unique(array_filter($candidates)));
}

function cura4u_expand_image_url_variants($url) {
    $variants = [];
    $url = html_entity_decode(trim((string) $url));

    if (empty($url)) {
        return [];
    }

    $variants[] = $url;

    // Some projects use "FromFileName" while some API responses show "FormFileName".
    if (strpos($url, 'DisplayFileFormFileName') !== false) {
        $variants[] = str_replace('DisplayFileFormFileName', 'DisplayFileFromFileName', $url);
    }
    if (strpos($url, 'DisplayFileFromFileName') !== false) {
        $variants[] = str_replace('DisplayFileFromFileName', 'DisplayFileFormFileName', $url);
    }

    $parts = parse_url($url);
    if (!empty($parts['query'])) {
        parse_str($parts['query'], $query_params);
        $file_name = '';

        if (!empty($query_params['fileName'])) {
            $file_name = wp_unslash($query_params['fileName']);
        } elseif (!empty($query_params['filename'])) {
            $file_name = wp_unslash($query_params['filename']);
        }

        if (!empty($file_name)) {
            $file_name_variants = array_values(array_unique([
                $file_name,
                ltrim($file_name, '-'),
                rawurldecode($file_name),
                ltrim(rawurldecode($file_name), '-'),
            ]));

            $scheme = isset($parts['scheme']) ? $parts['scheme'] : 'https';
            $host   = isset($parts['host']) ? $parts['host'] : '';
            $path   = isset($parts['path']) ? $parts['path'] : '';
            $base   = $scheme . '://' . $host . $path;

            $paths = [$path];
            if (strpos($path, 'DisplayFileFormFileName') !== false) {
                $paths[] = str_replace('DisplayFileFormFileName', 'DisplayFileFromFileName', $path);
            }
            if (strpos($path, 'DisplayFileFromFileName') !== false) {
                $paths[] = str_replace('DisplayFileFromFileName', 'DisplayFileFormFileName', $path);
            }
            $paths = array_values(array_unique($paths));

            foreach ($paths as $p) {
                $b = $scheme . '://' . $host . $p;
                foreach ($file_name_variants as $fn) {
                    $variants[] = $b . '?fileName=' . rawurlencode($fn);
                    $variants[] = $b . '?filename=' . rawurlencode($fn);
                }
            }
        }
    }

    return array_values(array_unique(array_filter($variants)));
}

function cura4u_find_existing_attachment_by_source_url($image_url) {
    $attachments = get_posts([
        'post_type'      => 'attachment',
        'post_status'    => 'inherit',
        'posts_per_page' => 1,
        'fields'         => 'ids',
        'meta_key'       => '_cura4u_source_image_url',
        'meta_value'     => $image_url,
    ]);

    if (!empty($attachments)) {
        return intval($attachments[0]);
    }

    return false;
}

function cura4u_get_file_name_from_image_url($image_url, $old_blog_id) {
    $parsed_url = parse_url($image_url);

    if (!empty($parsed_url['query'])) {
        parse_str($parsed_url['query'], $query_params);
        $file_name = '';
        if (!empty($query_params['fileName'])) {
            $file_name = $query_params['fileName'];
        } elseif (!empty($query_params['filename'])) {
            $file_name = $query_params['filename'];
        }
        if (!empty($file_name)) {
            $file_name = sanitize_file_name(wp_unslash(rawurldecode($file_name)));
            $file_name = ltrim($file_name, '-');
            if (preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file_name)) {
                return $file_name;
            }
            return $file_name . '.jpg';
        }
    }

    $path = parse_url($image_url, PHP_URL_PATH);
    $path_file_name = $path ? basename($path) : '';
    if (!empty($path_file_name) && preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $path_file_name)) {
        return sanitize_file_name($path_file_name);
    }

    return 'cura4u-blog-featured-image-' . intval($old_blog_id) . '.jpg';
}

function cura4u_download_image_to_temp_file($image_url, $file_name, $old_blog_id, &$debug = []) {
    $response = wp_remote_get($image_url, [
        'timeout'     => 60,
        'redirection' => 5,
        'sslverify'   => false,
        'headers'     => [
            'User-Agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 Cura4U-WordPress-Migration/1.3',
            'Accept'     => 'image/avif,image/webp,image/apng,image/svg+xml,image/*,*/*;q=0.8',
            'Referer'    => 'https://cura4u.com/',
        ],
    ]);

    if (is_wp_error($response)) {
        $debug[] = 'HTTP request failed: ' . $response->get_error_message();
        return false;
    }

    $status_code = wp_remote_retrieve_response_code($response);
    $content_type = wp_remote_retrieve_header($response, 'content-type');
    $body = wp_remote_retrieve_body($response);

    $debug[] = 'HTTP status: ' . $status_code . (!empty($content_type) ? ' | content-type: ' . $content_type : '');

    if ($status_code !== 200 || empty($body)) {
        return false;
    }

    $tmp_file = wp_tempnam($file_name);
    if (!$tmp_file) {
        $debug[] = 'Could not create temporary file.';
        return false;
    }

    $written = file_put_contents($tmp_file, $body);
    if (!$written) {
        @unlink($tmp_file);
        $debug[] = 'Could not write response body to temporary file.';
        return false;
    }

    $real_mime = function_exists('wp_get_image_mime') ? wp_get_image_mime($tmp_file) : '';
    if (empty($real_mime) || strpos($real_mime, 'image/') !== 0) {
        $sample = @file_get_contents($tmp_file, false, null, 0, 120);
        @unlink($tmp_file);
        $debug[] = 'Downloaded response is not an image. First bytes: ' . substr(preg_replace('/[^\x20-\x7E]/', '.', (string) $sample), 0, 100);
        return false;
    }

    $debug[] = 'Downloaded image MIME: ' . $real_mime;

    return [
        'tmp_file'  => $tmp_file,
        'file_name' => $file_name,
    ];
}

function cura4u_insert_downloaded_image_as_attachment($tmp_file, $file_name, $post_id, $source_url, $old_blog_id, &$debug = []) {
    if (!file_exists($tmp_file) || filesize($tmp_file) <= 0) {
        $debug[] = 'Temporary image file does not exist or is empty.';
        return false;
    }

    require_once ABSPATH . 'wp-admin/includes/image.php';
    require_once ABSPATH . 'wp-admin/includes/file.php';
    require_once ABSPATH . 'wp-admin/includes/media.php';

    $real_mime = function_exists('wp_get_image_mime') ? wp_get_image_mime($tmp_file) : '';

    if (empty($real_mime) || strpos($real_mime, 'image/') !== 0) {
        @unlink($tmp_file);
        $debug[] = 'Temporary file is not detected as image during attachment insert.';
        return false;
    }

    $ext = cura4u_extension_from_mime($real_mime);
    $file_name = sanitize_file_name($file_name);

    if (!preg_match('/\.(jpg|jpeg|png|gif|webp)$/i', $file_name)) {
        $file_name .= '.' . $ext;
    } else {
        $current_ext = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
        if ($ext && $current_ext !== $ext && !($current_ext === 'jpg' && $ext === 'jpeg')) {
            $file_name = pathinfo($file_name, PATHINFO_FILENAME) . '.' . $ext;
        }
    }

    $uploads = wp_upload_dir();
    if (!empty($uploads['error'])) {
        @unlink($tmp_file);
        $debug[] = 'WordPress upload directory error: ' . $uploads['error'];
        return false;
    }

    $unique_file_name = wp_unique_filename($uploads['path'], $file_name);
    $new_file = trailingslashit($uploads['path']) . $unique_file_name;

    if (!@copy($tmp_file, $new_file)) {
        @unlink($tmp_file);
        $debug[] = 'Could not copy temporary file into uploads directory.';
        return false;
    }

    @unlink($tmp_file);

    $attachment = [
        'post_mime_type' => $real_mime,
        'post_title'     => sanitize_text_field(pathinfo($unique_file_name, PATHINFO_FILENAME)),
        'post_content'   => '',
        'post_status'    => 'inherit',
    ];

    $attachment_id = wp_insert_attachment($attachment, $new_file, $post_id);
    if (is_wp_error($attachment_id) || empty($attachment_id)) {
        @unlink($new_file);
        $debug[] = 'wp_insert_attachment failed.';
        return false;
    }

    $attachment_data = wp_generate_attachment_metadata($attachment_id, $new_file);
    if (!is_wp_error($attachment_data) && !empty($attachment_data)) {
        wp_update_attachment_metadata($attachment_id, $attachment_data);
    }

    update_post_meta($attachment_id, '_cura4u_source_image_url', $source_url);
    update_post_meta($attachment_id, '_cura4u_source_blog_id', intval($old_blog_id));

    return intval($attachment_id);
}

function cura4u_extension_from_mime($mime) {
    $map = [
        'image/jpeg' => 'jpg',
        'image/jpg'  => 'jpg',
        'image/png'  => 'png',
        'image/gif'  => 'gif',
        'image/webp' => 'webp',
    ];

    return isset($map[$mime]) ? $map[$mime] : 'jpg';
}
