<?php
/*
Template Name:  booking
*/

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>
    <?php get_header(); ?>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/homeStyle.css">  
</head>
<body class="custom-bg">
    <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">
        <div class="container">
            <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/logo1.png" alt="Logo Maiz" width="100" height="100">
            </a>
 
