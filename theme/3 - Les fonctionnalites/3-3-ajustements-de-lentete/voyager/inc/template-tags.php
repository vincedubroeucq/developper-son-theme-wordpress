<?php
/**
 * Custom template tags for the theme
 */

if( ! function_exists( 'voyager_header_image' ) ) :
/**
 * Displays header image, depending on page type.
 * 
 * @param   bool    $echo  Whether to echo html or just return it
 * @return  string  $html 
 */
function voyager_header_image( $echo = true ){
    $html  = '';
    $image = get_the_post_thumbnail( null, '2048x2048', [ 'class' => 'header-image' ] );
    if( $image ) {
        $html = sprintf( '<div class="header-image-container absolute cover">%s</div>', $image );
    }
    $html = apply_filters( 'voyager_header_image', $html, $image );
    if( $echo ) echo $html;
    return $html;
}
endif;


if( ! function_exists( 'voyager_hero_title' ) ) :
/**
 * Displays header title, depending on page type.
 * 
 * @param   bool    $echo  Whether to echo html or just return it
 * @return  string  $html 
 */
function voyager_hero_title( $echo = true ){
    $html = '';
    $title = single_post_title( '', false );
    if( is_front_page() ){
        $title = get_bloginfo( 'name' );
    }
    $html = ! empty( $title ) ? sprintf( '<h1 class="page-title mt-0">%s</h1>', wp_kses_post( $title ) ) : ''; 
    $html = apply_filters( 'voyager_hero_title', $html, $title );
    if( $echo ) echo $html;
    return $html;  
}
endif;


if( ! function_exists( 'voyager_post_meta' ) ) :
/**
 * Displays post meta on cards.
 * 
 * @param   bool    $echo  Whether to echo html or just return it
 * @return  string  $html 
 */
function voyager_post_meta( $echo = true ){
    $html = '';
    $meta = array();

    $time   = sprintf( '<time class="entry-date published" datetime="%s">%s</time>', esc_attr( get_the_date( DATE_W3C ) ), esc_html( get_the_date() ) );
    $prefix = sprintf( '<span class="screen-reader-text">%s</span>', __( 'Published on: ', 'voyager' ) );
    if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
        $time   = sprintf( '<time class="entry-date updated" datetime="%s">%s</time>', esc_attr( get_the_modified_date( DATE_W3C ) ), esc_html( get_the_modified_date() ) );
        $prefix = sprintf( '<span class="screen-reader-text">%s</span>', __( 'Updated on: ', 'voyager' ) );
    }
    $meta[] = sprintf( '<span class="meta date">%s%s</span>', $prefix, $time );

    $categories = get_the_category();
    if( ! empty( $categories ) ){
        foreach ( $categories as $category ) {
            $meta[] = sprintf( '<span class="meta category mb-0"><a class="naked" href="%s">%s</a></span>', esc_url( get_category_link( $category->term_id ) ), esc_html( $category->name ) ); 
        }
    }

    $edit_link = get_edit_post_link();
    if( $edit_link ){
        $meta[] = sprintf( '<span class="meta edit-link"><a href="%s" class="post-edit-link naked">%s</a></span>', $edit_link, __( 'Edit', 'voyager' ) );
    }
    
    $meta = apply_filters( 'voyager_post_meta', $meta );
    $html = ! empty( $meta ) ? sprintf( '<div class="post-meta uppercase txt-2">%s</div>', join( '<span class="seperator mx-1">|</span>', $meta ) ) : '';
    $html = apply_filters( 'voyager_post_meta_html', $html );
    if( $echo ) echo $html;
    return $html;
}
endif;