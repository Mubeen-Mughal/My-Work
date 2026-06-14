<?php
// If uninstall not called from WordPress, exit
if (!defined('WP_UNINSTALL_PLUGIN')) {
    exit;
}

// Clean up options stored by the plugin
delete_option('csus_plugin_settings');
delete_option('csus_api_key');

// If you stored anything in usermeta or custom tables, clean that up here too
// Example (if applicable):
// global $wpdb;
// $wpdb->query("DELETE FROM {$wpdb->prefix}usermeta WHERE meta_key LIKE 'csus_%'");