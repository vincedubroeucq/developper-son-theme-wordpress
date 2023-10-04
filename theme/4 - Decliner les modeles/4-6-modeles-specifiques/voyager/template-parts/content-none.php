<?php
/**
 * Template part for displaying error message when there is no content available.
 */
$message = is_search() ? __( 'Sorry, but we could not find anything that matched your search terms. Please try again with some different keywords.', 'voyager' ) : __( 'Sorry, but we could not find what you are looking for. Can you maybe try a search ?', 'voyager' );
?>

<div class="no-results not-found p-5">
    <p><?php echo esc_html( $message ); ?></p>
    <?php get_search_form(); ?>
</div>