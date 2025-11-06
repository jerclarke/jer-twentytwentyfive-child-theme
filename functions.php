<?php
/**
 * Functions.php for jer-twentytwentyfive-child-theme
 */

/**
 * Enqueue the style.css file.
 * 
 * @since 1.0.0
 */
function jer_2025_action_wp_enqueue_scripts_to_enqueue_style_css() {
	wp_enqueue_style(
		'jer-twentytwentyfive-child-theme',
		get_stylesheet_uri(),
		array(),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'jer_2025_action_wp_enqueue_scripts_to_enqueue_style_css' );