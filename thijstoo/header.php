<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section
 *
 * @package WordPress
 * @subpackage Starkers
 * @since Starkers HTML5 3.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title><?php

    wp_title( '|', true, 'right' );

    ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

<?php
    /* We add some JavaScript to pages with the comment form
     * to support sites with threaded comments (when in use).
     */
    if ( is_singular() && get_option( 'thread_comments' ) )
        wp_enqueue_script( 'comment-reply' );

    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();
?>

<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<style>
.wrapper {
    background-image:none;
}
</style>
<![endif]-->

</head>

<body <?php body_class(); ?>>
<div class="wrapper">
    <div class="row header">
        <header>
            <hgroup>
                <div  class="cell width-4 position-12">
                    <h1>
                        <a href="<?php echo home_url( '/' ); ?>" 
                           title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" 
                           rel="home"><span>TH</span>ijs</a></h1>
                </div>
                <div  class="cell width-4 position-8">
                     <h2><?php bloginfo( 'description' ); ?></h2>
                </div>
            </hgroup>
            <div class="cell width-full position-0">
            
                <?php 
                    /* Our navigation menu.  If one isn't filled out, wp_nav_menu falls 
                    back to the 'starkers_menu' function which can be found in 
                    functions.php.  The menu assiged to the primary position is the one 
                    used.  If none is assigned, the menu with the lowest ID is used.  
                    */ 
                ?>
                <nav>
                <ul class="menu">
                    <li>
                        <a href="<?php echo home_url( '/' ); ?>" 
                           title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" 
                           rel="home">Home</a>
                    </li>
                    <?php wp_list_pages(array('sort_column' => 'menu_order, post_title',
	                           'depth' => 1,
	                           'title_li' => '')) ?>
                </ul>
                </nav>
                <?php //wp_nav_menu( array( 'container' => 'nav', 'fallback_cb' => 'starkers_menu', 'theme_location' => 'primary' ) ); ?>

            </div>
        </header>
    </div>
    <div class="row content">
        <?php if ( get_post_meta( $page_id, '_wp_page_template', true ) == 'onecolumn-page.php' ) { ?>
            <div  class="cell width-12 position-0">
        <?php
        } else { ?>
            <div  class="cell width-8 position-0">
        <?php
        }
        ?>


