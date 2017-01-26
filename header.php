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
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'kids-in-tech' ); ?></a>

    <header id="masthead" class="site-header" role="banner">
        <div class="site-branding">
            <!-- TODO: change link when live -->
            <a href="<?php echo bloginfo('url'); ?>"><img src="http://local.kids.dev/wp-content/themes/kids-in-tech/img/logo-tm.png" alt="Kids in Tech" max-width="100%" /></a>
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
                            <h1>Inspire, Connect, Educate, Create</h1>
                            <p>
                                Creating the next generation of technology-savvy leaders through afterschool educational programs for kids and advancing computer literacy for all. Find out how to bring Kids in Tech to your program:
                            </p>
                            <!-- TODO: change link when live -->
                            <button class="hero-button"><a href="http://local.kids.dev/get-involved/">Join the Movement</a></button>
                        </div>

                    </div>
