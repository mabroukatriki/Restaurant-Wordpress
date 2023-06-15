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
                'theme_location' => 'footer', // Emplacement du menu
                'menu_class'     => 'nav justify-content-center', // Classe CSS pour le menu
                'fallback_cb'    => false, // Désactiver la fonction de rappel par défaut
                'container'      => false, // Supprimer le conteneur autour du menu
                'items_wrap'     => '<nav id="%1$s" class="%2$s">%3$s</nav>', // Personnaliser la structure du menu
            ) );
            ?>
        </div>

        <hr class="border-white long-hr">
        <div class="d-flex justify-content-between align-items-center">
            <p class="mb-2 text-gray">© 2023 | All rights reserved</p>
            <div class="d-flex justify-content-center">
                <a href="" class="me-3"><i class="bi bi-facebook text-gray"></i></a>
                <a href="#" class="me-3"><i class="bi bi-twitter text-gray"></i></a>
                <a href="#" class="me-3"><i class="bi bi-instagram text-gray"></i></a>
                <a href="#" class="me-3"><i class="bi bi-linkedin text-gray"></i></a>
            </div>
        </div>
    </div>
</footer>
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.bundle.min.js"></script>
</body>
</html>
