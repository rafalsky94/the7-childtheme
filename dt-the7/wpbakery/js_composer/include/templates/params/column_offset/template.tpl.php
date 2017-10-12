<div class="vc_column-offset" data-column-offset="true">
	<?php if(vc_settings()->get( 'not_responsive_css' ) === '1'): ?>
  	<div class="wpb_alert wpb_content_element vc_alert_rounded wpb_alert-warning">
		<div class="messagebox_text">
			<p><?php printf( __('Responsive design settings are currently disabled. You can enable them in Visual Composer <a href="%s">settings page</a> by unchecking "Disable responsive content elements".', LANGUAGE_ZONE), admin_url( 'options-general.php?page=vc_settings' ) ) ?></p>
		</div>
  	</div>
  	<?php endif; ?>
	<input name="<?php esc_attr_e($settings['param_name']) ?>" class="wpb_vc_param_value <?php esc_attr_e($settings['param_name']) ?>
	<?php esc_attr_e($settings['type']) ?> '_field" type="hidden" value="<?php esc_attr_e( $value ) ?>" />
	<table class="vc_table vc_column-offset-table">
		<tr>
			<th>
				<?php _e('Device', LANGUAGE_ZONE) ?>
			</th>
			<th>
				<?php _e('Offset', LANGUAGE_ZONE) ?>
			</th>
			<th>
				<?php _e('Width', LANGUAGE_ZONE) ?>
			</th>
			<th>
				<?php _e('Hide on device?', LANGUAGE_ZONE) ?>
			</th>
		</tr>
		<?php foreach($sizes as $key => $size): ?>
		<tr class="vc_size-<?php echo $key ?>">
			<td class="vc_screen-size vc_screen-size-<?php echo $key ?>">
				<span class="vc_icon" title="<?php _e($size, LANGUAGE_ZONE) ?>"></span>
			</td>
			<td>
				<?php echo $param->offsetControl($key) ?>
			</td>
			<td>
				<?php echo $param->sizeControl($key) ?>
			</td>
			<td>
				<label>
					<input type="checkbox" name="vc_hidden-<?php echo $key ?>" value="yes"<?php echo in_array('vc_hidden-'.$key, $data) ? ' checked="true"' : '' ?> class="vc_column_offset_field">
					<?php _e('Hide', LANGUAGE_ZONE) ?>
				</label>
			</td>
		</tr>
  		<?php endforeach; ?>
	</table>
</div>
<script type="text/javascript">
	window.VcI8nColumnOffsetParam = <?php echo json_encode(array(
		'inherit' => __('Inherit: ', LANGUAGE_ZONE),
		'inherit_default' => __('Inherit from default', LANGUAGE_ZONE)
	)) ?>
</script>