
/**
 * LoadingLogo 
 * 
 *  top to bottom option
 */
jQuery(function($) {
	jQuery('#aa_logo').load(function() {
		jQuery(this).loadgo({
			'direction' : 'tb',
		});
	});
});