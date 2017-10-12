<?php

/**
 * promote functions and definitions
 *
 * For more information on hooks, actions, and filters, @link http://codex.wordpress.org/Plugin_API
 */

/*
 * Set up the content width value based on the theme's design.
 *
 */

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function promote_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'promote_content_width', 1000 );
}
add_action( 'after_setup_theme', 'promote_content_width', 0 );



if ( ! function_exists( 'promote_setup' ) ) :
//**************promote SETUP******************//
function promote_setup() {


/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
add_theme_support( 'title-tag' );


// Add default posts and comments RSS feed links to head.
add_theme_support('automatic-feed-links');


// Declare WooCommerce support
add_theme_support( 'woocommerce' );

//Custom Background
add_theme_support( 'custom-background', array(
	'default-color' => 'FFF',

) );

/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );



//Post Thumbnail
add_theme_support( 'post-thumbnails' );

//Register Menus
register_nav_menus( array(
		'primary' => __( 'Primary Navigation(Header)', 'promote' ),

	) );

// Enables post and comment RSS feed links to head
add_theme_support('automatic-feed-links');

// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
/*

/*
	 * Enable support for custom logo.
	 *
	 *  @since advance
	 */


    $defaults = array(
        'height'      => 60,
        'width'       => 200,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );

		/*
			 * Enable support for custom Header image.
			 *
			 *  @since advance
			 */
		$args = array(
		    'flex-width'    => true,
		    'flex-height'   => true,
		    'default-image' => get_template_directory_uri() . '/images/header.jpg',
				'header-text'            => false,
		);
		add_theme_support( 'custom-header', $args );
/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If promote're building a theme based on promote, use a find and replace
		 * to change 'promote' to the name of promoter theme in all the template files
		 */

load_theme_textdomain('promote', get_template_directory() . '/languages');

add_theme_support( 'starter-content', array(

	'posts' => array(
		'home',
		'blog' ,
	),

		'options' => array(
			'show_on_front' => 'page',
			'page_on_front' => '{{home}}',
			'page_for_posts' => '{{blog}}',
		),


		'nav_menus' => array(
			'primary' => array(
				'name' => __( 'Primary Navigation(Header)', 'promote' ),
				'items' => array(
					'page_home',
					'page_about',
					'page_blog',
					'page_contact',
				),
			),
		),
	) );
}
endif; // promote_setup
add_action( 'after_setup_theme', 'promote_setup' );



if ( ! function_exists( 'promote_the_custom_logo' ) ) :
/**
 * Displays the optional custom logo.
 *
 * Does nothing if the custom logo is not available.
 *
 * @since advance
 */
function promote_the_custom_logo() {
	if ( function_exists( 'the_custom_logo' ) ) {
		the_custom_logo();
	}
}
endif;

/**
 * Filter the except length to 20 characters.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function promote_custom_excerpt_length( $length ) {
    return 20;
}
add_filter( 'excerpt_length', 'promote_custom_excerpt_length', 999 );

/**
 * Filter the excerpt "read more" string.
 *
 * @param string $more "Read more" excerpt string.
 * @return string (Maybe) modified "read more" excerpt string.
 */
function promote_excerpt_more( $more ) {
    return '';
}
add_filter( 'excerpt_more', 'promote_excerpt_more' );



//Load CSS files

function promote_scripts() {
wp_enqueue_style( 'promote-style', get_stylesheet_uri() );
wp_enqueue_style( 'fontawesome', get_template_directory_uri() . '/fonts/awesome/css/font-awesome.min.css','font_awesome', true );
wp_enqueue_style( 'promote_core', get_template_directory_uri() . '/css/promote.css' ,'promotecore_css', true);
wp_enqueue_style( 'promote-fonts', promote_fonts_url(), array(), null );

 }

 add_action( 'wp_enqueue_scripts', 'promote_scripts' );


/**
 * Google Fonts
 */

