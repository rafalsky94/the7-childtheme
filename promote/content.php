<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package promote
 */

?>

	
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
                        
									<div class="meta-item">
                                    	<span class="icon icon-Agenda"></span>
                                     <?php the_time( get_option('date_format') ); ?>
                                     </div>
									<div class="meta-item">
                                    	<span class="icon icon-Message"></span>
                                     <?php comments_popup_link( __('0 Comment', 'promote'), __('1 Comment', 'promote'), __('% Comments', 'promote'), '', __('no' , 'promote')); ?>
                                     </div>
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