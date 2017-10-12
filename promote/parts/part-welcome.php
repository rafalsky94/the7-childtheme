<?php
/**
 * Welcome section
 *
 * @package WordPress
 * @subpackage promote
 * @since promote 1.0
 */
 ?>

  <section id="welcome-promote"  >

    <div class="row <?php if ( false == get_theme_mod( 'welcome_content_ex', false ) ) : ?> text-center <?php endif;?> welcome">
      <?php
            $args = array(	'post_type' => 'page',
                            'page_id' => esc_html( get_theme_mod('promote_welcome_content123') ),
                            'posts_per_page'=>1,
                            'order'=>'ASC');
                            $wp_query_welcome = new WP_Query($args);
      if($wp_query_welcome->have_posts()) {?>
        <?php  while ($wp_query_welcome->have_posts()) { $wp_query_welcome->the_post();?>
          <?php if ( true == get_theme_mod( 'welcome_content_ex', false ) ) : ?>
            <?php the_content(); ?>
          <?php else : ?>
            <?php the_excerpt(); ?>
          <?php endif;?>
        <?php } ?>
      <?php } ?>
    </div>
  </section>
