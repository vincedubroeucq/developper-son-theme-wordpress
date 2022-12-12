<?php
/**
 * Custom template tags for the theme
 */

if( ! function_exists( 'voyager_header_image' ) ) :
/**
 * Displays header image, depending on page type.
 */
function voyager_header_image(){
    $html  = '';
    $image = get_the_post_thumbnail( null, '2048x2048', [ 'class' => 'header-image' ] );
    if( $image ) {
        $html = sprintf( '<div class="header-image-container absolute cover">%s</div>', $image );
    }
    $html = apply_filters( 'voyager_header_image', $html, $image );
    echo $html;
}
endif;


if( ! function_exists( 'voyager_hero_title' ) ) :
/**
 * Displays header title, depending on page type.
 */
function voyager_hero_title(){
    $html = '';
    $title = single_post_title( '', false );
    if( is_front_page() ){
        $title = get_bloginfo( 'name' );
    }
    $html = ! empty( $title ) ? sprintf( '<h1 class="page-title mt-0">%s</h1>', wp_kses_post( $title ) ) : ''; 
    $html = apply_filters( 'voyager_hero_title', $html, $title );
    echo $html;   
}
endif;