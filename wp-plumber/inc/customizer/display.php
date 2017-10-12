<?php 

/**
 * Customizer Display
 *
 * @package wp-plumber
 */

  function wp_plumber_apply_color() {

    if( get_theme_mod('wp_plumber_color_settings') ){
      $primary  =   esc_html( get_theme_mod('wp_plumber_color_settings') );
    }else{
      $primary  =  '#ff8500';
    }

    if( get_theme_mod('wp_plumber_color_settings_2') ){
      $footer_bg  =   esc_html( get_theme_mod('wp_plumber_color_settings_2') );
    }else{
      $footer_bg  =  '#272831';
    }

    $custom_css = "
        a,
        a:hover,
        #site-info .info-item p:before,
        .dropdown-menu > .active > a, .dropdown-menu > .active > a:focus, .dropdown-menu > .active > a:hover,
        .site-info .site-info-item:before{
            color: {$primary};
        }
        .widget #wp-calendar caption{
            background: {$primary};
        }
        #site-header .navbar-default .navbar-toggle,
        .comment .comment-reply-link,
        input[type='submit'], button[type='submit'], .btn, .comment .comment-reply-link{
            background-color: {$primary};
        }
        .comment .comment-reply-link,
        input[type='submit'], button[type='submit'], .btn, .comment .comment-reply-link{
            border: 1px solid {$primary};
        }
        .top-area,
        footer.footer{
            background: {$footer_bg};
        }
        
      ";

    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), '', 'all' );
    wp_enqueue_style( 'wp-plumber-main-stylesheet', get_template_directory_uri() . '/assets/css/style.css', array(), '', 'all' );
    wp_add_inline_style( 'wp-plumber-main-stylesheet', $custom_css );
}

add_action( 'wp_enqueue_scripts', 'wp_plumber_apply_color', 999 );