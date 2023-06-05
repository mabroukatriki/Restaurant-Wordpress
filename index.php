<?php
/*
Template Name: Home Template
*/
?>

<?php get_header(); ?>
<section class="container d-flex align-items-center justify-content-center my-5">
  <div class="row">
    <div class="col-md-6">
      <div class="bg-transparent p-3 transparent-bg">
        <h1 class="display-4 text-white title">Taste the authentic Saudi cuisine</h1>
        <p class="lead text-white">Among the best Saudi chefs in the world, serving you something beyond flavor.</p>
      </div>
    </div>
    <div class="col-md-6">
      <img src="<?php echo get_template_directory_uri(); ?>/image/photo.png" alt="Image de droite" class="img-fluid">
    </div>
  </div>
</section>
<section class="container d-flex align-items-center justify-content-center my-5">
  <div class="row">
    <div class="col-md-6">
      <img src="<?php echo get_template_directory_uri(); ?>/image/photo1.png" alt="Image de gauche" class="img-fluid">
    </div>
   
    <div class="col-md-6">
      <div class="bg-transparent p-3">
        <h1 class="display-4 text-white">A distinctive dining destination inspired by the culture.</h1>
        <p class="lead text-white">Experience Al Balad old town of Jeddah vibes.</p>
      </div>

      <a href="<?php echo get_permalink(get_page_by_path('menu')); ?>" class="btn btn-transparent custom-btn" style="background-color: #CC9D2F;">Our Venue</a>
      <div class="d-flex justify-content-center mt-3">
        <div class="col-4">
          <img src="<?php echo get_template_directory_uri(); ?>/image/photo2.png" alt="Image 1" class="img-fluid">
        </div>
        <div class="col-4">
          <img src="<?php echo get_template_directory_uri(); ?>/image/photo3.png" alt="Image 2" class="img-fluid">
        </div>

        <div class="col-4">
          <img src="<?php echo get_template_directory_uri(); ?>/image/photo4.png" alt="Image 3" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>


<section class="container my-5">
  <div class="row d-flex align-items-stretch h-100">
    <div class="col-lg-6">
      <div class="border p-3 bg-cc9d2f h-100">
        <h1 class="display-4">Quote Title</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam at faucibus tellus, eu convallis lectus.</p>
      </div>
    </div>

 
    <div class="col-lg-6">
      <div class="ratio ratio-16x9 h-100">
      </div>
    </div>
  </div>
</section>

<section class="container-fluid full-screen-image position-relative">
<img src="<?php echo get_template_directory_uri(); ?>/image/photo.png" alt="Full Screen Image" class="img-fluid w-100 mw-100">
<div class="image-content position-absolute top-50 start-50 translate-middle text-center">
<h1 class="display-4 text-white">A unique menu that reflects the true essence of Saudi cuisine</h1>
<a href="<?php echo get_permalink(get_page_by_path('menu')); ?>" class="btn btn-transparent custom-btn" style="background-color: #CC9D2F;">Our Menu</a>
  </div>
</section>
 

<?php get_footer(); ?>