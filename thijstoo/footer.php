<?php
/**
 * The template for displaying the footer.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>
        </div>
    <?php
        get_sidebar( 'footer' );
    ?>
    </div>
    <div class="row">
	    <footer>
            <div class="cell width-8 position-0">    
		        <a href="<?php echo home_url( '/' ) ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
			        <?php bloginfo( 'name' ); ?>
		        </a>

		        <?php do_action( 'starkers_credits' ); ?>
		
		        <a href="<?php echo esc_url( __('http://wordpress.org/', 'starkers') ); ?>" title="<?php esc_attr_e('Semantic Personal Publishing Platform', 'starkers'); ?>" rel="generator"> 
			        <?php printf( __('Proudly powered by %s.', 'starkers'), 'WordPress' ); ?>
		        </a>
            </div>
            <div class="cell width-4 position-12">    
                <div id="head" />
            </div>
	    </footer>
    </div>
    <?php
	    /* Always have wp_footer() just before the closing </body>
	     * tag of your theme, or you will break many plugins, which
	     * generally use this hook to reference JavaScript files.
	     */

	    wp_footer();
    ?>
</div>
</body>
</html>
