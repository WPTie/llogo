
/**
 * LoadingLogo
 *
 * Main loading function
 */

/**
 * This function runs after the page has been loaded
 */
jQuery(function($) {

	jQuery('body > *:not(#aa_preloader)').addClass('aa_display--none');

	jQuery(window).load(function($) { 

		/**
		 * 
		 * Following script runs step by step when the site is loaded
		 * 1. aa_timer variable is set to zero
		 * 2. For loadgo plugin to run the animation
		 * 	  'setprogress' function has to be called with progress in percentage
		 * 3. A while loop runs, which provide progress parameter to 'setprogress'
		 * 	  function
		 * 4. After the loading animation, #aa_preloader fades out in 1700ms and 
		 *    the rest of the body appears
		 *    
		 */
		var aa_timer = 0;

		while( aa_timer < 100 ) {

			jQuery('#aa_logo').loadgo('setprogress', aa_timer);

			aa_timer++;

		}

		jQuery('#aa_preloader').delay(1000).fadeOut('slow'); // will fade out the white DIV that covers the website.
		setInterval(function($) {
			jQuery('body > *:not(#aa_preloader)').removeClass('aa_display--none');
		}, 1700);

	});

});