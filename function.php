<?php
 function register_custom_menus() {
    register_nav_menu('header-menu', 'Menu de l\'en-tête');
}
add_action('init', 'register_custom_menus');

function enqueue_bootstrap_icons() {
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css');
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_icons');

function activate_theme_on_pages() {
    if (is_page('about') || is_page('index') || is_page('menu')) {
        get_header(); // Afficher l'en-tête du thème

        // Afficher l'image du thème
        echo '<img src="' . get_template_directory_uri() . '/screenshot.png" alt="Theme Screenshot" />';

        // Afficher le contenu de la page
        while (have_posts()) {
            the_post();
            // Afficher le contenu de la page avec la fonction the_content()
            the_content();
        }

        get_footer(); // Afficher le pied de page du thème
    }
}
add_action('template_redirect', 'activate_theme_on_pages');

function enqueue_about_template_assets() {
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css');
    wp_enqueue_style('about-style', get_template_directory_uri() . '/css/aboutStyle.css');
}
add_action('wp_enqueue_scripts', 'enqueue_about_template_assets');

function add_custom_body_class($classes) {
    $classes[] = 'custom-bg';
    return $classes;
}
add_filter('body_class', 'add_custom_body_class');






?>