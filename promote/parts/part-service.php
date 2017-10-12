	<div id="service">

						<?php if ( is_active_sidebar( 'sidebar-service' ) ) {

							dynamic_sidebar( 'sidebar-service' );

						} elseif ( current_user_can( 'edit_theme_options' ) && ! defined( 'PROMOTE_EXTEN_VERSION' ) ) {
							echo '<div class="promote-extensions">';
							if ( is_customize_preview() ) {
								printf( __( 'You need to active the %s plugin to be able to add Team members, counter, service block and Clients widgets.','promote' ), 'promote extensions' );
							} else {
								printf( __( 'You need to install the %s plugin to be able to add Team members, counter, service block and Clients widgets.','promote' ), sprintf( '<a href="%1$s">%2$s</a>', esc_url( wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=promote-extensions' ), 'install-plugin_promote-extensions' ) ), 'promote extensions' ) );

							}
							echo '</div>';
												}?>
			</div> <!-- end-->
