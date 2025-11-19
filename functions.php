<?php
/**
 * Functions.php for jer-twentytwentyfive-child-theme
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

/**
 * Enqueue the style.css file.
 *
 * @since 1.0.0
 */
function jer_2025_action_wp_enqueue_scripts_to_enqueue_style_css(): void {

	wp_enqueue_style(
		'jer-twentytwentyfive-child-theme',
		get_stylesheet_uri(),
		array(),
		// @phpstan-ignore argument.type (->get() can output non-strings but not for 'Version')
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
 * Filter loading=lazy and fetchpriority=high behavior on homepage to ensure the "widgets" are included in the logic
 *
 * WP core has logic to add loading=lazy to all but the first three images on the page, and
 * to add fetchpriority=high to the first "large" image on the page.
 *
 * That logic doesn't work for the homepage in our theme setup, because the "widget" areas,
 * i.e. the page content inserted by jer-about-page-content.html and jer-widgets-page-content.html
 * are never considered for this treatment, without this filter the images in them are always lazy
 * loaded and never get the fetchpriority flag.
 *
 * So this filter manually corrects the the $lading_attrs for lazy and fetchpriority on the
 * homepage, ensuring our "widget" images are given priority as well as making the featured
 * images on blog posts below get loading=lazy and NOT fetchpriority
 *
 * We must use the newest version of the filter from 6.3 so we can do all of this in one function.
 *
 * @link https://make.wordpress.org/core/2023/07/13/image-performance-enhancements-in-wordpress-6-3/
 * @link https://make.wordpress.org/core/2021/12/29/enhanced-lazy-loading-performance-in-5-9/
 * @link https://make.wordpress.org/core/2020/07/14/lazy-loading-images-in-5-5/
 *
 * @param array<mixed> $loading_attrs Performance related values that will be merged into the image to be shown.
 * @param string       $tag_name img or iframe.
 * @param array<mixed> $attr [src, width, height, loading, fetchpriority, decoding].
 * @param string       $context Idiosyncratic description of the calling context e.g. the_content, template_part_*, the_post_thumbnail.
 * @return array<mixed>
 */
function jer_filter_wp_get_loading_optimization_attributes_to_insert_fetchpriority( array $loading_attrs, string $tag_name, array $attr, string $context ): array {

	// Only apply this on first page of is_home where the "widget" template parts show above posts.
	if ( ! is_home() || is_paged() ) {
		return $loading_attrs;
	}

	// "Uncategorized" context targets our custom "widget" template parts, everything in there should not lazy load and the first image should have fetchpriority.
	if ( 'template_part_uncategorized' === $context && 'img' === $tag_name ) {

		$loading_attrs['loading'] = false;

		if ( ! isset( $GLOBALS['jer_2025_fetchpriority_inserted'] ) ) {
			$loading_attrs['fetchpriority']             = 'high';
			$GLOBALS['jer_2025_fetchpriority_inserted'] = true;
		}
	}

	// For some reason we have to filter on both template_part_uncategorized AND the_content to get the "widget" images to not lazy load, just one or the other doesn't do it!.
	if ( 'the_content' === $context && 'img' === $tag_name ) {

		$loading_attrs['loading'] = false;
	}

	// Disable the "omission" of the first three blog featured images from lazy loading, and ensure the first one doesn't get fetchpriority.
	if ( 'the_post_thumbnail' === $context && 'img' === $tag_name ) {

		$loading_attrs['loading']       = 'lazy';
		$loading_attrs['fetchpriority'] = false;
	}

	return $loading_attrs;
}
add_filter( 'wp_get_loading_optimization_attributes', 'jer_filter_wp_get_loading_optimization_attributes_to_insert_fetchpriority', 10, 4 );

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
 * @link https://jetpack.com/support/create-better-content-with-jetpack-ai/#how-to-disable-jetpack-ai-assistant
 */
add_filter( 'jetpack_ai_enabled', '__return_false' );
