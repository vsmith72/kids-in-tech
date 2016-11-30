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
            <!-- Email Form Here -->
            <!-- TODO: add sidebar function the functions.php -->
            <!-- TODO: add get sidebar here -->
        </div>
        <div class="logo-footer">
            <img src="http://local.kids.dev/wp-content/themes/kids-in-tech/img/logo.png" alt="Kids in Tech" max-width="100%" />
        </div>
        <div class="footer-navigation">
            <!-- Footer Nav -->
            <!-- TODO: add footer nav to functions.php -->
            <!-- TODO: add wp nav bar here -->
            <!-- TODO: style as vertical nav -->
        </div>
        <div class="site-info">
            <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'kids-in-tech' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'kids-in-tech' ), 'WordPress' ); ?></a>
            <span class="sep"> | </span>
            Website Design by <a href="https://www.anphira.com/" rel="designer">Anphira</a>
            <span class="sep"> | </span>
            <?php printf( esc_html__( 'Website Developed by %2$s', 'kids-in-tech' ), 'kids-in-tech', '<a href="http://www.vanessa-smith.com" rel="designer">Vanessa Smith</a>' ); ?>
        </div><!-- .site-info -->
    </footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
