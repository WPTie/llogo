/**
 * Overaly.js
 *
 * All the overlay related effects are handeled by this files
 *
 * @JSObject ll_overlay
 * 					arraykey: dir
 * @since 0.0.2
 * @package ll
 */
 jQuery(function($) {
 	jQuery('#aa_logo').load(function() {
 		jQuery(this).loadgo({
 			'direction' : ll_overlay.dir,
 		});
 	});
 });