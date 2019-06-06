<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package RED_Starter_Theme
 */

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

// custom login for theme
function my_custom_login_logo() {
     echo '<style type="text/css">                                                                   
        .login h1 a { background-image:url('.get_template_directory_uri().'/assets/images/logos/inhabitent-logo-text-dark.svg) !important; 
         height: 60px !important; width: 300px !important; background-size: 300px;}                            
	 </style>';
	 function the_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'the_url' );
}
add_action('login_head', 'my_custom_login_logo');

?>