<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) & !(IE 8)]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/main.css"/>

<?php //Scroll Reveal ?>
<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>

<?php //Generic Script Number 1. ?>
<script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/min/scripts-min.js"></script>

<?php wp_head(); ?>
</head>
<body>
    <section class="headerBar">
        <div class="container">
            <div class="imageContainer">
                <img src="http://placehold.it/300x120" />
            </div>
        </div>
    </section>
    <section class="nav nav_desktop">
        <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
    </section>
    <section class="nav nav_mobile">
        <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri(); ?>/js/min/responsive-menu-min.js"></script>
        <div onclick="toggleMenu()" class="menubar">
            <div id="menu-button-container">
                <div>
                </div>
            </div>
            <p id="menu-text">
                Menu
            </p>
        </div>
        <div id="nav-dropdown" class="inactive">
            <?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
        </div>
    </section>
