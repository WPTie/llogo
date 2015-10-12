
/**
 * LoadingLogo 
 * 
 * bottom to top option
 */
jQuery(function($) {
	jQuery('#aa_logo').load(function() {
		jQuery(this).loadgo({
			'direction' : 'bt',
		});
	});
});