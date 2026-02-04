<?php
/**
 * Plugin Name: App Passwords Force Enable
 */

add_filter('wp_is_application_passwords_available', '__return_true', 999);
add_filter('wp_application_passwords_available', '__return_true', 999);
add_filter('wp_is_application_passwords_enabled', '__return_true', 999);

add_filter('user_has_cap', function ($caps) {
    $caps['create_app_password'] = true;
    $caps['edit_app_password']   = true;
    $caps['delete_app_password'] = true;
    return $caps;
}, 999);

