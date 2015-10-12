
/**
 * LoadingLogo 
 * 
 * left to right option
 */
jQuery(function($) {
	jQuery('#aa_logo').load(function() {
		jQuery(this).loadgo({
			'direction' : 'lr',
		});
	});
});