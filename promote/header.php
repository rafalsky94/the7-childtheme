<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 */
?>

<!DOCTYPE html >
<html <?php language_attributes();?>>
<head>
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset');?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' );?>" />
<?php endif; ?>
	<?php wp_head();?>

</head>

<body <?php body_class();?> id="top" >

<div id="wrapper" >
 <!-- Site HEADER -->
<?php
$promote_head2_address = get_theme_mod ('promote_head2_address',esc_attr__('24, Lane Street<br>New York, USA','promote'));
$promote_head2_time = get_theme_mod ('promote_head2_time');
$promote_head2_contactphone =  get_theme_mod ('promote_head2_contactphone','+021-3421-543m');
$promote_head2_contactemail =  get_theme_mod ('promote_head2_contactemail',esc_attr__('info@imonthemes.com','promote'));
$sanitized_emailsaf = sanitize_email($promote_head2_contactemail);

?>

<header id="header-top" class="header-area">
	<div class="head-top-area" <?php if( !empty($image_heade2) ):?>style="background:url(<?php echo esc_url($image_heade2) ;?>); 		 background-image:cover; background-repeat:no-repeat;" <?php endif ;?>>
		<div class="row valign-middle">
			<!--  Logo -->
      <div class="large-4 columns">
				<div class="logo">
 					<div id="site-title">
        		<?php if ( function_exists( 'has_custom_logo' ) && has_custom_logo() ) : ?>
        			<?php promote_the_custom_logo(); ?>
       		 			<?php else : ?>
   								<h1 class="site-title">
            					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                  </h1>
	    							<?php
                			$description = get_bloginfo( 'description', 'display' );
                				if ( $description || is_customize_preview() ) : ?>
                    			<p class="site-description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
            						<?php endif; ?>
         		<?php endif;?>
    			</div>
				</div>
			</div>
            	<!-- /.End Of Logo -->

			<div class="large-8 columns hidden-xs">
				<div class="head-top-right fix">
          <?php if( !empty($promote_head2_address) ):?>
						<div class="sin-info large-3 medium-6 small-6 columns fix">
							<div class="info-icon">
						    <i class="icofont fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="info-content addre1">
								<span><?php echo html_entity_decode($promote_head2_address) ;?></span>
					 		</div>
						</div>
          <?php endif;?>
						<!-- /.End address -->

					<?php if( !empty($promote_head2_time) ):?>
            <div class="sin-info large-3 medium-6 small-6 columns fix">
							<div class="info-icon">
					    	<i class="icofont fa fa-clock-o" aria-hidden="true"></i>
							</div>
							<div class="info-content time1">
								<span><?php echo html_entity_decode($promote_head2_time );?></span>
							</div>
						</div>
          <?php endif;?>
					<!-- /.End Of time -->
          <?php if (!empty($promote_head2_contactemail) || !empty($promote_head2_contactphone)): ?>
            <div class="sin-info large-3 medium-6 small-12 columns ">
							<div class="info-icon">
						    <i class="icofont fa fa-book" aria-hidden="true"></i>
							</div>
							<div class="info-content">
								<a class="head2email" href="mailto:<?php echo antispambot($sanitized_emailsaf,1); ?>"><?php echo antispambot($sanitized_emailsaf) ;?></a>
                <a class="head2phone" href="tel:<?php echo esc_attr($promote_head2_contactphone) ;?>"><?php echo  esc_attr($promote_head2_contactphone)  ;?></a>
							</div>
						</div>
          <?php endif;?>
					<!-- /.End Of phone -->
          <?php if ( true == get_theme_mod( 'promote_social_box', true ) ) : ?>
            <div class="sin-info large-3 medium-6 small-12 columns ">
							<!--social-->
            	<?php get_template_part('parts/social','loop'); ?>
						</div>
          <?php endif;?>
							<!-- /.End Of phone -->
				</div>
			</div>
		</div>
  </div>
	<!-- End Of Top Head -->
	<?php if ( true == get_theme_mod( 'disable_sticky_menu', true ) ) : ?>
		<div class="head-bottom-area navbar-sticky ">
	<?php else : ?>
		<div class="head-bottom-area ">
	<?php endif; ?>
			<div class="container">
				<div class="row">
					<div class="mainmenu-area">
						<nav class="navigation-menus" >
            	<h3 class="menu-toggle"><?php esc_attr__( 'Menu', 'promote' ); ?></h3>

        				<div id="navmenu">
									<?php if ( true == get_theme_mod( 'promote_search_box', true ) ) : ?>
         						<li class="search-icon">
                  		<i class="fa fa-search"></i>
                    		<div class="promote-search">
                      		<div class="close">&times;</div>
                        		<?php get_search_form(); ?>
                      		<div class="overlay-search"> </div>
                    		</div>
                		</li>
									<?php endif; ?>

									<?php if ( has_nav_menu( 'primary' ) ) : ?>
									<?php
									wp_nav_menu( array(

		  							'container_class' => 'menu-header',
		  							'theme_location' => 'primary'
		  							) );?>
									<?php else : ?>
										<li id="promote-add-menu"><a  href=" <?php echo esc_url(admin_url( 'nav-menus.php' ));?>  "><?php echo __( 'Add a Primary Menu', 'promote' );?>  </a></li>
									<?php endif; ?>
	  						</div><!--/ #navmenu-->
						</nav>
					</div><!--/ mainmenu-->
				</div>
			</div>
</header>
