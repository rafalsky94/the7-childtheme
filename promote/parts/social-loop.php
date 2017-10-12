<?php


$promote_facebook = get_theme_mod ('fbsoc_text_promote');
$promote_twitter =  get_theme_mod ('ttsoc_text_promote');
$promote_googleplus = get_theme_mod ('gpsoc_text_promote');
$promote_pinterest =  get_theme_mod ('pinsoc_text_promote');
$promote_promotetube =  get_theme_mod ('ytbsoc_text_promote');
$promote_linkedin = get_theme_mod ('linsoc_text_promote');
$promote_vimeo = get_theme_mod ('vimsoc_text_promote');
$promote_flickr = get_theme_mod ('flisoc_text_promote');
$promote_rss = get_theme_mod ('rsssoc_text_promote');
$promote_instagram =  get_theme_mod ('instagram_text_promote');

?>

<div class="social-promote">


				<?php if( !empty($promote_facebook) ):?>

         <a  href="<?php echo esc_url($promote_facebook);?>" target="_blank" title="<?php echo esc_attr__('facebook','promote')?>"><span class="hb hb-xs inv hb-facebook-inv"><i class="fa fa-facebook"></i></span></a><?php endif; ?>

                <?php if( !empty($promote_twitter) ):?>
               <a  href="<?php echo esc_url($promote_twitter);?>" target="_blank" title="<?php echo esc_attr__('twitter','promote')?>"><span class="hb hb-xs inv hb-twitter-inv"><i class="fa fa-twitter"></i></span></a><?php endif; ?>

                 <?php if( !empty($promote_googleplus) ):?>
                <a href="<?php echo esc_url($promote_googleplus);?>" title="<?php echo esc_attr__('Google Plus','promote')?> " target="_blank"> <span class="hb hb-xs inv hb-google-plus-inv"><i class="fa fa-google-plus"></i></span></a><?php endif; ?>

                 <?php if( !empty($promote_pinterest) ):?>
                <a href="<?php echo esc_url($promote_pinterest);?>" title="<?php echo esc_attr__('Pinterest','promote')?> " target="_blank"><span class="hb hb-xs inv hb-pinterest-inv"><i class="fa fa-pinterest-p"></i> </span></a><?php endif; ?>


                 <?php if( !empty($promote_promotetube) ):?>
                <a href="<?php echo esc_url($promote_promotetube);?>" title="<?php echo esc_attr__('promotetube','promote')?> " target="_blank"> <span class="hb hb-xs inv hb-promotetube-inv"><i class="fa fa-promotetube"></i></span></a><?php endif; ?>

                <?php if( !empty($promote_linkedin) ):?>
               <a href="<?php echo esc_url($promote_linkedin);?>" title="<?php echo esc_attr__('linkedin','promote')?> " target="_blank"><span class="hb hb-xs inv hb-linkedin-inv"> <i class="fa fa-linkedin"></i></span></a><?php endif; ?>

                <?php if( !empty($promote_vimeo) ):?>
                <a href="<?php echo esc_url($promote_vimeo);?>" title=" <?php echo esc_attr__('Vimeo','promote')?>" target="_blank"><span class="hb hb-xs inv hb-vimeo-inv"> <i class="fa fa-vimeo"></i></span></a><?php endif; ?>
                 <?php if( !empty($promote_flickr) ):?>
                 <a href="<?php echo esc_url($promote_flickr);?>" title="<?php echo esc_attr__('flickr','promote')?> " target="_blank"><span class="hb hb-xs inv hb-flickr-inv"> <i class="fa fa-flickr"></i></span></a><?php endif; ?>

                 <?php if( !empty($promote_rss) ):?>
                 <a href="<?php echo esc_url($promote_rss);?>" title="<?php echo esc_attr__('rss','promote')?>" target="_blank"><span class="hb hb-xs inv hb-rss-inv"> <i class="fa fa-rss"></i></span></a><?php endif; ?>

                <?php if( !empty($promote_instagram) ):?>
                 <a href="<?php echo esc_url($promote_instagram);?>" title="<?php echo esc_attr__('instagram','promote')?>" target="_blank"> <span class="hb hb-xs inv hb-instagram-inv"><i class="fa fa-instagram"></i></span></a><?php endif; ?>


   </div>
