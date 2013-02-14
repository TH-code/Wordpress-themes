<?php
/**
 * Template Name: News Page
 * Description: Page template to display blog posts
 *
 * @package OhMyDog
 * @subpackage OhMyDog
 * @since WP-Bootstrap 0.1
 */
get_header(); 
get_template_part('head', 'nav'); ?>
<!-- End Header -->

<?php while ( have_posts() ) : the_post(); ?>
  <div class="container">
    <header class="page-title" id="overview">
      <h1><?php the_title();?></h1>
    </header>

<div class="row content">
  <div class="span8">
    <?php the_content();
    endwhile;
           // end of the loop
    wp_reset_query();
          // resetting the loop
    ?>
    <hr />
  </div><!-- /.span8 -->

  <div class="span8">
    <?php
              // Blog post query
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    query_posts( array( 'post_type' => 'post', 'paged'=>$paged, 'showposts'=>0) );
    if (have_posts()) : while ( have_posts() ) : the_post(); ?>
    <div <?php post_class(); ?>>
      <a href="<?php the_permalink(); ?>" title="<?php the_title();?>"><h3><?php the_title();?></h3></a>
      <p class="meta"><?php echo bootstrapwp_posted_on();?></p>
      <div class="row">
        <div class="span2">

        <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
          <?php echo bootstrapwp_autoset_featured_img(); ?></a>

        </div><!-- /.span2 -->
        <div class="span6">
         <?php the_excerpt();?>
       </div><!-- /.span6 -->
     </div><!-- /.row -->
     <hr />
   </div><!-- /.post_class -->
 <?php endwhile; endif; ?>
 <?php bootstrapwp_content_nav('nav-below');?>

</div><!-- /.span8 -->
<?php get_sidebar('blog'); ?>

    <div class="container">
      <div class="row">
        <div class="span12">
   	      <?php if ( function_exists( 'bootstrapwp_breadcrumbs' ) ) bootstrapwp_breadcrumbs(); ?>
        </div><!--/.span12 -->
      </div><!--/.row -->
    </div><!--/.container -->
<?php get_footer(); ?>