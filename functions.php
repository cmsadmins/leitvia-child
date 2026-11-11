<?php
/**
 * Leitvia Child: loads the translations of the release zip in languages/. A language pack in WP_LANG_DIR wins.
 *
 * @package LeitviaChild
 */

add_action( 'after_setup_theme', static fn() => load_child_theme_textdomain( 'leitvia-child', get_stylesheet_directory() . '/languages' ) );
