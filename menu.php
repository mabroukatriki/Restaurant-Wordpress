<?php
/*
Template Name: Menu Template
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/menuStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body class="custom-bg">
    <!-- Header -->
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

    <!-- Menu Section -->
    <div class="container">
        <p style="color: #CC9D2F; display: inline-block; float: left;">OUR MENU</p><br>
        <h1 style="color: #ffffff; display: inline-block;">Discover<br> Our Menu</h1>
        <p style="color: gray; float: right;">There is a wide selection of choices served by top Saudi chefs, prepared using the best quality local ingredients.</p>
    </div>
    <br>
    <br>
    <div style="display: flex; justify-content: flex-start;">
        <ul class="menu-links" style="list-style-type: none;">
            <li style="display: inline; margin: 0 10px;"><a href="#" style="color: gray;">All Feast</a></li>
            <li style="display: inline; margin: 0 10px;"><a href="#" style="color: gray;">Coffee</a></li>
            <li style="display: inline; margin: 0 10px;"><a href="#" style="color: gray;">Cocktails</a></li>
            <li style="display: inline; margin: 0 10px;"><a href="#" style="color: gray;">Dessert</a></li>
        </ul>
    </div>
    <section>
        <div class="row">
            <?php
            // Query arguments for the menu items
            $args = array(
                'post_type' => 'post', // Change 'post' to your custom post type if needed
                'posts_per_page' => -1 // Display all menu items
            );

            // Query the menu items
            $query = new WP_Query($args);

            if ($query->have_posts()) {
                while ($query->have_posts()) {
                    $query->the_post();
                    // Get the featured image of the post
                    $featured_image = get_the_post_thumbnail_url();
                    // Get the title of the post
                    $title = get_the_title();
                    ?>
                    <div class="col-md-4">
                        <div class="card mb-3">
                            <img src="<?php echo $featured_image; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <p class="card-text"><?php echo $title; ?></p>
                            </div>
                        </div>
                    </div>
                    <?php
                }
                wp_reset_postdata();
            }
            ?>
        </div>
    </section>

    <!-- Footer -->
    <section class="bg-color-block">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div class="d-flex align-items-center justify-content-center py-5 custom-bg-color h-100">
                        <div class="border-0 p-3">
                            <h1 class="text-cc9d2f">Horaires de travail</h1>
                            <p class="text-white">
                                <br>
                                Dimanche à samedi de 09h00 à 23h00<br>
                                Vendredi<br>
                                De 14h00 à 01h00<br>
                            </p>
                            <h2 class="text-cc9d2f">Localisation</h2>
                            <p class="text-white">
                                Rue 127, Jeddah, Arabie saoudite<br>
                                546544<br>
                            </p>
                            <h3 class="text-cc9d2f">Contactez-nous</h3>
                            <p class="text-white">+123456789<br>service@maizrestaurant.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="image-container d-flex align-items-center justify-content-center py-5 m-10">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/carteRouge.png" class="image-style">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php get_footer(); ?>
</body>
</html>
