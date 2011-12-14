<?php /* Template Name: Shop old
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */

get_header(); ?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
			<header>
				<?php if ( is_front_page() ) { ?>
					<h2><?php the_title(); ?></h2>
				<?php } else { ?>	
					<h1><?php the_title(); ?></h1>
				<?php } ?>
			</header>				

				<?php the_content(); ?>
                
						
				<?php //wp_link_pages( array( 'before' => '<nav>' . __( 'Pages:', 'starkers' ), 'after' => '</nav>' ) ); ?>
						
			
				<?php edit_post_link( __( 'Edit', 'starkers' ), '<footer>', '</footer>' ); ?>
			

				<?php //comments_template( '', true ); ?>
				
		</article>

<?php endwhile; ?>

<?php get_sidebar(); ?>
    </div>  
  </div>  
  <div class="row shop">
    <div class="cell width-12 position-0">
        <div class="shop">
            <iframe src="http://www.shirtcity.com/myshirtshop/merchandising/891750/t-shirtshop.html" 
                    frameborder="0" 
                    width="678" 
                    height="1075"> 
            </iframe>
        </div>
<?php get_footer(); ?>
