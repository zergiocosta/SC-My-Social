<?php
/**
 * Plugin Name: SC My Social
 * Plugin URI: https://profiles.wordpress.org/sergiuscosta
 * Description: The easier way to connect your website to your social media
 * Version: 1.0
 * Author: Sergio Costa
 * Author URI: http://republicainterativa.com.br/
 * Text Domain: scmysocial
 * License: GPLv2 or later
 */

require_once 'functions/options.php';

add_action( 'wp_enqueue_scripts', 'scmysocial_files' );
function scmysocial_files(){
    wp_enqueue_style( 'sc-my-social', plugins_url( 'assets/css/sc-my-social.css', __FILE__ ), array(), null, 'all' );
    wp_enqueue_style('sc_fontello', plugins_url('assets/css/sc-fontello.css',__FILE__), array(), null, 'all' );
}


add_action( 'admin_enqueue_scripts', 'sc_my_enqueue' );
function sc_my_enqueue($hook) {
//    global $page_hook_suffix;
//    if( $hook != $page_hook_suffix )
//        return;
    wp_register_style('sc_my_social_fontello', plugins_url('assets/css/sc-fontello.css',__FILE__));
    wp_enqueue_style('sc_my_social_fontello');

    wp_register_style('sc_my_social_bootstrap', plugins_url('assets/css/sc-bootstrap.css',__FILE__));
    wp_enqueue_style('sc_my_social_bootstrap');

    wp_register_style('sc_my_social_style', plugins_url('assets/css/sc-admin.css',__FILE__));
    wp_enqueue_style('sc_my_social_style');
}

require_once 'functions/sc-my-social-output.php';

?>