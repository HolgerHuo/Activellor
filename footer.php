<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package activello
 */
?>
				</div><!-- close .*-inner (main-content or sidebar, depending if sidebar is used) -->
			</div><!-- close .row -->
		</div><!-- close .container -->
	</div><!-- close .site-content -->

	<div id="footer-area">
		<footer id="colophon" class="site-footer" role="contentinfo">
			<div class="site-info container">
				<div class="row">
					<?php if ( ! get_theme_mod( 'footer_social' ) ) { activello_social_icons();} ?>
					<div class="copyright col-md-12">
						<?php echo esc_html( get_theme_mod( 'activello_footer_copyright', 'Activello' ) ); ?>
						Be with you for <script language="JavaScript" type="text/javascript"> var urodz=new Date("2/13/2019"); var now=new Date(); var ile=now.getTime() - urodz.getTime(); var dni=Math.floor(ile / (1000 * 60 * 60 * 24)); document.write(+dni) </script> Days | Theme Activello by Colorlib and Holger ♥
					</div>
				</div>
			</div><!-- .site-info -->
			<button class="scroll-to-top"><i class="fa fa-angle-up"></i></button><!-- .scroll-to-top -->
		</footer><!-- #colophon -->
	</div>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
