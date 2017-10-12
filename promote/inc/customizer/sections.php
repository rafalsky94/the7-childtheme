<?php
/**
 * Add sections
 */

/* adding lapromotet_front_page section*/


Kirki::add_section( 'lapromotet_front_page', array(
    'title'          =>esc_attr__( 'General setting', 'promote' ),
    'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 1,


) );


Kirki::add_section( 'promote_headtitle_settings', array(
    'title'          =>esc_attr__( 'Header and Title settings', 'promote' ),
     'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 1,


) );

Kirki::add_section( 'promote_color_settings', array(
    'title'          =>esc_attr__( 'Color and Section management', 'promote' ),
     'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 1,


) );





Kirki::add_section( 'slider_setup', array(
    'title'          => esc_attr__( 'Slider section', 'promote' ),
    'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 2,


) );


Kirki::add_section( 'promote_callout',array(
    'title'          => esc_attr__( 'Welcome Section', 'promote' ),
    'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 4,


) );

Kirki::add_section( 'promote_latestsetup', array(
    'title'          =>esc_attr__( 'Latest Post section  ' , 'promote'),
    'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 5,


) );


Kirki::add_section( 'promote_typography_setting', array(
    'title'          =>esc_attr__( 'Typography  ' , 'promote'),
    'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 8,


) );


Kirki::add_section( 'promote_social', array(
    'title'          => esc_attr__( 'social', 'promote' ),
    'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 9,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );


Kirki::add_section( 'promote_mobile', array(
    'title'          => esc_attr__( 'Mobile layout', 'promote' ),
    'panel'          => 'theme_options', // Not typically needed.
    'priority'       => 10,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '', // Rarely needed.
) );
