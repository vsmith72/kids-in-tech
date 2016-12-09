<?php
/**
 * Template Name: Volunteer
 *The template for displaying all volunteer pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Kids_in_Tech
 */

get_header('volunteer'); ?>

            <div class="support-area clear">
                <p>how you can support kids in tech</p>
                <div class="support-content">
                    <ul>
                        <li>
                            <!-- TODO: Make this content dynamic  -->
                            <h5>volunteer</h5>
                            <img class="img-shadow img-radius"  src="http://local.kids.dev/wp-content/themes/kids-in-tech/img/volunteer.jpg" max-width="100%" />
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <!-- TODO: change link when live -->
                            <button class="support-button" type="button"><a href="local.kids.dev/volunteer">learn more</a></button>
                        </li>
                        <li>
                            <h5>donate</h5>
                            <img class="img-shadow img-radius" src="http://local.kids.dev/wp-content/themes/kids-in-tech/img/donate.jpg" max-width="100%" />
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <!-- TODO: change link when live -->
                            <button class="support-button" type="button"><a href="local.kids.dev/donate">learn more</a></button>
                        </li>
                        <li>
                            <h5>advocate</h5>
                            <img class="img-shadow img-radius" src="http://local.kids.dev/wp-content/themes/kids-in-tech/img/advocate.jpg" max-width="100%" />
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                            <!-- TODO: change link when live -->
                            <button class="support-button" type="button"><a href="local.kids.dev/advocate">learn more</a></button>
                        </li>
                    </ul>
                </div>
            </div>
            <!-- <div class="success-area clear">
                <p>student success stories</p>
                    <section class="rw-wrapper clear">
                    		<div class="rw-words">
                                <?php query_posts('post_type=student_story');?>
                                <?php
                                while (have_posts()) : the_post();
                                    //set up variables student stories
                                    $student= get_field('student');
                                    $testimonial = get_field('testimonial');
                                ?>
                                <span>
                                    <p class="student-testimonial">
                                        <?php echo $testimonial; ?>
                                    </p>
                                    <p class="student-name">&mdash;<?php echo $student; ?></p>
                                </span>
                                <?php endwhile; wp_reset_query(); ?>
                    		</div>
                    </section>
                </div> -->
                <div id="volunteer-content" class="volunteer-content clear">

                        <?php echo do_shortcode("[ninja_form id=2]"); ?>

                </div>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
