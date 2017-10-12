<?php
/**
 * Slider template
 *
 * @package promote
 */
$bnt_promote =  get_theme_mod('promote_link_name1',esc_attr__('Know More','promote')) ;
$bnt2_promote = get_theme_mod('promote_link_name2',esc_attr__('Buy Theme','promote'));
    ?>



        	<?php $slider_rep_image = get_theme_mod( 'slider_rep_image', array(
				array(
					'dropdown_pages' => '',
			'slider_image'=>'',
			'link_url1'  => '',
			'link_url2'  => '',

				)
			) ); ?>
<?php if( !empty( $slider_rep_image ) ):?>
  <div class="slider-container">
  		<ul class="site-slider">
  			<?php foreach ( $slider_rep_image as $row ) {?>
    			<li>
      				<div class="slider-img " style="background: url(<?php echo esc_url(wp_get_attachment_url( $row['slider_image'] )); ?>) no-repeat;"  >
                    </div>

      					<?php

							$dropdown_pages = esc_html( $row['dropdown_pages'] );
							$args = array(	'post_type' => 'page',
									'page_id' => $dropdown_pages,
						    		'posts_per_page'=>1,
									'order'=>'ASC');

							$wp_query_promote = new WP_Query($args);

   								if($wp_query_promote->have_posts()) {		?>
									<?php  while ($wp_query_promote->have_posts()) { $wp_query_promote->the_post();?>
      									<div class="slider-text">
        									<h3 ><?php the_title(); ?></h3>
        										<?php the_excerpt(); ?>
                                                <?php if( !empty( $row['link_url1'] ) ):?>
                                    <a href="<?php echo esc_url( $row['link_url1'] ); ?>" class='hvr-shutter-out-vertical slider-bnt2'>  <?php echo esc_html($bnt_promote); ?>  </a>
                                    <?php endif;?>
                                                                         <?php if( !empty($row['link_url2']) ):?>
                                    <a href="<?php echo esc_url( $row['link_url2'] ); ?>" class='btn-4 slider-bnt'> <?php echo esc_html($bnt2_promote); ?></a>
                                    <?php endif;?>
      									</div>
      								<?php } ?>
    							<?php } ?>
    			</li>
			  <?php }?>
      </ul>
	</div>
  <?php endif;?>
