/**
 * Custom.js file for custom JS stuff
 *
 * Main custom JS file everything that is
 * 			1. Create HTML for preloader
 * 			2. Display none everything but the preloader
 * 			3. Create loadgo timer and let it work through 100%
 * 			4. Fade the loader
 * 			5. Remoce display none from everything and add it to loader
 *
 * @JSObjects
 * 			1. ll_logo object with array key imgSrc
 *
 * @since 0.0.2
 * @package ll
 */

/**
 * Custom JS file
 *
 * This file runs after the page has been loading
 *
 */

jQuery(function($) {

	// Initialize HTML
	$("body").prepend("<!-- Preloader --><div id='aa_preloader'><div id='aa_cell'><div class='aa_position'><img id='aa_logo' src='' alt='Logo' /></div></div></div><!-- / Preloader -->");

	// Setting the logo image inside the image src via JS object
    $('#aa_logo').attr('src', ll_logo.imgSrc );

	/**
	 * 'body > *:not(#aa_preloader)' selects all the immediate
	 * elements rendering after the body tag. After that a class
	 * naming 'aa_display--none' is added to it.
	 *
	 * 
	 */
	// Make everything except the #aa_preloader inside the body to display none
	jQuery('body > *:not(#aa_preloader)').addClass('aa_display--none');


	/**
	 * As soon as the window is loaded, the logo animation
	 * timer starts running.
	 *
	 * 
	 */
	jQuery(window).load(function($) {

		// 1. aa_timer variable is set to zero
		var aa_timer = 0;

		// 2. For loadgo plugin to run the animation setprogress' function has to be called with progress in percentage
		// 3. A while loop runs, which provide progress parameter to 'setprogress' function
		while( aa_timer < 100 ) {

			jQuery('#aa_logo').loadgo('setprogress', aa_timer);
			aa_timer++;

		}

		// will fade out the DIV that covers the website.
		jQuery('#aa_preloader').delay(1000).fadeOut('slow');

		/**
		 * The following code makes the rest of the tags in the
		 * body tag to wait for the animation to complete and then
		 * its 'aa_display--none' class is removed.
		 *
		 * 
		 */
		// After the loading animation, #aa_preloader fades out in 1700ms and the rest of the body appears
		setInterval(function($) {
			jQuery('body > *:not(#aa_preloader)').removeClass('aa_display--none');
		}, 1700);

	});


});