<?php

/**
 * @package customTheme
 * @since customTheme 1.0.0 
 */

 declare(strict_types = 1);

 if ( ! function_exists('customTheme_support') ) :

    /**
     * 
     * @since customTheme 1.0.0
     * 
     */

    function customTheme_support () {
    
        add_editor_style('style.css');

        load_theme_textdomain('customTheme');
    }

endif;

add_action('after_setup_theme', 'customTheme_support');
    
if ( ! function_exists('CE_styles') ) :

        /**
         * 
         * @since customTheme 1.0.0
         * 
         */
    // Theme setup
    function CE_styles() {
    // Add dynamic title tag support
    wp_register_style(
        'CE-theme',
        get_stylesheet_directory_uri() . '/style.css',
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_style('CE-theme');

    register_nav_menus(array(
        'primary' => __('Primary Menu', 'Menu')
    ));

    add_image_size('small-thumbnail', 180, 120, true);    
    }
endif;

add_action('wp_enqueue_scripts', 'CE_styles');
add_action('init', 'register_my_menu');



