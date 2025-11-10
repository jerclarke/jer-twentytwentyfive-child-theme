<?php
/**
 * Title: Post byline with author, date, and categories
 * Slug: jer-twentytwentyfive-child-theme/post-byline
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:group {"style":{"spacing":{"blockGap":"0.2em","margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"textColor":"accent-4","fontSize":"medium","layout":{"type":"flex","flexWrap":"wrap"}} -->
<div class="wp-block-group jer-post-byline has-accent-4-color has-text-color has-link-color has-medium-font-size" style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">
	<!-- wp:paragraph -->
		<p>Posted by</p>
	<!-- /wp:paragraph -->
	<!-- wp:post-author-name /-->
	<!-- wp:paragraph -->
		<p>on</p>
	<!-- /wp:paragraph -->
	<!-- wp:post-date /-->
	<!-- wp:paragraph -->
		<p>in</p>
	<!-- /wp:paragraph -->
	<!-- wp:post-terms {"term":"category"} /-->
</div>
<!-- /wp:group -->