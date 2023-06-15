<?php
/*
Template Name: Menu Template
*/
?>
<!DOCTYPE html>
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
        <a href="<?php echo esc_url(home_url('/')); ?>" class="navbar-brand">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/image/logo1.png" alt="Logo Maiz" width="100" height="100">
        </a>
        <div class="text-center">
            <?php
            wp_nav_menu( array(
                'theme_location' => 'primary', // Emplacement du menu
                'menu_class'     => 'nav justify-content-center', // Classe CSS pour le menu
                'fallback_cb'    => false, // Désactiver la fonction de rappel par défaut
                'container'      => false, // Supprimer le conteneur autour du menu
                'echo'           => true, // Afficher le menu
            ) );
            ?>
        </div> 
    </div>
</nav>



            
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
    <button class="btn btn-primary" style="margin-left: 45%;">Load More</button>

    <!-- Footer -->
    <footer class="text-center text-lg-start" style="background-color: #222222; color: white;">
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
            <div class="me-5 d-none d-lg-block">
                <span>Get connected with us on social networks:</span>
            </div>
            <div>
                <a href="#" class="me-4 text-reset">
                    <i class="bi bi-facebook"></i>
                </a>
                <a href="#" class="me-4 text-reset">
                    <i class="bi bi-twitter"></i>
                </a>
                <a href="#" class="me-4 text-reset">
                    <i class="bi bi-google"></i>
                </a>
                <a href="#" class="me-4 text-reset">
                    <i class="bi bi-instagram"></i>
                </a>
                <a href="#" class="me-4 text-reset">
                    <i class="bi bi-linkedin"></i>
                </a>
                <a href="#" class="me-4 text-reset">
                    <i class="bi bi-github"></i>
                </a>
            </div>
        </section>

        <section class="">
            <div class="container text-center text-md-start mt-5">
                <div class="row mt-3">
                    <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">Maiz</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #CC9D2F; height: 2px;" />
                        <p>
                            A restaurant that offers traditional Saudi Arabian cuisine with a modern twist.
                        </p>
                    </div>

                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">Useful links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #CC9D2F; height: 2px;" />
                        <p>
                            <a href="<?php echo esc_url(home_url('/')); ?>" class="text-reset">Home</a>
                        </p>
                        <p>
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('about'))); ?>" class="text-reset">About</a>
                        </p>
                        <p>
                            <a href="<?php echo esc_url(get_permalink(get_page_by_path('menu'))); ?>" class="text-reset">Menu</a>
                        </p>
                    </div>

                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                        <h6 class="text-uppercase fw-bold">Quick links</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #CC9D2F; height: 2px;" />
                        <p>
                            <a href="#" class="text-reset">Book a Table</a>
                        </p>
                        <p>
                            <a href="#" class="text-reset">Contact</a>
                        </p>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                        <h6 class="text-uppercase fw-bold">Contact</h6>
                        <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #CC9D2F; height: 2px;" />
                        <p><i class="bi bi-house-door-fill"></i> Riyadh, Saudi Arabia</p>
                        <p><i class="bi bi-envelope-fill"></i> info@maiz.com</p>
                        <p><i class="bi bi-phone-fill"></i> +966 123456789</p>
                    </div>
                </div>
            </div>
        </section>

        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
            &copy; 2023 Maiz. All rights reserved.
        </div>
    </footer>

    <script src="<?php get_stylesheet_directory_uri() ; ?>/js/bootstrap.bundle.min.js"></script>
</body>
</html>
