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
 * Enable excerpts on pages
 *
 * @return void
 */
function jer_2025_add_excerpts_to_pages() {
	add_post_type_support( 'page', 'excerpt' );
}
add_action( 'init', 'jer_2025_add_excerpts_to_pages' );

/**
 * Filter lazy loading to disable it for intro images on homepage
 * 
 * @link https://make.wordpress.org/core/2020/07/14/lazy-loading-images-in-5-5/
 * 
 * @param bool $default Whether to add loading=lazy to this image
 * @param string $tag_name img or iframe
 * @param string $context Parent context with idiosyncratic values like template_part_* and the_content
 * @return void
 */
function jer_filter_wp_lazy_loading_enabled_to_disable_in_homepage_widgets( $default, $tag_name, $context ) {

	// Only apply this on first page of is_home where about blocks are at the top
	if (!is_home() OR is_paged()) {
		return $default;
	}

	// For some reason we have to filter on both template_part_uncategorized AND the_content to get the inserted page content images to not have loading=lazy, just one or the other doesn't do it!
	if ( "template_part_uncategorized" === $context && 'img' === $tag_name) {
		return false;
	}
	if ( "the_content" === $context && 'img' === $tag_name) {
		return false;
	}

	// Note I tried to disable lazy loading for the "Latest blog posts" using this filter, but it didn't work, seemingly because the "omit" threshhold takes precedence, so we have the filter below to filter the omit threshhold more explicitly.
	// if ( "the_post_thumbnail" === $context && 'img' === $tag_name) {
	// 	return true;
	// }

	return $default;
}
add_filter('wp_lazy_loading_enabled','jer_filter_wp_lazy_loading_enabled_to_disable_in_homepage_widgets', 1, 3);

/**
 * Filter lazy loading threshhold to make it zero on homepage because we already have our non-lazy-loaded images in the "widgets"
 *
 * By default the first $omit_threshhold images skip having loading=lazy added
 * On the homepage this only applies to the "Latest blog posts" section, not images 
 * embedded in the "widgets" area above the main query. 
 * Because the filter above manually removes loading=lazy from the "widgets" area, we
 * use this filter to make sure all of the blog posts have loading=lazy.
 * 
 * @link https://make.wordpress.org/core/2021/12/29/enhanced-lazy-loading-performance-in-5-9/
 * 
 * @param int $omit_threshold How many images to skip loading=lazy on, assuming they are initially visible
 * @return void
 */
function jer_filter_wp_omit_loading_attr_threshold_to_disable_on_homepage( $omit_threshold ) {
    
	if (!is_home() OR is_paged()) {
		return $omit_threshold;
	}

	return 0;
}
add_filter( 'wp_omit_loading_attr_threshold', 'jer_filter_wp_omit_loading_attr_threshold_to_disable_on_homepage' );

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

/**
 * Disable Jetpack AI as much as possible
 * 
 * https://jetpack.com/support/create-better-content-with-jetpack-ai/#how-to-disable-jetpack-ai-assistant
 */
add_filter( 'jetpack_ai_enabled', '__return_false' );