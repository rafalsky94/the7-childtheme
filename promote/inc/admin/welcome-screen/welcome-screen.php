<?php
/**
 * Welcome Screen Class
 */
class promote_Welcome {

	/**
	 * Constructor for the welcome screen
	 */
	public function __construct() {

		/* create dashbord page */
		add_action( 'admin_menu', array( $this, 'promote_welcome_register_menu' ) );

		

		
		
		/* load welcome screen */
		add_action( 'promote_welcome', array( $this, 'promote_welcome_getting_started' ),10 );
	
	}

	/**
	 * Creates the dashboard page
	 * @see  add_theme_page()
	 */
	public function promote_welcome_register_menu() {
		$promote_theme = wp_get_theme();
		$page_menu_title = esc_html__('About', 'promote').' '.$promote_theme->get( 'Name' );
		add_theme_page( $page_menu_title, $page_menu_title, 'edit_theme_options', 'promote-welcome', array( $this, 'promote_welcome_screen' ) );
	}

	/**
	 * Adds an admin notice upon successful activation.
	 */
	public function promote_activation_admin_notice() {
		global $pagenow;

		if ( is_admin() && ('themes.php' == $pagenow) && isset( $_GET['activated'] ) ) {
			add_action( 'admin_notices', array( $this, 'promote_welcome_admin_notice' ), 99 );
		}
	}

	/**
	 * Display an admin notice linking to the welcome screen
	 */
	public function promote_welcome_admin_notice() {
		?>
			<div class="updated notice is-dismissible">
				<p><?php echo sprintf( esc_html__( 'Welcome! Thank promote for choosing promote ! To fully take advantage of the best our theme can offer please make sure promote visit our %swelcome page%s.', 'promote' ), '<a href="' . esc_url( admin_url( 'themes.php?page=promote-welcome' ) ) . '">', '</a>' ); ?></p>
				<p><a href="<?php echo esc_url( admin_url( 'themes.php?page=promote-welcome' ) ); ?>" class="button" style="text-decoration: none;"><?php esc_attr__( 'Get started with promote ', 'promote' ); ?></a></p>
			</div>
		<?php
	}

	/**
	 * Welcome screen content
	 */
	public function promote_welcome_screen() {
	
		?>

		
			<?php
			do_action( 'promote_welcome' ); ?>

		</div>
		<?php
	}
/**
	 * Getting started
	 */
	public function promote_welcome_getting_started() {
		require_once( get_template_directory() . '/inc/admin/welcome-screen/sections/getting-started.php' );
	}

	
}

$GLOBALS['promote_Welcome'] = new promote_Welcome();