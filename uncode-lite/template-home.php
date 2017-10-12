<?php
/**
  * Template Name: Front Page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Uncode
 */

get_header(); 
	
	/**
	 * About Section in Front Page
	*/
	do_action( 'uncode-lite-about-section' );

	/**
	 * Services Section in Front Page
	*/
	do_action( 'uncode-lite-services-section' );

	/**
	 * Our Features Section in Front Page
	*/
	do_action( 'uncode-lite-features-section' );

	/**
	 * Blogs Section in Front Page
	*/
	do_action( 'uncode-lite-blog-section' );

	/**
	 * Portfolio Section in Front Page
	*/
	do_action( 'uncode-lite-portfolio-section' );

	/**
	 * Call To Action Section in Front Page
	*/
	do_action( 'uncode-lite-calltoaction-section' );

	/**
	 * Quick Contact Section in Front Page
	*/
	do_action( 'uncode-lite-quickinfo-section' );

	/**
	 * iframe Contact Section in Front Page
	*/
	do_action( 'uncode-lite-map-section' );

get_footer();