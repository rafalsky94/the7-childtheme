<?php 

/**
 * theme main functions
 *
 * @package wp-plumber
 */

/**
 * load custom functions
 */
require get_template_directory() . '/inc/functions/custom-functions.php';

/**
 * load template hooks
 */
require get_template_directory() . '/inc/functions/template-hooks.php';

/**
 * load bootstrap navwalker
 */
require get_template_directory() . '/assets/wp_bootstrap_navwalker.php'; /* Theme wp_bootstrap_navwalker display */

/**
 * customizer
 */
require get_template_directory() . '/inc/customizer/controls.php';
require get_template_directory() . '/inc/customizer/display.php';

/**
 * Theme setup
 */
add_action( 'after_setup_theme', 'wp_plumber_theme_setup' );
function wp_plumber_theme_setup() {

    load_theme_textdomain( 'wp-plumber', get_template_directory() . '/inc/translation' );

    add_action( 'wp_enqueue_scripts', 'wp_plumber_scripts_and_styles', 999 );

    wp_plumber_theme_support();

    add_action( 'widgets_init', 'wp_plumber_register_sidebars' );

    global $content_width;
    if ( ! isset( $content_width ) ) {
    $content_width = 640;
    }

    // Thumbnail sizes
    add_image_size( 'wp-plumber-thumb-600', 600, 600, true );
    add_image_size( 'wp-plumber-thumb-300', 300, 300, true );

} 

/**
 * enqueue scripts and styles
 */
function wp_plumber_scripts_and_styles() {

    global $wp_styles; 

    wp_enqueue_script( 'jquery-modernizr', get_template_directory_uri() . '/assets/js/modernizr.custom.min.js', array('jquery'), '2.5.3', false );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'wp-plumber-main-js', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '', true );

    wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/assets/fonts/font-awesome.min.css', array(), '', 'all' );

    wp_enqueue_style('wp-plumber-google-fonts-Montserrat', '//fonts.googleapis.com/css?family=Montserrat:400,700');
    wp_enqueue_style('wp-plumber-google-fonts-Open-Sans', '//fonts.googleapis.com/css?family=Open+Sans:400,400i');

    if ( is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
      wp_enqueue_script( 'comment-reply' );
    }

}

/**
 * theme support
 */
function wp_plumber_theme_support() {

    add_theme_support( 'post-thumbnails' );

    set_post_thumbnail_size( 600, 600 );

    add_theme_support( 'custom-background',
    array(
    'default-image' => '',    // background image default
    'default-color' => 'ffffff',    // background color default (dont add the #)
    'wp-head-callback' => '_custom_background_cb',
    'admin-head-callback' => '',
    'admin-preview-callback' => ''
    )
    );

    add_theme_support('automatic-feed-links');

    add_theme_support( 'title-tag' );

    add_theme_support( 'menus' );

    add_theme_support( 'custom-logo' );

    register_nav_menus(
    array(
    'main-nav' => __( 'The Main Menu', 'wp-plumber' ),
    )
    );
  
}

/**
 * register sidebar
 */
function wp_plumber_register_sidebars() {

  register_sidebar(array(
    'id' => 'sidebar1',
    'name' => __( 'Posts Widget Area', 'wp-plumber' ),
    'description' => __( 'The Posts Widget Area.', 'wp-plumber' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widgettitle">',
    'after_title' => '</h3>',
  ));

  register_sidebar(array(
    'id' => 'sidebar2',
    'name' => __( 'Page Widget Area', 'wp-plumber' ),
    'description' => __( 'The Page Widget Area.', 'wp-plumber' ),
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widgettitle">',
    'after_title' => '</h3>',
  ));

  register_sidebar(array(
    'id' => 'footer-1',
    'name' => __( 'Footer Widget Area 1', 'wp-plumber' ),
    'description' => __( 'The Footer Widget Area.', 'wp-plumber' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));

  register_sidebar(array(
    'id' => 'footer-2',
    'name' => __( 'Footer Widget Area 2', 'wp-plumber' ),
    'description' => __( 'The Footer Widget Area.', 'wp-plumber' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));

  register_sidebar(array(
    'id' => 'footer-3',
    'name' => __( 'Footer Widget Area 3', 'wp-plumber' ),
    'description' => __( 'The Footer Widget Area.', 'wp-plumber' ),
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'after_widget' => '</div>',
    'before_title' => '<h4 class="widgettitle">',
    'after_title' => '</h4>',
  ));


} 

/**
 * post nav
 */
function wp_plumber_paging_nav() {
  global $wp_query;

  // Don't print empty markup if there's only one page.
  if ( $wp_query->max_num_pages < 2 )
    return;
  ?>
  <div class="next-post-pagination" role="navigation">

      <?php if ( get_previous_posts_link() ) : ?>
      <?php previous_posts_link( __( 'Newer Posts <span class="fa fa-chevron-right"></span>', 'wp-plumber' ) ); ?>
      <?php endif; ?>
      
      <?php if ( get_next_posts_link() ) : ?>
      <?php next_posts_link( __( '<span class="fa fa-chevron-left"></span> Older Posts', 'wp-plumber' ) ); ?>
      <?php endif; ?>

      <span class="clearfix"></span>
    </div>
  <?php
}

/**
 * Comment layout
 */
function wp_plumber_comments( $comment, $args, $depth ) { ?>
  <div id="comment-<?php comment_ID(); ?>" <?php comment_class('comments'); ?>>

      <header class="comment-author vcard">
        <?php echo get_avatar( $comment,60 ); ?>
      </header>
      <?php if ($comment->comment_approved == '0') : ?>
        <div class="alert alert-info">
          <p><?php esc_html_e( 'Your comment is awaiting moderation.', 'wp-plumber' ) ?></p>
        </div>
      <?php endif; ?>
      <section class="comment_content cf">
        <?php printf(__( '<cite class="fn">%1$s</cite> %2$s', 'wp-plumber' ), get_comment_author_link(), edit_comment_link(__( '(Edit)', 'wp-plumber' ),'  ','') ) ?>
        <time datetime="<?php echo comment_time('Y-m-j'); ?>"><?php comment_time(__( 'F jS, Y', 'wp-plumber' )); ?></time>
        <?php comment_text() ?>
        <p class="reply-link"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></p>
      </section>
<?php
} // don't remove this bracket!