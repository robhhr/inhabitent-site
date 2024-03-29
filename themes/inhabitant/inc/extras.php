<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

function my_custom_login_logo() {
	echo '<style type="text/css">                                                                   
		.login h1 a { background-image:url('.get_stylesheet_directory_uri().'/images/inhabitent-logo-text-dark.svg) !important; 
		height: 80px !important; width: 100% !important; margin: 0 auto !important; background-size: 100% !important}                            
	</style>';
}
add_action('login_head', 'my_custom_login_logo');

function the_url( $url ) {
    echo esc_url( home_url() );
}
add_filter( 'login_headerurl', 'the_url' );

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function red_starter_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	return $classes;
}
add_filter( 'body_class', 'red_starter_body_classes' );
