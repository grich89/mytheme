<?php
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'mobile', get_stylesheet_directory_uri() . '/library/css/styles.css');
    wp_enqueue_script( 'fa', 'https://use.fontawesome.com/188ed7bd93.js' );
}
?>