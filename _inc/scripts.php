<?php

function enqueue_swiper_assets()
{

    if (is_front_page()) {
        wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js', array(), null, true);
        wp_enqueue_script('custom-swipejs', get_stylesheet_directory_uri() . '/assets/js/swiper.js', ['swiper'], null, true);
    }

    if (is_404()) {
        wp_enqueue_style('custom-404-style', get_stylesheet_directory_uri() . '/assets/css/404-style.css');
    }

    wp_enqueue_script('bottom-sticky-section', get_stylesheet_directory_uri() . '/assets/js/bottom-sticky-section.js', [], null, true);

}
add_action('wp_enqueue_scripts', 'enqueue_swiper_assets');