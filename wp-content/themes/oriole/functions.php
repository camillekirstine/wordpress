<?php
/**
 * Oriole functions and definitions
 */

if ( ! function_exists( 'oriole_support' ) ) {

	// Sets up theme defaults and registers support for various WordPress features.
	function oriole_support() {

		// Add support for block styles.
		add_theme_support( 'wp-block-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style.css' );

	}
}
add_action( 'after_setup_theme', 'oriole_support' );

if ( ! function_exists( 'oriole_styles' ) ) {
	// Enqueue styles.
	function oriole_styles() {

		// Register theme stylesheet.
		wp_register_style(
			'oriole-style',
			get_template_directory_uri() . '/assets/css/theme.min.css',
			array(),
			wp_get_theme()->get( 'Version' )
		);

		// Enqueue theme stylesheet.
		wp_enqueue_style( 'oriole-style' );

	}
}
add_action( 'wp_enqueue_scripts', 'oriole_styles' );

if ( ! function_exists( 'oriole_editor_styles' ) ) {
	// Enqueue editor styles.
	function oriole_editor_styles() {
		add_editor_style(
			get_template_directory_uri() . '/assets/css/theme.min.css'
		);
	}
}
add_action( 'admin_init', 'oriole_editor_styles' );


// Add script to Editor
if ( ! function_exists( 'oriole_admin_add_scripts' ) ) {
	function oriole_admin_add_scripts( $hook ){
		if ( 'appearance_page_oriole' != $hook ) {
			return;
		}
		
		wp_register_style( 'oriole-settings-css',  get_template_directory_uri() . '/assets/css/admin.min.css' , '1.0.0' );
		wp_enqueue_style( 'oriole-settings-css');
	
	}
}
add_action( 'admin_enqueue_scripts', 'oriole_admin_add_scripts');

// Add admin page content
get_template_part( 'inc/theme' );

// Add admin page
if ( ! function_exists( 'oriole_create_menu' ) ) {
	add_action( 'admin_menu', 'oriole_create_menu' );
	// Adds our dashboard menu item
	function oriole_create_menu() {
		add_theme_page( 'Oriole WordPress Theme', 'Oriole', 'edit_theme_options', 'oriole', 'oriole_admin_theme_page' );
	}
}