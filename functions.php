<?php
/**
 * Leitvia Child: loads the translations of the release zip in languages/ (a language pack in WP_LANG_DIR wins) and
 * the site styles in assets/css/site.css, the place to restyle existing patterns and block styles of Leitvia for one
 * site. Rules for that file: readme.txt, section Site styles.
 *
 * @package LeitviaChild
 */

add_action( 'after_setup_theme', static fn() => load_child_theme_textdomain( 'leitvia-child', get_stylesheet_directory() . '/languages' ) );

/**
 * Path of the site styles, or '' when the file is missing or holds nothing but comments, so an untouched child theme
 * loads no stylesheet at all.
 */
function leitvia_child_site_css(): string {
	$path = get_stylesheet_directory() . '/assets/css/site.css';
	if ( ! is_readable( $path ) ) {
		return '';
	}
	$css = (string) file_get_contents( $path ); // phpcs:ignore WordPress.WP.AlternativeFunctions.file_get_contents_file_get_contents -- Local theme file.
	return '' === trim( (string) preg_replace( '#/\*.*?\*/#s', '', $css ) ) ? '' : $path;
}

/**
 * The site styles on the front end, after the global styles and the styles of Leitvia, so a rule of equal specificity
 * wins without !important. Printed inline like the block styles of Leitvia when it is small.
 */
function leitvia_child_enqueue_site_css(): void {
	$path = leitvia_child_site_css();
	if ( '' === $path ) {
		return;
	}
	wp_enqueue_style( 'leitvia-child-site', get_stylesheet_directory_uri() . '/assets/css/site.css', array( 'global-styles' ), (string) filemtime( $path ) );
	wp_style_add_data( 'leitvia-child-site', 'path', $path );
}
add_action( 'wp_enqueue_scripts', 'leitvia_child_enqueue_site_css', 30 );

/**
 * The same file in the editor, so the Site Editor and the block editor show what the visitor sees.
 */
function leitvia_child_editor_site_css(): void {
	if ( '' !== leitvia_child_site_css() ) {
		add_editor_style( 'assets/css/site.css' );
	}
}
add_action( 'after_setup_theme', 'leitvia_child_editor_site_css' );
