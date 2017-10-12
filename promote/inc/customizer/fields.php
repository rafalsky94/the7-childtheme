<?php
Kirki::add_config( 'promote', array(
	'capability'  => 'edit_theme_options',
	'option_type' => 'theme_mod',
) );

Kirki::add_field( 'promote', array(
    'type'        => 'toggle',
    'settings'    => 'promote_sticky_menu',
    'label'       => esc_attr__( 'Disable sticky menu', 'promote' ),
    'section'     => 'lapromotet_front_page',
    'default'     => '0',
    'priority'    => 10,
) );


Kirki::add_field( 'promote', array(
    'type'        => 'toggle',
    'settings'    => 'promote_body_lapromotet',
    'label'       => esc_attr__( 'Make website box layout', 'promote' ),
    'section'     => 'lapromotet_front_page',
    'default'     => '0',
    'priority'    => 10,
) );

Kirki::add_field( 'promote', array(
	'type'        => 'dimension',
	'settings'    => 'promote_body_dimension',
	'label'       => __( 'Dimension Control', 'promote' ),
	'section'     => 'lapromotet_front_page',
	'default'     => '75rem',
	'priority'    => 10,
	'output' => array(
        array(
            'element'  => 'body',
            'property' => 'width',
            'units'    => '',
        ),),
				'active_callback'    => array(
				array(
					'setting'  => 'promote_body_lapromotet',
					'operator' => '==',
					'value'    => true,
				),
			),
) );



/* Footer section */


Kirki::add_field( 'promote', array(
    'type'        => 'textarea',
    'settings'    => 'promote_footertext',
    'label'       => esc_attr__( 'Footer Text.', 'promote' ),
    'section'     => 'lapromotet_front_page',
    'priority'    => 10,
	'transport' => 'postMessage',
	'js_vars'   => array(
        array(
            'element'  => '.copytext',
            'function' => 'html',
            'property' => '',

        ),
    ),


) );


/* header & title */
Kirki::add_field( 'promote', array(
	'type'        => 'toggle',
	'settings'    => 'disable_sticky_menu',
	'label'       => __( 'Disable sticky menu', 'promote' ),
	'section'     => 'promote_headtitle_settings',
	'default'     => '1',
	'priority'    => 10,
) );
Kirki::add_field( 'promote', array(
	'type'        => 'color',
	'settings'    => 'promoteh2_bgtop_color',
	'label'       => __( 'Header background color', 'promote' ),
	'section'     => 'promote_headtitle_settings',
	'default'     => '#fff',
	'priority'    => 10,
	'transport' => 'auto',
	'alpha'       => true,

	'output' => array(
        array(
            'element'  => '.header-area .head-top-area',

            'property' => 'background',
            'units'    => '',
        ),),

) );

Kirki::add_field( 'promote', array(
	'type'        => 'color',
	'settings'    => 'promote_icontop_color',
	'label'       => __( 'icon color', 'promote' ),
	'section'     => 'promote_headtitle_settings',
	'default'     => '#686CB6',
	'priority'    => 10,
	'transport' => 'auto',

	'output' => array(
        array(
            'element'  => '.info-icon',

            'property' => 'color',
            'units'    => '',
        ),),
) );

Kirki::add_field( 'promote', array(
	'type'        => 'color',
	'settings'    => 'promote_head2_menubg',
	'label'       => __( 'menu background', 'promote' ),
	'section'     => 'promote_headtitle_settings',
	'default'     => '#686CB6',
	'priority'    => 10,
	'transport' => 'auto',
	'alpha'       => true,
	'output' => array(
        array(
            'element'  => '.head-bottom-area,#navmenu ul li ul li,.branding--clone #navmenu ul li ul li',

            'property' => 'background',
            'units'    => '',
        ),),
) );

Kirki::add_field( 'promote', array(
    'type'        => 'textarea',
    'settings'    => 'promote_head2_address',
    'label'       => esc_attr__( 'Address', 'promote' ),
	'default'     => esc_attr__('24, Lane Street<br>New York, USA', 'promote'),
    'section'     => 'promote_headtitle_settings',
    'priority'    => 10,
'transport' => 'postMessage',

	'partial_refresh' => array(
		'headertext_partial_refresh_id' => array(
			'selector'        => ' .sin-info  .addre1',
			'render_callback' =>function() { ?>
				<?php	$promote_head2_address = get_theme_mod ('promote_head2_address',esc_attr__('24, Lane Street<br>New York, USA','promote'));?>
				<?php if( !empty($promote_head2_address) ):?>
	<div class=" addre1 info-content" style=" padding-left:0px;">
		<span><?php echo html_entity_decode($promote_head2_address) ;?></span>
	</div>

			<?php endif;?>
			<?php },
		),
	),
) );

Kirki::add_field( 'promote', array(
    'type'        => 'textarea',
    'settings'    => 'promote_head2_time',
    'label'       => esc_attr__( 'Time', 'promote' ),
	'default'     => esc_attr__('9am - 7pm </br>Mon - Sat', 'promote'),
    'section'     => 'promote_headtitle_settings',
    'priority'    => 10,

	'transport' => 'postMessage',
	'partial_refresh' => array(
		'headertime_partial_refresh_id' => array(
			'selector'        => ' .sin-info  .time1',
			'render_callback' =>function() { ?>
			<?php	$promote_head2_time = get_theme_mod ('promote_head2_time');?>
				<?php if( !empty($promote_head2_time) ):?>
						<div class="info-content time1" style=" padding-left:0px;">
							<span><?php echo html_entity_decode($promote_head2_time );?></span>
						</div>
				<?php endif;?>
			<?php },
		),
	),
) );



