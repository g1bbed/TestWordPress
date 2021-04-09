<?php

// Enqueuing
function load_css()
{
    wp_register_style('wpb-google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,700&display=swap', false);
    wp_enqueue_style('wpb-google-fonts');

    wp_register_style('font-awesome', 'https://use.fontawesome.com/releases/v5.15.3/css/all.css?ver=5.7', false);
    wp_enqueue_style('font-awesome');

    wp_register_style('swiper', get_template_directory_uri() . '/css/swiper-bundle.min.css', [], 1, 'all');
    wp_enqueue_style('swiper');

    wp_register_style('lightgallery', get_template_directory_uri() . '/css/lightgallery.min.css', [], 1, 'all');
    wp_enqueue_style('lightgallery');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css', [], 1, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], 1, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', 1, true);
    wp_enqueue_script('swiper');

    wp_register_script('lightgallery', get_template_directory_uri() . '/js/lightgallery-all.min.js', ['jquery'], 1, true);
    wp_enqueue_script('lightgallery');

    wp_register_script('custom', get_template_directory_uri() . '/js/custom.js', ['jquery'], 1, true);
    wp_enqueue_script('custom');
}
add_action('wp_enqueue_scripts', 'load_js');


// Nav Menus
register_nav_menus(array(
    'top-menu' => __('Top Menu', 'theme'),
    'footer-menu' => __('Footer Menu', 'theme'),
));

// Theme Support
add_theme_support('menus');
add_theme_support('post-thumbnails');

// Image Sizes
add_image_size('small', 600, 600, false);
add_image_size('my_custom_size', 1200, 600, true);

acf_add_options_page(

    array(
        'page_title' => 'Header and Footer',
        'menu_title' => 'Header & Footer',
        'menu_slug' => 'header-and-footer',
        'capability' => 'edit_posts',
        'icon_url' => 'dashicons-admin-tools',
        'redirect' => true
    )

);