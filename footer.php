<footer class="footer" style="background-color: #CC9D2F;">
    <div class="container">
        <div class="text-center py-4">
            <div class="border border-dark d-inline-block bg-dark text-white p-3">
                <h3 class="display-6 d-flex justify-content-between">
                    <span>MAIZ</span>
                    <span>ميز</span>
                </h3>
            </div>
        </div> 

        <div class="text-center">
            <?php
         wp_nav_menu( array(
            'theme_location' => 'footer',
            'menu_class'     => 'nav justify-content-center',
            'fallback_cb'    => false,
            'container'      => 'nav',
            'container_class' => 'nav justify-content-center',
            'items_wrap'     => '%3$s',
        ) );
        ?>
        </div>

        <hr class="border-white long-hr">
        <div class="d-flex justify-content-between align-items-center">
            <p class="mb-2 text-gray">© <?php echo date('Y'); ?> | <?php bloginfo('name'); ?> | <?php _e('All rights reserved', 'text-domain'); ?></p>
            <div class="d-flex justify-content-center">
                <a href="<?php echo esc_url('https://facebook.com'); ?>" class="me-3"><i class="bi bi-facebook text-gray"></i></a>
                <a href="<?php echo esc_url('https://twitter.com'); ?>" class="me-3"><i class="bi bi-twitter text-gray"></i></a>
                <a href="<?php echo esc_url('https://instagram.com'); ?>" class="me-3"><i class="bi bi-instagram text-gray"></i></a>
                <a href="<?php echo esc_url('https://linkedin.com'); ?>" class="me-3"><i class="bi bi-linkedin text-gray"></i></a>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
<?php wp_footer(); ?>
</body>
</html>
