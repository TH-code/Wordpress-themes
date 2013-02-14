<?php
/**
 * Default Footer
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: July 16, 2012
 */
?>
    <!-- End Template Content -->
    <footer>
      <div class="navbar navbar-relative-top">
        <div class="navbar-inner">
          <div class="container">
          	<div class="row">
          	  <div class="span12">
                <?php if ( function_exists('dynamic_sidebar')) dynamic_sidebar("footer-content"); ?>
          	  </div>
          	</div>
          	<div class="row">
          	  <div class="span12">
                <span class="brand">&copy; OhMyDog! <?php the_time('Y') ?></span>
                <ul class="nav pull-right">
                  <li><a href="#">Back to top</a></li>
                </ul>
              </div>
          	</div>
          </div> <!-- /container -->
        </div>
	  </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>