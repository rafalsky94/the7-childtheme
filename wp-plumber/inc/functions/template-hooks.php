<?php 

/**
 * theme template hooks
 *
 * @package wp-plumber
 */

/**
 * site header
 */
add_action( 'wp_plumber_header', 'wp_plumber_template_header' );
function wp_plumber_template_header(){ ?>
    <div class="top-area">
        <div class="container">
            <div class="row">
                <div class="site-info col-md-8">
                    <?php 
                    if(shortcode_exists( 'contact_details' )){

                    $location   = strip_tags( do_shortcode('[contact_details format="horizontal" fields="address"]') );
                    $phone      = strip_tags( do_shortcode('[contact_details format="horizontal" fields="phone"]') );
                    $email      = strip_tags( do_shortcode('[contact_details format="horizontal" fields="email"]') );
                    if( $location ){

                    ?>
                    <div class="site-info-item opening-hours col-sm-4">
                        <p><?php echo __( 'Location','wp-plumber' ) . '<span>'. esc_html( $location ) . '</span>'; ?></p>
                    </div>
                    <?php } if( $phone ){ ?>
                    <div class="site-info-item phone-num col-sm-4">
                        <p><?php echo __( 'Call Us','wp-plumber' ) . '<span>' . esc_html( $phone ) . '</span>'; ?></p>
                    </div>
                    <?php } if( $email ){ ?>
                    <div class="site-info-item email-add col-sm-4">
                        <p><?php echo __( 'Email','wp-plumber' ) . '<span>' . esc_html( $email ) . '</span>'; ?></p>
                    </div>
                    <?php }
                    }  ?>
                </div>
                <div class="site-desc col-md-4">
                    <p><?php echo esc_html( bloginfo('description') ); ?></p>
                </div>
                <span class="clearfix"></span>
            </div>
        </div>
    </div>
    <header id="site-header" class="container">
        
        <nav class="navbar navbar-default" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">

                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-navigation">
                <span class="sr-only"><?php _e( 'Toggle navigation','wp-plumber' ); ?></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>

                <?php if ( function_exists( 'the_custom_logo' ) && has_custom_logo() ): 
                $wp_plumber_custom_logo_id = get_theme_mod( 'custom_logo' );
                $image = wp_get_attachment_image_src( $wp_plumber_custom_logo_id,'full');
                ?>
                <h1 id="logo"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src="<?php echo esc_url( $image[0] ); ?>"></a></h1>
                <?php else : ?>
                <h1 id="logo"><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php echo esc_html( bloginfo('name') ); ?></a></h1>
                <?php endif; ?>

            </div>

            <div class="collapse navbar-collapse" id="main-navigation">
                <?php 
                if ( has_nav_menu( 'main-nav' ) ) {
                wp_nav_menu( array(
                'menu'              => 'main-nav',
                'theme_location'    => 'main-nav',
                'depth'             => 5,
                'container'         => 'false',
                'container_class'   => 'collapse navbar-collapse',
                'container_id'      => 'bs-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
                );
                }
                else{
                echo "<div class='pull-right'><p>Appearance &#8594; Menus &#8594; Primary Menu</p></div>";
                } 
                ?>
            </div><!-- /.navbar-collapse -->
        </nav>
    </header>
<?php
}

/**
 * related posts
 */
add_action( 'wp_plumber_relate_posts', 'wp_plumber_template_related_posts' );
function wp_plumber_template_related_posts(){ 
	global $post;
	$related = get_posts( array( 'category__in' => wp_get_post_categories($post->ID), 'numberposts' => 3, 'post__not_in' => array($post->ID) ) );
	if ( get_theme_mod('wp_plumber_related_posts') ):
	$related_class = 'related-hide';
	else :
	$related_class = '';
	endif;
	if (!empty($related)): ?>

		<div class="related-posts<?php echo " " . esc_attr( $related_class ); ?>">
			<h3 class="entry-footer-title"><?php esc_html_e('You may also like ','wp-plumber'); ?></h3>
			<div class="row">
			<?php if( $related ): foreach( $related as $post ) { ?>
			<?php setup_postdata($post); ?>
			
				<div class="col-md-4 related-item">
					<div class="related-image">
						<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>">
							<?php $image_thumb = wp_plumber_catch_that_image_thumb(); $gallery_thumb = wp_plumber_catch_gallery_image_thumb(); 
							if ( has_post_thumbnail()):
							the_post_thumbnail('600x600');  
							elseif(has_post_format('gallery') && !empty($gallery_thumb)): 
							echo $gallery_thumb; 
							elseif(has_post_format('image') && !empty($image_thumb)): 
							echo '<img src="'. esc_url($image_thumb) . '">'; 
							else: ?>
							<?php $blank = get_template_directory_uri() . '/assets/images/blank.jpg'; ?>
							<img src="<?php echo esc_url($blank); ?>">
							<?php endif; ?>
						</a>
					</div>

					<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

				</div>
			

			<?php } endif; wp_reset_postdata(); ?>

			</div>

		</div>
	<?php endif; 
}

/**
 * Homepage Sections
 */

add_action( 'wp_plumber_home', 'wp_plumber_template_section_1', 10 );
function wp_plumber_template_section_1(){

        $get_sec_1_id = get_theme_mod( 'wp_plumber_section_1' );
        $post_1 = get_post( $get_sec_1_id );
        $thumb_url = wp_get_attachment_url( get_post_thumbnail_id($get_sec_1_id) );
        $content_1 = apply_filters('the_content', $post_1->post_content);

        if( $get_sec_1_id ) :
    ?>
        <section id="banner" style="<?php if( $thumb_url ) { ?> background-image: url( <?php echo esc_url( $thumb_url ); ?> ); <?php } ?>">
            <div class="container">
                <div class="section-content">
                    <?php echo $content_1; ?>
                </div>
            </div>
        </section>
    <?php endif;

}

add_action( 'wp_plumber_home', 'wp_plumber_template_section_2', 15 );
function wp_plumber_template_section_2(){

        $get_sec_2_id = get_theme_mod( 'wp_plumber_section_2' );
        $post_2 = get_post( $get_sec_2_id );
        $content_2 = apply_filters('the_content', $post_2->post_content);

        if( $get_sec_2_id ) :
    ?>
        
        <section id="section-2">
            <div class="section-content container">
                <?php echo $content_2; ?>
            </div>
            <span class="clearfix"></span>
        </section>
    
    <?php endif; 
}

add_action( 'wp_plumber_home', 'wp_plumber_template_section_3', 20 );
function wp_plumber_template_section_3(){

        $get_sec_3_id = get_theme_mod( 'wp_plumber_section_3' );
        $post_3 = get_post( $get_sec_3_id );
        $content_3 = apply_filters('the_content', $post_3->post_content);

        if( $get_sec_3_id ) :
    ?>
        
        <section id="section-3">
            <div class="section-content container">
                <?php echo $content_3; ?>
            </div>
            <span class="clearfix"></span>
        </section>
    
    <?php endif; 
}

add_action( 'wp_plumber_home', 'wp_plumber_template_section_4', 25 );
function wp_plumber_template_section_4(){

        $get_sec_4_id = get_theme_mod( 'wp_plumber_section_4' );
        $post_4 = get_post( $get_sec_4_id );
        $thumb_url_4 = wp_get_attachment_url( get_post_thumbnail_id($get_sec_4_id) );
        $content_4 = apply_filters('the_content', $post_4->post_content);

        if( $get_sec_4_id ) :
    ?>
        
        <section id="section-4" style="<?php if( $thumb_url_4 ) { ?> background-image: url( <?php echo esc_url( $thumb_url_4 ); ?> ); <?php } ?>">
            <div class="section-content container">
                <?php echo $content_4; ?>
            </div>
            <span class="clearfix"></span>
        </section>
    
    <?php endif; 
}

add_action( 'wp_plumber_home', 'wp_plumber_template_section_5', 30 );
function wp_plumber_template_section_5(){

        $get_sec_5_id = get_theme_mod( 'wp_plumber_section_5' );
        $post_5 = get_post( $get_sec_5_id );
        $content_5 = apply_filters('the_content', $post_5->post_content);

        if( $get_sec_5_id ) :
    ?>
        
        <section id="section-5">
            <div class="section-content container">
                <?php echo $content_5; ?>
            </div>
            <span class="clearfix"></span>
        </section>
    
    <?php endif; 
}

/**
 * Footer Hooks
 */
add_action( 'wp_plumber_footer', 'wp_plumber_template_footer_widgets', 10 );
add_action( 'wp_plumber_footer', 'wp_plumber_template_copyright', 15 );

function wp_plumber_template_footer_widgets(){ 
	if ( is_active_sidebar( 'footer-1' ) || is_active_sidebar( 'footer-2' ) || is_active_sidebar( 'footer-3' ) || is_active_sidebar( 'footer-4' ) ) : ?>
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="footer-widgets wrap">
                        <div class="col-sm-4 footer-item"><?php dynamic_sidebar( 'footer-1' ); ?></div>
                        <div class="col-sm-4 footer-item"><?php dynamic_sidebar( 'footer-2' ); ?></div>
                        <div class="col-sm-4 footer-item"><?php dynamic_sidebar( 'footer-3' ); ?></div>
                    
                    <span class="clearfix"></span>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
<?php
}

function wp_plumber_template_copyright(){ ?>
    <div class="footer-copyright">
        <div class="container">
            &#169; <?php echo date_i18n(__('Y','wp-plumber')) . ' '; bloginfo( 'name' ); ?>
            <span><?php if(is_front_page()): ?>
                - <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'wp-plumber' ) ); ?>"><?php printf( __( 'Powered by %s', 'wp-plumber' ), 'WordPress' ); ?></a> <span><?php _e('and','wp-plumber'); ?></span> <a href="<?php echo esc_url( __( 'http://localthemes.net/', 'wp-plumber' ) ); ?>"><?php printf( esc_html( '%s', 'wp-plumber' ), 'Local Business Themes' ); ?></a>
            <?php endif; ?>
            </span>
        </div>
    </div>
<?php
}