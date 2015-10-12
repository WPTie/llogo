
/**
 * LoadingLogo 
 * 
 * right to left option
 */
jQuery(function($) {
	jQuery('#logo').load(function() {
		jQuery(this).loadgo({
			'direction' : 'rl',
		});
	});
});