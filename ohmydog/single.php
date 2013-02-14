<?php
/**
 * The template for displaying all posts.
 *
 * Default Post Template
 *
 * Page template with a fixed 940px container and right sidebar layout
 *
 * @package WordPress
 * @subpackage WP-Bootstrap
 * @since WP-Bootstrap 0.1
 */
get_header(); 
get_template_part('head', 'nav'); ?>
<!-- End Header -->

<?php while ( have_posts() ) : the_post(); ?>
   <div class="container">
      <header class="post-title">
        <h1><?php the_title();?></h1>
      </header>
        <div class="row content">
<div class="span8">
   <p class="meta"><?php echo bootstrapwp_posted_on();?></p>
            <?php the_content();?>
            <?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
<?php endwhile; // end of the loop. ?>
<hr />
 <?php comments_template(); ?>

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