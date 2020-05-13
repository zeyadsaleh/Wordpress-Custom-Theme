<?php

function addAssets()
{
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css');
    wp_enqueue_style('404', get_template_directory_uri() . '/assets/css/404.css');

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.js', ["jquery"]);
}


//hook
add_action("wp_enqueue_scripts", "addAssets");

//add theme options
add_theme_support("post-thumbnails");


add_theme_support("menus");

register_nav_menus(array(
    'top-nav' => 'Main Navigation',
    'footer-nav' => 'Footer Navigation'
));
