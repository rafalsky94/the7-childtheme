

 <!--Slider-->

<?php if (  is_front_page() || is_home() ) { ?>
  			<?php $promote_slider_enabel = get_theme_mod('promote_slider_enabel',1);?>
    			<?php if( isset($promote_slider_enabel) && $promote_slider_enabel == 1 ):?>

 				 <?php if( get_theme_mod( 'slider_select' )){ ?>

						<?php $template_slider_promote = get_theme_mod( 'slider_select', array( 'static','slider' ) );
        					get_template_part('parts/part',''.$template_slider_promote .''); ?>

  								<?php }else{ ?>

						 			<?php get_template_part('parts/part','slider'); ?>
       							<?php } ?>

			<div class="clearfix"></div>
		<?php endif?>
	<?php } ?>
<!--/Slider-->

<!--reorder -->
<?php $template_parts = get_theme_mod( 'home_sort_id', array( 'service','welcome','layout') );

  if ( ! empty( $template_parts ) && is_array( $template_parts ) ) {
    foreach ( $template_parts as $part ) {
      get_template_part( 'parts/part-' . $part );
    }
  }?>
  <!--/reorder -->

  <?php if ( true == get_theme_mod( 'our_team_onoff', true ) ) : ?>
    <!--team -->
    <?php get_template_part('parts/part','team'); ?>
    <!--/team -->
  <?php endif; ?>
  <?php if ( true == get_theme_mod( 'our_counter_onoff', true ) ) : ?>
    <!--counter -->
    <?php get_template_part('parts/part','counter'); ?>
    <!--/counter -->
  <?php endif; ?>
<?php if ( true == get_theme_mod( 'client_onoff', true ) ) : ?>
  <!--client -->
  <?php get_template_part('parts/part','client'); ?>
  <!--/client -->
<?php endif; ?>
