<?php

/**
 * Astra Child Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 * @package Astra Child
 * @since 1.0.0
 */

/**
 * Define Constants
 */
define('CHILD_THEME_ASTRA_CHILD_VERSION', '1.0.0');

/**
 * Enqueue styles
 */
function child_enqueue_styles()
{
    wp_enqueue_style(
        'astra-child-theme-css',
        get_stylesheet_directory_uri() . '/style.css',
        array('astra-theme-css'),
        CHILD_THEME_ASTRA_CHILD_VERSION,
        'all'
    );
}
add_action('wp_enqueue_scripts', 'child_enqueue_styles', 15);

/**
 * Include additional scripts
 */
require_once __DIR__ . '/_inc/scripts.php';


function home_url_shortcode()
{
    return esc_url(home_url());
}
add_shortcode('home_url', 'home_url_shortcode');
