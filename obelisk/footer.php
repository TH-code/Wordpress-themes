<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
	<div style="clear:both">&nbsp;</div>
	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

		<?php
			/* A sidebar in the footer? Yep. You can can customize
			 * your footer with three columns of widgets.
			 */
			if ( ! is_404() )
				get_sidebar( 'footer' );
		?>

        <p>Steendrukkerij Obelisk, Hefswalsterweg <b>12</b>, <b>9982</b> TR, Uithuizermeeden, tel: <b>(0031) 0595 413526</b></p>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>