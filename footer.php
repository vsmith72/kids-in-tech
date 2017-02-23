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
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/footer-logo-tm.png" alt="Kids in Tech" max-width="100%" />
                    <p>Fostering computer literacy and inspiring youth to pursue advanced computer science activities</p>
                    <span class="footer-social clear">
                        <ul>
                            <li>
                                <a href="https://facebook.com/kidsintech1" target="_blank">
                                      <i class="fa fa-facebook fa-2x"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://twitter.com/kids_in_tech1"  target="_blank">
                                        <i class="fa fa-twitter fa-2x"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://instagram.com/kids_in_tech1"  target="_blank">
                                        <i class="fa fa-instagram fa-2x"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://www.youtube.com/channel/UChQLLgdysBxpF-2HHLEE3tg"  target="_blank">
                                        <i class="fa fa-youtube-play fa-2x"></i>
                                </a>
                            </li>
                            <li>
                                <a href="https://medium.com/@kidsintech1"  target="_blank">
                                        <i class="fa fa-medium fa-2x"></i>
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
                &copy;<?php auto_copyright('2016');  // 2010 - 2011 ?> Kids in Tech, Inc. All Rights Reserved.
                <span class="sep">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                Website Design by <a href="https://www.anphira.com/" rel="designer">Anphira</a>
                <span class="sep">&nbsp;&nbsp;|&nbsp;&nbsp;</span>
                Website Developed by <a href="http://www.vanessa-smith.com" >Vanessa Smith</a>
            </p>
            </div><!-- .site-info -->
        </div>

    </footer><!-- #colophon -->
</div><!-- #page -->
<!-- Start Google Analytics Code -->
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-90920703-1', 'auto');
  ga('send', 'pageview');

</script>
<!-- End Google Analytics Code -->
<?php wp_footer(); ?>

</body>
</html>