Kirki::add_field( 'promote', array(
    'type'        => 'text',
    'settings'    => 'promote_head2_contactemail',
    'label'       => esc_attr__( 'Email', 'promote' ),
	'default'     => esc_attr__('info@company.com', 'promote'),
    'section'     => 'promote_headtitle_settings',
    'priority'    => 10,

	'transport' => 'postMessage',
    'js_vars'   => array(
        array(
            'element'  => '.info-content .head2email ',
            'function' => 'html',
        ),
    ),
) );

Kirki::add_field( 'promote', array(
    'type'        => 'text',
    'settings'    => 'promote_head2_contactphone',
    'label'       => esc_attr__( 'Phone', 'promote' ),
	'default'     => esc_attr__('+021-3421-543m', 'promote'),
    'section'     => 'promote_headtitle_settings',
    'priority'    => 10,

	'transport' => 'postMessage',
    'js_vars'   => array(
        array(
            'element'  => '.info-content .head2phone ',
            'function' => 'html',
        ),
    ),
) );

Kirki::add_field( 'promote', array(
	'type'        => 'typography',
	'settings'    => 'head2_typography_phoneemail',
	'label'       => esc_attr__( ' Typography header text', 'promote' ),
	'section'     => 'promote_headtitle_settings',
	'transport' => 'auto',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '12px',
		'line-height'    => '1.5',
		'letter-spacing' => '0.5',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#777777',
		'text-transform' => 'none',
	),


	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.info-content .head2phone,.info-content .head2email,.info-content ,.info-content span,.info-content,.info-content a,.info-content p',
		),
	),
) );



/*  title typography */

Kirki::add_field( 'promote', array(
	'type'        => 'typography',
	'settings'    => 'title_typography',
	'label'       => esc_attr__( 'Site title Typography', 'promote' ),
	'section'     => 'promote_headtitle_settings',
	'transport' => 'auto',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '48px',
		'line-height'    => '1.5',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#686CB6',
		'text-transform' => 'none',

	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '#site-title .site-title,#site-title a',
		),
	),
) );


Kirki::add_field( 'promote', array(
	'type'        => 'typography',
	'settings'    => 'sitedescription_typography',
	'label'       => esc_attr__( 'Site description Typography', 'promote' ),
	'section'     => 'promote_headtitle_settings',
	'transport' => 'auto',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '12px',
		'line-height'    => '0',
		'letter-spacing' => '2px',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#686CB6',
		'text-transform' => 'none',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '#site-title .site-description',
		),
	),
) );


/*  menu typography */
Kirki::add_field( 'promote', array(
	'type'        => 'typography',
	'settings'    => 'menus_typography',
	'label'       => esc_attr__( 'Site menu Typography', 'promote' ),
	'section'     => 'promote_headtitle_settings',
	'transport' => 'auto',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'Bold 700',
		'font-size'      => '14px',
		'line-height'    => '1',
		'letter-spacing' => '0.5px',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#fff',
		'text-transform' => 'uppercase ',
		'text-align'     => 'left'

	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '#navmenu li a,#navmenu ul li ul li a,.home #navmenu ul li.current-menu-item > a',
		),
	),
) );

