<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package freelance_photographer
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

     <!-- Google Fonts -->
     <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">

     <!-- Font Awesome CDN-->
 
     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.2/css/all.css" integrity="sha384-/rXc/GQVaYpyDdyxK+ecHPVYJSN9bmVFBvjA/9eOB+pb3F2w2N6fc5qB9Ew5yIns" crossorigin="anonymous">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'freelance-photographer' ); ?></a>

	<!-- Navigation Area-->
    <header>
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <i class="fas fa-camera fa-2x"></i>&nbsp;
                <a class="navbar-brand mr-auto mr-lg-0" href="index.html"> Brand Logo</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                <div class="animated-icon1">
                  <span></span>
                  <span></span>
                  <span></span>
                </div>
              <span class="sr-only">Toggle navigation</span>
            </button>
           <!-- If the menu (WP admin area) is not set, then the "menu_class" is applied to "container". In other words, it overwrites the "container_class". Ref: http://wordpress.org/support/topic/wp_nav_menu-menu_class-usage-bug?replies=4 -->
						
		   <?php
								wp_nav_menu( array(
									'theme_location'    => 'primary',
									'depth'             => 2,
									'container'         => 'div',
									'container_class'   => 'collapse navbar-collapse',
									'container_id'      => 'navbarsExample03',
									'menu_class'        => 'nav navbar-nav ml-auto',
									'walker'          => new bs4navwalker()
									));
								?>
        </div>
        </div>   
        </nav>
  </header>
  <!-- End Top Navigation Area-->
