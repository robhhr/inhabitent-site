<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
					<?php echo
						'<style type="text/css">
						.site-footer { background-image:url('.get_stylesheet_directory_uri().'/images/dark-wood.png) !important}
						</style>';
					?>
				<div class="contact-info">
					<p>Contact Info</p>
					<a href="<?php echo esc_url( 'mailto: info@inhabitent.com' ); ?>"><?php echo "<i class='fa fa-envelope'></i> " ?><?php printf( esc_html( ' info@inhabitent.com' ) ); ?></a><br>
					<a href="<?php echo esc_url( 'tel:7784567891' ); ?>"><?php echo "<i class='fa fa-phone'></i>" ?><?php printf( esc_html( ' 778-456-7891 ' ) ); ?></a><br>
					<a href="<?php echo esc_url( 'www.google.com' ); ?>"><?php echo "<i class='fa fa-facebook-square' id='sm-icon'></i>" ?></a>
					<a href="<?php echo esc_url( 'www.google.com' ); ?>"><?php echo "<i class='fa fa-twitter-square' id='sm-icon'></i>" ?></a>
					<a href="<?php echo esc_url( 'www.google.com' ); ?>"><?php echo "<i class='fa fa-google-plus-square' id='sm-icon'></i>" ?></a>
				</div><!-- .site-info -->
				<div class="business-hours">
					<p>Business Hours</p>
					<div class="hours"><?php printf( esc_html( ' Monday-Friday: ' ) ); ?></a></div><?php printf( esc_html( ' 9am to 5pm' ) ); ?><br>
					<div class="hours"><?php printf( esc_html( ' Saturday: ' ) ); ?></a></div><?php printf( esc_html( ' 10am to 2pm' ) ); ?><br>
					<div class="hours"><?php printf( esc_html( ' Sunday: ' ) ); ?></a></div><?php printf( esc_html( ' closed' ) ); ?>
				</div>
				<div class="footer-logo">
					<div class="f-logo">
					<?php echo
						'<style type="text/css">
						.f-logo { background-image:url('.get_stylesheet_directory_uri().'/images/inhabitent-logo-text.svg) !important}
						</style>';
					?>
					</div>
				</div>
			</footer><!-- #colophon -->
		</div><!-- #page -->

		<?php wp_footer(); ?>
	</body>
</html>