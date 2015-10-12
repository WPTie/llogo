
/**
 * LoadingLogo 
 * 
 * right to left option
 */
jQuery(function($) {
	jQuery('#aa_logo').load(function() {
		jQuery(this).loadgo({
			'direction' : 'rl',
		});
	});
});