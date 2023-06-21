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

<div class="text-center">
    <?php
    wp_nav_menu( array(
        'theme_location' => 'primary',
        'menu_class'     => 'nav justify-content-center menu-list', // la classe CSS personnalisée "menu-list"
    ) );
    ?>
    
</div>

          