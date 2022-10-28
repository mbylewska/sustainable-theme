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
add_theme_support('widgets');


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


//register sidebar
function my_sidebars()
{

    register_sidebar(
        array(
            'name' => 'Page Sidebar',
            'id' => 'page-sidebar',
            'before_title' => '<h4 class="widget-title"',
            'after_title' => '</h4>'
        )
    );

    register_sidebar(
        array(
            'name' => 'Blog Sidebar',
            'id' => 'blog-sidebar',
            'before_title' => '<h4 class="widget-title"',
            'after_title' => '</h4>'
        )
    );
}
add_action('widgets_init', 'my_sidebars');
