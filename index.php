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

            <div class="summary">
                <p>
                    We excite, educate, and empower children to use technology, promoting a positive environment, and fostering lifelong interest through our afterschool programming.
                </p>
            </div>
            <div class="impact-area clear">
                <p>
                    Our Program Impacts the Community
                </p>
                <div class="impact-content">
                    <!-- TODO: change link when live -->
                    <span><img class="img-shadow img-radius" src="http://local.kids.dev/wp-content/themes/kids-in-tech/img/teacher-student.jpg" max-width="100%" alt="Our programs impact the community" />
                    </span>
                    <span>
                        <ul>
                            <li>
                                <h3><span class="num">1</span>Impact 1</h3>
                                <p>

                                </p>
                            </li>
                            <li>
                                <h3><span class="num">2</span>Impact 2</h3>
                                <p>
                                    Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
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
                    </ul>
                </div>
            </div>
            <div class="success-area clear">
                <p>student success stories</p>
                    <section class="rw-wrapper clear">
                    		<div class="rw-words">
                                <?php
                                    $args = array(
                                        	'numberposts'	=> -1,
                                        	'post_type'		=> 'testimonial',
                                        	'meta_query'	=> array(
                                        		'relation'		=> 'AND',
                                        		array(
                                        			'key'		=> 'type',
                                        			'value'		=> 'student',
                                        			'compare'	=> '='
                                        		)
                                            )
                                        );
                                        $the_query = new WP_Query( $args );
                                ?>
                                <?php if( $the_query->have_posts() ): ?>
                                <?php while ( $the_query->have_posts() ) : $the_query->the_post();
                                    //set up variables student stories
                                    $name= get_field('name');
                                    $testimonial = get_field('testimonial');
                                ?>
                                <span>
                                    <p class="student-testimonial">
                                        <?php echo $testimonial; ?>
                                    </p>
                                    <p class="student-name">&mdash;<?php echo $name; ?></p>
                                </span>
                                <?php endwhile; ?>
                            <?php endif; ?>

                            <?php wp_reset_query();	?>
                    		</div>
                    </section>
            </div>
            <div class="impact2-area">
                <p>
                    the impact of kids in tech
                </p>
                <div class="impact2-content">
                    <ul>
                        <li>
                            <h5>1,200</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </li>
                        <li>
                            <h5>$10,000</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </li>
                        <li>
                            <h5>91%</h5>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        </li>
                    </ul>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
