(function($) {
  
    "use strict";  
  
    $(window).on('load', function() {
  
    /*Page Loader active
      ========================================================*/
      $('#preloader').fadeOut();
  
    // Sticky Nav
      $(window).on('scroll', function() {
          if ($(window).scrollTop() > 150) {
              $('.scrolling-navbar').addClass('top-nav-collapse');
          } else {
              $('.scrolling-navbar').removeClass('top-nav-collapse');
          }
      });
  
      /* ==========================================================================
         countdown timer
         ========================================================================== */
      //  jQuery('#clock').countdown('2019/02/19',function(event){
      //   var $this=jQuery(this).html(event.strftime(''
      //   +'<div class="time-entry days"><span>%-D</span> Days</div> '
      //   +'<div class="time-entry hours"><span>%H</span> Hours</div> '
      //   +'<div class="time-entry minutes"><span>%M</span> Minutes</div> '
      //   +'<div class="time-entry seconds"><span>%S</span> Seconds</div> '));
      // });
  
      /* slicknav mobile menu active  */
      $('.mobile-menu').slicknav({
          prependTo: '.navbar-header',
          parentTag: 'liner',
          allowParentLinks: true,
          duplicate: true,
          label: '',
        });
  
        /* WOW Scroll Spy
      ========================================================*/
       var wow = new WOW({
        //disabled for mobile
          mobile: false
      });
      wow.init();
  
      // one page navigation 
      $('.navbar-nav').onePageNav({
              currentClass: 'active'
      }); 
  
      /* Counter
      ========================================================*/
      // $('.counterUp').counterUp({
      //  delay: 10,
      //  time: 1000
      // });
  
  
      /* Back Top Link active
      ========================================================*/
        var offset = 200;
        var duration = 500;
        $(window).scroll(function() {
          if ($(this).scrollTop() > offset) {
            $('.back-to-top').fadeIn(400);
          } else {
            $('.back-to-top').fadeOut(400);
          }
        });
  
        $('.back-to-top').on('click',function(event) {
          event.preventDefault();
          $('html, body').animate({
            scrollTop: 0
          }, 600);
          return false;
        });


        // Glight Box
        const galleryLightbox = GLightbox({
          selector: '.gallery-lightbox'
        });

        // Owl Carousel
        $('.owl-carousel').owlCarousel({
          loop:true,
          margin:10,
          autoplay:true,
          autoplayTimeout:5000,
          autoplayHoverPause:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:3
              },
              1000:{
                  items:4
              }
          }
      })
  
    });      
  
  }(jQuery));