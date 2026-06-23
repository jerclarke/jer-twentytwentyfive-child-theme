<?php
/**
 * Title: Jer's default home template with intro and widget grid
 * Slug: jer-twentytwentyfive-child-theme/home
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

/**
 * ! About loading of synced patterns like `wp:block {"ref":9532}`
 *
 * This is done to hardcode the layout and allow me to hard-reset the theme at any time with Create Block Theme.
 * The idea is that the test version of the site clones the live DB, so it has matching IDs and they keep working.
 * If someone else uses the theme, so the synced patterns aren't in the DB with those IDs, it shows an error about
 * the block not existing, so you remove it and replace it with something else.
 */

?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"metadata":{"name":"Jer Intro Header Container"},"className":"jer-intro-header-container"} -->
<div class="wp-block-group jer-intro-header-container">
	<!-- wp:block {"ref":9532} /-->
	<!-- wp:block {"ref":9534} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"left","level":1,"layout":{"type":"default"}} -->
	<h1 class="wp-block-heading wp-block-query-title has-text-align-left">Latest blog posts</h1>
	<!-- /wp:heading -->
	<!-- wp:pattern {"slug":"jer-twentytwentyfive-child-theme/jer-template-query-loop-list"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->