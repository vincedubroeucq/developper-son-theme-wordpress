<?php
/**
 * Main header template
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'voyager' ) ?></a>
    <header class="site-header relative">
        <div class="wrapper header-wrapper flex flex-column h-100">
            <?php voyager_header_image(); ?>
            <div class="topbar relative">
                <div class="wrapper flex flex-wrap align-center mw-xxl mx-auto px-5 py-2">
                    <nav class="navigation topbar-navigation ml-auto">
                        <!-- <ul id="topbar-menu" class="menu topbar-menu naked flex align-center">
                            <li class="menu-item ml-2 mb-0" v-for="item in topbarMenu">
                                <a class="naked grey-4 flex align-center p-1" :href="item.href">
                                    <span class="icon mr-1" v-if="item.icon" v-html="item.icon"></span>
                                    <span class="menu-item-title">{{ item.label }}</span>
                                </a>
                            </li>
                        </ul> -->
                        <?php 
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-2',
                                    'menu_class'     => 'menu topbar-menu naked flex align-center',
                                    'container'      => 'ul'
                                )
                            );
                        ?>
                    </nav>
                </div>
            </div>
            <div class="navbar relative">
                <div class="wrapper flex flex-wrap align-center maxw-xxl mx-auto px-5 py-2">
                    <div class="site-branding lh-0 flex align-center">
                        <a class="custom-logo-link block" href="index.html">
                            <svg id="logo-38" width="78" height="32" viewBox="0 0 78 32" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M55.5 0H77.5L58.5 32H36.5L55.5 0Z" fill="#FF7A00"></path><path d="M35.5 0H51.5L32.5 32H16.5L35.5 0Z" fill="#FF9736"></path><path d="M19.5 0H31.5L12.5 32H0.5L19.5 0Z" fill="#FFBC7D"></path></svg>
                            <p class="site-title screen-reader-text">Voyager</p>
                        </a>
                        <div class="site-title-block">
                            <a class="site-title naked bold uppercase grey-1 p-1" href="<?php echo esc_url( home_url() ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                            <span class="site-description block naked grey-1 txt-2 uppercase p-1"><?php bloginfo( 'description' ); ?></span>
                        </div>
                    </div>
                    <nav id="site-navigation" class="navigation main-navigation">
                        <button class="menu-overlay-toggle naked p-2" aria-controls="main-menu-overlay" aria-expanded="false">
                            <svg class="icon icon-menu" viewBox="0 0 16 16"><rect x="0" fill="none" width="16" height="16"/><g><path d="M0 14h16v-2H0v2zM0 2v2h16V2H0zm0 7h16V7H0v2z"/></g></svg>
                            <span class="screen-reader-text"><?php esc_html_e( 'Toggle Menu', 'voyager' ); ?></span>
                        </button>
                        <div id="main-menu-overlay" class="overlay main-menu-overlay text-center">
                            <div class="overlay-wrapper p-5">
                                <!-- <ul id="primary-menu" class="menu primary-menu naked">
                                    <li class="menu-item my-5" v-for="item in mainMenu">
                                        <a class="naked grey-1 uppercase bold p-1" :href="item.href">{{ item.label }}</a>
                                    </li>
                                </ul> -->
                                <?php 
                                    wp_nav_menu(
                                        array(
                                            'theme_location' => 'menu-1',
                                            'menu_class'     => 'menu primary-menu naked',
                                            'container'      => 'ul'
                                        )
                                    ); 
                                ?>
                                <?php get_search_form(); ?>
                            </div>
                        </div>
                    </nav><!-- #site-navigation -->
                </div>
            </div>
            <?php get_template_part( 'template-parts/header-hero' ); ?>
        </div>
    </header>