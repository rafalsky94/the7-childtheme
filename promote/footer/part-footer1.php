<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 */

?>
<!--FOOTER SIDEBAR-->
  <div id="footer">
   	<?php if ( is_active_sidebar( 'foot_sidebar' ) ) { ?>
    	<div class="widgets">
   			<div class="row">
     			<?php if ( is_active_sidebar('dynamic_sidebar') || !dynamic_sidebar('foot_sidebar') ) : ?><?php endif; ?>
        </div>
   		</div>
   	<?php } ?>

	  <!--COPYRIGHT TEXT-->
    <div id="copyright">
    	<div class="row valign-middle">
        <div class="<?php if ( true == get_theme_mod( 'promote_social_boxfoo', false ) ) : ?> large-6 <?php endif;?> small-12 columns">
          <div class="copytext">
           	<?php
					      $promote_footertext = html_entity_decode(get_theme_mod ('promote_footertext'));
					      echo $promote_footertext;
				    ?>
           	<a target="_blank" href="<?php echo esc_url( 'http://themezwp.com/'); ?>"><?php printf( esc_attr__( 'Theme by %s', 'promote' ), 'Themez WP' ); ?></a>
          </div>
        </div>
        <?php if ( true == get_theme_mod( 'promote_social_boxfoo', false ) ) : ?>
          <div class="large-6 small-12 columns">
            <?php get_template_part('parts/social','loop'); ?>
          </div>
        <?php endif;?>
 		  </div>
    	<a href="#" class="scrollup" > <i class=" fa fa-angle-up fa-2x"></i></a>
    </div>
  </div>
