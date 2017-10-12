<?php
/**
 * promote Theme Customizer
 *
 * @package promote
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function promote_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$our_client_section = $wp_customize->get_section( 'sidebar-widgets-sidebar-clients' );
	if ( ! empty( $our_client_section ) ) {
			$our_client_section->panel = 'theme_options';
			$our_client_section->title   = __( 'client section', 'promote' );
			$our_client_section->priority = 9;
			}
	$our_service_section = $wp_customize->get_section( 'sidebar-widgets-sidebar-service' );
			if ( ! empty( $our_service_section ) ) {
					$our_service_section->panel = 'theme_options';
					$our_service_section->title   = __( 'Service section', 'promote' );
					$our_service_section->priority = 3;
					}
	$counter_section = $wp_customize->get_section( 'sidebar-widgets-sidebar-counter' );
			if ( ! empty( $counter_section ) ) {
					$counter_section->panel = 'theme_options';
					$counter_section->title   = __( 'Counter section', 'promote' );
					$counter_section->priority = 7;
				}
	$team_section = $wp_customize->get_section( 'sidebar-widgets-sidebar-team' );
			if ( ! empty( $counter_section ) ) {
					$team_section->panel = 'theme_options';
					$team_section->title   = __( 'Team section', 'promote' );
					$team_section->priority = 6;
				}
				$background_color_control = $wp_customize->get_control( 'background_color' );
			    if ( $background_color_control ) {
			        $background_color_control->section = 'lapromotet_front_page';
			    }
					$background_color_control = $wp_customize->get_control( 'header_image' );
				    if ( $background_color_control ) {
				        $background_color_control->section = 'promote_headtitle_settings';
				    }
}
add_action( 'customize_register', 'promote_customize_register' );

function promote_registers() {
	wp_enqueue_style( 'promote_customizer_style', get_template_directory_uri() . '/css/admin.css','promote-style', true );

}
add_action( 'customize_controls_enqueue_scripts', 'promote_registers' );


/**
 * promote Customizer functionality
 */
 /*  Register Customizer options
 /* ------------------------------------ */
 if ( ! function_exists( 'promote_customize_register_pro' ) ) {
 	function promote_customize_register_pro( $wp_customize ) {
		// Register custom sections
		$wp_customize->register_section_type( 'promote_Section_Link' );

		/**
		 * Custom link/button section.
		 */
		if( ! class_exists( 'promote_Section_Link' ) ) {
			class promote_Section_Link extends WP_Customize_Section {

				/**
				 * The type of customize section being rendered.
				 */
				public $type = 'link-button';

				/**
				 * Custom button text to output.
				 */
				public $link_text = '';

				/**
				 * Custom pro button URL.
				 */
				public $link_url = '';

				/**
				 * Add custom parameters to pass to the JS via JSON.
				 */
				public function json() {
					$json = parent::json();

					$json['link_text'] = $this->link_text;
					$json['link_url']  = esc_url( $this->link_url );

					return $json;
				}

				/**
				 * Outputs the Underscore.js template.
				 */
				protected function render_template() { ?>

					<li id="accordion-section-{{ data.id }}" class="accordion-section control-section control-section-{{ data.type }} cannot-expand">

						<h3 class="accordion-section-title">
							{{ data.title }}

							<# if ( data.link_text && data.link_url ) { #>
								<a href="{{ data.link_url }}" class="button button-secondary alignright" target="_blank">{{ data.link_text }}</a>
							<# } #>
						</h3>
					</li>
				<?php }
			}
		}

		/**
		 * Button Control
		 */
		if( ! class_exists( 'promote_Control_Button' ) ) {
			class promote_Control_Button extends WP_Customize_Control {

				public $type 		= 'button-control';
				public $href, $css_class;

				/**
				 * Render the control.
				 */
				public function render_content() {

					// Begin the output
					if ( isset( $this->label ) && '' !== $this->label ) {
						echo '<a href="' . esc_url( $this->href ) . '" class="button button-primary ' . esc_attr( $this->css_class ) . '">' . sanitize_text_field( $this->label ) . '</a><div class="bx-btn-notice"></div>';
					}
					if ( isset( $this->description ) && '' !== $this->description ) {
						echo '<div class="description">' . wp_kses_post( $this->description ) . '</div>';
					}

				}
			}
		}


 /// Documentation
 $wp_customize->add_section( new promote_Section_Link( $wp_customize, 'link-button', array(
 	'title'    	=> esc_html__( 'Promote Pro', 'promote' ),
 	'link_text' => esc_html__( 'Upgrade To Pro (19$)', 'promote' ),
 	'link_url'  => esc_url('https://themezwp.com/promote-pro/', 'promote'  ) ,
 	'priority'	=> 1
 ) ) );


$wp_customize->add_section( new promote_Section_Link( $wp_customize, 'link-button-docs', array(
 'title'    	=> esc_html__( ' Documentation', 'promote' ),
 'link_text' => esc_html__( 'Documentation', 'promote' ),
 'link_url'  => esc_url('http://themezwp.com/demopromote/blog/category/getting-started/', 'promote'  ) ,
 'priority'	=> 1
) ) );
}

}
add_action( 'customize_register', 'promote_customize_register_pro', 11 );

/*  Button controller
/* ------------------------------------ */
if ( ! function_exists( 'promote_controller_button' ) ) {
	function promote_controller_button( $setting_id, $section_id, $label = '', $description = '', $href = '', $css_class = '' ) {
		global $wp_customize;
		$wp_customize->add_setting( $setting_id, array(
	    	'default'			=> '',
			'sanitize_callback' => 'sanitize_text_field',
	    	'capability'		=> 'edit_theme_options',
		) );
		$wp_customize->add_control( new promote_controller_button( $wp_customize, $setting_id, array(
			'label'    			=> $label,
			'description' 		=> $description,
			'settings' 			=> $setting_id,
			'section'  			=> $section_id,
			'type'     			=> 'button-control',
			'href'				=> $href,
			'css_class'			=> $css_class,
		) ) );
	}
}

/**
 * Sets up the WordPress core custom header .
 *

 *
 * @see promote_header_style()
 */


if ( ! function_exists( 'promote_header_style' ) ) :
/**
 * Styles the header text displayed on the site.
 *
 * Create promoter own promote_header_style() function to override in a child theme.
 *
 *
 */
function promote_header_style() {
	// If the header text option is untouched, let's bail.
	if ( display_header_text() ) {
		return;
	}

	// If the header text has been hidden.
	?>
	<style type="text/css" id="promote-header-css">
		.site-branding {
			margin: 0 auto 0 0;
		}

		#site-title .site-title,
		.site-description {
			clip: rect(1px, 1px, 1px, 1px);
			position: absolute;
		}
	</style>
	<?php
}
endif; // promote_header_style



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function promote_customize_preview_js() {
	wp_enqueue_script( 'promote_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );

}
add_action( 'customize_preview_init', 'promote_customize_preview_js' );


require get_template_directory() . '/inc/customizer/config.php';
require get_template_directory() . '/inc/customizer/panels.php';
require get_template_directory() . '/inc/customizer/sections.php';
require get_template_directory() . '/inc/customizer/fields.php';
