<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */
?>
<!doctype html>  

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ --> 
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">

  <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame 
       Remove this if you use the .htaccess -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title></title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!--  Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Place favicon.ico & apple-touch-icon.png in the root of your domain and delete these references -->
  <link rel="shortcut icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" />
  <link rel="apple-touch-icon" href="<?php bloginfo('stylesheet_directory'); ?>/apple-touch-icon.png">
 
  <!-- CSS : implied media="all" -->
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."css/style.css") ?>
  <!-- CSS : implied media="all" 
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."fonts/faces.css") ?> 
  -->
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."css/THml5.css") ?>

  <!-- For the less-enabled mobile browsers like Opera Mini -->
  <?php versioned_stylesheet($GLOBALS["TEMPLATE_RELATIVE_URL"]."css/handheld.css", 'media="handheld"') ?>

  <!-- All JavaScript at the bottom, except for Modernizr which enables HTML5 elements & feature detects -->
  <?php versioned_javascript($GLOBALS["TEMPLATE_RELATIVE_URL"]."js/libs/modernizr-2.0.6.js") ?>

  <!-- Wordpress Head Items -->
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

  <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>
  <!--p class="skip-links"><a href="#search" title="search">Search</a><a href="#nav" title="nav">Navigation</a><a href="#content" title="content">Content</a></p-->
  <div id="content">
    <header id="banner" role="banner">
      <h1><a href="<?php echo get_option('home'); ?>/" 
             title="<?php bloginfo('name'); ?>" 
             rel="home"><span>TH</span>ijs</a>
      </h1>
      <p class="description"><?php bloginfo('description'); ?></p>
    </header>
    <nav id="nav">
      <ul class="menu">
        <?php 
          // arguments for wp_list_pages
           $list_args = array('sort_column' => 'menu_order, post_title',
                              'depth' => 1,
                              'title_li' => '');
           // if a page is used as a front page, exclude it from page list
           if ( get_option('show_on_front') == 'page' )
           $list_args['&exclude='] = get_option('page_on_front');
          wp_list_pages($list_args) ?>
      </ul>
    </nav>   

