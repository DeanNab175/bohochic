<?php
/**
 * Template functions that enhance the theme by hooking into WordPress.
 */

 
/**
 * Add classes to the cutom logo.
 */
add_filter( 'get_custom_logo', function($html) {
    $html = str_replace( 'custom-logo-link', 'custom-logo-link navbar-brand', $html );
    
    return $html;
});