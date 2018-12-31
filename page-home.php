<?php
/* Template Name: Home */

$photographer_name = get_field('photographer_name');
$tagline = get_field('tagline');

$shooter_name = get_field('shooter_name');
$about_photographer = get_field('about_photographer');

$gallery_image_a = get_field('gallery_image_a');
$title_a = get_field('title_a');
$gallery_image_b = get_field('gallery_image_b');
$title_b = get_field('title_b');
$gallery_image_c = get_field('gallery_image_c');
$title_c = get_field('title_c');
$link = get_field('link');

$insta_image_a = get_field('insta_image_a');
$insta_image_b = get_field('insta_image_b');
$insta_image_c = get_field('insta_image_c');
$insta_link = get_field('insta_link');





get_header(); ?>

 <!-- Hero Section -->
 <div id="hero" class="site-hero">
        <div>
          <h4><?php echo $photographer_name; ?></h4>
          <h3><?php echo $tagline; ?></h3>
        </div>
  </div>
  <!-- End Hero Section -->

  <!-- About Photographer Section -->
  <section id="aboutphotog">
    <div class="row">
      <div id="photogid" class="col-md-6">

      </div>
      <div id="photometa" class="col-md-6 mr-auto">
        <div class="metacontainer">
            <h4><?php echo $shooter_name; ?></h4>
            <?php echo $about_photographer;?>
        </div>
    </div>
  </section>
  <!-- End About Photographer Section -->

  <!-- Gallery Section-->
  <section id="homegallery">
    <div class="redline">
        <h4>Photo Gallery</h4>
    </div> 
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12">
            <div class="content">
            <div class="content-overlay">
            </div>
            <img class="content-image" src="<?php echo $gallery_image_a ['url'] ?>" alt="<?php echo $gallery_image_a ['alt'] ?>">
            <div class="content-details fadeIn-bottom">
                <h3 class="content-title"><?php echo $title_a; ?></h3>
               
              </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="content">
                <div class="content-overlay"></div>
            <img class="content-image" src="<?php echo $gallery_image_b ['url'] ?>" alt="<?php echo $gallery_image_b ['alt'] ?>">
            <div class="content-details fadeIn-bottom">
                <h3 class="content-title"><?php echo $title_b; ?></h3>
               
              </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="content">
                <div class="content-overlay"></div>
            <img class="content-image" src="<?php echo $gallery_image_c ['url'] ?>" alt="<?php echo $gallery_image_c ['alt'] ?>">
            <div class="content-details fadeIn-bottom">
                <h3 class="content-title"><?php echo $title_c; ?></h3>
               
              </div>
            </div>
        </div> 
        <a href="<?php echo $link; ?>"><h5>View Full Gallery </h5></a>
      </div>
     
    </div>
  </section>
  <!-- End Gallery Section-->

 <!-- Follow On Social Media Section-->
 <section id="followsocial">
    <div>
      <h4>Follow Me On My</h4>
      <h3>Instagram</h3>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-12">
          <div class="content">
              <img class="img-fluid" src="<?php echo $insta_image_a ['url'] ?>" alt="<?php echo $insta_image_a ['alt'] ?>">
          </div>
        </div>
        <div class="col-lg-4 col-md-12">
            <div class="content">
                <img class="img-fluid" src="<?php echo $insta_image_b ['url'] ?>" alt="<?php echo $insta_image_b ['alt'] ?>">
            </div>
          </div>
          <div class="col-lg-4 col-md-12">
              <div class="content">
                  <img class="img-fluid" src="<?php echo $insta_image_c ['url'] ?>" alt="<?php echo $insta_image_c ['alt'] ?>">
              </div>
            </div>
      </div>
      <a class="igstyle big white" href="<?php echo $insta_link; ?>">
          <i class="fab fa-instagram"></i>
          <span>follow me</span>
      </a>
    </div>
 </section>
 <!-- End Follow On Social Media Section-->

 <!-- Price Cards Section-->
 <section id="price">

  <div class="container">
    <div class="redline">
      <h4>Choose One Of My</h4>
      <h3>Hot Prices</h3>
    </div>
    <div class="row">

    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
               
               <?php the_content(); ?>
           
             <?php endwhile; endif; ?>

             <?php 
                    $args = array(
                    'post_type' => 'prices',
                    'order' => 'ASC'
                    );
                    $query = new WP_Query( $args );
                    $price_title = get_field('price_title');
                    $cost = get_field('cost');
                    $price_tagline = get_field('price_tagline');
                    $price_description = get_field('price_description');
                    ?>

              <?php if( $query->have_posts() ) : while( $query->have_posts() ) : $query->the_post(); ?>

      <div class="col-lg-3 col-md-6 col-sm-12">
          <div class="card pricing-item">
              <div class="card-body">
                <div class="uppercase">
                <?php the_field('price_title'); ?>
                </div>
              <div class="price">
                <?php the_field('cost'); ?>
                <span>$</span>
              </div>
            <h6><?php the_field('price_tagline'); ?></h6>
              </div> <!-- End Card Body-->

              <div class="card-body">
            <?php the_field('price_description'); ?>
              </div>
            </div>
      </div>
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </div>  
  </div>
 </section>
 <!-- End Price Cards Section-->

<!-- Footer Section-->
<?php get_footer(); ?>