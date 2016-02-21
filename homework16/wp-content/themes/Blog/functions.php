<?php
function lerningWordPress_resources(){
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
    wp_enqueue_style( 'style', get_template_directory_uri() . '/css/main.css' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
}
add_action('wp_enqueue_scripts','lerningWordPress_resources');\
register_nav_menus(array(
    'primary'=>__('Praimary Menu'),
    'footer'=>__('Footer Menu')
));
add_theme_support( 'post-thumbnails' );
?>