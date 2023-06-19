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
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body style="background-color: #CC9D2F;">
<nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">
    <div class="container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/maiz2.png" alt="Logo Maiz" width="100" height="100">
     
      

        <div class="text-right">
            <div class="p-2 border" style="background-color: #5B0017;">
                <span class="font-weight-bold" style="color: #CC9D2F;"><?php esc_html_e('Book Now', 'your-theme-textdomain'); ?></span>
            </div>
        </div>
    </div>
</nav>


    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 style="color: #5B0017;"><?php esc_html_e('Our Story', 'your-theme-textdomain'); ?></h1>
                    <p style="color: #5B0017;"><?php esc_html_e('We\'re an absolute leader in the Saudi cuisine-themed restaurants.', 'your-theme-textdomain'); ?></p>
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/image/picture1.png'); ?>" alt="Image 1" width="200" height="200">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/image/picture2.png'); ?>" alt="Image 2" width="200" height="200">
                </div>
                <div class="col-lg-6">
                    <h2 style="color: #FFFFFF;"><?php esc_html_e('One of the best restaurants in Saudi Arabia', 'your-theme-textdomain'); ?></h2>
                    <p style="color: #5B0017;"><?php esc_html_e('Your one direction to high-quality Saudi feasts, since 1998 we served in Saudi Arabia.', 'your-theme-textdomain'); ?></p>
                    <p style="color: #5B0017;"><?php esc_html_e('Locals who are proud of the country and want to introduce it to visitors from around the world.', 'your-theme-textdomain'); ?></p>
                    <p style="color: #5B0017;"><?php esc_html_e('We are perfectly positioned to provide our guests with an extraordinary health experience unlike any they\'ve ever tasted. We can confidently claim that our menu is unlike anything else offered in the industry.', 'your-theme-textdomain'); ?></p>
                    <p style="color: #5B0017;"><?php esc_html_e('Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum finibus mauris nec tincidunt varius. Ut sagittis, lorem at bibendum ornare, mauris neque venenatis justo, ut gravidami neque eu lorem.', 'your-theme-textdomain'); ?></p>
                    <p style="color: #5B0017;"><?php esc_html_e('Vestibulum auctor leo sit amet vulputate mollis. Curabitur ac lorem felis. Morbiullamcorper maximus lorem.', 'your-theme-textdomain'); ?></p>
                </div>
            </div>
        </div>
    </section>

    <div class="bg-color-block">
        <div class="container py-4">              
            <h3 style="color: #FFFFFF;"><?php esc_html_e('', 'your-theme-textdomain'); ?></h3>
            <p style="color: #CC9D2F;"><?php esc_html_e('', 'your-theme-textdomain'); ?></p>
        </div>
    </div>

    <section class="bg-color-block d-flex align-items-center justify-content-center py-5" style="background-color: #243054">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center justify-content-center py-5" style="background-color: #5B0017; margin: 50px;">
                        <div class="border-0 p-3">
                            <h1 class="text-cc9d2f"><?php esc_html_e('Working hours', 'your-theme-textdomain'); ?></h1>
                            <p class="text-white">
                                <br>
                                <?php esc_html_e('Sunday to Saturday 09:00 AM to 11:00 PM', 'your-theme-textdomain'); ?><br>
                                <?php esc_html_e('Friday', 'your-theme-textdomain'); ?><br>
                                <?php esc_html_e('02:00 PM to 1:00 AM', 'your-theme-textdomain'); ?><br>
                            </p>
                            <h2 class="text-cc9d2f"><?php esc_html_e('Localisation', 'your-theme-textdomain'); ?></h2>
                            <p class="text-white">
                                <?php esc_html_e('Street 127, Jeddah, Saudi Arabia', 'your-theme-textdomain'); ?><br>
                                <?php esc_html_e('546544', 'your-theme-textdomain'); ?><br>
                            </p>
                            <h3 class="text-cc9d2f"><?php esc_html_e('Contact us', 'your-theme-textdomain'); ?></h3>
                            <p class="text-white"><?php esc_html_e('+123456789', 'your-theme-textdomain'); ?><br><?php esc_html_e('service@maizresturant.com', 'your-theme-textdomain'); ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="d-flex align-items-center justify-content-center py-5" style="margin: 10px;">
                        <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/image/carte.png'); ?>">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>
