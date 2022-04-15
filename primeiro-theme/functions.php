<?php
//includes
require get_template_directory().'/include/setup.php';


//Hooks
add_action('wp_enqueue_scripts', 'awp_theme_styles');
add_action( 'after_setup_theme', 'awp_after_setup' );
add_action( 'widgets_init', 'awp_widgets' );