<?php
/**
 * The template for displaying the footer.
 *
 * @package RED_Starter_Theme
 */

?>

			</div><!-- #content -->

			<footer id="colophon" class="site-footer" role="contentinfo">
					<?php dynamic_sidebar( 'sidebar-2' ); ?>
				<section class="footer-logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><img src="<?php echo get_template_directory_uri().'/assets/images/logos/' ?>inhabitent-logo-text.svg" alt="Inhabitent Logo"/></a></section>
				<section class="footer-copyright"><p class="copyright">COPYRIGHT &copy; 2019 INHABITENT</p></section>
			</footer><!-- #colophon -->
		</div><!-- #page -->
		
		<?php wp_footer(); ?>

	</body>
</html>
