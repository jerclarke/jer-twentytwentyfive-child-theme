<?php
/**
 * Title: List of posts, 1 column
 * Slug: jer-twentytwentyfive-child-theme/jer-template-query-loop-grid
 * Categories: query
 * Block Types: core/query
 * Description: A list of posts, 1 column, with featured image and post date.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:query {"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-query alignwide">

<?php if ( is_paged() ) { echo jer_2025_get_pagination_fse_format(); } ?>

	<!-- wp:post-template {"fontSize":"tiny","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
		<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"accent-3","layout":{"type":"constrained","justifyContent":"center"}} -->
		<div class="wp-block-group jer-query-loop-grid-item has-accent-3-background-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30)">
			<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"spacing":{"margin":{"top":"0px","bottom":"var:preset|spacing|30"}}}} /-->

			<!-- wp:post-title {"isLink":true,"fontSize":"large"} /-->
			<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->
 			<!-- wp:post-date {"isLink":true,"fontSize":"small"} /-->
			<?php
			//<!-- wp:post-excerpt {"align":"full","fontSize":"medium"} /-->
			?>
		</div>
		<!-- /wp:group -->
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
	 
	<?php echo jer_2025_get_pagination_fse_format();?>
</div>
<!-- /wp:query -->