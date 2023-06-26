<?php
/*
Template Name: Menu Template
*/
?>
<?php get_header(); ?>
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri();?>/css/menuStyle.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
</head>
<body class="custom-bg">
<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light d-flex justify-content-center">
    <div class="container">
        <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/logo1.png" alt="Logo Maiz" class="fluid">
        </a>
      
          



    
        <div class="text-md-right">
  <div class="p-2 border" style="background-color: #CC9D2F;">
    <a href="booking.php" class="font-weight-bold text-white">Book Now</a>
  </div>
</div>
            </div>
        </div>
    </nav>

    <!-- Menu Section -->


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
       

  

  
    </div>
    </div>
    </div>
</div>


    <?php get_footer(); ?>

    
</body>
</html>
