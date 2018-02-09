<!DOCTYPE html>
<html lang="ru" dir="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title><?php bloginfo('name'); ?></title>
        <!--[if lt IE 9]><script src="js/html5.js"></script><![endif]-->
        <!--link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/styles.css"-->
        <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <?php wp_head(); ?>
    </head>

    <body>
        <div id="container">
            <!--header>
                <a href="#" id="logo"><img src="<?php get_theme_path() ?>images/logo.png" width="221" height="84" alt=""></a>
                <nav>
                    <ul>
                    <li><a href="#" class="current">Home</a></li>
                    <li><a href="#">About us</a></li>
                    <li><a href="#">Services</a></li>
                    <li><a href="#">Portfolio</a></li>
                    <li><a href="#">News</a></li>
                    <li><a href="#">Contact</a></li>
                    </ul>
                </nav>
            </header-->

            <header>
                <a href="/" id="logo"><img src="<?php get_theme_path() ?>images/logo.png" width="221" height="84" alt=""></a>
                <?php wp_nav_menu( array('menu' => 'Main', 'container' => 'nav' )); ?>
            </header>

            <?php if(is_front_page()): ?>
                <div id="intro"> <img src="<?php get_theme_path() ?>images/banner1.png" alt=""></div>
            <?php endif; ?>