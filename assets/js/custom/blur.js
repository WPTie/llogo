
/**
 * LoadingLogo
 *
 * Blur Filter option
 */

jQuery(function($) {
	// jQuery('#aa_logo').loadgo();
	jQuery('#aa_logo').load(function() {
		jQuery(this).loadgo({
			'filter':    'blur'
		});
	});
});