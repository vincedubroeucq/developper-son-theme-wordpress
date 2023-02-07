<?php 
/**
 * Used to display the single posts and pages
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