<?php 

/**
 * Customizer settings
 *
 * @package wp-plumber
 */

if ( ! function_exists( 'wp_plumber_theme_customizer' ) ) :
  function wp_plumber_theme_customizer( $wp_customize ) {

    /* Homepage Sections */
    $wp_customize->add_section( 'wp_plumber_homepage' , array(
      'title'       => __( 'Homepage Sections', 'wp-plumber' ),
      'priority'    => 30,
      'description' => __( 'Insert Page ID for each sections', 'wp-plumber' ),
    ) );

    $wp_customize->add_setting( 'wp_plumber_section_1', array (
      'sanitize_callback' => 'wp_plumber_sanitize_field_html',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wp_plumber_section_1', array(
      'label'    => __( 'Section 1', 'wp-plumber' ),
      'section'  => 'wp_plumber_homepage',
      'settings' => 'wp_plumber_section_1',
    ) ) );

    $wp_customize->add_setting( 'wp_plumber_section_2', array (
      'sanitize_callback' => 'wp_plumber_sanitize_field_html',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wp_plumber_section_2', array(
      'label'    => __( 'Section 2', 'wp-plumber' ),
      'section'  => 'wp_plumber_homepage',
      'settings' => 'wp_plumber_section_2',
    ) ) );

    $wp_customize->add_setting( 'wp_plumber_section_3', array (
      'sanitize_callback' => 'wp_plumber_sanitize_field_html',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wp_plumber_section_3', array(
      'label'    => __( 'Section 3', 'wp-plumber' ),
      'section'  => 'wp_plumber_homepage',
      'settings' => 'wp_plumber_section_3',
    ) ) );

    $wp_customize->add_setting( 'wp_plumber_section_4', array (
      'sanitize_callback' => 'wp_plumber_sanitize_field_html',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wp_plumber_section_4', array(
      'label'    => __( 'Section 4', 'wp-plumber' ),
      'section'  => 'wp_plumber_homepage',
      'settings' => 'wp_plumber_section_4',
    ) ) );

    $wp_customize->add_setting( 'wp_plumber_section_5', array (
      'sanitize_callback' => 'wp_plumber_sanitize_field_html',
    ) );

    $wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'wp_plumber_section_5', array(
      'label'    => __( 'Section 5', 'wp-plumber' ),
      'section'  => 'wp_plumber_homepage',
      'settings' => 'wp_plumber_section_5',
    ) ) );
    
    /* color scheme option */
    $wp_customize->add_setting( 'wp_plumber_color_settings', array (
      'default' => '#ff8500',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wp_plumber_color_settings', array(
      'label'    => __( 'Primary Color Scheme', 'wp-plumber' ),
      'section'  => 'colors',
      'settings' => 'wp_plumber_color_settings',
    ) ) );

    $wp_customize->add_setting( 'wp_plumber_color_settings_2', array (
      'default' => '#272831',
      'sanitize_callback' => 'sanitize_hex_color',
    ) );
    
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'wp_plumber_color_settings_2', array(
      'label'    => __( 'Secondary Color Scheme', 'wp-plumber' ),
      'section'  => 'colors',
      'settings' => 'wp_plumber_color_settings_2',
    ) ) );
  
  }
endif;
add_action('customize_register', 'wp_plumber_theme_customizer');


/**
 * Sanitize checkbox
 */
if ( ! function_exists( 'wp_plumber_sanitize_checkbox' ) ) :
  function wp_plumber_sanitize_checkbox( $input ) {
    if ( $input == 1 ) {
      return 1;
    } else {
      return '';
    }
  }
endif;

/**
 * Sanitize text field html
 */
if ( ! function_exists( 'wp_plumber_sanitize_field_html' ) ) :
  function wp_plumber_sanitize_field_html( $str ) {
    $allowed_html = array(
    'a' => array(
    'href' => array(),
    ),
    'br' => array(),
    'span' => array(),
    );
    $str = wp_kses( $str, $allowed_html );
    return $str;
  }
endif;