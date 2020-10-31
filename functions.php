<?php
/**
 * Bohochic functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Bohochic
 */

/**
 * Bootstrap walker menu
 */
if ( ! file_exists( get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php' ) ) {
    // File does not exist... return an error.
    return new WP_Error( 'class-wp-bootstrap-navwalker-missing', __( 'It appears the class-wp-bootstrap-navwalker.php file may be missing.', 'bohochic' ) );
} else {
    // File exists... require it.
    require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';
}

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * Theme setup
 */
require get_template_directory() . '/inc/theme-setup.php';

/**
 * Modify woocommerce templates using hooks
 */
if( class_exists( 'WooCommerce' ) ) :
    require get_template_directory() . '/inc/wc-modifications.php';
endif;


/**
 * Theme customizer
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Add classes to the cutom logo.
 */
add_filter( 'get_custom_logo', function($html) {
    $html = str_replace( 'custom-logo-link', 'custom-logo-link navbar-brand', $html );
    
    return $html;
});
