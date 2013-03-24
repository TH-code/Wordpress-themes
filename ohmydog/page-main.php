<?php
/**
 * Template Name: Main Home Template no menu and search
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
                <h1 class="h1">
	               	<img class="text" title="OhMyDog!" alt="OhMyDog!" src="<?php bloginfo('template_directory'); ?>/img/OhMyDog!.png"/>
                    <!--span style="color: red">O</span
                   ><span style="color: orange">h</span
                   ><span style="color: yellow">M</span
                   ><span style="color: rgb(146,208,80)">y</span
                   ><span>D</span
                   ><span style="color: rgb(178,161,199)">o</span
                   ><span style="color: rgb(197,79,197)">g</span
                   ><span style="color: red">!</span-->

                </h1>
              </a>
              <p id="site-description"><?php bloginfo( 'description' ); ?></p>
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
    	<!-- -->
      </div>
    </div>
    <!-- End Header -->

    <?php endwhile; endif; ?>
    <div class="container">
      <div class="row">
        <div class="span12">
              <?php the_content();?>
        </div><!--/.span12 -->
      </div><!--/.row -->
    </div><!--/.container -->

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