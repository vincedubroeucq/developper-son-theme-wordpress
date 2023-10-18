<?php 
/**
 * Template part for displaying content on singular pages.
 */
?>

<article <?php post_class( 'bg-grey-0' ); ?>>
    <div class="wrapper entry-content p-5">
        <?php 
            the_content(); 
            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'voyager' ),
                'after'  => '</div>',
            ) );
            if( 'post' === get_post_type() ) {
                voyager_post_footer();
            }
        ?>
    </div>
</article>