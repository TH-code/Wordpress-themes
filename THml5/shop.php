<?php
/**
 * Template Name: Shop
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

get_header(); ?>

<div id="main" role="main">
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
  <article class="post" id="post-<?php the_ID(); ?>">
    <header>
      <h2><?php the_title(); ?></h2>
    </header>
  
    <?php the_content('<p class="serif">Read the rest of this page &raquo;</p>'); ?>

    <?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
  
  </article>
  <?php endwhile; endif; ?>

</div>

<?php get_sidebar(); ?>

<div id="shop">
    <iframe src="http://www.shirtcity.com/myshirtshop/merchandising/891750/t-shirtshop.html" 
            frameborder="0" 
            width="800" 
            height="1100"> 
    </iframe>
</div>

<?php edit_post_link('Edit this entry.', '<div>', '</div>'); ?>

<?php get_footer(); ?>
