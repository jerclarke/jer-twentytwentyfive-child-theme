<?php
/**
 * Title: Jer's footer with search, responsibility, pages, and categories
 * Slug: jer-twentytwentyfive-child-theme/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Description: Jer's custom footer with search, responsibility, pages, and categories
 * Inserter: no
 */
?>

<!-- wp:group -->
<div class="wp-block-group jer-intro-footer-container">
	<!-- wp:template-part {"slug":"jer-intro"} /-->
</div>
<!-- /wp:group -->

<!-- wp:group {"metadata":{"categories":["footer"],"patternName":"twentytwentyfive/footer","name":"Footer"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|50"},"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|50"}}},"backgroundColor":"accent-3","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-accent-3-background-color has-background" style="margin-top:var(--wp--preset--spacing--50);padding-top:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50)">
	
<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
<div class="wp-block-group alignwide">

<!-- wp:columns {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}}} -->
<div class="wp-block-columns" style="padding-bottom:var(--wp--preset--spacing--40)">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:site-title {"level":2} /-->
	</div>
	<!-- /wp:column -->
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:search {"label":"","buttonText":"Search"} /-->
	</div>
	<!-- /wp:column -->
	</div>
<!-- /wp:columns -->

<!-- wp:columns -->
<div class="wp-block-columns">
	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Responsibility</h3>
			<!-- /wp:heading -->
			<!-- wp:paragraph {"fontSize":"medium"} -->
			<p class="has-medium-font-size">This website is written and operated by Jer Clarke and licensed as <a href="http://creativecommons.org/licenses/by-nc-sa/2.0/ca/">Creative Commons BY-NC-SA</a>.</p>
			<!-- /wp:paragraph -->
			<!-- wp:image {"linkDestination":"custom"} -->
			<figure class="wp-block-image"><a href="https://creativecommons.org/licenses/by-nc-sa/4.0/"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/by-nc-sa-ccLicense.png" alt="CC-BY-NC-SA" class=""/></a></figure>
			<!-- /wp:image -->

			<!-- wp:paragraph {"align":"left","style":{"layout":{"selfStretch":"fit","flexSize":null}},"fontSize":"medium"} -->
			<p class="has-text-align-left has-medium-font-size">The site was built with <a href="https://wordpress.org">WordPress</a> using a custom child theme of <a href="https://wordpress.org/themes/twentytwentyfive/">Twenty Twenty Five</a></p>
			<!-- /wp:paragraph -->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
		<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">About Jer</h3>
			<!-- /wp:heading -->
			<!-- wp:navigation {"textColor":"accent-1","overlayMenu":"never","layout":{"type":"flex","orientation":"vertical"}} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->

	<!-- wp:column -->
	<div class="wp-block-column">
	<!-- wp:group {"layout":{"type":"constrained"}} -->
		<div class="wp-block-group">
			<!-- wp:heading {"level":3} -->
			<h3 class="wp-block-heading">Blog Categories</h3>
			<!-- /wp:heading -->
			<!-- wp:categories {"showPostCounts":true,"style":{"typography":{"lineHeight":"1.8"}},"fontSize":"medium"} /-->
		</div>
		<!-- /wp:group -->
	</div>
	<!-- /wp:column -->
</div>
<!-- /wp:columns -->

</div>
<!-- /wp:group -->
</div>
<!-- /wp:group -->