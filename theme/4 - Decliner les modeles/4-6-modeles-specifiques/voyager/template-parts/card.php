<?php 
/**
 * Template part for displaying cards on list pages.
 */
$permalink = get_permalink();
?>

<article <?php post_class( 'card maxw-sm bg-grey-0' ); ?>>
    <div class="wrapper card-wrapper p-5">
        <?php if( has_post_thumbnail() ) : ?>
            <div class="post-thumbnail-wrapper relative">
                <a class="post-thumbnail block" href="<?php echo esc_url( $permalink ); ?>">
                    <?php the_post_thumbnail( 'voyager_card' ); ?>
                </a>
                <?php voyager_post_format_icon(); ?>
            </div>
        <?php endif; ?>
        <div class="post-summary">
            <h2 class="entry-title txt-6 mt-3 mb-1">
                <a class="naked" href="<?php echo esc_url( $permalink ); ?>" rel="bookmark">
                    <?php the_title(); ?>
                </a>
            </h2>
            <div class="excerpt"><?php the_excerpt(); ?></div>
        </div>
        <footer class="post-footer grey-3"><?php voyager_post_meta(); ?></footer>
    </div>
</article>