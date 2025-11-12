<?php
/**
 * Title: Jer's default home template with intro and widget grid
 * Slug: jer-twentytwentyfive-child-theme/home
 * Inserter: no
 */

echo '<!-- wp:template-part {"slug":"header"} /-->';

if (!is_paged()) {
	echo '<!-- wp:template-part {"slug":"jer-intro"} /-->';
	echo '<!-- wp:template-part {"slug":"jer-widget-grid"} /-->';
}

?>
<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
	<!-- wp:heading {"textAlign":"left","level":1,"layout":{"type":"default"}} -->
	<h1 class="wp-block-heading wp-block-query-title has-text-align-left">Latest blog posts</h1>
	<!-- /wp:heading -->
	<!-- wp:pattern {"slug":"jer-twentytwentyfive-child-theme/jer-template-query-loop-list"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->