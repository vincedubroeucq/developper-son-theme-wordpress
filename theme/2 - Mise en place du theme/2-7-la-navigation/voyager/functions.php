<?php
add_action( 'wp_enqueue_scripts', 'voyager_scripts' );
function voyager_scripts() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'voyager-style', get_stylesheet_uri(), array(), $version );
    wp_enqueue_script( 'voyager-navigation', get_template_directory_uri() . '/js/navigation.js', [], $version, false );
}

add_action( 'after_setup_theme', 'voyager_setup' );
function voyager_setup(){
    add_theme_support( 'title-tag' );
}