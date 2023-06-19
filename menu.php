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
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/bukhari.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Bukhari</p>
            </div>
          </div>
        </div>
  

        <div class="col-md-4">
          <div class="card mb-3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/SaudiMakboss.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Saudi Makboos</p>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/Zubiam.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Zubiam</p>
            </div>
          </div>
        </div>
      </div>
  
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/Kabsa.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Kabsa</p>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/Madfoon.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Madfoon</p>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/MathLootha.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Math Lootha</p>
            </div>
          </div>
        </div>
      </div>
  
      <div class="row">
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/Margoug.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Margoug</p>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/Sayadya.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Sayadya</p>
            </div>
          </div>
        </div>
  
        <div class="col-md-4">
          <div class="card mb-3">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/Saleeg.png" class="card-img-top" alt="...">
            <div class="card-body">
              <p class="card-text">Saleeg</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <br>
    <div class="text-center">
    <button class="btn btn-primary mx-auto d-block">Load More</button>
</div>


    <?php get_footer(); ?>

    
</body>
</html>
