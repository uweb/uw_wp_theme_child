<?php
/**
 * UW WP Theme Child Theme.
 */

add_action( 'wp_enqueue_scripts', 'uw_child_enqueue_styles' );
function uw_child_enqueue_styles() {
	$parenthandle = 'uw_wp_theme-base-style';
	$theme        = wp_get_theme();

	// enqueue the UW WP Theme's styles.
	wp_enqueue_style(
		$parenthandle,
		get_template_directory_uri() . '/style.css',
		array(),
		$theme->parent()->get( 'Version' )
	);

	// enqueue the child theme's styles.
	wp_enqueue_style(
		'uw-child-style',
		get_stylesheet_uri(),
		array( $parenthandle ),
		$theme->get( 'Version' )
	);
}
