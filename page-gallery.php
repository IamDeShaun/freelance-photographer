<?php
/* Template Name: Gallery */
$gallery = get_field('gallery');

get_header(); ?>

 <!-- Gallery Section-->
 

 <section id="gallery-portfolio">
    <div class="redline">
        <h4>
            Photo Gallery
          </h4>
    </div>
  
    <div class="container">
    <?php echo $gallery; ?>
    </div>
    
  </section>

<!-- Footer Section-->
<?php get_footer(); ?>