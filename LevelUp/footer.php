<?php
/**
 * The template for displaying the footer.
 *
 * Contains footer content and the closing of the
 * #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
</div><!-- #page -->
<div class="footer-wrapper">
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
		<!-- 
			<?php do_action( 'twentytwelve_credits' ); ?>
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentytwelve' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentytwelve' ); ?>"><?php printf( __( 'Proudly powered by %s', 'twentytwelve' ), 'WordPress' ); ?></a>
			.site-info -->
			<p>Morapad 7, 2719JA, Zoetermeer</p>
		</div>
	</footer><!-- #colophon -->
</div>

<?php wp_footer(); ?>
</body>
</html>