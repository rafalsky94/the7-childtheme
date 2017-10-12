<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Uncode
 */

?>
	</div><!-- #content -->

	<?php 

		do_action( 'uncode_lite_footer_before' ); 

        do_action( 'uncode_lite_footer' ); 
		
		do_action( 'uncode_lite_footer_after' ); 

	?>

	<a href="#" class="scrollup"><i class="fa fa-angle-up" aria-hidden="true"></i> </a>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
