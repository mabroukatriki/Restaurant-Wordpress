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

      <?php
      //
    $args = array(
      'post_type' => 'post',          // Type de publication : 'post' (articles)
      'posts_per_page' => 3           // Nombre d'articles à afficher : 3
    );
    
    

      $posts = get_posts($args);

      foreach ($posts as $post) {
        setup_postdata($post);
        ?>
        <div class="d-flex justify-content-center mt-3">
          <div class="col-4">
            <?php echo wp_get_attachment_image(get_post_thumbnail_id(), 'thumbnail', false, ['class' => 'img-fluid']); ?>
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
        <h1 class="display-4">Quote Title</h1>
        <p class="lead"><?php echo get_theme_mod('quote_text', 'Default quote text'); ?></p>
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
  <?php $full_screen_image = get_template_directory_uri() . '/image/photo.png'; ?>
  <img src="<?php echo $full_screen_image; ?>" alt="Full Screen Image" class="img-fluid w-100 mw-100">
  <div class="image-content position-absolute top-50 start-50 translate-middle text-center">
    <h1 class="display-4 text-white">A unique menu that reflects the true essence of Saudi cuisine</h1>
    <a href="<?php echo get_permalink(get_page_by_path('menu')); ?>" class="btn btn-transparent custom-btn" style="background-color: #CC9D2F;">Our Menu</a>
  </div>
</section>

<?php get_footer(); ?>
