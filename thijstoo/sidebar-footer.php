<?php
/**
 * The Footer widget areas.
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?>

<?php
	/* The footer widget area is triggered if any of the areas
	 * have widgets. So let's check that first.
	 *
	 * If none of the sidebars have widgets, then let's bail early.
	 */
	if (   ! is_active_sidebar( 'first-footer-widget-area'  )
		&& ! is_active_sidebar( 'second-footer-widget-area' )
		&& ! is_active_sidebar( 'third-footer-widget-area'  )
		&& ! is_active_sidebar( 'fourth-footer-widget-area' )
	)
		return;
	// If we get this far, we have widgets. Let do this.
?>
    </div>
    <div class="row">
        <aside>

<?php if ( is_active_sidebar( 'first-footer-widget-area' ) ) : ?>
            <div class="cell width-4 position-0">    
                <ul class="widgets">
	                <?php dynamic_sidebar( 'first-footer-widget-area' ); ?>
                </ul>
            </div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'second-footer-widget-area' ) ) : ?>
            <div class="cell width-4 position-4">    
	            <ul class="widgets">
		            <?php dynamic_sidebar( 'second-footer-widget-area' ); ?>
	            </ul>
	        </div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'third-footer-widget-area' ) ) : ?>
            <div class="cell width-4 position-8">    
	            <ul class="widgets">
		            <?php dynamic_sidebar( 'third-footer-widget-area' ); ?>
	            </ul>
	        </div>
<?php endif; ?>

<?php if ( is_active_sidebar( 'fourth-footer-widget-area' ) ) : ?>
            <div class="cell width-4 position-12">    
		            <ul class="widgets">
			            <?php dynamic_sidebar( 'fourth-footer-widget-area' ); ?>
		            </ul>
	        </div>
<?php endif; ?>
        </aside>

