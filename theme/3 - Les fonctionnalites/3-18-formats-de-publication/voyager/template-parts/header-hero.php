<?php
/**
 * Template part for displaying the header title section
 */
?>

<div class="title-block text-center relative m-auto p-5 grey-1">
    <?php 
        if ( function_exists( 'yoast_breadcrumb' ) && ! is_404() && ! is_search() ) {
            yoast_breadcrumb( '<nav id="yoast-breadcrumbs" class="yoast-breadcrumbs uppercase txt-2 mb-0">','</nav>' );
        }
    ?>
    <hr class="title-border" />
    <?php 
        voyager_hero_title(); 
        voyager_hero_description(); 
    ?>
</div>