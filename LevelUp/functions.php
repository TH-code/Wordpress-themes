<?php

// add a favicon to your site
add_action('wp_head', 'blog_favicon');
function blog_favicon() {
	echo '<link rel="Shortcut Icon" type="image/x-icon" href="'.get_bloginfo('stylesheet_directory').'/favicon.ico" />' . "\n";
}

add_action( 'init', 'level_up_headinit' );
function level_up_headinit() {
 if(!is_admin()){
  wp_register_style(
   'expletus',
   'http://fonts.googleapis.com/css?family=Expletus+Sans:400,400italic,500,500italic,600,600italic,700,700italic',
   array(), '0.0.1' );
  wp_enqueue_style('expletus'); // level up stylesheet
  wp_register_style(
   'level_up',
   get_bloginfo('stylesheet_directory').'/css/level_up.css',
   array(), '0.0.1' );
  wp_enqueue_style( 'level_up'); // level up stylesheet
 };
};
?>