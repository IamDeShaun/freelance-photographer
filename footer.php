<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package freelance_photographer
 */

?>

<div class="back-to-top" title="Go to top" style="display: block;">
    <i class="fa fa-chevron-up"></i>
  </div>

   <!-- Footer Area-->
   <footer class="footer text-center">
      <div class="container">
        Developed by <a href="http://www.deshaunjones.com" target="_blank">DeShaun Jones</a>
      </div>
  </footer>
<?php wp_footer(); ?>

 <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
</body>
</html>
