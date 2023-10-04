<?php 
/**
 * Template file used to display single pages
 */
get_header(); ?>

<main class="site-main">
    <div class="wrapper main-wrapper maxw-mlg mx-auto py-7">
        <?php 
            while( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', get_post_type() );
            endwhile;
        ?>
    </div>
</main>

<?php get_footer();