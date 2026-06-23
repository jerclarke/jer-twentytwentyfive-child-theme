<?php
/**
 * PHP-based block styles
 *
 * @package WordPress
 */

/**
 * Register theme block styles
 *
 * @return void
 */
function jer_2025_register_block_styles() {

	/**
	 * "Hide on first page" group block style
	 *
	 * Note we register this with PHP rather than with JSON in /styles/blocks/ because we need to
	 * refer to body.paged and the JSON CSS doesn't work with ancestors like that.
	 */
	register_block_style(
		'core/group',
		array(
			'name'         => 'jer-hide-on-first-page',
			'label'        => esc_html__( 'Hide on first page', 'jer-theme' ),
			'inline_style' => '
				.is-style-jer-hide-on-first-page { 
					display: none;
				}
				body.paged .is-style-jer-hide-on-first-page {
					display: block;
				}

				/* Editor-only: Force-show with ::before label */
				.editor-styles-wrapper .is-style-jer-hide-on-first-page {
					display: block;
					outline: 2px dashed rgba(0, 140, 255, 0.5); /* Sighted boundary */
					outline-offset: 4px;
					position: relative;
				}
				.editor-styles-wrapper .is-style-jer-hide-on-first-page::before {
					content: "👁 Hidden on Page 1";
					position: absolute;
					top: -24px;
					left: 0;
					font-size: 11px;
					background: #008cff;
					color: #fff;
					padding: 2px 6px;
					border-radius: 2px;
					font-family: sans-serif;
					z-index: 10;
				}
			',
		)
	);
}
add_action( 'init', 'jer_2025_register_block_styles' );
