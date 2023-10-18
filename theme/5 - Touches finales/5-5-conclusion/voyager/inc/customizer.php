<?php
add_action( 'customize_register', 'voyager_customize_register' );
/**
 * Register theme settings
 * 
 * @param  WP_Customize_Manager  $wp_customize
 */
function voyager_customize_register( $wp_customize ){
    // Add our new panel
    $wp_customize->add_panel( 'voyager_theme_options', array(
        'title' => __( 'Voyager theme options', 'voyager' ),
    ) );

    // Add our new sections
    $wp_customize->add_section( 'voyager_header_options', array(
        'title' => __( 'Voyager header options', 'voyager' ),
        'panel' => 'voyager_theme_options',
    ) );
    $wp_customize->add_section( 'voyager_footer_options', array(
        'title' => __( 'Voyager footer options', 'voyager' ),
        'panel' => 'voyager_theme_options',
    ) );
    
    // Hero text color settings
    $wp_customize->add_setting( 'voyager_hero_text_color', array(
        'default'           => '#e0e0e0',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( 'voyager_hero_text_color', array(
        'type'    => 'color',
        'label'   => __( 'Hero default text color', 'voyager' ),
        'section' => 'colors',
    ) );
    $wp_customize->add_setting( 'voyager_hero_title_color', array(
        'default'           => '#e0e0e0',
        'sanitize_callback' => 'sanitize_hex_color',
    ) );
    $wp_customize->add_control( 'voyager_hero_title_color', array(
        'type'    => 'color',
        'label'   => __( 'Hero title color', 'voyager' ),
        'section' => 'colors',
    ) );

    // Footer text setting
    $wp_customize->add_setting( 'voyager_footer_text', array(
        /* translators: %s = author link. Please keep ! */
        'default'           => sprintf( __( 'Theme by %s', 'voyager' ), '<a href="https://vincentdubroeucq.com">Vincent Dubroeucq</a>' ),
        'sanitize_callback' => 'wp_kses_post',
    ) );
    $wp_customize->add_control( 'voyager_footer_text', array(
        'label'   => __( 'Footer copyright text', 'voyager' ),
        'section' => 'voyager_footer_options',
    ) );

    // Search form toggle
    $wp_customize->add_setting( 'voyager_display_search', array(
        'default'           => true,
        'sanitize_callback' => 'voyager_sanitize_checkbox',
    ) );
    $wp_customize->add_control( 'voyager_display_search', array(
        'type' => 'checkbox',
        'label'   => __( 'Display search form in the navbar', 'voyager' ),
        'section' => 'voyager_header_options',
    ) );
}

/**
 * Sanitizes a checkbox and forces a value to boolean
 * 
 * @param   mixed  $value
 * @return  bool   $value
 */
function voyager_sanitize_checkbox( $value ){
    return ! empty( $value ) && true == $value;
}