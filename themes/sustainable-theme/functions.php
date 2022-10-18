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


//menus
register_nav_menus(
    array(

        'main-menu' => 'Main Menu',
        'mobile_menu' => 'Mobile Menu',
        'footer-menu' => 'Footer Menu',
    )
);