function promote_fonts_url() {
	$fonts_url = '';

	/* Translators: If there are characters in promoter language that are not
	* supported by Lato, translate this to 'off'. Do not translate
	* into promoter own language.
	*/
	$OpenSans = _x( 'on', 'Open-Sans font: on or off', 'promote' );

	/* Translators: If there are characters in promoter language that are not
	* supported by Noto Serif, translate this to 'off'. Do not translate
	* into promoter own language.
	*/
	$Open_sarif = _x( 'on', 'Open-Sans Sans Serif font: on or off', 'promote' );

	if ( 'off' !== $OpenSans || 'off' !== $Open_sarif ) {
		$font_families = array();

		if ( 'off' !== $OpenSans ) {
			$font_families[] = 'Open Sans:400,400italic,700,700italic';
		}

		if ( 'off' !== $Open_sarif ) {
			$font_families[] = 'Open Sans :400,400italic,700,700italic';
		}

		$query_args = array(
			'family' => urlencode( implode( '|', $font_families ) ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);

		$fonts_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );
	}

	return esc_url_raw( $fonts_url );
}

//Load Java Scripts
function promote_head_js() {
if ( !is_admin() ) {
wp_enqueue_script('jquery');
wp_enqueue_script('promote_js',get_template_directory_uri().'/js/promote.js' ,array('jquery'), true);
wp_enqueue_script('promote_other',get_template_directory_uri().'/js/promote_other.js',array('jquery'), true);

if ( is_singular() ) wp_enqueue_script( 'comment-reply' );

}
}
add_action('wp_enqueue_scripts', 'promote_head_js');



// recommended plugins.
require_once (get_template_directory() . '/inc/class-tgm-plugin-activation.php');
add_action( 'tgmpa_register', 'promote_theme_registe_plugins' );
function promote_theme_registe_plugins() {

    /**
* Array of plugin arrays. Required keys are name and slug.
* If the source is NOT from the .org repo, then source is also required.
*/
    $plugins = array(

         // This is an example of how to include a plugin from a private repo in your theme.
        array(
            'name' => 'one-click-demo-import', // The plugin name.
            'slug' => 'one-click-demo-import', // The plugin slug (typically the folder name).
            'required' => false, // If false, the plugin is only 'recommended' instead of required.
        ),
         // This is an example of how to include a plugin from a private repo in your theme.


				          // This is an example of how to include a plugin from a private repo in your theme.
				         array(
				             'name' => 'Promote extensions', // The plugin name.
				             'slug' => 'promote-extensions', // The plugin slug (typically the folder name).
				             'required' => false, // If false, the plugin is only 'recommended' instead of required.
				         )

    );

/**
* Array of configuration settings. Amend each line as needed.
* If you want the default strings to be available under your own theme domain,
* leave the strings uncommented.
* Some of the strings are added into a sprintf, so see the comments at the
* end of each line for what each argument will be.
*/
	$config = array(
			'id' => 'tgmpa', // Unique ID for hashing notices for multiple instances of TGMPA.
			'default_path' => '', // Default absolute path to pre-packaged plugins.
			'menu' => 'tgmpa-install-plugins', // Menu slug.
			'has_notices' => true, // Show admin notices or not.
			'dismissable' => true, // If false, a user cannot dismiss the nag message.
			'dismiss_msg' => '', // If 'dismissable' is false, this message will be output at top of nag.
			'is_automatic' => false, // Automatically activate plugins after installation or not.
			'message' => '', // Message to output right before the plugins table.
			'strings' => array(
					'page_title' => __( 'Install Required Plugins', 'promote' ),
					'menu_title' => __( 'Install Plugins', 'promote' ),
					'installing' => __( 'Installing Plugin: %s', 'promote' ), // %s = plugin name.
					'oops' => __( 'Something went wrong with the plugin API.', 'promote' ),
					'notice_can_install_required' => _n_noop( 'This theme requires the following plugin: %1$s.', 'This theme requires the following plugins: %1$s.', 'promote' ), // %1$s = plugin name(s).
					'notice_can_install_recommended' => _n_noop( 'This theme recommends the following plugin: %1$s.', 'This theme recommends the following plugins: %1$s.', 'promote' ), // %1$s = plugin name(s).
					'notice_cannot_install' => _n_noop( 'Sorry, but you do not have the correct permissions to install the %s plugin. Contact the administrator of this site for help on getting the plugin installed.', 'Sorry, but you do not have the correct permissions to install the %s plugins. Contact the administrator of this site for help on getting the plugins installed.', 'promote' ), // %1$s = plugin name(s).
					'notice_can_activate_required' => _n_noop( 'The following required plugin is currently inactive: %1$s.', 'The following required plugins are currently inactive: %1$s.', 'promote' ), // %1$s = plugin name(s).
					'notice_can_activate_recommended' => _n_noop( 'The following recommended plugin is currently inactive: %1$s.', 'The following recommended plugins are currently inactive: %1$s.', 'promote' ), // %1$s = plugin name(s).
					'notice_cannot_activate' => _n_noop( 'Sorry, but you do not have the correct permissions to activate the %s plugin. Contact the administrator of this site for help on getting the plugin activated.', 'Sorry, but you do not have the correct permissions to activate the %s plugins. Contact the administrator of this site for help on getting the plugins activated.', 'promote' ), // %1$s = plugin name(s).
					'notice_ask_to_update' => _n_noop( 'The following plugin needs to be updated to its latest version to ensure maximum compatibility with this theme: %1$s.', 'The following plugins need to be updated to their latest version to ensure maximum compatibility with this theme: %1$s.', 'promote' ), // %1$s = plugin name(s).
					'notice_cannot_update' => _n_noop( 'Sorry, but you do not have the correct permissions to update the %s plugin. Contact the administrator of this site for help on getting the plugin updated.', 'Sorry, but you do not have the correct permissions to update the %s plugins. Contact the administrator of this site for help on getting the plugins updated.', 'promote' ), // %1$s = plugin name(s).
					'install_link' => _n_noop( 'Begin installing plugin', 'Begin installing plugins', 'promote' ),
					'activate_link' => _n_noop( 'Begin activating plugin', 'Begin activating plugins', 'promote' ),
					'return' => __( 'Return to Required Plugins Installer', 'promote' ),
					'plugin_activated' => __( 'Plugin activated successfully.', 'promote' ),
					'complete' => __( 'All plugins installed and activated successfully. %s', 'promote' ), // %s = dashboard link.
					'nag_type' => 'updated' // Determines admin notice type - can only be 'updated', 'update-nag' or 'error'.
			)
	);

	tgmpa( $plugins, $config );

}

