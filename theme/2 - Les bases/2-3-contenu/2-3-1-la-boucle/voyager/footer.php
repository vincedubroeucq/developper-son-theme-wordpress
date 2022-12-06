<?php
/**
 * Main footer template
 */
?>

<footer class="site-footer">
    <div class="wrapper footer-wrapper">
        <?php get_sidebar(); ?>
        <div class="site-info text-center bg-grey-5 grey-1">
            <div class="wrapper site-info-wrapper flex-wrap align-center space-between maxw-xxl mx-auto px-5 py-2">
                <span class="copyright">Theme by <a href="vincentdubroeucq.com">Vincent Dubroeucq</a></span>
                <nav class="navigation footer-navigation ml-auto">
                    <!-- <ul id="footer-menu" class="menu footer-menu naked flex align-center flex-center">
                        <li class="menu-item mb-0" v-for="item in footerMenu">
                            <a class="naked grey-2 p-1" :href="item.href">{{ item.label }}</a>
                        </li>
                    </ul> -->
                    <?php 
                        wp_nav_menu(
                            array(
                                'theme_location' => 'menu-3',
                                'menu_class'     => 'menu footer-menu naked flex align-center flex-center',
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