
/**
 * LoadingLogo
 *
 * Main loading function
 */

// loader

// document.addEventListener("DOMContentLoaded", function(event) {
// 	jQuery('#logo').loadgo();
// });

// TODO: Need documentation on the workflow here, what's going on.
// I need to address an error, but only if I know what's going on here.
jQuery(function($) {
	jQuery(window).load(function($) { // makes sure the whole site is loaded
		var aa_timer = 0;
		while( aa_timer < 100 ) {
			setTimeout(function($) {
				jQuery('#aa_logo').loadgo('setprogress', aa_timer);
			}, 600);
			aa_timer++;
		}
		jQuery('#aa_preloader').delay(700).fadeOut('slow'); // will fade out the white DIV that covers the website.
		jQuery('body').delay(700).css({'overflow':'hidden'});
	});
});