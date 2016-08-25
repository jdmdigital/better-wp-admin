<?php

/*
 * Plugin Name: Better WP Admin
 * Plugin URI: https://github.com/jdmdigital/better-wp-admin/
 * Description: A WordPress Custom Admin Plugin for customizing the WordPress backend to be more intuitive and easier to use for casual users (e.g. better). - Upload and Activate.
 * Version: 0.1
 * Author: JDM Digital
 * Author URI: http://jdmdigital.co
 * License: GPLv2 or later
 * GitHub Plugin URI: https://github.com/jdmdigital/better-wp-admin/
 * GitHub Branch: master
*/

if( !function_exists('better_wp_admin_style') ) {
  function better_wp_admin_style() {
    wp_enqueue_style('better-wp-admin', plugins_url('better-wp-admin.css', __FILE__));
  }
}
add_action('admin_enqueue_scripts', 'better_wp_admin_style');
add_action('login_enqueue_scripts', 'better_wp_admin_style');

?>
