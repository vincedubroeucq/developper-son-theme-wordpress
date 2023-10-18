<?php
/**
 * Widget area displayed in the footer
 */

if ( ! is_active_sidebar( 'sidebar-1' ) ) return;
?>

<aside class="widget-area footer-widget-area grey-1">
    <div class="wrapper widget-area-wrapper grid maxw-xxl mx-auto px-5 py-7">
        <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div>
</aside>