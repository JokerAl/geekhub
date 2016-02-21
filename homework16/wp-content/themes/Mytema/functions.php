<?php
function lerningWordPress_resources(){
    wp_enqueue_style('style',get_stylesheet_uri());
}
add_action('wp_enqueue_scripts','lerningWordPress_resources');\
register_nav_menus(array(
    'primary'=>__('Praimary Menu'),
    'footer'=>__('Footer Menu')
));