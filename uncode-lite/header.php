<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Uncode
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> <?php uncode_lite_html_tag_schema(); ?> >
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div id="page" class="site">
	<?php
				
		do_action( 'uncode_lite_header_before' ); 
		
		do_action( 'uncode_lite_main_header' );


		do_action( 'uncode_lite_header_after' ); 

		do_action( 'uncode_lite_main_banner' ); 
	?>
	<div id="content" class="site-content">