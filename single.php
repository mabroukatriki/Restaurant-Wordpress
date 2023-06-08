<?php
/**
 * The template for displaying single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Theme_Restaurant
 * @version 1.8
 */

get_header();

while (have_posts()) :
	the_post();

	// Content template part
	?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title('<h1 class="entry-title">', '</h1>'); ?>
		</header>

		<div class="entry-content">
			<?php
			the_content();

			wp_link_pages(
				array(
					'before'      => '<div class="page-links">' . esc_html__('Pages:', 'theme-restaurant'),
					'after'       => '</div>',
					'link_before' => '<span class="page-number">',
					'link_after'  => '</span>',
				)
			);
			?>
		</div>

		<footer class="entry-footer">
			<!-- Add your desired content for the entry footer here -->
		</footer>
	</article>

	<?php
	if (comments_open() || get_comments_number()) {
		comments_template();
	}

	// Previous/next post navigation
	the_post_navigation(
		array(
			'prev_text' => '<span class="nav-subtitle">' . esc_html__('Previous:', 'theme-restaurant') . '</span> <span class="nav-title">%title</span>',
			'next_text' => '<span class="nav-subtitle">' . esc_html__('Next:', 'theme-restaurant') . '</span> <span class="nav-title">%title</span>',
		)
	);

endwhile;

get_footer();
