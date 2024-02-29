<?php
/*
Plugin Name: Post Date
Plugin URI: Not currently available
Description: Shows the dates the posts were created
Version: 1.0
Author: Camille Kirstine
Author URI: None available
*/


function pluginprefix_setup_post_type() {
	register_post_type( '', ['public' => true ] ); 
} 
add_action( 'init', 'pluginprefix_setup_post_type' );


/**
 * Activate the plugin.
 */
function pluginprefix_activate() { 
	// Trigger our function that registers the custom post type plugin.
	pluginprefix_setup_post_type(); 
	// Clear the permalinks after the post type has been registered.
	flush_rewrite_rules(); 
}
register_activation_hook( __FILE__, 'pluginprefix_activate' );

/**
 * Deactivation hook.
 */
function pluginprefix_deactivate() {
	// Unregister the post type, so the rules are no longer in memory.
	unregister_post_type( '' );
	// Clear the permalinks to remove our post type's rules from the database.
	flush_rewrite_rules();
}

register_deactivation_hook( __FILE__, 'pluginprefix_deactivate' );

add_action( 'the_title', 'test_example_text' );

function test_example_text ( $title ) {


get_the_date('the_content');
return $title .= '<p><br>' . get_the_date(); '. </p>' ;
}

