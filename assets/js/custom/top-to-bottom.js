
/**
 * LoadingLogo 
 * 
 *  top to bottom option
 */
jQuery(function($) {
	jQuery('#logo').load(function() {
		jQuery(this).loadgo({
			'direction' : 'tb',
		});
	});
});