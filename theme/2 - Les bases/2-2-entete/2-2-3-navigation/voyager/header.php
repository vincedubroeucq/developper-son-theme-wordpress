<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' );?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body class="">
<div id="page" class="site">

    <a class="skip-link screen-reader-text" href="#primary">Skip to content</a>
    <header class="site-header relative">
        <div class="wrapper header-wrapper flex flex-column h-100">
            <div class="header-image-container absolute cover">
                <img class="header-image" src="img/default-header.jpg" alt="header-image-alt" />
            </div>
            <div class="topbar relative">
                <div class="wrapper flex flex-wrap align-center mw-xxl mx-auto px-5 py-2">
                    <nav class="navigation topbar-navigation ml-auto">
                        <ul id="topbar-menu" class="menu topbar-menu naked flex align-center">
                            <li class="menu-item ml-2 mb-0" v-for="item in topbarMenu">
                                <a class="naked grey-4 flex align-center p-1" :href="item.href">
                                    <span class="icon mr-1" v-if="item.icon" v-html="item.icon"></span>
                                    <span class="menu-item-title">{{ item.label }}</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="navbar relative">
                <div class="wrapper flex flex-wrap align-center maxw-xxl mx-auto px-5 py-2">
                    <div class="site-branding lh-0 flex align-center">
                        <a class="custom-logo-link block" href="index.html">
                            <svg id="logo-38" width="78" height="32" viewBox="0 0 78 32" fill="none" xmlns="http://www.w3.org/2000/svg"> <path d="M55.5 0H77.5L58.5 32H36.5L55.5 0Z" class="ccustom" fill="#FF7A00"></path> <path d="M35.5 0H51.5L32.5 32H16.5L35.5 0Z" class="ccompli1" fill="#FF9736"></path> <path d="M19.5 0H31.5L12.5 32H0.5L19.5 0Z" class="ccompli2" fill="#FFBC7D"></path> </svg>
                            <p class="site-title screen-reader-text">Voyager</p>
                        </a>
                        <div class="site-title-block">
                            <a class="site-title naked bold uppercase grey-1 p-1" href="index.html" rel="home">Voyager</a>
                            <span class="site-description block naked grey-1 txt-2 uppercase p-1">Développer son thème WordPress</span>
                        </div>
                    </div>
                    <nav id="site-navigation" class="navigation main-navigation">
                        <button class="menu-overlay-toggle naked p-2" aria-controls="main-menu-overlay" aria-expanded="false">
                            <svg class="icon icon-menu" viewBox="0 0 16 16"><rect x="0" fill="none" width="16" height="16"/><g><path d="M0 14h16v-2H0v2zM0 2v2h16V2H0zm0 7h16V7H0v2z"/></g></svg>
                            <span class="screen-reader-text">Toggle Menu</span>
                        </button>
                        <div id="main-menu-overlay" class="overlay main-menu-overlay text-center">
                            <div class="overlay-wrapper p-5">
                                <ul id="primary-menu" class="menu primary-menu naked">
                                    <li class="menu-item my-5" v-for="item in mainMenu">
                                        <a class="naked grey-1 uppercase bold p-1" :href="item.href">{{ item.label }}</a>
                                    </li>
                                </ul>
                                <form role="search" method="get" class="search-form flex flex-wrap flex-center" action="">
                                    <label>
                                        <span class="screen-reader-text">Rechercher&nbsp;:</span>
                                        <input type="search" class="search-field" placeholder="Chercher sur le site" value="" name="s">
                                    </label>
                                    <button type="submit" class="search-submit">
                                        <svg class="icon icon-search txt-2" aria-hidden="true" viewBox="238.67 90 24.51 24.2" xmlns="http://www.w3.org/2000/svg"><path d="m262.7 111.45-6.7276-6.7276c1.0124-1.5056 1.6039-3.3167 1.6039-5.2636 0-5.2146-4.2424-9.457-9.457-9.457-5.2146 0-9.457 4.2424-9.457 9.457 0 5.2147 4.2424 9.4571 9.457 9.4571 2.106 0 4.0532-0.69226 5.6266-1.8607l6.6746 6.6745c0.31473 0.31477 0.72729 0.47216 1.1398 0.47216 0.41257 0 0.8251-0.15739 1.1398-0.47216 0.62955-0.62955 0.62955-1.6502 0-2.2797zm-21.351-11.991c0-3.7332 3.0371-6.7704 6.7704-6.7704 3.7332 0 6.7704 3.0372 6.7704 6.7704 0 3.7332-3.0372 6.7704-6.7704 6.7704-3.7332 0-6.7704-3.0372-6.7704-6.7704z"></path></svg>
                                        <span class="search-submit-label screen-reader-text">Rechercher</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </nav><!-- #site-navigation -->
                </div>
            </div>
            <div class="title-block text-center relative m-auto p-5 grey-1">
                <p class="breadcrumbs mb-0">
                    <a href="index.html" class="breadcrumb naked grey-1 uppercase txt-2">Home</a>
                    <span class="seperator grey-1 uppercase txt-2 mx-1">></span>
                    <span href="" class="breadcrumb grey-1 uppercase txt-2">Blog</span>
                </p>
                <hr class="title-border" />
                <h1 class="post-title mt-0">Blog</h1>
            </div>
        </div>
    </header>