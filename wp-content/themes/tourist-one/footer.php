<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package tourist
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
        <a class="footer-title" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <img class="logo" src= "http://localhost:8888/tourist/wp-content/uploads/2017/07/tourist-logo-e1499271214549.png" />
            <span>ourist New App</span>
        </a>
        <p>Support: <a href="mailto:support@TouristNewApp.com">support@TouristNewApp.com</a></p>
        <p><a href="http://touristnewapp.com/terms_privacy.html">Terms</a> and <a href="http://touristnewapp.com/privacy.html">Privacy Policy</a></p>
        <div class="ganyc-logo"><a href="http://www.ganyc.org/industry-partners" target="_black"><img src="http://localhost:8888/tourist/wp-content/uploads/2017/07/ganyc_logo.png" alt="GANYC" /></a></div>
        <p>&#169 2016-2099 Pine Group, LLC. All rights reserved.</p>
	</footer><!-- #colophon -->
    </div><!-- .site-info -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
