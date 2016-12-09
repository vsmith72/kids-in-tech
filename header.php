<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kids_in_Tech
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kids-in-tech' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <!-- TODO: change link when live -->
            <a href="<?php echo bloginfo('url'); ?>"><img src="http://local.kids.dev/wp-content/themes/kids-in-tech/img/logo.png" alt="Kids in Tech" max-width="100%" /></a>
            <br  />
            <span class="motto">Excite. <span>Engage.</span> Educate.</span>

        </div><!-- .site-branding -->

        <nav id="site-navigation" class="main-navigation" role="navigation">
            <?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
        </nav><!-- #site-navigation -->
    </header><!-- #masthead -->

        <div id="primary" class="content-area">
            <main id="main" class="site-main" role="main">
                <div id="content" class="site-content">

                    <div class="hero-area">
                        <div class="hero-content clear">
                            <h1>Invest in Future Tech Leaders</h1>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                            </p>
                            <!-- TODO: change link when live -->
                            <button class="hero-button"><a href="http://local.kids.dev/take-action/">Join the Movement</a></button>
                        </div>

                    </div>
