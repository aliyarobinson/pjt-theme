<?php /* Template Name: Shop Page Template */ ?>

<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package PJT
 */

get_header(); ?>

	<div id="primary" class="content-area inner-page shop-page">
		<main id="main" class="site-content" role="main">

			<?php
			// while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'shop' );

			// endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
