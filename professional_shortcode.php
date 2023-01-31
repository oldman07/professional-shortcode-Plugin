<?php
/**
* Plugin Name:   Professional ShortCode
* Plugin URI:    https://tutsplus.com/
* Description:   Adds a call to action box
* Version:       1.0
* Author:        Rachel McCollin
* Author URI:    http://rachelmccollin.com
*
*
*/

//defining plugin path 
define('PLUGIN_PATH', plugin_dir_path(__FILE__));
define('PLUGIN_FILE', __FILE__);
define('PLUGIN_URL', plugin_dir_url(__FILE__));

//include external files
include PLUGIN_PATH."include/pro_main.php";
include PLUGIN_PATH."include/pro_settings.php";



add_action('admin_menu', 'pro_shortcode_options');  
add_action('admin_enqueue_scripts', 'pwspk_adding_script');        //wp_enqueue_scripts is user to add static resources like css and js.

function pwspk_adding_script()
{
    wp_enqueue_style('pwspk_plugin_dev', PLUGIN_URL."assets/css/style.css"); //plugin_dir_url is use to add static resources

    // wp_enqueue_script('pwspk_plugin_dev', plugin_dir_url(__FILE__) . "assets/js/custom.js");
}



function pro_shortcode_options()
{
    add_menu_page('Pro Shortcode', 'Pro Shortcode', 'manage_options', 'pro-shortcode', 'pro_shortcode_main_func','dashicons-shortcode');  //add_menu_page( string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = '', string $icon_url = '', int|float $position = null ): string
    add_submenu_page('pro-shortcode', 'About', 'About', 'manage_options', 'pwspk settings', 'pwspk_settings_func');   //add_submenu_page( string $parent_slug, string $page_title, string $menu_title, string $capability, string $menu_slug, callable $callback = '', int|float $position = null ):
    add_submenu_page('pro-shortcode', 'Settings','Settings', 'manage_options', 'pro_shortcode_Settings', 'pro_shortcode_Settings');
    
    
}

