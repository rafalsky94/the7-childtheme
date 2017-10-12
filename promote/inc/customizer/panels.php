<?php

/**
 * Add panels
 */


/* adding lapromotet panel */


Kirki::add_panel( 'theme_options', array(
    'priority'    => 10,
    'title'       => esc_attr__( 'Theme Options', 'promote' ),
    'description' => esc_attr__( 'This panel will provide all the options of the Theme.', 'promote' ),
) );
?>
