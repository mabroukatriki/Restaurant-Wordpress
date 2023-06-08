

<?php
/**
 * The header for our theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Theme_restaurant
 * @since 1.0
 */
?>



<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/homeStyle.css">  
</head>
<body class="custom-bg">
    <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">
        <div class="container">
            <img src="<?php echo get_template_directory_uri(); ?>/image/logo1.png" alt="Logo Maiz" width="100" height="100">
            <div class="text-center">
                <nav class="nav justify-content-center">
                    <a href="<?php echo get_permalink(get_page_by_path('index')); ?>" class="nav-link" style="color: white;">Home</a>
                    <a href="<?php echo get_permalink(get_page_by_path('about')); ?>" class="nav-link" style="color: white;">About</a>
                    <a href="<?php echo get_permalink(get_page_by_path('menu')); ?>" class="nav-link" style="color: white;">Menu</a>
                </nav>
            </div> 
            <div class="text-md-right">
                <div class="p-2 border" style="background-color: #CC9D2F;">
                    <span class="font-weight-bold">Book Now</span>
                </div>
            </div>
        </div>
    </nav>
