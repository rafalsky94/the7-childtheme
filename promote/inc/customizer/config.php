<?php

/**
 * The configuration options for Kirki.
 * Change the assets URL for kirki so the customizer styles & scripts are properly loaded.
 */
function promote_customizer_config( $args ) {

	$args['url_path'] = get_template_directory_uri() . '/inc/kirki/';

	return $args;

}
add_filter( 'kirki/config', 'promote_customizer_config' );

add_filter( 'kirki/promote_config/l10n', function( $l10n ) {
	$l10n['background-color']      = esc_attr__( 'Background Color', 'promote' );
	$l10n['background-image']      = esc_attr__( 'Background Image', 'promote' );
	$l10n['no-repeat']             = esc_attr__( 'No Repeat', 'promote' );
	$l10n['repeat-all']            = esc_attr__( 'Repeat All', 'promote' );
	$l10n['repeat-x']              = esc_attr__( 'Repeat Horizontally', 'promote' );
	$l10n['repeat-y']              = esc_attr__( 'Repeat Vertically', 'promote' );
	$l10n['inherit']               = esc_attr__( 'Inherit', 'promote' );
	$l10n['background-repeat']     = esc_attr__( 'Background Repeat', 'promote' );
	$l10n['cover']                 = esc_attr__( 'Cover', 'promote' );
	$l10n['contain']               = esc_attr__( 'Contain', 'promote' );
	$l10n['background-size']       = esc_attr__( 'Background Size', 'promote' );
	$l10n['fixed']                 = esc_attr__( 'Fixed', 'promote' );
	$l10n['scroll']                = esc_attr__( 'Scroll', 'promote' );
	$l10n['background-attachment'] = esc_attr__( 'Background Attachment', 'promote' );
	$l10n['left-top']              = esc_attr__( 'Left Top', 'promote' );
	$l10n['left-center']           = esc_attr__( 'Left Center', 'promote' );
	$l10n['left-bottom']           = esc_attr__( 'Left Bottom', 'promote' );
	$l10n['right-top']             = esc_attr__( 'Right Top', 'promote' );
	$l10n['right-center']          = esc_attr__( 'Right Center', 'promote' );
	$l10n['right-bottom']          = esc_attr__( 'Right Bottom', 'promote' );
	$l10n['center-top']            = esc_attr__( 'Center Top', 'promote' );
	$l10n['center-center']         = esc_attr__( 'Center Center', 'promote' );
	$l10n['center-bottom']         = esc_attr__( 'Center Bottom', 'promote' );
	$l10n['background-position']   = esc_attr__( 'Background Position', 'promote' );
	$l10n['background-opacity']    = esc_attr__( 'Background Opacity', 'promote' );
	$l10n['on']                    = esc_attr__( 'ON', 'promote' );
	$l10n['off']                   = esc_attr__( 'OFF', 'promote' );
	$l10n['all']                   = esc_attr__( 'All', 'promote' );
	$l10n['cyrillic']              = esc_attr__( 'Cyrillic', 'promote' );
	$l10n['cyrillic-ext']          = esc_attr__( 'Cyrillic Extended', 'promote' );
	$l10n['devanagari']            = esc_attr__( 'Devanagari', 'promote' );
	$l10n['greek']                 = esc_attr__( 'Greek', 'promote' );
	$l10n['greek-ext']             = esc_attr__( 'Greek Extended', 'promote' );
	$l10n['khmer']                 = esc_attr__( 'Khmer', 'promote' );
	$l10n['latin']                 = esc_attr__( 'Latin', 'promote' );
	$l10n['latin-ext']             = esc_attr__( 'Latin Extended', 'promote' );
	$l10n['vietnamese']            = esc_attr__( 'Vietnamese', 'promote' );
	$l10n['hebrew']                = esc_attr__( 'Hebrew', 'promote' );
	$l10n['arabic']                = esc_attr__( 'Arabic', 'promote' );
	$l10n['bengali']               = esc_attr__( 'Bengali', 'promote' );
	$l10n['gujarati']              = esc_attr__( 'Gujarati', 'promote' );
	$l10n['tamil']                 = esc_attr__( 'Tamil', 'promote' );
	$l10n['telugu']                = esc_attr__( 'Telugu', 'promote' );
	$l10n['thai']                  = esc_attr__( 'Thai', 'promote' );
	$l10n['serif']                 = _x( 'Serif', 'font style', 'promote' );
	$l10n['sans-serif']            = _x( 'Sans Serif', 'font style', 'promote' );
	$l10n['monospace']             = _x( 'Monospace', 'font style', 'promote' );
	$l10n['font-family']           = esc_attr__( 'Font Family', 'promote' );
	$l10n['font-size']             = esc_attr__( 'Font Size', 'promote' );
	$l10n['font-weight']           = esc_attr__( 'Font Weight', 'promote' );
	$l10n['line-height']           = esc_attr__( 'Line Height', 'promote' );
	$l10n['font-style']            = esc_attr__( 'Font Style', 'promote' );
	$l10n['letter-spacing']        = esc_attr__( 'Letter Spacing', 'promote' );
	$l10n['top']                   = esc_attr__( 'Top', 'promote' );
	$l10n['bottom']                = esc_attr__( 'Bottom', 'promote' );
	$l10n['left']                  = esc_attr__( 'Left', 'promote' );
	$l10n['right']                 = esc_attr__( 'Right', 'promote' );
	$l10n['color']                 = esc_attr__( 'Color', 'promote' );
	$l10n['add-image']             = esc_attr__( 'Add Image', 'promote' );
	$l10n['change-image']          = esc_attr__( 'Change Image', 'promote' );
	$l10n['remove']                = esc_attr__( 'Remove', 'promote' );
	$l10n['no-image-selected']     = esc_attr__( 'No Image Selected', 'promote' );
	$l10n['select-font-family']    = esc_attr__( 'Select a font-family', 'promote' );
	$l10n['variant']               = esc_attr__( 'Variant', 'promote' );
	$l10n['subsets']               = esc_attr__( 'Subset', 'promote' );
	$l10n['size']                  = esc_attr__( 'Size', 'promote' );
	$l10n['height']                = esc_attr__( 'Height', 'promote' );
	$l10n['spacing']               = esc_attr__( 'Spacing', 'promote' );
	$l10n['ultra-light']           = esc_attr__( 'Ultra-Light 100', 'promote' );
	$l10n['ultra-light-italic']    = esc_attr__( 'Ultra-Light 100 Italic', 'promote' );
	$l10n['light']                 = esc_attr__( 'Light 200', 'promote' );
	$l10n['light-italic']          = esc_attr__( 'Light 200 Italic', 'promote' );
	$l10n['book']                  = esc_attr__( 'Book 300', 'promote' );
	$l10n['book-italic']           = esc_attr__( 'Book 300 Italic', 'promote' );
	$l10n['regular']               = esc_attr__( 'Normal 400', 'promote' );
	$l10n['italic']                = esc_attr__( 'Normal 400 Italic', 'promote' );
	$l10n['medium']                = esc_attr__( 'Medium 500', 'promote' );
	$l10n['medium-italic']         = esc_attr__( 'Medium 500 Italic', 'promote' );
	$l10n['semi-bold']             = esc_attr__( 'Semi-Bold 600', 'promote' );
	$l10n['semi-bold-italic']      = esc_attr__( 'Semi-Bold 600 Italic', 'promote' );
	$l10n['bold']                  = esc_attr__( 'Bold 700', 'promote' );
	$l10n['bold-italic']           = esc_attr__( 'Bold 700 Italic', 'promote' );
	$l10n['extra-bold']            = esc_attr__( 'Extra-Bold 800', 'promote' );
	$l10n['extra-bold-italic']     = esc_attr__( 'Extra-Bold 800 Italic', 'promote' );
	$l10n['ultra-bold']            = esc_attr__( 'Ultra-Bold 900', 'promote' );
	$l10n['ultra-bold-italic']     = esc_attr__( 'Ultra-Bold 900 Italic', 'promote' );
	$l10n['invalid-value']         = esc_attr__( 'Invalid Value', 'promote' );

	return $l10n;

} );
