
<?php
$latest_post_title =  get_theme_mod('latest_post_title',esc_attr__('Latest From Blog ','promote'));
$latest_post_subtitle =  get_theme_mod('latest_post_subtitle');
?>
<div  id="latset-postsaf">
<div class="row ">
					<!--section head end-->
            <?php if (!empty($latest_post_title) || !empty($our_team_subtitle)): ?>
				<div class=" row mt50 mb5">
					<div class="section-header wow fadeIn animated " data-wow-duration="1s">
                     <?php if( !empty($latest_post_title) ):?>
 						<h1 class="section-title wow fadeIn"   >
						  <?php echo esc_html( $latest_post_title); ?>
  						</h1>
			          	<div class="colored-line"></div>
                     <?php endif;?>
                     <?php if( !empty($latest_post_subtitle) ):?>
							<div class="section-description">
                                <h2 ><?php echo esc_html( $latest_post_subtitle); ?></h2>
                             </div>
                      <?php endif;?>
        			</div><!--section head end-->
                </div><!--row end-->
		 <?php endif; ?>

<?php if( get_theme_mod( 'layout_select' )){ ?>

<?php $template_parts_promote = get_theme_mod( 'layout_select', array( 'layout1', 'layout2' ) );
        get_template_part('layout/part',''.$template_parts_promote .''); ?>

  <?php }else{ ?>

 <?php get_template_part('layout/part','layout1'); ?>
        <?php } ?>
 </div></div>
