<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Kids_in_Tech
 */

?>

    </div><!-- #content -->

    <footer id="colophon" class="site-footer" role="contentinfo">
        <div class="foot-sidebar">
            <?php dynamic_sidebar('newsletter');?>
        </div>
        <div class="footer-content">
            <div class="clear">
                <div class="footer-logo">
                    <img src="http://local.kids.dev/wp-content/themes/kids-in-tech/img/footer-logo.png" alt="Kids in Tech" max-width="100%" />
                    <p>A little bit about the organzation should go here. Nothing much just a litle bit of something.</p>
                    <span class="social-navigation clear">
                        <ul>
                            <li>
                                <a href="https://facebook.com/kidsintech1" target="_blank">
                                    <span class="fa-stack fa-lg">
                                      <i class="fa fa-circle fa-stack-2x"></i>
                                      <i class="fa fa-facebook fa-stack-1x"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/kids_in_tech1"  target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-twitter fa-stack-1x"></i>
                                    </span>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/kids_in_tech1"  target="_blank">
                                    <span class="fa-stack fa-lg">
                                        <i class="fa fa-circle fa-stack-1x"></i>
                                        <i class="fa fa-instagram fa-stack-1x"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </span>
                </div>
                <div class="footer-navigation">
                    <!-- Footer Nav -->
                    <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_id' => 'footer-menu' ) ); ?>
                </div>
            </div>
            <div class="site-info">
                <p>
                <?php function auto_copyright($year = 'auto'){ ?>
                   <?php if(intval($year) == 'auto'){ $year = date('Y'); } ?>
                   <?php if(intval($year) == date('Y')){ echo intval($year); } ?>
                   <?php if(intval($year) < date('Y')){ echo intval($year) . ' - ' . date('Y'); } ?>
                   <?php if(intval($year) > date('Y')){ echo date('Y'); } ?>
                <?php } ?>
                &copy;<?php auto_copyright('2016');  // 2010 - 2011 ?> Kids in Tech
                <span class="sep">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                Website Design by <a href="https://www.anphira.com/" rel="designer">Anphira</a>
                <span class="sep">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                Website Developed by <a href="http://www.vanessa-smith.com" >Vanessa Smith</a>
            </p>
            </div><!-- .site-info -->
        </div>

    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
