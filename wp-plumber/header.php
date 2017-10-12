<?php
/**
 * The header for our theme.
 *
 *
 * @package wp-plumber
 */

?><!DOCTYPE html>

<html <?php language_attributes(); ?>>

	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		
		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?> >
			
		<?php 
		/**
         * Functions hooked in to wp_plumber_header action.
         *
         * @hooked wp_plumber_template_header 
         */
		do_action('wp_plumber_header'); ?>

		<div id="content-area">