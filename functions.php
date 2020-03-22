<?php
add_action('wp_enqueue_scripts', 'add_theme_scripts');
function add_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array(), 1.0, true);
}
?>
