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
require_once get_template_directory() . '/inc/class-wp-bootstrap-navwalker.php';

/**
 * Enqueue scripts and styles.
 */
require get_template_directory() . '/inc/enqueue-scripts.php';

/**
 * Theme setup
 */
require get_template_directory() . '/inc/theme-setup.php';