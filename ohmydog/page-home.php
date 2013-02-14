<?php
/**
 * Template Name: Home Hero Template with 3 widget areas
 *
 *
 * @package WP-Bootstrap
 * @subpackage Default_Theme
 * @since WP-Bootstrap 0.5
 *
 * Last Revised: July 16, 2012
 */
get_header(); ?>

	<div class="jumbotron masthead">
      <div class="container">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <div class="row">
            <div class="span8">
              <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <h1 class="h1">OhMyDog!</h1>
              </a>
              <h2><?php the_title();?></h2>
		      <?php the_content();?>
            </div>
            <div class="span4">
              <a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
                <img class="logo" width="500" height="484" title="OhMyDog!" alt="OhMyDog!" src="<?php bloginfo('template_directory'); ?>/img/ohmydog.png"/>
              </a>
            </div>
          </div>
      </div>
	</div>

    <div class="navbar navbar-inverse navbar-relative-top">
      <div class="navbar-inner">
        <div class="container">
          <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <?php
           /** Loading WordPress Custom Menu  **/
           wp_nav_menu( array(
              'menu'            => 'main-menu',
              'container_class' => 'nav-collapse',
              'menu_class'      => 'nav',
              'fallback_cb'     => '',
              'menu_id' => 'main-menu',
              'walker' => new Bootstrapwp_Walker_Nav_Menu()
          ) ); ?>
          <?php get_search_form(); ?>
        </div>
      </div>
    </div>
    <!-- End Header -->

	<?php endwhile; endif; ?>
	  <div class="container">
	    <div class="marketing">
	      <div class="row-fluid">
	        <div class="span4">
	          <?php if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-left" ); ?>
	        </div>
	        <div class="span4">
	          <?php if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-middle" ); ?>
	        </div>
	        <div class="span4">
	          <?php if ( function_exists( 'dynamic_sidebar' ) ) dynamic_sidebar( "home-right" ); ?>
	        </div>
	      </div>
	    </div><!-- /.marketing -->
	  </div>
	<?php get_footer();?>