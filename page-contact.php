<?php
/* Template Name: Contact */

get_header(); ?>

<section class="contact">

      <header class="entry-header">
          <div class="redline">
            <h4>Contact Us </h4>
          </div>
      </header>

      <div class="row">
          <div id="contactmeta" class="col-md-6">
              <h3>Drop Us A Line</h3>
              <p>
                  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque fringilla congue auctor. Nullam dictum cursus porttitor. Fusce sit amet est massa. Quisque sed lacinia turpis.
              </p>
              <h4>Location: New York, NY</h4>
              <h4>Phone: 555-555-5555</h4>
              <h4>Email: mail@example.com</h4>

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