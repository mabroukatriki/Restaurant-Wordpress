<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bakes_And_Cakes
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/homeStyle.css">  
</head>
<body class="custom-bg">
    <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">
        <div class="container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/logo1.png" alt="Logo Maiz" width="100" height="100">
            </a>
            <div class="text-center">
                <?php
                wp_nav_menu( array(
                    'theme_location' => 'primary', // Emplacement du menu
                    'menu_class'     => 'nav justify-content-center', // Classe CSS pour le menu
                ) );
                ?>
            </div> 
            <div class="text-md-right">
                <div class="p-2 border" style="background-color: #CC9D2F;">
                    <span class="font-weight-bold">Book Now</span>
                </div>
            </div>
        </div>
    </nav>
