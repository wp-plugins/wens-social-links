<?php
/*
 * Plugin Name: WEN's Social Links
 * Version: 2.0.0
 * Plugin URI: http://wordpress.org/plugins/wens-social-links/
 * Description: Simple plugin that can be used to link almost 21 social networks
 * Author: Web Experts Nepal, Manesh Timilsina
 * Author URI: http://webexpertsnepal.com
 * License: GNU/GPL http://www.gnu.org/copyleft/gpl.html
 */

define('PLUGIN_NAME', 'WEN Social Links');
define('PLUGIN_VERSION', '2.0.0');

add_action('wp_enqueue_scripts', 'wen_enque_scripts');

function wen_enque_scripts() {

    wp_enqueue_style('main-style', plugins_url('/css/main-style.css', __FILE__), array(), PLUGIN_VERSION, 'all');
 
    wp_enqueue_script('jquery');

    wp_enqueue_script('jquery-ui', 'http://code.jquery.com/ui/1.10.3/jquery-ui.js');               

    wp_enqueue_script('SC_custom', plugins_url( '/js/custom.js' , __FILE__ ));

}

// Create custom settings menu
add_action('admin_menu', 'wen_create_menu');


function wen_create_menu() {

    add_options_page( __( ' WEN Plugin Options' ), __( 'WEN Social Links' ), 'manage_options', basename(__FILE__), 'wen_settings_page' );
}

// Register settings
add_action( 'admin_init', 'register_plugin_settings' );

function register_plugin_settings() {
   global $wen_options, $option_group, $option_name;
    //register our settings
    register_setting( $option_group, $option_name);
}


$dir = plugin_dir_path( __FILE__ );

require_once($dir.'options.php');

require_once($dir.'functions.php');


