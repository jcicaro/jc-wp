(function($) {
  "use strict"; // Start of use strict
	


  // Smooth scrolling using jQuery easing
//   $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
//     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
//       var target = $(this.hash);
//       target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//       if (target.length) {
//         $('html, body').animate({
//           scrollTop: (target.offset().top - 70)
//         }, 1000, "easeInOutExpo");
//         return false;
//       }
//     }
//   });

 
	
	// Scroll spy doesn't work and not needed
  // Activate scrollspy to add active class to navbar items on scroll
//   $('#page-top').scrollspy({
//     target: '#mainNav',
//     offset: 100
//   });

  // Collapse Navbar
//   var navbarCollapse = function() {
//     if (($("#mainNav").offset() && $("#mainNav").offset().top > 100) || !$("body.home").length) {
//       $("#mainNav").addClass("navbar-shrink");
//     } else {
//       $("#mainNav").removeClass("navbar-shrink");
//     }
//   };
	
$(function() {
	
	 // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });
	
	 // Collapse now if page is not at top
//   navbarCollapse();
  // Collapse the navbar when page is scrolled
//   $(window).scroll(navbarCollapse);
	
});
 

})(jQuery); // End of use strict
