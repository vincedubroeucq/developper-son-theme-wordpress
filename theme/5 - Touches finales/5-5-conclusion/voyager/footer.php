<?php
/**
 * Main footer template
 */

/* translators: %s = author link. Please keep ! */
$default = sprintf( __( 'Theme by %s', 'voyager' ), '<a href="https://vincentdubroeucq.com">Vincent Dubroeucq</a>' );
$message = get_theme_mod( 'voyager_footer_text', $default );
?>

    <footer class="site-footer">
        <div class="wrapper footer-wrapper">
            <?php get_sidebar(); ?>
            <div class="site-info text-center bg-grey-5 grey-1">
                <div class="wrapper site-info-wrapper flex-wrap align-center space-between maxw-xxl mx-auto px-5 py-2">
                    <span class="copyright"><?php echo wp_kses_post( $message ); ?></span>
                    <nav class="navigation footer-navigation ml-auto">
                        <?php 
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-3',
                                    'menu_class'     => 'menu footer-menu naked flex align-center flex-center flex-wrap',
                                    'container'      => 'ul'
                                )
                            );
                        ?>
                    </nav>
                </div>
            </div>
        </div>
    </footer>
</div>
<?php wp_footer(); ?>
</body>
</html>