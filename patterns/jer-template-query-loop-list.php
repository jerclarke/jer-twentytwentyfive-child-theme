<?php
/**
 * Title: List of posts, 1 column
 * Slug: jer-twentytwentyfive-child-theme/jer-template-query-loop-list
 * Categories: query
 * Block Types: core/query
 * Description: A list of posts, 1 column, with featured image and post date.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"layout":{"type":"constrained"}} -->
<div class="wp-block-group">
<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]}} -->
	<div class="wp-block-query">
		<!-- wp:post-template -->
		<!-- wp:columns {"verticalAlignment":"center"} -->
		<div class="wp-block-columns are-vertically-aligned-center">
			<!-- wp:column {"verticalAlignment":"center","width":"33.3%"} -->
			<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:33.3%">
				<!-- wp:post-featured-image {"isLink":true, "aspectRatio":"16/9"} /-->
			</div>
			<!-- /wp:column -->

			<!-- wp:column {"verticalAlignment":"center","width":"66.6%"} -->
				<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:66.6%">
				<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->

				<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->

				<!-- wp:post-date {"isLink":true,"fontSize":"small"} /-->
			</div>
			<!-- /wp:column -->
			</div>
		<!-- /wp:columns -->
		<!-- /wp:post-template -->
		</div>
	<!-- /wp:post-template -->
	 
	<!-- wp:query-no-results -->
		 <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"accent-3","layout":{"type":"constrained","justifyContent":"center"}} -->
		<div class="wp-block-group  has-accent-3-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30)">
			<!-- wp:paragraph -->
			<p><?php echo esc_html_x( 'Sorry, no posts to show.', 'Message explaining that there are no results returned from a search.', 'twentytwentyfive' ); ?></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	<!-- /wp:query-no-results -->
	 
	<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40"}}}} -->
	<div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--40);">
		<!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"center"}} -->
			<!-- wp:query-pagination-previous /-->
			<!-- wp:query-pagination-numbers /-->
			<!-- wp:query-pagination-next /-->
		<!-- /wp:query-pagination -->
	</div>
	<!-- /wp:group -->
</div>
<!-- /wp:query -->
</div>
<!-- /wp:group -->