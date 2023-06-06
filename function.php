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
        get_header();
    }
}
add_action('template_redirect', 'activate_theme_on_pages');

   // Fonction pour charger les fichiers CSS et JavaScript nécessaires
function enqueue_about_template_assets() {
    // Charger le fichier CSS Bootstrap
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/bootstrap.min.css');
    // Charger le fichier CSS spécifique au template About
    wp_enqueue_style('about-style', get_template_directory_uri().'/css/aboutStyle.css');

    // Charger les fichiers JavaScript si nécessaire
    // wp_enqueue_script('script-name', get_template_directory_uri().'/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'enqueue_about_template_assets');

// Fonction pour ajouter une classe personnalisée au body
function add_custom_body_class($classes) {
    $classes[] = 'custom-bg'; // Ajoutez la classe CSS personnalisée ici
    return $classes;
}
add_filter('body_class', 'add_custom_body_class');
