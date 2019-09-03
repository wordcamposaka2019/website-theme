<?php
/**
 * Components functions and definitions.
 *
 * @package WordCamp Osaka 2019 Theme.
 *
 */

/**
 * Add stylesheets.
 */
function wordcamp_site_theme_style() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
	wp_enqueue_style( 'wordcamp-site-theme-style', get_stylesheet_directory_uri() . '/css/wcosaka2019.css', array( 'parent-style' ) );
}

add_action( 'wp_enqueue_scripts', 'wordcamp_site_theme_style' );
