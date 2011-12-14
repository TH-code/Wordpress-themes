<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>



        <?php //if ( !get_post_meta( $page_id, '_wp_page_template', true ) == 'shop.php' &&
              //     !get_post_meta( $page_id, '_wp_page_template', true ) == 'onecolumn-page.php' ) { ?>
        <?php if ( !get_post_meta( $page_id, '_wp_page_template', true ) == 'onecolumn-page.php' ) { ?>
    </div>
    <div  class="cell width-4 position-8">
        <aside>
	        <ul class="widgets">

<?php
	/* When we call the dynamic_sidebar() function, it'll spit out
	 * the widgets for that widget area. If it instead returns false,
	 * then the sidebar simply doesn't exist, so we'll hard-code in
	 * some default sidebar stuff just in case.
	 */
	if ( ! dynamic_sidebar( 'primary-widget-area' ) ) : ?>
	
		        <li>
			        <?php get_search_form(); ?>
		        </li>

		        <li>
			        <h3><?php _e( 'Archives', 'starkers' ); ?></h3>
			        <ul>
				        <?php wp_get_archives( 'type=monthly' ); ?>
			        </ul>
		        </li>

		        <li>
			        <h3><?php _e( 'Meta', 'starkers' ); ?></h3>
			        <ul>
				        <?php wp_register(); ?>
				        <li><?php wp_loginout(); ?></li>
				        <?php wp_meta(); ?>
			        </ul>
		        </li>

	        <?php endif; // end primary widget area ?>

            </ul>

        </aside>
<?php } ?>

<?php
	// A second sidebar for widgets, just because.

	if ( is_active_sidebar( 'secondary-widget-area' ) ) : ?>

        </div>
        <div  class="cell width-4 position-12">
            
            <aside>
	            <ul class="widgets">
		            <?php dynamic_sidebar( 'secondary-widget-area' ); ?>
	            </ul>
            </aside>

<?php endif; ?>

