<?php
/*
Template Name: About Template
*/
?>
<?php get_header(); ?>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>design-restaurant</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/aboutStyle.css">
    <link rel="stylesheet"
        href="<?php echo get_stylesheet_directory_uri(); ?>/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>

<body style="background-color: #CC9D2F;">
    <nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">
        <div class="container">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/maiz2.png" alt="Logo Maiz" width="100"
                height="100">



            <div class="text-right">
                <div class="p-2 border" style="background-color: #5B0017;">
                    <span class="font-weight-bold"
                        style="color: #CC9D2F;"><?php esc_html_e('Book Now', 'your-theme-textdomain'); ?></span>
                </div>
            </div>
        </div>
    </nav>



    <div class="container">


        <?php
               if ( have_posts() ) {
                while ( have_posts() ) {
            
                    the_post(); ?>

        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>

        <?php }
            }
               ?>



       

        
            

        <?php get_footer(); ?>
    </div>
</body>