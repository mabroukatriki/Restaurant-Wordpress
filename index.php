<?php
/*
Template Name: Home Template
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
            <div class="text-md-right">
                <div class="p-2 border" style="background-color: #CC9D2F;">
                    <span class="font-weight-bold">Book Now</span>
                </div>
            </div>
        </div>
    </nav>

    <section class="container d-flex align-items-center justify-content-center my-5">
        <div class="row">
            <div class="col-md-6">
              
        <?php
               if ( have_posts() ) {
                while ( have_posts() ) {
            
                    the_post(); ?>

        <h2><?php the_title(); ?></h2>

        <?php the_content(); ?>

        <?php }
            }
               ?>
                <div class="bg-transparent p-3 transparent-bg">
                    <h1 class="display-4 text-white title"><?php esc_html_e('Taste the authentic Saudi cuisine', 'your-theme-textdomain'); ?></h1>
                    <p class="lead text-white"><?php esc_html_e('Among the best Saudi chefs in the world, serving you something beyond flavor.', 'your-theme-textdomain'); ?></p>
                </div>
            </div>

            <div class="col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/photo.png" alt="Image de droite" class="img-fluid">
            </div>
        </div>
    </section>

    <section class="container d-flex align-items-center justify-content-center my-5">
        <div class="row">
            <div class="col-md-6">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/photo1.png" alt="Image de gauche" class="img-fluid">
            </div>

            <div class="col-md-6">
                <div class="bg-transparent p-3">
                    <h1 class="display-4 text-white"><?php esc_html_e('A distinctive dining destination inspired by the culture.', 'your-theme-textdomain'); ?></h1>
                    <p class="lead text-white"><?php esc_html_e('Experience Al Balad old town of Jeddah vibes.', 'your-theme-textdomain'); ?></p>
                </div>

                <a href="<?php echo get_permalink(get_page_by_path('menu')); ?>" class="btn btn-transparent custom-btn" style="background-color: #CC9D2F;"><?php esc_html_e('Our Venue', 'your-theme-textdomain'); ?></a>

                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3
                );

                $posts = get_posts($args);
                foreach ($posts as $post) {
                    setup_postdata($post);
                    $thumbnail = wp_get_attachment_image(get_post_thumbnail_id(), 'thumbnail', false, ['class' => 'img-fluid']);
                    ?>
                    <div class="d-flex justify-content-center mt-3">
                        <div class="col-4">
                            <?php echo $thumbnail; ?>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>

            </div>
        </div>
    </section>

    <section class="container my-5">
        <div class="row d-flex align-items-stretch h-100">
            <div class="col-lg-6">
                <div class="border p-3 bg-cc9d2f h-100">
                    <h1 class="display-4"><?php esc_html_e('Quote Title', 'your-theme-textdomain'); ?></h1>
                    <p class="lead"><?php echo get_theme_mod('quote_text', esc_html__('Default quote text', 'your-theme-textdomain')); ?></p>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="ratio ratio-16x9 h-100">
                    <?php echo get_theme_mod('video_embed'); ?>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid full-screen-image position-relative">
        <?php $full_screen_image = get_stylesheet_directory_uri() . '/image/photo.png'; ?>
        <img src="<?php echo $full_screen_image; ?>" alt="Full Screen Image" class="img-fluid w-100 mw-100">
        <div class="image-content position-absolute top-50 start-50 translate-middle text-center">
            <h1 class="display-4 text-white"><?php esc_html_e('A unique menu that reflects the true essence of Saudi cuisine', 'your-theme-textdomain'); ?></h1>
            <a href="<?php echo esc_url(get_permalink(get_page_by_path('menu'))); ?>" class="btn btn-transparent custom-btn" style="background-color: #CC9D2F;"><?php esc_html_e('Our Menu', 'your-theme-textdomain'); ?></a>
        </div>
    </section>

    <?php
   
    if (function_exists('gutenverse_custom_content_block')) {
        gutenverse_custom_content_block('Gutenverse Themes');
    }
    ?>


    <?php get_footer(); ?>

</body>
</html>
