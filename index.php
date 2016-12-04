<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kids_in_Tech
 */

get_header(); ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">
            <div class="hero-area">
                <div class="hero-content clear">
                    <h1>Invest in Future Tech Leaders</h1>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <button class="hero-button">Join the Movement</button>
                </div>
            </div>
            <div class="summary">
                <p>
                    Kids in tech connects student with volunteers resulting in powerful connections that...
                </p>
            </div>
            <div class="impact-area clear">
                <p>
                    our programs impact the community
                </p>
                <div class="impact-content">

                    <span><img class="img-shadow img-radius" src="http://local.kids.dev/wp-content/themes/kids-in-tech/img/teacher-student.jpg" max-width="100%" alt="Our programs impact the community" />
                    </span>
                    <span>
                        <ul>
                            <li>
                                <h3><span class="num">1</span>Program 2</h3>
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.
                                </p>
                            </li>
                            <li>
                                <h3><span class="num">2</span>Program 2</h3>
                                <p>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                </p>
                            </li>
                            <li>
                                <h3><span class="num">3</span>Program 3</h3>
                                <p>
                                    Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo pariatur.
                                </p>
                            </li>
                        </ul>
                    </span>
                </div>
            </div>
            <div class="support-area clear">
                <p>how you can support kids in tech</p>
                <div class="support-content">
                    <ul>
                        <li>
                            <h5>volunteer</h5>
                            <img src="http://local.kids.dev/wp-content/themes/kids-in-tech/img/volunteer.jpg" max-width="100%" />
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <button class="support-button" type="button">learn more</button>
                        </li>
                        <li>
                            <h5>donate</h5>
                            <img src="http://local.kids.dev/wp-content/themes/kids-in-tech/img/donate.jpg" max-width="100%" />
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <button class="support-button" type="button">learn more</button>
                        </li>
                        <li>
                            <h5>advocate</h5>
                            <img src="http://local.kids.dev/wp-content/themes/kids-in-tech/img/advocate.jpg" max-width="100%" />
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <button class="support-button" type="button">learn more</button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="success-area clear">
                <p>student success stories</p>
                <div class="success-content">

                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
