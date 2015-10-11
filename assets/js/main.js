
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
		var aa_timer = 0;
		while( aa_timer < 100 ) {
			setTimeout(function($) {
				jQuery('#logo').loadgo('setprogress', aa_timer);
			}, 200);
			aa_timer++;
		}
		// jQuery('#logo').loadgo('setprogress', 100);
		jQuery('#preloader').delay(350).fadeOut('slow'); // will fade out the white DIV that covers the website.
		jQuery('body').delay(350).css({'overflow':'hidden'});
	});
});