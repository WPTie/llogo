
/**
 * LoadingLogo
 *
 * Main loading function
 */

// loader

// document.addEventListener("DOMContentLoaded", function(event) {
// 	jQuery('#logo').loadgo();
// });

jQuery(function($) {
	jQuery(window).load(function($) { // makes sure the whole site is loaded
		jQuery('#logo').loadgo('setprogress', 100);
		jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
		jQuery('body').delay(350).css({'overflow':'hidden'});
	});
});