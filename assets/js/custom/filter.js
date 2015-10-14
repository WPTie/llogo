/**
 * filter.js
 *
 * All the filter related effects are handeled by this files
 *
 * @JSObject ll_filter
 * 					arraykey: type
 * @since 0.0.2
 * @package ll
 */
 jQuery(function($) {
 	jQuery('#aa_logo').load(function() {
 		jQuery(this).loadgo({
 			'filter': ll_filter.type
 		});
 	});
 });