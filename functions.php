<?php
require_once('include/shortcodes.php');

add_action('wp_enqueue_scripts', 'add_theme_scripts');
function add_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script( 'script', get_template_directory_uri() . '/script.js', array(), 1.0, true);
}

add_action('init', 'add_translation_strings');
function add_translation_strings() {
    pll_register_string('newsfeed', "Newsfeed");
}

add_action('init', 'add_custom_post_types');
function add_custom_post_types() {
    register_post_type('section',
                       array(
                           'labels'      => array(
                               'name'          => __('Sections', 'textdomain'),
                               'singular_name' => __('Section', 'textdomain'),
                           ),
                           'public'            => true,
                           'has_archive'       => true,
                           'menu_icon'         => 'dashicons-excerpt-view',
                           'capability_type'   => 'page',
                           'supports'          => array('title', 'editor', 'polylang', 'revisions'),
                           'show_in_rest'      => true,
                           'show_in_nav_menus' => true
                       )
    );

    register_post_type('news',
                       array(
                           'labels'      => array(
                               'name'          => __('News', 'textdomain'),
                               'singular_name' => __('News', 'textdomain'),
                           ),
                           'public'            => true,
                           'has_archive'       => true,
                           'menu_icon'         => 'dashicons-testimonial',
                           'capability_type'   => 'page',
                           'supports'          => array('title', 'editor', 'polylang', 'revisions'),
                           'show_in_rest'      => true,
                           'show_in_nav_menus' => true
                       )
    );
}

add_action( 'init', 'register_menus' );
function register_menus() {
    register_nav_menu('header-menu',__( 'Header Menu' ));
}
?>
