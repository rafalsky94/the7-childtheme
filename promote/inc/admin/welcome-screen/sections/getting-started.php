<?php
/**
 * Getting started template
 */

$customizer_url = admin_url() . 'customize.php' ;
?>

<div class="backend_wrapper">
    	<div class="back_header">
            <div class="center">
            	<h3><a><?php esc_attr__('promote','promote'); ?></a><span><?php $the_theme = wp_get_theme(); echo $the_theme->get('Version');?></span></h3>
               
           </div> 
       </div>
         <div id="verticalTab">
<ul class="resp-tabs-list">
<li class="btn btn-4 btn-4c icon-arrow-right"><?php echo esc_attr__('Wellcome','promote');?></li>
<li class="btn btn-4 btn-4c icon-arrow-right"><?php echo esc_attr__('setup static image','promote');?></li>
<li class="btn btn-4 btn-4c icon-arrow-right" style="color:#B70000" ><?php echo esc_attr__('How to make home page like demo !!','promote');?></li>
<li class="btn btn-4 btn-4c icon-arrow-right"><?php echo esc_attr__('Support','promote');?></li>

</ul>
<div class="resp-tabs-container">
<div>
<p> <div class="blocks_wrap">
        	<div class="center">
            
                <!--BLOCK 1-->
                <div class="block">
                <i class="fa fa-cogs fa-4x" aria-hidden="true"></i>
                    <p><?php esc_attr__('Customize promoter website live with our improved customizer, which cuts down the website building time in half.','promote'); ?></p>
                    <a href="<?php echo esc_url(admin_url('/customize.php')); ?>" target="_blank" ><?php esc_attr__('Customize','promote'); ?></a>
                </div>
                <!--BLOCK 2-->
                <div class="block">
                <i class="fa fa-book fa-4x" aria-hidden="true"></i>
                    <p><?php esc_attr__('promote is extensively documented. promote will find useful information about the theme ranging from introductions to promoted features.','promote'); ?></p>
                    <a href="#" target="_blank"  ><?php esc_attr__('Documentation','promote'); ?></a>
                </div>
                 <!--BLOCK 1-->
                <div class="block">
                 <i class="fa fa-shopping-cart fa-4x" aria-hidden="true"></i>
                    <p><?php esc_attr__('Upgrade to Pro for Unlock all Features','promote'); ?></p>
                    <a href="#" target="_blank" ><?php esc_attr__('Upgrade to Pro','promote'); ?></a>
                    
                     <p><?php esc_attr__('Imoport demo content','promote'); ?></p>
                    <a href="#" target="_blank" ><?php esc_attr__('Demo Content','promote'); ?></a>
                </div>

                
            </div></div></p>
</div>
<div>
<p><h3><?php esc_attr__('Set Up setup static image :','promote'); ?></h3>
<ol>
 	<li><?php esc_attr__('go to post =&gt; add new =&gt; add promoter post title and description =&gt; Publish','promote'); ?></li>
 	<li><?php esc_attr__('If promote dont want to show this post in latest post section .then crate a new category and "static-image" .Put this post into this category','promote'); ?></li>
 	<li><?php esc_attr__('Go to customize =&gt; Slider setup =&gt; chose post for slider','promote'); ?></li>
 	<li><?php esc_attr__('Upload static slider image','promote'); ?> </li>
</ol>
<?php esc_attr__('Thats all !!','promote'); ?>
<ol>
 	<li><?php esc_attr__('Setup Post for','promote'); ?> <span class="description customize-control-description"><?php esc_attr__('static-image','promote'); ?></span></li>
</ol>
<img class="size-medium wp-image-198 alignleft" src="<?php echo  esc_url(get_template_directory_uri().'/inc/admin/img/1.png');?>" alt="1" width="84" height="300" />
<p style="text-align: center;"><img class="alignleft wp-image-199 size-large" src="<?php echo  esc_url(get_template_directory_uri().'/inc/admin/img/2.png');?>" alt="2" width="630" height="338" />2. <?php esc_attr__('Setup static-image from customize','promote'); ?></p>
<img class="aligncenter wp-image-200 size-large" src="<?php echo  esc_url(get_template_directory_uri().'/inc/admin/img/3.png');?>" alt="3" width="500" height="400" style="margin-left:5%;" />
</p>
</div>
<div>
<p>



<ol style="text-align: left;">
<li>
<h3><strong><?php esc_attr__('How to replace front page latest post area with promote widgets ','promote'); ?></strong></h3>
</li>
</ul>
<li style="text-align: left;"><?php esc_attr__('Go to customize  =&gt; theme option =&gt; Front Page widgets area  =&gt; Add a widgets =&gt; select promote custome widgets ','promote'); ?></li>
<li style="text-align: left;"><?php esc_attr__('Check screenshot','promote'); ?></li>
<img class="alignnone wp-image-16" src="<?php echo  esc_url(get_template_directory_uri().'/inc/admin/img/fron-widgest.jpg');?>" alt="service" width="824" height="375" />


 	
<h3><strong><?php esc_attr__('Menu','promote'); ?></strong></h3>
</li>
</ul>
<?php esc_attr__('For show menu in mobile and any device promote need to set up menu','promote'); ?>
<ul>
 	<li>
<h3><strong><?php esc_attr__('How to setup menu ?','promote'); ?></strong></h3>
</li>
</ul>
<?php esc_attr__('For tutorial of menu check this link :','promote'); ?> <a href="<?php echo  esc_url('https://codex.wordpress.org/WordPress_Menu_User_Guide');?>" target="_blank"><?php esc_attr__('Menu setup','promote'); ?></a>

</p>
</div>
<div>
<p> 
<a href="<?php echo  esc_url('https://wordpress.org/support/theme/promote');?>" target="_blank" class="free_support"><button class="btn btn-2 btn-2e"><?php esc_attr__('Free Support','promote'); ?></button></a>
<a href="" target="_blank" class="free_support"><button class="btn btn-2 btn-2f"><?php esc_attr__('Pro Support','promote'); ?></button></a>
</p>
</div>
</div>
</div>
<br />
<div style="height: 30px; clear: both"></div>
</div>
        
        
    </div>