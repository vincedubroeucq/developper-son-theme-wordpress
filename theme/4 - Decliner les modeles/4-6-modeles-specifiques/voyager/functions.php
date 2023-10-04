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

    // Add support for post formats
    add_theme_support( 'post-formats', array( 'video', 'audio' ) );

    // Add support for custom background
    add_theme_support( 'custom-background' );

    // Add editor support
    add_theme_support( 'editor-styles' );
    add_editor_style();
    
    add_theme_support( 'align-wide' );
    add_theme_support( 'editor-color-palette', array(
        array(
            'name'  => __( 'Darkest grey', 'voyager' ),
            'slug'  => 'grey-5',
            'color' => '#141412',
        ),
        array(
            'name'  => __( 'Dark grey', 'voyager' ),
            'slug'  => 'grey-4',
            'color' => '#3b3b3b',
        ),
        array(
            'name'  => __( 'Medium grey', 'voyager' ),
            'slug'  => 'grey-3',
            'color' => '#808080',
        ),
        array(
            'name'  => __( 'Light grey', 'voyager' ),
            'slug'  => 'grey-2',
            'color' => '#bfbfbf',
        ),
        array(
            'name'  => __( 'Lightest grey', 'voyager' ),
            'slug'  => 'grey-1',
            'color' => '#e0e0e0',
        ),
        array(
            'name'  => __( 'Darkest orange', 'voyager' ),
            'slug'  => 'orange-5',
            'color' => '#cc3d00',
        ),
        array(
            'name'  => __( 'Dark orange', 'voyager' ),
            'slug'  => 'orange-4',
            'color' => '#e95b02',
        ),
        array(
            'name'  => __( 'Medium orange', 'voyager' ),
            'slug'  => 'orange-3',
            'color' => '#ff7033',
        ),
        array(
            'name'  => __( 'Light orange', 'voyager' ),
            'slug'  => 'orange-2',
            'color' => '#ffa782',
        ),
        array(
            'name'  => __( 'Lightest orange', 'voyager' ),
            'slug'  => 'orange-1',
            'color' => '#ffdbcc',
        ),
    ) );
    add_theme_support(
        'editor-gradient-presets',
        array(
            array(
                'name'     => esc_attr__( 'Dark orange to light orange', 'voyager' ),
                'slug'     => 'dark-orange-to-light-orange',
                'gradient' => 'linear-gradient( 135deg, #e95b02 0%, #ffa782 100% )',
            ),
        )
    );
    add_theme_support( 'editor-font-sizes', array(
        array(
            'name' => __( 'Small', 'voyager' ),
            'size' => 12,
            'slug' => 'txt-2'
        ),
        array(
            'name' => __( 'Regular', 'voyager' ),
            'size' => 16,
            'slug' => 'txt-4'
        ),
        array(
            'name' => __( 'Large', 'voyager' ),
            'size' => 20,
            'slug' => 'txt-6'
        ),
        array(
            'name' => __( 'Very large', 'voyager' ),
            'size' => 26,
            'slug' => 'txt-7'
        )
    ) );
    add_theme_support( 'custom-line-height' );
    add_theme_support( 'custom-units', 'px', 'rem', 'em' );
    add_theme_support( 'responsive-embeds' );
    add_theme_support( 'custom-spacing' );
    add_theme_support( 'appearance-tools' );
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );
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

/**
 * Customizer settings.
 */
require get_template_directory() . '/inc/customizer.php';