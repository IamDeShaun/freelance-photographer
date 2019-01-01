<?php
/* Template Name: Contact */

$contact_info = get_field('contact_info');

get_header(); ?>

<section class="contact">

      <header class="entry-header">
          <div class="redline">
            <h4>Contact Us </h4>
          </div>
      </header>

      <div class="row">
          <div id="contactmeta" class="col-md-6">
             <?php echo $contact_info; ?>

          </div>
          <div id="contactform" class="col-md-6 mr-auto">
            <div class="metacontainer">
               <div class="contact">
                  
                  <div class="row">
            
                      <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
            
                      <?php while (have_posts() ) : the_post(); ?>
                    
                    <?php the_content(); ?>
                            
            <?php endwhile; wp_reset_postdata(); //end of the loop ?>
                        
                      </div><!-- End col -->
                  </div><!-- End row -->
               </div>
            </div>
            </div>
        </div>

</section>



<!-- Footer Section-->
<?php get_footer(); ?>