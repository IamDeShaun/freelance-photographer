<?php
/**
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package freelance_photographer
 */

?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
	<div class="redline">
		<?php the_title( sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h4>' ); ?>

    <?php if ( 'post' == get_post_type() ) : ?>
    
  <?php endif; ?>
	</div>
	<div class="meta">
              <span> By: <?php the_author(); ?></span>
              <span><i class="far fa-clock"> <?php the_date(); ?></i></span>
              <span>
                <i class="fa fa-tags"><?php the_tags(); ?></i>
						</div>
	</header><!-- .entry-header -->
  <div class="container">
	<?php if ( has_post_thumbnail() ) { // check for feature image ?> 
	<div class="post-banner">
		<?php the_post_thumbnail('post-thumbnail'); ?>
	</div><!-- post-image -->
	<?php } ?>
	
	<div>
		<?php the_content(); ?>
		<a href="http://localhost/photography-theme/wordpress/blog/"><i class="fas fa-arrow-circle-left"><strong>Back To Blog</strong></i></a>
	</div><!-- post-body -->
	
	</div>
	

</article><!-- #post -->