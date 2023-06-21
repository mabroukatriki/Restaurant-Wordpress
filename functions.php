<?php
// Exit if accessed directly
if (!defined('ABSPATH')) {
    exit;
}

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if (!function_exists('chld_thm_cfg_locale_css')) {
    function chld_thm_cfg_locale_css($uri)
    {
        if (empty($uri) && is_rtl() && file_exists(get_template_directory() . '/rtl.css')) {
            $uri = get_template_directory_uri() . '/rtl.css';
        }
        return $uri;
    }
}
add_filter('locale_stylesheet_uri', 'chld_thm_cfg_locale_css');

if (!function_exists('chld_thm_cfg_parent_css')) {
    function chld_thm_cfg_parent_css()
    {
        wp_enqueue_style('chld_thm_cfg_parent', trailingslashit(get_template_directory_uri()) . 'style.css', array('animate', 'owl-carousel'));
    }
}
add_action('wp_enqueue_scripts', 'chld_thm_cfg_parent_css', 10);

// END ENQUEUE PARENT ACTION

// BEGIN ENQUEUE CHILD ACTION

if (!function_exists('chld_thm_cfg_child_css')) {
    function chld_thm_cfg_child_css()
    {
        wp_enqueue_style('chld_thm_cfg_child', get_stylesheet_directory_uri() . 'style.css');
    }
}
add_action('wp_enqueue_scripts', 'chld_thm_cfg_child_css', 20);
function register_my_menus() {
    register_nav_menus(
        array(
            'primary' => __( 'Primary Menu' ),
            'footer' => __( 'Footer Menu' )
        )
    );
}
add_action( 'after_setup_theme', 'register_my_menus' );

function custom_register_post_type() {
    register_post_type('custom_template', array(
        'labels' => array(
            'name' => 'Custom Templates',
            'singular_name' => 'Custom Template'
        ),
        'public' => true,
        'supports' => array('title', 'editor', 'thumbnail'),
        'has_archive' => true,
        'rewrite' => array('slug' => 'custom-template')
    ));
}
add_action('init', 'custom_register_post_type');


function theme_register_menus() {
    register_nav_menus( array(
        'header' => 'Header Menu',
        'footer' => 'Footer Menu',
    ) );
}
add_action( 'after_setup_theme', 'theme_register_menus' );


// END ENQUEUE CHILD ACTION
