<?php

/**
 * Enqueue styles and scripts
 */
function mora_enqueue_styles() {
	$parent_style = 'mora-parent-style';
	wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );

}
add_action( 'wp_enqueue_scripts', 'mora_enqueue_styles' );

?>
