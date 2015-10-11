
/**
 * LoadingLogo 
 * 
 * left to right option
 */
jQuery(function($) {
	jQuery('#logo').load(function() {
		jQuery(this).loadgo({
			'direction' : 'lr',
		});
	});
});