
<div id="counter">

        <?php
        if ( is_active_sidebar( 'sidebar-counter' ) ) {

          dynamic_sidebar( 'sidebar-counter' );

        } elseif ( current_user_can( 'edit_theme_options' ) && ! defined( 'PROMOTE_EXTEN_VERSION' ) ) {
          echo '<div class="promote-extensions">';
          if ( is_customize_preview() ) {
            printf( __( 'You need to active the %s plugin to be able to add Team members, counter, service block and Clients widgets.','promote' ), 'promote extensions' );
          } else {
            printf( __( 'You need to install the %s plugin to be able to add Team members, counter, service block and Clients widgets.','promote' ), sprintf( '<a href="%1$s">%2$s</a>', esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=promote-extensions' ), 'install-plugin_promote-extensions' ) ), 'promote extensions' ) );

          }
          echo '</div>';
                    }?>

        <!-- /counter widgets -->
      <!-- content star -->
  <?php if ( true == get_theme_mod( 'promote_counter_content_disable', true ) ) : ?>
      <?php
          $args = array(	'post_type' => 'page',
                          'page_id' => esc_html( get_theme_mod('promote_counter_content') ),
                          'posts_per_page'=>1,
                          'order'=>'ASC');
                          $wp_query_counter = new WP_Query($args);
    if($wp_query_counter->have_posts()) {?>
      <?php  while ($wp_query_counter->have_posts()) { $wp_query_counter->the_post();?>
        <div class="row ">
          <div class="mb50 small-8 small-push-2 columns text-center">
            <h4 class="pt25 "><?php the_title(); ?></h4>
              <p class="pb25 "><?php the_excerpt(); ?></p>

                <a href="<?php echo esc_url(get_permalink());?>" class="hvr-shutter-out-vertical team_bt1"><span ><?php echo esc_html( get_theme_mod('counter_link_title') ); ?></span></a>
              
          </div>
        </div>
      <?php } ?>
    <?php } ?>
  <?php endif; ?>
</div>
