<?php
/**
 * Title: List of posts, 1 column
 * Slug: twentytwentyfive/template-query-loop
 * Categories: query
 * Block Types: core/query
 * Description: A list of posts, 1 column, with featured image and post date.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:query {"queryId":31,"query":{"perPage":"8","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"layout":{"type":"default"}} -->
	<div class="wp-block-query">
		
		<!-- wp:post-template {"fontSize":"tiny","layout":{"type":"grid","columnCount":3,"minimumColumnWidth":null}} -->
			<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"quaternary","layout":{"type":"constrained","justifyContent":"center"}} -->
			<div class="wp-block-group has-quaternary-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
				
				<!-- wp:post-featured-image {"isLink":true,"aspectRatio":"16/9","style":{"spacing":{"margin":{"top":"0px","bottom":"var:preset|spacing|40"}}}} /-->

				<!-- wp:group {"style":{"spacing":{"blockGap":"0.25em","padding":{"bottom":"1em"},"margin":{"top":"0px","bottom":"0px"}}},"fontSize":"heading-6"} -->
				<div class="wp-block-group has-heading-6-font-size" style="margin-top:0px;margin-bottom:0px;padding-bottom:1em"><!-- wp:post-title {"isLink":true,"style":{"spacing":{"margin":{"bottom":"0.25em","top":"0px"}},"typography":{"fontStyle":"normal","fontWeight":"1000"},"elements":{"link":{"color":{"text":"var:preset|color|foreground"}}}},"textColor":"foreground","fontSize":"heading-6"} /-->

					<!-- wp:post-terms {"term":"category","fontSize":"small"} /-->

					<!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|secondary"}}}},"textColor":"secondary","fontSize":"tiny"} /--></div>
				<!-- /wp:group --></div>
			<!-- /wp:group -->
		<!-- /wp:post-template --></div>
	<!-- /wp:query --></div>