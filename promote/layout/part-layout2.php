
<?php
  $promote_num_post =  esc_attr(get_theme_mod ('promote_num_post'));
  $category_show = get_theme_mod( 'category_show' );
  $post_order_by = get_theme_mod( 'post_order_by', array( 'none', 'date','ID','author','title','rand' ) );
  $promote_args=array(
                      'post_type' => 'post',
                      'posts_per_page'=>$promote_num_post,
			                'cat' => $category_show,
			                'orderby' => $post_order_by,
			                'order'=>'ASC',
                    );
    $wp_query = new WP_Query($promote_args);
?>
<div id="latest-ref">
	<section class=" mp-35 blog-content-section">
  	<div class="row">
    	<div class="large-9 medium-8 small-12 left-column sidebar-type-2 columns <?php if ( !is_active_sidebar( 'sidebar' ) ){ ?> nosid <?php }?>">
		      <?php if ( $wp_query->have_posts() ) : ?>
			      <?php /* Start the Loop */ ?>
				    <?php while ( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
					    <div class="wrap-blog-post post type-post ">
                <!--CALL TO POST IMAGE-->
              	<div class="wrap-image">
								  <a href="<?php echo esc_url(get_permalink());?>">
                    <?php the_post_thumbnail('large'); ?>
									</a>
								</div>
                <!--end POST IMAGE-->
                <div class="wrap-post-description">
									<div class="meta ">
                    <?php if ( true == get_theme_mod( 'latest_post_cat', true ) ) : ?>
										  <div class="meta-item">
                        <span class="icon icon-Tag"></span>
                          <span>
                            <?php $categories = get_the_category();
                                  $separator = ', ';
 														      $output = '';
												      if ( ! empty( $categories ) ) {
    												    foreach( $categories as $category ) {
        												          $output .=
														              '<a href="' . esc_url( get_category_link( $category->term_id ) ) .
														              '" alt="' . esc_attr(sprintf( __( 'View all posts in %s','promote' ),
														              $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
    																    }
   													    echo trim( $output, $separator );
											        } ?>
                          </span>
                      </div>
                    <?php endif; ?>
                    <?php if ( true == get_theme_mod( 'latest_post_date', true ) ) : ?>
									    <div class="meta-item">
                        <span class="icon icon-Agenda"></span>
                        <?php the_time( get_option('date_format') ); ?>
                      </div>
                    <?php endif; ?>
                    <?php if ( true == get_theme_mod( 'latest_post_comment', true ) ) : ?>
									    <div class="meta-item">
                        <span class="icon icon-Message"></span>
                          <?php comments_popup_link( __('0 Comment', 'promote'), __('1 Comment', 'promote'), __('% Comments', 'promote'), '', __('no' , 'promote')); ?>
                      </div>
                    <?php endif; ?>
								  </div>
							  </div>
                <div class="post-body">
                  <?php the_title( sprintf( '<h2 class="post-body-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
							      <div class="post-body-content post-body-excerpt">
                      <?php the_excerpt(); ?>
                    </div>
							    <div class="more-page">
							    </div>
							    <div class="row">
								    <div class="medium-12 columns">
									    <a href="<?php echo esc_url(get_permalink());?>" class="blog-btn hvr-icon-forward  pull-left" >
										    <?php echo esc_attr__('Read more','promote');?>
                      </a>
								    </div>
							    </div>
				        </div>
              </div>
          <?php endwhile; ?>
		        <?php else : ?>
			        <?php wp_reset_postdata(); ?>
	      <?php endif; ?>
      </div><!--post END-->
	  </div><!--row END-->
  </section><!--section END-->
  <!-- lapromotet1 -->
</div>
