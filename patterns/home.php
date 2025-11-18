<?php
/**
 * Title: Jer's default home template with intro and widget grid
 * Slug: jer-twentytwentyfive-child-theme/home
 * Inserter: no
 */

?>
<!-- wp:template-part {"slug":"header"} /-->
<!-- wp:group -->
<div class="wp-block-group jer-intro-header-container">
	<!-- wp:template-part {"slug":"jer-about-page-content"} /-->
	<!-- wp:template-part {"slug":"jer-widgets-page-content"} /-->
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