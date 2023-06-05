<?php
function register_custom_menus() {
    register_nav_menu('header-menu', 'Menu de l\'en-tête');
}

add_action('init', 'register_custom_menus');

function enqueue_bootstrap_icons() {
    wp_enqueue_style('bootstrap-icons', 'https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css');
}
add_action('wp_enqueue_scripts', 'enqueue_bootstrap_icons');
   