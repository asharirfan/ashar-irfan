<?php
/**
 * AsharIrfan.com's Child Theme
 *
 * @since 	1.0.0
 * @package WP
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! function_exists( 'ma_theme_enqueue_styles' ) ) {

	/**
	 * Recommended way to include parent theme styles.
	 * (Please see http://codex.wordpress.org/Child_Themes#How_to_Create_a_Child_Theme).
	 *
	 * @author Ashar Irfan
	 * @since  1.0.0
	 */
	function ma_theme_enqueue_styles() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
		wp_enqueue_style( 'child-style',
			get_stylesheet_directory_uri() . '/style.css',
			array( 'parent-style' )
		);
	}
	add_action( 'wp_enqueue_scripts', 'ma_theme_enqueue_styles' );
}
