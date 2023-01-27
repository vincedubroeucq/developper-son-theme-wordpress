<?php
/**
 * Declares features for our theme
 */


add_action( 'wp_enqueue_scripts', 'voyager_scripts' );
/**
 * Loads scripts and styles
 */
function voyager_scripts() {
    $version = wp_get_theme()->get( 'Version' );
    wp_enqueue_style( 'voyager-style', get_stylesheet_uri(), array(), $version );
    wp_enqueue_script( 'voyager-navigation', get_template_directory_uri() . '/js/navigation.js', [], $version, false );
}


add_action( 'after_setup_theme', 'voyager_setup' );
/**
 * Declares supported features
 */
function voyager_setup(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );

    // Menus
    register_nav_menus(
        array(
            'menu-1' => __( 'Primary Menu', 'voyager' ),
            'menu-2' => __( 'Topbar Menu', 'voyager' ),
            'menu-3' => __( 'Footer Menu', 'voyager' ),
        )
    );
}

include 'inc/template-tags.php';