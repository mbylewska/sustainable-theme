<?php

//Load stylesheets
function load_css()
{

    wp_register_style('main', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
    wp_enqueue_style('main');
}
add_action('wp_enqueue_scripts', 'load_css');

//theme options
add_theme_support('menus');
add_theme_support('post-thumbnails');


//menus
register_nav_menus(
    array(

        'main-menu' => 'Main Menu',
        'mobile_menu' => 'Mobile Menu',
        'footer-menu' => 'Footer Menu',
    )
);


//custom image sizes
add_image_size('blog-large', 800, 400, true);
add_image_size('blog-small', 300, 200, true);
