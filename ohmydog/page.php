<?php
/**
 * The template for displaying all pages.
 *
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar
 *
 * @package OhMyDog
 * @subpackage OhMyDog
 * @since WP-Bootstrap 0.1
 *
 * Last Revised: July 16, 2012
 */

get_header(); 
get_template_part('head', 'nav'); ?>
<!-- End Header -->

    <?php while ( have_posts() ) : the_post(); ?>
    <div class="container">
      <header class="page-title">
        <h1><?php the_title();?></h1>
      </header>
      <div class="row content">
        <div class="span8">
          <?php the_content();?>
          <?php endwhile; // end of the loop. ?>
        </div><!-- /.span8 -->

    <?php get_sidebar(); ?>

    <div class="container">
      <div class="row">
        <div class="span12">
   	      <?php if ( function_exists( 'bootstrapwp_breadcrumbs' ) ) bootstrapwp_breadcrumbs(); ?>
        </div><!--/.span12 -->
      </div><!--/.row -->
    </div><!--/.container -->
    <?php get_footer(); ?>
