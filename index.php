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

            <div class="summary clear">
                <h3>
                    We excite, educate, and empower children to use technology -- promoting a positive environment and fostering lifelong interest through our after-school programming.
                </h3>
            </div>
            <div class="impact-area clear">
                <h3>
                    Our Program Impacts the Community
                </h3>
                <div class="impact-content clear">
                    <!-- TODO: change link when live -->
                    <span style="text-align:center;">
                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/1HezCWFyeSg?rel=0" frameborder="0" allowfullscreen></iframe>
                    </span>
                    <span>
                        <ul>
                            <li>
                                <h3><span class="num">1</span>Impact 1</h3>
                                <p>
                                    Kids in Tech provides critical technology education for kids and youth in after-school programs in Greater Lowell, Massachusetts.
                                </p>
                            </li>
                            <li>
                                <h3><span class="num">2</span>Impact 2</h3>
                                <p>
                                    Tech education is not just about learning computers, it’s about logic, problem solving, and creativity. When kids better understand the origins and implications of technology, they’ll gain a greater sense of responsibility and respect for what’s possible in today’s world and the future ahead.
                                </p>
                            </li>
                        </ul>
                    </span>
                </div>
            </div>
            <div class="support-area clear">
                <h3>How you can help Kids in Tech</h3>
                <div class="support-content">
                    <ul>
                        <li>
                            <!-- TODO: Make this content dynamic  -->
                            <h5>volunteer</h5>
                            <img class="img-shadow img-radius"  src="http://local.kids.dev/wp-content/themes/kids-in-tech/img/volunteer.jpg" max-width="100%" />
                            <p>We rely on volunteers to bring our programs to life. Find out how you can get involved today!</p>
                            <!-- TODO: change link when live -->
                            <button class="support-button" type="button"><a href="local.kids.dev/volunteer">learn more</a></button>
                        </li>
                        <li>
                            <h5>donate</h5>
                            <img class="img-shadow img-radius" src="http://local.kids.dev/wp-content/themes/kids-in-tech/img/donate.jpg" max-width="100%" />
                            <p>Donors like you keep us running with both financial contributions and in-kind donations.</p>
                            <!-- TODO: change link when live -->
                            <button class="support-button" type="button"><a href="local.kids.dev/donate">learn more</a></button>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="success-area clear">
                <div class="overlay">
                <h3>student success stories</h3>
                <?php echo do_shortcode('[testimonial_rotator id=133]'); ?>
                    <!--<section class="rw-wrapper clear">
                    		<div class="rw-words">
                                //<?php
                                    //$args = array(
                                        //	'numberposts'	=> -1,
                                        	//'post_type'		=> //'testimonial',
                                        //	'meta_query'	=> array(
                                        	//	'relation'		=> 'AND',
                                        	//	array(
                                        	//		'key'		=> 'type',
                                        	//		'value'		=> 'student',
                                        	//		'compare'	=> '='
                                        	//	)
                                        //    )
                                    //    );
                                    //    $the_query = new WP_Query( $args );
                                //?>
                                //<?php if( $the_query->have_posts() ): ?>
                                //<?php while ( $the_query->have_posts() ) : //$the_query->the_post();
                                    //set up variables student stories
                                //    $name= get_field('name');
                                //    $testimonial = get_field('testimonial');
                                //?>
                                <span>
                                    <p class="student-testimonial">
                                    //    <?php echo $testimonial; ?>
                                    </p>
                                    <p class="student-name">&mdash; //<?php echo $name; ?></p>
                                </span>
                                //<?php endwhile; ?>
                            //<?php endif; ?>

                            //<?php wp_reset_query();	?>
                    		</div>
                    </section>-->
                </div>
            </div>
            <div class="impact2-area clear">
                <h3>
                    Kids in Tech Programming Boosts Academic Performance
                </h3>
                <div class="impact2-content">
                    <ul>
                        <li>
                            <h4>90%</h4>
                            <p>Spend more time doing homework</p>
                        </li>
                        <li>
                            <h4>95%</h4>
                            <p>Improved their technology skills and school grades</p>
                        </li>
                        <li>
                            <h4>98%</h4>
                            <p>Try harder in school</p>
                        </li>
                    </ul>
                </div>
            </div>
        </main><!-- #main -->
    </div><!-- #primary -->

<?php

get_footer();
