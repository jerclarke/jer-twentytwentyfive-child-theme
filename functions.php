<?php
/**
 * Functions.php for jer-twentytwentyfive-child-theme
 */

/**
 * Enqueue the style.css file.
 * 
 * @since 1.0.0
 */
function jer_2025_action_wp_enqueue_scripts_to_enqueue_style_css() {
	wp_enqueue_style(
		'jer-twentytwentyfive-child-theme',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'jer_2025_action_wp_enqueue_scripts_to_enqueue_style_css' );

/**
 * Get FSE template code for our standard pagination block
 *
 * Note I tried extracting this as a /patterns/ but the query wasn't set up
 * correctly in that case. The current page was wrong and it seemed to just 
 * not have access to the global $wp_query. Seems everything related to the
 * query has to be in the same template/part/pattern as the wp:query block.
 * 
 * By storing the format in this function instead it seems to work normally, 
 * as the templating system just sees this format output in the parent pattern.
 * 
 * ? WARNING: If ever making functions like this "dynamic" be very careful! If this was loaded into the editor and saved, the result would be based on the context in the editor and stored forever. Probably best to avoid ever making them dynamic, and if we ever do, test it VERY carefully!
 * 
 * @return string
 */
function jer_2025_get_pagination_fse_format() {

	return '
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-group jer-query-pagination" style="padding-top:var(--wp--preset--spacing--40);">
		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
<!-- /wp:group -->
	';
}