/*color and reorder */
Kirki::add_field( 'promote', array(
    'type'        => 'sortable',
    'settings'    => 'home_sort_id',
    'label'       => esc_attr__( 'Reorder font page section(for hide click eye)', 'promote' ),
    'help' => esc_attr__( 'You can enable/disable the font page section that click on eye and reorder them to your liking.', 'promote' ),
    'section'     => 'promote_color_settings',
    'default'     => array(
      'service',
			'welcome',
			'layout',
    ),
    'choices'     => array(
	'service' => esc_attr__( 'Service-block', 'promote' ),
	'welcome'=> esc_attr__( 'Welcome', 'promote' ),
	'layout'=> esc_attr__( 'Latest post', 'promote' ),
            ),
    'priority'    => 10,
) );
Kirki::add_field( 'promote', array(
	'type'        => 'toggle',
	'settings'    => 'our_team_onoff',
	'label'       => __( 'Team Section Enable/Disable', 'promote' ),
	'section'     => 'promote_color_settings',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'promote', array(
	'type'        => 'toggle',
	'settings'    => 'our_counter_onoff',
	'label'       => __( 'Counter Section Enable/Disable', 'promote' ),
	'section'     => 'promote_color_settings',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'promote', array(
	'type'        => 'toggle',
	'settings'    => 'client_onoff',
	'label'       => __( 'Client Section Enable/Disable', 'promote' ),
	'section'     => 'promote_color_settings',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'promote', array(
    'type'        => 'color',
    'settings'    => 'promote_flavour_color',
    'label'       => esc_attr__( 'Flavour color', 'promote' ),
    'section'     => 'promote_color_settings',
    'default'     => '#686CB6',
    'priority'    => 10,
		'output' => array(
        array(
            'element'  => '#ribbon .heading-solid,#footer .widgets .widgettitle,#navmenu ul li.current-menu-item > a,a,#commentform a,#sidebar .widget_archive ul li a:before, #sidebar .widget_categories ul li a:before, #sidebar .widget_pages ul li a:before, #sidebar .widget_nav_menu ul li a:before, #sidebar .widget_portfolio_category ul li a:before',

            'property' => 'color',
            'units'    => '',
        ),
        array(
            'element'  => '.blog-btn,#submit,.colored-line,#navmenu .search-form .search-submit,.search-form .search-submit,#navmenu .search-form .search-submit,.search-form .search-submit,.search-box-wrapper,#loading-center-absolute .object,#slider .hero_btn_full',
            'property' => 'background-color',
            'units'    => '',
        ),
		 array(
            'element'  => '.h-line,.nivo-caption .h-line,.btn-slider-promote,#slider .hero_btn_full,.promote_nav .current',
            'property' => 'border-color',
            'units'    => '',
        ),

		 array(
            'element'  => '.pagination .current,.overlay-search,.promote-search .search-form,.promote-search .search-form .search-submit,.slider-bnt2,.blog-content-section .left-column .wrap-blog-post .post-body-title:after,#counter .team_bt1,.team_bt1,.owl-dots .owl-dot.active',
            'property' => 'background',
            'units'    => '',
        ),
    )
) );

Kirki::add_field( 'promote', array(
    'type'        => 'color',
    'settings'    => 'promote_hover_color',
    'label'       => esc_attr__( 'Hover color', 'promote' ),
    'section'     => 'promote_color_settings',
    'default'     => '#ff6699',
    'priority'    => 10,

	'output' => array(
        array(
            'element'  => '#navmenu li a:hover,.post_info a:hover,.comment-author vcard:hover,.slider-bnt:hover,a:hover',

            'property' => 'color',
            'units'    => '',
        ),
        array(
            'element'  => '#navmenu ul li ul li:hover,#navmenu ul > li ul li:hover,btn-slider-promote:hover,btn-border-light:hover,#submit:hover, #searchsubmit:hover,#navmenu ul > li::after,.branding-single--clone #navmenu ul li ul:hover,#slider .hero_btn:hover,.btn-lines .line-top,
.btn-lines .line-bottom,.btn-lines .line-left,.btn-lines .line-right,.actionbox-controls-two .hero_btn:hover,#slider  .hero_btn_full:hover,.read_more:hover,.search-form .search-submit:hover',
            'property' => 'background-color',
            'units'    => '',
        ),

		  array(
            'element'  => '#slider .hero_btn:hover,#slider  .hero_btn_full:hover,.read_more:hover,.slider-bnt:hover,#navmenu ul li ul li:hover',
            'property' => 'border-color',
            'units'    => '',
        ),
  		array(
					'element'  => '.slider-text .hvr-shutter-out-vertical:before,#counter .hvr-shutter-out-vertical:before,#team1 .hvr-shutter-out-vertical:before,.sl-button .hvr-shutter-out-vertical:before',
					'property' => 'background',
					'units'    => '',
			),
	  )
) );


/* Slider settings */

Kirki::add_field( 'promote', array(
    'type'        => 'switch',
    'settings'    => 'promote_slider_enabel',
    'label'       => esc_attr__( 'Enable/disabel Static image', 'promote' ),
    'section'     => 'slider_setup',
    'default'     => '1',
    'priority'    => 1,
    'choices'     => array(
        'off' => esc_attr__( 'off', 'promote' ),
		'on'  =>esc_attr__ ( 'on', 'promote' ),
    ),
) );

Kirki::add_field( 'promote', array(
	'type'        => 'select',
	'settings'    => 'slider_select',
	'label'       => __( 'Select slider', 'promote' ),
	'section'     => 'slider_setup',
	'default'     => 'slider',
	'priority'    => 1,
	'multiple'    => 1,
	'choices'     => array(
		'static' => esc_attr__( 'Static image', 'promote' ),
		'slider' => esc_attr__( 'Slider', 'promote' ),
	),
) );

Kirki::add_field( 'promote', array(
	'type'        => 'select',
	'settings'    => 'slider_bgposition_select',
	'label'       => __( 'Slider/Static image position', 'promote' ),
	'section'     => 'slider_setup',
	'default'     => 'center center',
	'transport' => 'auto',
	'priority'    => 1,
	'multiple'    => 1,
	'choices'     => array(
		'center center' => esc_attr__( 'center center', 'promote' ),
		'left bottom' => esc_attr__( 'left bottom', 'promote' ),
		'right top' => esc_attr__( 'right top', 'promote' ),
		'center top' => esc_attr__( 'center top', 'promote' ),
		'center bottom' => esc_attr__( 'center bottom', 'promote' ),
	),
	'output' => array(
			array(
					'element'  => '.slider-img,.masthead',

					'property' => 'background-position',
					'units'    => '!important',
			),
	),
) );

Kirki::add_field( 'promote', array(
	'type'        => 'select',
	'settings'    => 'slider_bgsize_select',
	'label'       => __( 'Slider/Static image Size', 'promote' ),
	'section'     => 'slider_setup',
	'default'     => 'Cover',
	'transport' => 'auto',
	'priority'    => 1,
	'multiple'    => 1,
	'choices'     => array(
		'cover' => esc_attr__( 'Cover', 'promote' ),
		'auto' => esc_attr__( 'Auto', 'promote' ),
		'contain' => esc_attr__( 'Contain', 'promote' ),
		'initial' => esc_attr__( 'initial', 'promote' ),

	),
	'output' => array(
			array(
					'element'  => '.slider-img,.masthead',

					'property' => 'background-size',
					'units'    => '!important',
			),
	),
) );

/* static image settings */

Kirki::add_field( 'promote', array(
        'type'     => 'image',
        'settings'  => 'promote_staticslider_image',
        'label'    => esc_attr__( 'Upload static image  ', 'promote' ),
        'section'  => 'slider_setup',
		'default'     => get_template_directory_uri() . '/images/slider.jpg',
        'priority' => 1,
		'active_callback'    => array(
	array(
			'setting'  => 'slider_select',
			'operator' => '==',
			'value'    => 'static',
			),
		),
	));


	Kirki::add_field( 'promote', array(
		'type'        => 'dropdown-pages',
		'settings'    => 'content_static',
		'label'       => __( 'Select content static image', 'promote' ),
		'section'     => 'slider_setup',
		'default'     => 42,
		'priority'    => 1,
		'active_callback'    => array(
		array(
				'setting'  => 'slider_select',
				'operator' => '==',
				'value'    => 'static',
			),
		),
		'partial_refresh' => array(
			'content_static_partial_refresh_id7' => array(
				'selector'        => '#staticslider .stat-content ',
				'render_callback' => function() { ?>
					<?php
						$args = array(	'post_type' => 'page',
														'page_id' => esc_html( get_theme_mod('content_static') ),
														'posts_per_page'=>1,
														'order'=>'ASC');
						$wp_query_static = new WP_Query($args);
						if($wp_query_static->have_posts()) {?>
							<?php  while ($wp_query_static->have_posts()) { $wp_query_static->the_post();?>
								<h1><?php the_title(); ?> </h1>
								<?php the_excerpt(); ?>
							<?php } ?>
						<?php } ?>
				<?php },
			),
		),
	) );

Kirki::add_field( 'promote', array(
        'type'     => 'text',
        'settings'  => 'promote_staticslider_uri1',
        'label'    => esc_attr__( 'static slider link 1', 'promote' ),
        'section'  => 'slider_setup',
        'priority' => 1,
		'active_callback'    => array(
	array(
			'setting'  => 'slider_select',
			'operator' => '==',
			'value'    => 'static',
		),
),
    ));

Kirki::add_field( 'promote', array(
        'type'     => 'text',
        'settings'  => 'promote_staticslider_uri2',
        'label'    => esc_attr__( 'static slider link 2', 'promote' ),
        'section'  => 'slider_setup',
        'priority' => 1,
		'active_callback'    => array(
	array(
			'setting'  => 'slider_select',
			'operator' => '==',
			'value'    => 'static',
		),
),
    ));


/* image slider settings */

Kirki::add_field( 'promote', array(
	'type'        => 'repeater',
	'label'       => esc_attr__( 'Add promoter slider(minimum 2 slider)', 'promote' ),
	'description' => esc_attr__( 'Add at least two slider. In Pro version promote can add unlimited slider', 'promote' ),
	'section'     => 'slider_setup',
	'priority'    => 10,
	'choices' => array(
    'limit' => 3
),
	'row_label' => array(
		'type'  => 'field',
		'value' => esc_attr__('Slider', 'promote' ),
		'field' => 'link_text',
	),
	'settings'    => 'slider_rep_image',
	'fields' => array(
		'dropdown_pages' => array(
			'type'        => 'dropdown-pages',
			'label'       => esc_attr__( 'Select page for slider content', 'promote' ),
			'description' => esc_attr__( 'Select page for slider content', 'promote' ),
			'default'     => '',
		),
		'slider_image' => array(
			'type'        => 'image',
			'label'       => esc_attr__( 'uplod image(1600 x 550px)', 'promote' ),

		),
		'link_url1' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Link URL 1', 'promote' ),
			'default'     => '',
		),

		'link_url2' => array(
			'type'        => 'text',
			'label'       => esc_attr__( 'Link URL 2', 'promote' ),
			'default'     => '',
		),
	),
	'active_callback'    => array(
	array(
			'setting'  => 'slider_select',
			'operator' => '==',
			'value'    => 'slider',
		),
),
) );

Kirki::add_field( 'promote', array(
        'type'     => 'text',
        'settings'  => 'promote_link_name1',
        'label'    => esc_attr__( 'Static image button 1st', 'promote' ),
        'section'  => 'slider_setup',
        'default'  => esc_attr__( 'Know More', 'promote' ),
        'priority' => 1,

    ));

Kirki::add_field( 'promote', array(
        'type'     => 'text',
        'settings'  => 'promote_link_name2',
        'label'    => esc_attr__( 'Static image button 2nd', 'promote' ),
        'section'  => 'slider_setup',
        'default'  => esc_attr__( 'Try Now !', 'promote' ),
        'priority' => 1,
    ));

Kirki::add_field( 'promote', array(
    'type'        => 'multicolor',
    'settings'    => 'slidertitlesub_color',
    'label'       => esc_attr__( 'Color', 'promote' ),
    'section'     => 'slider_setup',
    'priority'    => 10,
		'transport' => 'auto',
    'choices'     => array(
        'title'   => esc_attr__( 'Title', 'promote' ),
        'sub'  => esc_attr__( 'Sub Title', 'promote' ),
    ),
    'default'     => array(
        'title'   => '#fff',
        'sub'  => '#cccccc',
    ),
		'output'    => array(
  array(
    'choice'   => 'title',
    'element'  => '.slider-text h3,.masthead h1',
    'property' => 'color',
  ),
  array(
    'choice'   => 'sub',
    'element'  => '.slider-text p,.masthead .masthead-dsc p',
    'property' => 'color',
  ),
		),
	) );

	Kirki::add_field( 'promote', array(
		'type'        => 'slider',
		'settings'    => 'slider_title_fontsize',
		'label'       => esc_attr__( 'Slider/Static font size', 'promote' ),
		'section'     => 'slider_setup',
		'transport' => 'postMessage',
		'default'     => 40,
		'choices'     => array(
			'min'  => '0',
			'max'  => '200',
			'step' => '1',
		),
		'output' => array(
        array(
            'element'  => '.slider-text h3,.masthead h1',

            'property' => 'font-size',
            'units'    => 'px',
        ),
    ),
		'js_vars'   => array(
		array(
			'element'  => '.slider-text h3,.masthead h1',
			'function' => 'css',
			'property' => 'font-size',
			'units'    => 'px',
		),
	),

	) );

	Kirki::add_field( 'promote', array(
		'type'        => 'slider',
		'settings'    => 'slider_subtitle_fontsize',
		'label'       => esc_attr__( 'Slider/Static font size', 'promote' ),
		'section'     => 'slider_setup',
		'default'     => 18,
		'transport' => 'postMessage',
		'choices'     => array(
			'min'  => '0',
			'max'  => '200',
			'step' => '1',
		),
		'output' => array(
        array(
            'element'  => '.slider-text p,.masthead .masthead-dsc p',
            'property' => 'font-size',
            'units'    => 'px',
        ),
    	),
			'js_vars'   => array(
			array(
				'element'  => '.slider-text p,.masthead .masthead-dsc p',
				'function' => 'css',
				'property' => 'font-size',
				'units'    => 'px',
			),
		),
	) );

/* Service Block  */

Kirki::add_field( 'promote', array(
    'type'        => 'multicolor',
    'settings'    => 'serviceblock_color',
    'label'       => esc_attr__( 'Color', 'promote' ),
    'section'     => 'sidebar-widgets-sidebar-service',
    'priority'    => 10,
		'transport' => 'auto',
    'choices'     => array(
        'title'   => esc_attr__( 'Title', 'promote' ),
        'content'  => esc_attr__( 'Content', 'promote' ),
    ),
    'default'     => array(
        'title'   => '#222',
        'content'  => '#747474',
    ),
		'output'    => array(
  array(
    'choice'   => 'title',
    'element'  => '.content-box h5',
    'property' => 'color',
  ),
  array(
    'choice'   => 'content',
    'element'  => '#service .content-box p',
    'property' => 'color',
  ),
		),
	) );

/* Team section  */




Kirki::add_field( 'promote', array(
	'type'        => 'toggle',
	'settings'    => 'promote_team_content_disable',
	'label'       => __( 'Disable Team content', 'promote' ),
	'section'     => 'sidebar-widgets-sidebar-team',
	'default'     => '1',
	'priority'    => 10,
) );

Kirki::add_field( 'promote', array(
	'type'        => 'dropdown-pages',
	'settings'    => 'promote_team_content',
	'label'       => esc_attr__( 'Select page for Team content', 'promote' ),
	'section'     => 'sidebar-widgets-sidebar-team',
	'default'     => 'sample-page',
	'priority'    => 10,
'partial_refresh' => array(
	'team_wrapper_partial_refresh_id' => array(
		'selector'        => '#team1',
		'render_callback' => function() {
			get_template_part( 'parts/part-team' );
		},
	),
),
'active_callback'    => array(
array(
	'setting'  => 'promote_team_content_disable',
	'operator' => '==',
	'value'    => true,
),
),
) );


Kirki::add_field( 'promote', array(
	'type'     => 'text',
	'settings' => 'promote_teamsetup_texturl',
	'label'    => esc_attr__( 'link title', 'promote' ),
	'section'  => 'sidebar-widgets-sidebar-team',
	'default'  => esc_attr__( 'We are hiring', 'promote' ),
	'priority' => 10,
	'active_callback'    => array(
		array(
			'setting'  => 'promote_team_content_disable',
			'operator' => '==',
			'value'    => true,
		),
	),
	'transport' => 'postMessage',
	'js_vars'   => array(
        array(
            'element'  => '#team1 .team_bt1 span',
            'function' => 'html',
            'property' => '',
        ),
    ),
) );
/* Latest Post */



Kirki::add_field( 'promote', array(
	'type'     => 'text',
	'settings' => 'latest_post_title',
	'label'    => __( 'Latest Post title', 'promote' ),
	'section'  => 'promote_latestsetup',
	'default'  => esc_attr__( 'Latest From Blog', 'promote' ),
	'priority' => 10,
	'transport' => 'postMessage',
	'js_vars'   => array(
        array(
            'element'  => '#latset-postsaf .section-header h1',
            'function' => 'html',
            'property' => '',
        ),
    ),
) );


Kirki::add_field( 'promote', array(
	'type'     => 'text',
	'settings' => 'latest_post_subtitle',
	'label'    => __( 'Latest post sub title', 'promote' ),
	'section'  => 'promote_latestsetup',
	'priority' => 10,
	'transport' => 'postMessage',
	'js_vars'   => array(
        array(
            'element'  => '#latset-postsaf .section-header h2',
            'function' => 'html',
            'property' => '',
        ),
    ),
) );

Kirki::add_field( 'promote', array(
	'type'        => 'select',
	'settings'    => 'layout_select',
	'label'       => __( 'Select Post layout', 'promote' ),
	'section'     => 'promote_latestsetup',
	'default'     => 'layout1',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'layout1' => esc_attr__( 'Layout 1', 'promote' ),
		'layout2' => esc_attr__( 'Layout 2', 'promote' ),
	),
) );

Kirki::add_field( 'promote', array(
	'type'        => 'select',
	'settings'    => 'category_show',
	'label'       => esc_attr__( 'Select Category', 'promote' ),
	'section'     => 'promote_latestsetup',
	'priority'    => 10,
	'multiple'    => 999,
	'choices'     => Kirki_Helper::get_terms( 'category' ),
	'partial_refresh' => array(
		'latest_post_partial_refresh_id7' => array(
			'selector'        => '#latest-ref ',
			'render_callback' => function() { ?>
				<?php if( get_theme_mod( 'layout_select' )){ ?>

				<?php $template_parts_promote = get_theme_mod( 'layout_select', array( 'layout1', 'layout2' ) );
				        get_template_part('layout/part',''.$template_parts_promote .''); ?>

				  <?php }else{ ?>

				 <?php get_template_part('layout/part','layout1'); ?>
				        <?php } ?>
			<?php },
		),
	),
) );



Kirki::add_field( 'promote', array(
	'type'        => 'number',
	'settings'    => 'promote_num_post',
	'label'       => esc_attr__( 'Number of post show in front page ', 'promote' ),
	'section'     => 'promote_latestsetup',
	'default'     => 8,
	'priority'    => 10,
	'partial_refresh' => array(
		'latest_post_partial_refresh_id6' => array(
			'selector'        => '#latest-ref ',
			'render_callback' => function() { ?>
				<?php if( get_theme_mod( 'layout_select' )){ ?>

				<?php $template_parts_promote = get_theme_mod( 'layout_select', array( 'layout1', 'layout2' ) );
				        get_template_part('layout/part',''.$template_parts_promote .''); ?>

				  <?php }else{ ?>

				 <?php get_template_part('layout/part','layout1'); ?>
				        <?php } ?>
			<?php },
		),
	),
) );

Kirki::add_field( 'promote', array(
	'type'        => 'select',
	'settings'    => 'post_order_by',
	'label'       => __( 'Show post orderby', 'promote' ),
	'section'     => 'promote_latestsetup',
	'default'     => 'date',
	'priority'    => 10,
	'multiple'    => 1,
	'choices'     => array(
		'none' => esc_attr__( 'None', 'promote' ),
		'date' => esc_attr__( 'Date', 'promote' ),
		'ID' => esc_attr__( 'ID', 'promote' ),
		'author' => esc_attr__( 'Author', 'promote' ),
		'title' => esc_attr__( 'Title', 'promote' ),
		'rand'=> esc_attr__( 'Random', 'promote' ),
	),
	'partial_refresh' => array(
		'latest_post_partial_refresh_id5' => array(
			'selector'        => '#latest-ref ',
			'render_callback' => function() { ?>
				<?php if( get_theme_mod( 'layout_select' )){ ?>

				<?php $template_parts_promote = get_theme_mod( 'layout_select', array( 'layout1', 'layout2' ) );
				        get_template_part('layout/part',''.$template_parts_promote .''); ?>

				  <?php }else{ ?>

				 <?php get_template_part('layout/part','layout1'); ?>
				        <?php } ?>
			<?php },
		),
	),
) );

Kirki::add_field( 'promote', array(
	'type'        => 'toggle',
	'settings'    => 'latest_post_cat',
	'label'       => __( 'Hide latest post cetagory', 'promote' ),
	'section'     => 'promote_latestsetup',
	'default'     => '1',
	'priority'    => 10,
	'partial_refresh' => array(
		'latest_post_partial_refresh_id4' => array(
			'selector'        => '#latest-ref ',
			'render_callback' => function() { ?>
				<?php if( get_theme_mod( 'layout_select' )){ ?>

				<?php $template_parts_promote = get_theme_mod( 'layout_select', array( 'layout1', 'layout2' ) );
				        get_template_part('layout/part',''.$template_parts_promote .''); ?>

				  <?php }else{ ?>

				 <?php get_template_part('layout/part','layout1'); ?>
				        <?php } ?>
			<?php },
		),
	),
) );
Kirki::add_field( 'promote', array(
	'type'        => 'toggle',
	'settings'    => 'latest_post_date',
	'label'       => __( 'Hide latest post date', 'promote' ),
	'section'     => 'promote_latestsetup',
	'default'     => '1',
	'priority'    => 10,
	'partial_refresh' => array(
		'latest_post_partial_refresh_id3' => array(
			'selector'        => '#latest-ref ',
			'render_callback' => function() { ?>
				<?php if( get_theme_mod( 'layout_select' )){ ?>

				<?php $template_parts_promote = get_theme_mod( 'layout_select', array( 'layout1', 'layout2' ) );
				        get_template_part('layout/part',''.$template_parts_promote .''); ?>

				  <?php }else{ ?>

				 <?php get_template_part('layout/part','layout1'); ?>
				        <?php } ?>
			<?php },
		),
	),
) );
Kirki::add_field( 'promote', array(
	'type'        => 'toggle',
	'settings'    => 'latest_post_comment',
	'label'       => __( 'Hide latest post comments', 'promote' ),
	'section'     => 'promote_latestsetup',
	'default'     => '1',
	'priority'    => 10,
	'partial_refresh' => array(
		'latest_post_partial_refresh_id2' => array(
			'selector'        => '#latest-ref ',
			'render_callback' => function() { ?>
				<?php if( get_theme_mod( 'layout_select' )){ ?>

				<?php $template_parts_promote = get_theme_mod( 'layout_select', array( 'layout1', 'layout2' ) );
				        get_template_part('layout/part',''.$template_parts_promote .''); ?>

				  <?php }else{ ?>

				 <?php get_template_part('layout/part','layout1'); ?>
				        <?php } ?>
			<?php },
		),
	),
) );
/* Client section  */



/* social icon */

Kirki::add_field( 'promote', array(
    'type'        => 'toggle',
    'settings'    => 'promote_search_box',
    'label'       => esc_attr__( 'Disable search Icon in header', 'promote' ),
    'section'     => 'promote_social',
    'default'     => '1',
    'priority'    => 1,
) );

Kirki::add_field( 'promote', array(
    'type'        => 'toggle',
    'settings'    => 'promote_social_box',
    'label'       => esc_attr__( 'Disable social Icon in header', 'promote' ),
    'section'     => 'promote_social',
    'default'     => '1',
    'priority'    => 1,
) );

Kirki::add_field( 'promote', array(
    'type'        => 'toggle',
    'settings'    => 'promote_social_boxfoo',
    'label'       => esc_attr__( 'Enable social Icon in footer', 'promote' ),
    'section'     => 'promote_social',
    'default'     => '0',
    'priority'    => 1,
) );

Kirki::add_field( 'promote', array(
        'type'     => 'text',
        'settings'  => 'fbsoc_text_promote',
        'label'    => esc_attr__( 'Facebook', 'promote' ),
        'section'  => 'promote_social',

        'priority' => 1,
    ));

Kirki::add_field( 'promote', array(
        'type'     => 'text',
        'settings'  => 'ttsoc_text_promote',
        'label'    => esc_attr__( 'Twitter', 'promote' ),
        'section'  => 'promote_social',
        'priority' => 2,
    ));

Kirki::add_field( 'promote', array(
        'type'     => 'text',
        'settings'  => 'gpsoc_text_promote',
        'label'    => esc_attr__( 'Google Plus', 'promote' ),
        'section'  => 'promote_social',
        'priority' => 3,
    ));

Kirki::add_field( 'promote', array(
        'type'     => 'text',
        'settings'  => 'pinsoc_text_promote',
        'label'    => esc_attr__( 'Pinterest', 'promote' ),
        'section'  => 'promote_social',
        'priority' => 4,
    ));

Kirki::add_field( 'promote', array(
        'type'     => 'text',
        'settings'  => 'ytbsoc_text_promote',
        'label'    => esc_attr__( 'YouTube', 'promote' ),
        'section'  => 'promote_social',
        'priority' => 5,
    ));


Kirki::add_field( 'promote', array(
        'type'     => 'text',
        'settings'  => 'linsoc_text_promote',
        'label'    => __( 'Linkedin', 'promote' ),
        'section'  => 'promote_social',
        'priority' => 6,
    ));

Kirki::add_field( 'promote', array(
        'type'     => 'text',
        'settings'  => 'instagram_text_promote',
        'label'    => __( 'Instagram', 'promote' ),
        'section'  => 'promote_social',
        'priority' => 7,
    ));


Kirki::add_field( 'promote', array(
        'type'     => 'text',
        'settings'  => 'flisoc_text_promote',
        'label'    => esc_attr__( 'Flickr', 'promote' ),
        'section'  => 'promote_social',
        'priority' => 8,
    ));

Kirki::add_field( 'promote', array(
        'type'     => 'text',
        'settings'  => 'vimsoc_text_promote',
        'label'    => esc_attr__( 'Vimeo', 'promote' ),
        'section'  => '',
        'priority' => 9,
    ));

Kirki::add_field( 'promote', array(
        'type'     => 'text',
        'settings'  => 'rsssoc_text_promote',
        'label'    => esc_attr__( 'RSS', 'promote' ),
        'section'  => 'promote_social',
        'priority' => 10,
    ));



/* mobile layout settings */

Kirki::add_field( 'promote', array(
    'type'        => 'toggle',
    'settings'    => 'promote_mobile_slider',
    'label'       => esc_attr__( 'Disable slider in mobile ', 'promote' ),
    'section'     => 'promote_mobile',
    'default'     => '1',
    'priority'    => 10,
) );

Kirki::add_field( 'promote', array(
    'type'        => 'toggle',
    'settings'    => 'promote_mobile_sidebar',
    'label'       => esc_attr__( 'Disable sidebar in mobile ', 'promote' ),
    'section'     => 'promote_mobile',
    'default'     => '1',
    'priority'    => 10,
) );

/*  section Counter  */
Kirki::add_field( 'promote', array(
		'type'        => 'toggle',
		'settings'    => 'promote_counter_content_disable',
		'label'       => __( 'Disable Counter content', 'promote' ),
		'section'     => 'sidebar-widgets-sidebar-counter',
		'default'     => '1',
		'priority'    => 10,
	) );

	Kirki::add_field( 'promote', array(
		'type'        => 'dropdown-pages',
		'settings'    => 'promote_counter_content',
		'label'       => esc_attr__( 'Select page for counter content', 'promote' ),
		'section'     => 'sidebar-widgets-sidebar-counter',
		'default'     => 'sample-page',
		'priority'    => 10,
		'transport'       => 'postMessage',
	'partial_refresh' => array(
		'content_wrapper_partial_refresh_id' => array(
			'selector'        => '#counter',
			'render_callback' => function() {
				get_template_part( 'parts/part-counter' );
			},
		),
	),
	'active_callback'    => array(
	array(
		'setting'  => 'promote_counter_content_disable',
		'operator' => '==',
		'value'    => true,
	),
),
	) );
	Kirki::add_field( 'promote', array(
		'type'     => 'text',
		'settings' => 'counter_link_title',
		'label'    => esc_attr__( 'Link Title', 'promote' ),
		'section'  => 'sidebar-widgets-sidebar-counter',
		'transport' => 'postMessage',
		'default'  => esc_attr__( 'Start Project', 'promote' ),
		'priority' => 10,
		'js_vars'   => array(
					array(
							'element'  => '#counter .team_bt1 ',
							'function' => 'html',
							'property' => '',

					),
			),
			'active_callback'    => array(
			array(
				'setting'  => 'promote_counter_content_disable',
				'operator' => '==',
				'value'    => true,
			),
			),
	) );
	Kirki::add_field( 'promote', array(
		'type'        => 'color',
		'settings'    => 'promote_countersetup_bgcolor',
		'label'       => esc_attr__( 'Counter section background-color', 'promote' ),
		'section'     => 'sidebar-widgets-sidebar-counter',
		'default'     => 'rgba(83,86,181,0.74)',
		'priority'    => 10,
		'choices'     => array(
			'alpha' => true,
		),
		'transport' => 'auto',
		'output' => array(
	        array(
	            'element'  => '#counter',

	            'property' => 'background',
	            'units'    => '',
	        ),),
	) );
	Kirki::add_field( 'promote', array(
		'type'        => 'color',
		'settings'    => 'promote_countersetup_textcolor',
		'label'       => esc_attr__( 'Counter content text-color', 'promote' ),
		'section'     => 'sidebar-widgets-sidebar-counter',
		'default'     => '#fff',
		'priority'    => 10,
		'choices'     => array(
			'alpha' => true,
		),
		'transport' => 'auto',
		'output' => array(
	        array(
	            'element'  => '.fact-title,#counter .factor,#counter .text-center h4,#counter .text-center p',

	            'property' => 'color',
	            'units'    => '',
	        ),),
	) );

	Kirki::add_field( 'promote', array(
	    'type'        => 'multicolor',
	    'settings'    => 'countertitlesub_color',
	    'label'       => esc_attr__( 'Section title and sub-title color', 'promote' ),
	    'section'     => 'sidebar-widgets-sidebar-counter',
	    'priority'    => 10,
			'transport' => 'auto',
	    'choices'     => array(
	        'title'   => esc_attr__( 'Title', 'promote' ),
	        'subtitle'  => esc_attr__( 'sub-title', 'promote' ),
	    ),
	    'default'     => array(
	        'title'   => '#ffff',
	        'subtitle'  => '#e8e8e8',
	    ),
			'output'    => array(
	  array(
	    'choice'   => 'title',
	    'element'  => '#counter .section-header h1',
	    'property' => 'color',
	  ),
	  array(
	    'choice'   => 'subtitle',
	    'element'  => '#counter .section-header h2',
	    'property' => 'color',
	  ),
			),
		) );

/*  section Welcome  */

Kirki::add_field( 'promote', array(
	'type'        => 'dropdown-pages',
	'settings'    => 'promote_welcome_content123',
	'label'       => __( 'Selcet page for welcome section content', 'promote' ),
	'section'     => 'promote_callout',
	'priority'    => 10,
	'partial_refresh' => array(
		'welcome_content_partial_refresh_id' => array(
			'selector'        => '#welcome-promote ',
			'render_callback' => function() {
				get_template_part( 'parts/part-welcome' );
			},
		),
	),
) );

Kirki::add_field( 'promote', array(
	'type'        => 'toggle',
	'settings'    => 'welcome_content_ex',
	'label'       => __( 'Show full content ', 'promote' ),
	'section'     => 'promote_callout',
	'default'     => '0',
	'priority'    => 10,

) );

Kirki::add_field( 'promote', array(
	'type'        => 'slider',
	'settings'    => 'promote_welcome_fontsize',
	'label'       => esc_attr__( 'Section font size', 'promote' ),
	'section'     => 'promote_callout',
	'default'     => 28,
	'choices'     => array(
		'min'  => '0',
		'max'  => '100',
		'step' => '1',
	),
	'transport' => 'auto',
	'output' => array(
				array(
						'element'  => '#welcome-promote p',

						'property' => 'font-size',
						'units'    => 'px',
				),),
	'active_callback'    => array(
				array(
					'setting'  => 'welcome_content_ex',
					'operator' => '==',
					'value'    => false,
				),
	),
) );

Kirki::add_field( 'promote', array(
	'type'        => 'color',
	'settings'    => 'promote_welcome_textcolor',
	'label'       => esc_attr__( 'Welcome section text color', 'promote' ),
	'section'     => 'promote_callout',
	'default'     => '#605F5F',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
	'transport' => 'auto',
	'output' => array(
				array(
						'element'  => '#welcome-promote p',

						'property' => 'color',
						'units'    => '',
				),),
	'active_callback'    => array(
					array(
							'setting'  => 'welcome_content_ex',
							'operator' => '==',
							'value'    => false,
					),
	),
) );


Kirki::add_field( 'promote', array(
	'type'        => 'slider',
	'settings'    => 'promote_welcome_content',
	'label'       => esc_attr__( 'Section padding', 'promote' ),
	'section'     => 'promote_callout',
	'default'     => 3,
	'choices'     => array(
		'min'  => '2',
		'max'  => '100',
		'step' => '0.5',
	),
	'transport' => 'auto',
	'output' => array(
				array(
						'element'  => '#welcome-promote .welcome',

						'property' => 'padding',
						'units'    => '%',
				),),
) );
Kirki::add_field( 'promote', array(
	'type'        => 'color',
	'settings'    => 'promote_welcome_bgcolor',
	'label'       => esc_attr__( 'Welcome section background color', 'promote' ),
	'section'     => 'promote_callout',
	'default'     => '#fafbfc',
	'priority'    => 10,
	'choices'     => array(
		'alpha' => true,
	),
	'transport' => 'auto',
	'output' => array(
				array(
						'element'  => '#welcome-promote',

						'property' => 'background-color',
						'units'    => '',
				),),
) );





/*  section Typography  */

Kirki::add_field( 'promote', array(
	'type'        => 'typography',
	'settings'    => 'promote_typography_sechead',
	'label'       => esc_attr__( 'Section Title typography', 'promote' ),
	'section'     => 'promote_typography_setting',
	'transport' => 'auto',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '42px',
		'line-height'    => '1',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#777',
		'text-transform' => 'capitalize',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.section-header h1',
		),
	),
) );

Kirki::add_field( 'promote', array(
	'type'        => 'typography',
	'settings'    => 'promote_typography_secsubhead',
	'label'       => esc_attr__( 'Section Sub Title typography', 'promote' ),
	'section'     => 'promote_typography_setting',
	'transport' => 'auto',
	'default'     => array(
		'font-family'    => 'Roboto',
		'variant'        => 'regular',
		'font-size'      => '18px',
		'line-height'    => '30px',
		'letter-spacing' => '0',
		'subsets'        => array( 'latin-ext' ),
		'color'          => '#333333',
		'text-transform' => 'none',
	),
	'priority'    => 10,
	'output'      => array(
		array(
			'element' => '.section-description h2',
		),
	),
) );
