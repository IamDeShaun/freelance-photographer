$(function() {
    // Works everywhere
    $(document).ready(function () {
    
      // Hide/show animation hamburger function
      $('.navbar-toggler').on('click', function () {
      
      // Take this line to first hamburger animations
      $('.animated-icon1').toggleClass('open');
      
      // Take this line to second hamburger animation
      $('.animated-icon3').toggleClass('open');
      
      // Take this line to third hamburger animation
      $('.animated-icon4').toggleClass('open');
      });
      
      });
    
          var $backToTop = $(".back-to-top");
          $backToTop.hide();
      
          $(window).on('scroll', function() {
            if ($(this).scrollTop() > 100) {
              $backToTop.fadeIn();
            } else {
              $backToTop.fadeOut();
            }
          });
      
          $backToTop.on('click', function(e) {
            $("html, body").animate({scrollTop: 0}, 500);
          })
          
        });
    