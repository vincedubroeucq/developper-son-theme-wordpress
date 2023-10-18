<?php
/**
 * Template part for displaying a single post in a list view
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Voyager
 */
$permalink = get_permalink();
?>

<article <?php post_class( 'search-result bg-grey-0' ); ?>>
    <div class="wrapper card-wrapper p-5">
        <h2 class="entry-title txt-6 my-1">
            <a class="naked" href="<?php echo esc_url( $permalink ) ?>" rel="bookmark">
                <?php the_title(); ?>
            </a>
        </h2>
        <div class="excerpt"><?php the_excerpt(); ?></div>
        <footer class="post-footer grey-3">
            <?php voyager_post_meta(); ?>
        </footer>
    </div>
</article>