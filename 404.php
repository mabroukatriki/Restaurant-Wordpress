<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Theme restaurant
 * @subpackage Template
 * @since 1.0
 */

    get_header();
?>

	<header class="page-header alignwide">
		<h1 class="page-title"><?php esc_html_e( 'Nothing here', 'theme-restaurant' ); ?></h1>
	</header>
    <!-- .page-header -->

	<div class="error-404 not-found default-max-width">
		<div class="page-content">
			<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'theme-restaurant' ); ?></p>
			<?php get_search_form(); ?>
		</div>
        <!-- .page-content -->
	</div>
    <!-- .error-404 -->

<?php
get_footer();
