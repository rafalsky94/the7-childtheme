<?php
	wp_enqueue_style( 'plugin-install' );
	wp_enqueue_script( 'plugin-install' );
	wp_enqueue_script( 'updates' );
	$req_plugins = $this->req_plugins;

	foreach($req_plugins as $plugin) :
		if($plugin['bundled'] == false) {

			$info = $this->uncodelite_call_plugin_api($plugin['slug']);
			if(!isset($info->errors)) :

				$icon_url = $this->uncodelite_check_for_icon($info->icons);
				$status = $this->uncodelite_plugin_active($plugin);
				$btn_url = $this->uncodelite_plugin_generate_url($status, $plugin);

				switch($status) {
					case 'install' :
						$btn_class = 'install button';
						$label = esc_html__('Install and Activate', 'uncode-lite');
						break;

					case 'inactive' :
						$btn_class = 'button';
						$label = esc_html__('Deactivate', 'uncode-lite');
						break;

					case 'active' :
						$btn_class = 'activate button button-primary';
						$label = esc_html__('Activate', 'uncode-lite');
						break;
				}
				?>
				<?php if(!class_exists($plugin['class'])) : ?>
					<div class="action-tab warning">
						<h3><?php printf( esc_html__("Install : %s Plugin", 'uncode-lite'), $info->name ); ?></h3>
						<p><?php esc_html_e('Install Contact Form 7 to add the contact forms.', 'uncode-lite'); ?></p>

						<span class="plugin-card-<?php echo esc_attr($plugin['slug']); ?>" action_button>
							<a class="<?php echo esc_attr($btn_class); ?>" data-slug="<?php echo esc_attr($plugin['slug']); ?>" href="<?php echo esc_url($btn_url); ?>"><?php echo esc_html($label); ?></a>
						</span>
					</div>
				<?php endif; ?>
				<?php
			endif;
		} else {
			$github_repo = isset($plugin['github_repo']) ? $plugin['github_repo'] : false;
			$github = false;

			if($github_repo) {
				$plugin['location'] = $this->get_local_dir_path($plugin);
				$github = true;
			}

			$status = $this->uncodelite_plugin_active($plugin);
			switch($status) {
				case 'install' :
					$btn_class = 'install-offline button';
					$label = esc_html__('Install and Activate', 'uncode-lite');
					$link = $plugin['location'];
					break;

				case 'inactive' :
					$btn_class = 'button';
					$label = esc_html__('Deactivate', 'uncode-lite');
					$link = admin_url('plugins.php');
					break;

				case 'active' :
					$btn_class = 'activate-offline button button-primary';
					$label = esc_html__('Activate', 'uncode-lite');
					$link = $plugin['location'];
					break;
			}
			?>
			<?php if(!class_exists($plugin['class'])) : ?>
				<div class="action-tab warning">
					<h3><?php printf( esc_html__("Install : %s Plugin", 'uncode-lite'), $plugin['name'] ); ?></h3>
					<p><?php echo wp_kses_post($plugin['info']); ?></p>

					<span class="plugin-card-<?php echo esc_attr($plugin['slug']); ?>" action_button>
						<a class="<?php echo esc_attr($btn_class); ?>" data-github="<?php echo esc_attr($github); ?>" data-file='<?php echo esc_attr($plugin['slug']).'/'.esc_attr($plugin['filename']); ?>' data-slug="<?php echo esc_attr($plugin['slug']); ?>" href="<?php echo esc_html($link); ?>"><?php echo esc_html($label); ?></a>
					</span>
				</div>
			<?php endif; ?>
			<?php
		}

	endforeach;
?>

<?php do_action('instant_demo_importer'); ?>