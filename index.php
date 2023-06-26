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
    <a href="booking.php" class="font-weight-bold text-white">Book Now</a>
  </div>
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
                
            </div>
        </div>
    </section>

    <section class="container d-flex align-items-center justify-content-center my-5">
        <div class="row">
            <div class="col-md-6">
      

              
                

            </div>
        </div>
    </section>

    <section class="container my-5">
        
       
    </section>

    <section class="container-fluid full-screen-image position-relative">
       
    </section>

   


 

</body>
</html>