/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function promote_widgets_init(){
	register_sidebar(array(
	'name'          => __('Right Sidebar', 'promote'),
	'id'            => 'sidebar',
	'description'   => __('Right Sidebar', 'promote'),
	'before_widget' => '<div id="%1$s" class="widget %2$s sidebar-item"><div class="widget_wrap">',
	'after_widget'  => '</div></div>',
	'before_title'  => '<h5 class="widget-title">',
	'after_title'   => '</h5>'
	));

	register_sidebar(array(
	'name'          => __('Footer Widgets', 'promote'),
	'id'            => 'foot_sidebar',
	'description'   => __('Widget Area for the Footer', 'promote'),
	'before_widget' => '<div id="%1$s" class="widget %2$s"><div class="medium-3 columns">',
	'after_widget'  => '</div></div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>'
	));
	register_sidebar(array(
	'name'          => __('Client Section ', 'promote'),
	'id'            => 'sidebar-clients',
	'before_widget' => '<div id="%1$s" class="widget %2$s" data-widget-id="%1$s">',
	'after_widget'  => '</div>',
	'before_title'  => '<h3 class="widgettitle">',
	'after_title'   => '</h3>'
		));
	register_sidebar(array(
		'name'          => __('Service Section ', 'promote'),
		'id'            => 'sidebar-service',
		'before_widget' => '<div id="%1$s" class="widget %2$s" data-widget-id="%1$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widgettitle">',
		'after_title'   => '</h3>'
			));
	register_sidebar(array(
				'name'          => __('Counter Section ', 'promote'),
				'id'            => 'sidebar-counter',
				'before_widget' => '<div id="%1$s" class="widget %2$s" data-widget-id="%1$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h3 class="widgettitle">',
				'after_title'   => '</h3>'
					));
		register_sidebar(array(
			'name'          => __('Team Section ', 'promote'),
			'id'            => 'sidebar-team',
			'before_widget' => '<div id="%1$s" class="widget %2$s" data-widget-id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widgettitle">',
			'after_title'   => '</h3>'
									));

		register_sidebar(array(
			'name'          => __('Team Page widget area ', 'promote'),
			'description'   => __('Add Team widgets for team page  ', 'promote'),
			'id'            => 'sidebar-teampage',
			'before_widget' => '<div id="%1$s" class="widget %2$s" data-widget-id="%1$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widgettitle">',
			'after_title'   => '</h3>'
		));
}

add_action( 'widgets_init', 'promote_widgets_init' );



//load widgets ,kirki ,customizer
require_once(get_template_directory() . '/inc/kirki/kirki.php');
require_once(get_template_directory() . '/inc/customizer.php');
