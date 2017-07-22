<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->

		<footer class="site-footer">
			<?php
				/**
				 * Fires before the twentysixteen footer text for footer customization.
				 *
				 * @since Twenty Sixteen 1.0
				 */
				do_action( 'twentysixteen_credits' );
			?>

			<div class="footer-column" id="footer-left">
				<div class="site-branding" style="width:100%; float:left; margin-bottom: 1em">
					<?php twentysixteen_the_custom_logo(); ?>
					<p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
				</div>

				<div id="footer-text">
					<?php dynamic_sidebar( 'footer_text' ); ?>
				</div>
				
			</div><!-- .site-branding -->
		</footer><!-- .site-footer -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<?php wp_footer(); ?>
</body>
</html>
