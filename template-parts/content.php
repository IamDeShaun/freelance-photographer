<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package freelance_photographer
 */

?>

<article class="card">
					<div class="card-img-top">
					<?php if ( has_post_thumbnail() ) { // Check for post image ?>
            <a href="<?php echo esc_url( get_permalink() ); ?>"><?php the_post_thumbnail('full'); ?></a>
					</div>
						<?php } ?>
						
            <div class="card-body">
              
							<?php
									if ( is_singular() ) :
										the_title( '<h4>', '</h4>' );
									else :
										the_title( '<h4><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
									endif;

									if ( 'post' === get_post_type() ) :
										?>
											
									<?php endif; ?>
						
              <p class="card-text">
							<?php the_excerpt(); ?>
							</p>
            </div> <!-- End Card Body-->
						<div class="meta">
              <span><i class="far fa-clock"> <?php the_date(); ?></i></span>
              <span>
                <i class="fa fa-tags"><?php the_tags(); ?></i>
						</div> <!-- End Meta-->
          </article> <!-- End Card-->
