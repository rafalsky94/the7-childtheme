 <?php
// Define all Variables.
$bnt_promote =  get_theme_mod('promote_link_name1',esc_attr__('Know More','promote')) ;
$bnt2_promote = get_theme_mod('promote_link_name2',esc_attr__('Buy Theme','promote'));
$promote_staticslider_uri1 = get_theme_mod('promote_staticslider_uri1');
$promote_staticslider_uri2 =  get_theme_mod('promote_staticslider_uri2') ;
$promote_staticslider_image =  get_theme_mod('promote_staticslider_image',esc_url(get_template_directory_uri().'/images/slider.jpg')) ;
							?>


	<section id="staticslider" class="masthead" style="background:url( <?php echo esc_url($promote_staticslider_image); ?>) no-repeat;" >
    <div class="masthead-overlay"></div>
		<div class="masthead-arrow"></div>

			<div class="masthead-dsc">
        <div class="row warp">
          <div class="stat-content">
          <?php
            $args = array(	'post_type' => 'page',
                            'page_id' => esc_html( get_theme_mod('content_static') ),
                            'posts_per_page'=>1,
                            'order'=>'ASC');
            $wp_query_static = new WP_Query($args);
            if($wp_query_static->have_posts()) {?>
              <?php  while ($wp_query_static->have_posts()) { $wp_query_static->the_post();?>
						    <h1><?php the_title(); ?> </h1>
					      <?php the_excerpt(); ?>
              <?php } ?>
            <?php } ?>
          </div>
        	  <div class="sl-button">
        		  <?php if( !empty($promote_staticslider_uri1) ):?>
                <a href="<?php echo esc_url($promote_staticslider_uri1); ?>" class='hvr-shutter-out-vertical slider-bnt2'>  <?php echo esc_html ($bnt_promote); ?></a>
              <?php endif;?>
						  <?php if( !empty($promote_staticslider_uri2) ):?>
                <a href="<?php echo esc_url($promote_staticslider_uri2); ?>" class='btn-4 slider-bnt'> <?php echo esc_html ($bnt2_promote); ?></a>
              <?php endif;?>
            </div>
        </div>
      </div>
	</section>
