<?php 
/**
 * Singular views template file.
 * Used to display a single post or page.
 */

get_header(); ?>

<main class="site-main">
    <div class="wrapper main-wrapper maxw-mlg mx-auto py-7">
        <?php 
            while( have_posts() ) : the_post();
                get_template_part( 'template-parts/content' );
            endwhile;
        ?>
    </div>
</main>

<?php get_footer();