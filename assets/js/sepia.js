
/**
 * LoadingLogo 
 * 
 * Sepia Filter option
 */

jQuery(function($) {
	jQuery('#logo').loadgo();
	jQuery('#logo').load(function() {
		jQuery(this).loadgo({
			'filter':    'sepia'
		});
	});
});