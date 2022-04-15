<?php
function awp_theme_styles()
{
    wp_enqueue_style( 'theme_css', get_template_directory_uri().'/assets/css/theme.css');
    wp_enqueue_script( 'theme_js', get_template_directory_uri().'/assets/js/script.js', ['jquery'], '', true);
}

function awp_after_setup()
{
    add_theme_support( 'menus' );//vesrions antigas;
    register_nav_menu( 'primary', __('Primary Menu', 'primeiro-theme') );   
    register_nav_menu( 'footer', __('Footer Menu', 'primeiro-theme') );
    add_theme_support( 'post-thumbnails' );     
}

function awp_widgets()
{
    register_sidebar( [
        'name' => __('My Primary Sidebar'),
        'id'   => 'awp_sidebar',
        'description' => __('Sidebar para o tema', 'primeiro-theme'),

        'befor_widget' => '<div id="%1$s',
        'after_widget' => '</div>'
    ] );
}