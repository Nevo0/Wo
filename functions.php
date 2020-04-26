<?php

function teme_support()
{
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
    );
    // logo 
    add_theme_support('custom-logo');
    // tag
    add_theme_support('title-tag');
    // iamge  post
    add_theme_support('post-thumbnails');
    // menu
    add_theme_support('menus');
    add_theme_support('title-tag', array('page', 'post'));
    // image size
    add_image_size('post_image', 600, 500, false);

    register_nav_menus(
        array(
            'primary_menu' => 'Primary Menu',
            'secondary_menu'  => 'Secondary Menu',
            'footer_menu'  => 'Footer Menu'
        )
    );
    register_sidebar(
        register_sidebar(array(
            'name'          => __('Main Sidebar', 'textdomain'),
            'id'            => 'sidebar-1',
            'description'   => __('Widgets in this area will be shown on all posts and pages.', 'textdomain'),
            // 
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            // 
            'before_title'  => '<h2 class="sidebar_pages">',
            'after_title'   => '</h2>',
        ))
    );
}
add_action('after_setup_theme', 'teme_support');


function load_stylesheets()
{
    wp_enqueue_style('style', get_template_directory_uri() . '/style.css', false, 1, 'all');;
    wp_enqueue_style('piApp', get_template_directory_uri() . '/assets/app.css', false, 1, 'all');;
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.css', false, 4.4, 'all');;
}


add_action('wp_enqueue_scripts', 'load_stylesheets', 999);

function load_script()
{
    wp_register_script('piJs', get_template_directory_uri() . '/assets/app.js', array(), 1.0, false);
    wp_enqueue_script('piJs');
    wp_register_script('bootstrap', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.js', array(), 4.4, false);
    wp_enqueue_script('bootstrap');
}


add_action('wp_enqueue_scripts', 'load_script');
