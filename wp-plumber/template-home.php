<?php
/**
 * Template Name: Homepage
 *
 *
 * @package wp-plumber
 */

get_header(); ?>

    <?php 
    
    /**
     * Functions hooked in to wp_plumber_home action.
     *
     * @hooked wp_plumber_template_section_1 -10 
     * @hooked wp_plumber_template_section_2 -15
     * @hooked wp_plumber_template_section_2 -20
     * @hooked wp_plumber_template_section_2 -25
     * @hooked wp_plumber_template_section_2 -30
     */
    do_action('wp_plumber_home'); 

get_footer(); ?>