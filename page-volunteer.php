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

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        while ( have_posts() ) : the_post();

            get_template_part( 'template-parts/content', 'page' );


        endwhile; // End of the loop.
        ?>
        <?php wp_reset_query(); ?>
        <!--<div class="success-area clear">
            <h3>student success stories</h3>
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
                                                'value'		=> 'volunteer',
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
        </div> -->
        <div id="volunteer-content" class="volunteer-content clear">
            <div class="volunteer-form-layout">
                <?php echo do_shortcode("[ninja_form id=2]"); ?>
            </div>
        </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
