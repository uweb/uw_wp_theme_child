<?php
/**
 * UW WP Theme Child Theme.
 */

 // enqueue child childsheet, require the uw_wp_theme bootstrap style sheet
 
add_action( 'wp_enqueue_scripts', 'uw_child_enqueue_styles', 11 );

function uw_child_enqueue_styles() {
	$parenthandle = 'uw_wp_theme-bootstrap';
	
	wp_enqueue_style( 'uw_wp_theme-child-style', get_stylesheet_uri(),
        array( $parenthandle ), 
        wp_get_theme()->get('Version') // this only works if you have Version in the style header
    );
}
