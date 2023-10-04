<?php 
/**
 * Template file used to display single posts
 */
get_header(); ?>

<main class="site-main">
    <div class="wrapper main-wrapper maxw-mlg mx-auto py-7">
        <?php 
            while( have_posts() ) : the_post();
                get_template_part( 'template-parts/content', get_post_type() );
                if( comments_open() || get_comments_number() ){
                    comments_template();
                }
            endwhile;

            the_post_navigation(
                array(
                    'prev_text' => sprintf( '<span class="mr-1">%s</span><span>%%title</span>', voyager_icon( 'previous', false ) ),
                    'next_text' => sprintf( '<span>%%title</span><span class="ml-1">%s</span>', voyager_icon( 'next', false ) ),
                )
            );
        ?>
    </div>
</main>

<?php get_footer();