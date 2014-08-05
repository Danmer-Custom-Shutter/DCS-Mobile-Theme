<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Footer Template
 *
 *
 * @file           footer.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.2
 * @filesource     wp-content/themes/responsive/footer.php
 * @link           http://codex.wordpress.org/Theme_Development#Footer_.28footer.php.29
 * @since          available since Release 1.0
 */

/*
 * Globalize Theme options
 */
global $responsive_options;
$responsive_options = responsive_get_options();
?>
<?php
		if(is_page(26) || is_page(660)){
			?>
			<div class="fine-print" style="padding: 0px 10px; font-size: .75em;">*50% Off every second window covering. Retail value of the 2nd window covering must be equal to or less than the retail value of the first window covering. †Free financing for 12 months with minimum payments. **Rush charges and restrictions may apply. Cannot be combined with other offers.  Ask your designer for details.  </div>
			<?php
		}
		?>
<?php responsive_wrapper_bottom(); // after wrapper content hook ?>
</div><!-- end of #wrapper -->
<?php responsive_wrapper_end(); // after wrapper hook ?>
</div><!-- end of #container -->
<?php responsive_container_end(); // after container hook ?>

<div id="footer" class="clearfix">
	<?php responsive_footer_top(); ?>

	<div id="footer-wrapper">

		<?php get_sidebar( 'footer' ); ?>

		<div class="grid col-940 social-footer clearfix">

			<div class="grid col-380 fit clearfix">
				<?php

				// First let's check if any of this was set

				echo '<ul class="social-icons">';

				if( !empty( $responsive_options['facebook_uid'] ) ) {
					echo '<li class="facebook-icon"><a href="' . $responsive_options['facebook_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/facebook-icon.png' ) . '" width="29" height="29" alt="Facebook">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['linkedin_uid'] ) ) {
					echo '<li class="linkedin-icon"><a href="' . $responsive_options['linkedin_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/linkedin-icon.png' ) . '" width="29" height="29" alt="LinkedIn">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['youtube_uid'] ) ) {
					echo '<li class="youtube-icon"><a href="' . $responsive_options['youtube_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/youtube-icon.png' ) . '" width="29" height="29" alt="YouTube">'
						. '</a></li>';
				}
				
				if( !empty( $responsive_options['twitter_uid'] ) ) {
					echo '<li class="twitter-icon"><a href="' . $responsive_options['twitter_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/twitter-icon.png' ) . '" width="29" height="29" alt="Twitter">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['stumble_uid'] ) ) {
					echo '<li class="stumble-upon-icon"><a href="' . $responsive_options['stumble_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/stumble-upon-icon.png' ) . '" width="29" height="29" alt="StumbleUpon">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['rss_uid'] ) ) {
					echo '<li class="rss-feed-icon"><a href="' . $responsive_options['rss_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/rss-feed-icon.png' ) . '" width="29" height="29" alt="RSS Feed">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['google_plus_uid'] ) ) {
					echo '<li class="google-plus-icon"><a href="' . $responsive_options['google_plus_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/googleplus-icon.png' ) . '" width="29" height="29" alt="Google Plus">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['instagram_uid'] ) ) {
					echo '<li class="instagram-icon"><a href="' . $responsive_options['instagram_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/instagram-icon.png' ) . '" width="29" height="29" alt="Instagram">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['pinterest_uid'] ) ) {
					echo '<li class="pinterest-icon"><a href="' . $responsive_options['pinterest_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/pinterest-icon.png' ) . '" width="29" height="29" alt="Pinterest">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['yelp_uid'] ) ) {
					echo '<li class="yelp-icon"><a href="' . $responsive_options['yelp_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/yelp-icon.png' ) . '" width="29" height="29" alt="Yelp!">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['vimeo_uid'] ) ) {
					echo '<li class="vimeo-icon"><a href="' . $responsive_options['vimeo_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/vimeo-icon.png' ) . '" width="29" height="29" alt="Vimeo">'
						. '</a></li>';
				}

				if( !empty( $responsive_options['foursquare_uid'] ) ) {
					echo '<li class="foursquare-icon"><a href="' . $responsive_options['foursquare_uid'] . '">'
						. '<img src="' . responsive_child_uri( '/core/icons/foursquare-icon.png' ) . '" width="29" height="29" alt="foursquare">'
						. '</a></li>';
				}
				
					echo '<li class="danmer-icon"><a href="http://www.danmer.com/?skip_mb=1">'
						. '<img src="' . responsive_child_uri( '/core/icons/danmer-icon.png' ) . '" width="87" height="20" alt="foursquare">'
						. '<br/><span>Visit Full Site</span></a></li>';

				echo '</ul><!-- end of .social-icons -->';
				?>
			</div>
			<!-- end of col-380 fit -->

		</div>
		<!-- end of col-940 -->
		<?php get_sidebar( 'colophon' ); ?>

		<div class="grid col-300 copyright">
			<?php esc_attr_e( '&copy;', 'responsive' ); ?> <?php _e( date( 'Y' ) ); ?><a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
				Danmer, Inc.
			</a>
		</div>
		<!-- end of .copyright -->


		<div class="grid col-300 fit powered">
			Contractors License #574304
		</div>
		<!-- end .powered -->
		
		

	</div>
	<!-- end #footer-wrapper -->

	<?php responsive_footer_bottom(); ?>
</div><!-- end #footer -->
<?php responsive_footer_after(); ?>

<?php wp_footer(); ?>
</body>
</html>