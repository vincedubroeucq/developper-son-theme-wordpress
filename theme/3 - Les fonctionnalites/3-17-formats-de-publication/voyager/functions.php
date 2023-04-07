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
    wp_enqueue_script( 'voyager-navigation', get_template_directory_uri() . '/js/navigation.js', array(), $version, false );
}


add_action( 'after_setup_theme', 'voyager_setup' );
/**
 * Declares supported features
 */
function voyager_setup(){
    add_theme_support( 'title-tag' );
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'custom-header', array(
        'width'       => 2048,
        'height'      => 800,
        'flex-width'  => true,
        'flex-height' => true,
        'default-text-color' => 'e0e0e0',
        'wp-head-callback'   => 'voyager_header_style',
    ) );
    add_theme_support( 'custom-logo', array(
        'height'      => 50,
        'width'       => 250,
        'flex-width'  => true,
        'unlink-homepage-logo' => true,
    ) );
   
    // Menus
    register_nav_menus(
        array(
            'menu-1' => __( 'Primary Menu', 'voyager' ),
            'menu-2' => __( 'Topbar Menu', 'voyager' ),
            'menu-3' => __( 'Footer Menu', 'voyager' ),
        )
    );

    // New image size for cards
    add_image_size( 'voyager_card', 528, 300, true );
}


add_action( 'widgets_init', 'voyager_widgets_init' );
/**
 * Declares widget areas
 */
function voyager_widgets_init() {
    register_sidebar(
		array(
			'name'          => esc_html__( 'Footer widget area', 'voyager' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'voyager' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s p-4">',
			'after_widget'  => '</div>',
			'before_title'  => '<h2 class="widget-title h4">',
			'after_title'   => '</h2>',
		)
	);
}

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Yoast SEO compatibility file.
 */
require get_template_directory() . '/inc/seo-functions.php';