<?php

// Enqueuing
function load_css()
{

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', [], 1, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('main', get_template_directory_uri() . '/css/main.css', [], 1, 'all');
    wp_enqueue_style('main');

    wp_register_style('magnific', get_template_directory_uri() . '/css/magnific.css', [], 1, 'all');
    wp_enqueue_style('magnific');
}
add_action('wp_enqueue_scripts', 'load_css');

function load_js()
{
    wp_enqueue_script('jquery');

    wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', ['jquery'], 1, true);
    wp_enqueue_script('bootstrap');

    wp_register_script('magnific', get_template_directory_uri() . '/js/magnific.js', ['jquery'], 1, true);
    wp_enqueue_script('magnific');

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

function team_members()
{
    $args = array(
        'labels' => array(
            'name' => 'Team Members',
            'singular_name' => 'Team Member',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-users',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'team-members'),
    );
    register_post_type('member', $args);
}
add_action('init', 'team_members');

function my_first_taxonomy()
{
    $args = array(
        'public' => true,
        'hierarchical' => false,
    );
    register_taxonomy('brands', array('member'), $args);
}
add_action('init', 'my_first_taxonomy');

function locations()
{
    $args = array(
        'labels' => array(
            'name' => 'Locations',
            'singular_name' => 'Location',
        ),
        'hierarchical' => true,
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-admin-site',
        'supports' => array('title', 'editor', 'thumbnail'),
        'rewrite' => array('slug' => 'locations'),
    );
    register_post_type('location', $args);
}
add_action('init', 'locations');

if (function_exists('acf_add_options_page')) {
    acf_add_options_page(

        array(
            'page_title' => 'Website Settings',
            'menu_title' => 'Website Settings',
            'menu_slug' => 'website-settings',
            'capability' => 'edit_posts',
            'icon_url' => 'dashicons-admin-tools',
            'redirect' => true
        )

    );

    acf_add_options_sub_page(
        array(
            'page_title' => 'Contact Settings',
            'menu_title' => 'Contact',
            'parent_slug' => 'website-settings',
        )
    );

    acf_add_options_sub_page(
        array(
            'page_title' => 'Design Settings',
            'menu_title' => 'Design',
            'parent_slug' => 'website-settings',
        )
    );
}
