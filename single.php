<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package freelance_photographer
 */

get_header();
?>
<section id="singlepost">

		<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'template-parts/content', 'single' ); ?>
		<?php endwhile; // End of the loop. ?>

	</section>

<?php get_footer(); ?>
