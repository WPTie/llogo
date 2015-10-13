/**
 * Custom JS file
 *
 * This file runs after the page has been loading
 *
 */

jQuery(function($) {

	$("body").prepend("<!-- Preloader --><div id='aa_preloader'><div id='aa_cell'><div class='aa_position'><img id='aa_logo' src='' alt='Logo' /></div></div></div><!-- / Preloader -->");

	// TODO: What is this? DOCS? Explain body > *:not
	jQuery('body > *:not(#aa_preloader)').addClass('aa_display--none');

	// TODO: What is this? DOCS? Why load?
	jQuery(window).load(function($) {

		// 1. aa_timer variable is set to zero
		var aa_timer = 0;

		// 2. For loadgo plugin to run the animation setprogress' function has to be called with progress in percentage
		// 3. A while loop runs, which provide progress parameter to 'setprogress' function
		while( aa_timer < 100 ) {

			jQuery('#aa_logo').loadgo('setprogress', aa_timer);
			aa_timer++;

		}

		// will fade out the white DIV that covers the website.
		// After the loading animation, #aa_preloader fades out in 1700ms and the rest of the body appears
		jQuery('#aa_preloader').delay(1000).fadeOut('slow');

		// // TODO: What is this? DOCS?
		// setInterval(function($) {
		// 	jQuery('body > *:not(#aa_preloader)').removeClass('aa_display--none');
		// }, 1700);

	});

});