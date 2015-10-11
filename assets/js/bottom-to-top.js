
/**
 * LoadingLogo 
 * 
 * bottom to top option
 */
jQuery(function($) {
	jQuery('#logo').load(function() {
		jQuery(this).loadgo({
			'direction' : 'bt',
		});
	});
});