<?php

// create links for stylesheets and favicon in header       
function childtheme_create_stylesheet() {
       $templatedir = get_bloginfo('template_directory');
       $stylesheetdir = get_bloginfo('stylesheet_directory'); ?>
       <!--[if IE8]>  
        <meta http-equiv="X-UA-Compatible" content="IE=7" >
       <![endif]-->
       <meta name="google-site-verification" content="ZLrSvpnaFAbdnkoDLkM9Iz3ythm9LtOUJu7t1BUlYts" />
       <link rel="shortcut icon" href="<?php echo $stylesheetdir ?>/favicon.ico" />
       <link rel="stylesheet" type="text/css" href="<?php echo $templatedir ?>/library/styles/reset.css" />
       <link rel="stylesheet" type="text/css" href="<?php echo $templatedir ?>/library/styles/typography.css" />
       <link rel="stylesheet" type="text/css" href="<?php echo $templatedir ?>/library/layouts/2c-r-fixed.css" />
       <link rel="stylesheet" type="text/css" href="<?php echo $templatedir ?>/library/styles/images.css" />
       <link rel="stylesheet" type="text/css" href="<?php echo $templatedir ?>/library/styles/plugins.css" />
       <link rel="stylesheet" type="text/css" href="<?php echo $stylesheetdir ?>/style.css" />
       <!--[if IE]>  
       <link rel="stylesheet" type="text/css" href="<?php echo $stylesheetdir ?>/ie.css" />
       <![endif]-->
<?php }
add_filter('thematic_create_stylesheet', 'childtheme_create_stylesheet'); 


// Add custom scripts
function canis_scripts() { 
    $templatedir = get_bloginfo('template_directory');  
    $stylesheetdir = get_bloginfo('stylesheet_directory'); ?>
    <script type="text/javascript" src="<?php echo $templatedir ?>/library/scripts/hoverIntent.js"></script>
    <script type="text/javascript" src="<?php echo $templatedir ?>/library/scripts/superfish.js"></script>
    <script type="text/javascript" src="<?php echo $templatedir ?>/library/scripts/supersubs.js"></script>
    <script type="text/javascript" src="<?php echo $templatedir ?>/library/scripts/thematic-dropdowns.js"></script>
    <script type="text/javascript" src="<?php echo $stylesheetdir ?>/js/canis.js"></script>
    <!--[if IE]>
        <script type="text/javascript" src="<?php echo $stylesheetdir ?>/js/DD_roundies_0.0.2a-min.js"></script>
        <script type="text/javascript" src="<?php echo $stylesheetdir ?>/js/ie.js"></script>
    <![endif]-->
<?php }
add_filter('thematic_head_scripts','canis_scripts');


// Clean up widget areas
function remove_widget_area($content) {
    unset($content['Secondary Aside']);
    unset($content['Index Top']);
    unset($content['Index Insert']);
    unset($content['Single Top']);
    unset($content['Single Insert']);
    unset($content['Page Top']);
    return $content;
}
add_filter('thematic_widgetized_areas', 'remove_widget_area');


// Renaming widget areas
function rename_widget_area($content) {
    $content['Primary Aside']['args']['name'] = 'Sidebar';
    $content['1st Subsidiary Aside']['args']['name'] = '1st Footer Block';
    $content['2nd Subsidiary Aside']['args']['name'] = '2nd Footer Block';
    $content['3rd Subsidiary Aside']['args']['name'] = '3rd Footer Block';
    $content['Index Bottom']['args']['name'] = 'Home Text Bottom';
    $content['Single Bottom']['args']['name'] = 'Post Text Bottom';
    $content['Page Bottom']['args']['name'] = 'Page Text Bottom';
    return $content;
}
add_filter('thematic_widgetized_areas', 'rename_widget_area');


// Unhook default Thematic functions
    function unhook_thematic_functions() {
    // Don't forget the position number if the original function has one
    remove_action('thematic_header','thematic_brandingclose',7);
//    remove_action('thematic_header','thematic_access',9);
}
add_action('init','unhook_thematic_functions'); 


// Rehook brandingclose to add roger
function canis_brandingclose() { ?>
       <span class="roger">&nbsp;</span></div><!--  #branding -->
<?php }
add_action('thematic_header', 'canis_brandingclose', 7);


// Add search to header 
function canis_search() { ?>
	<div id="header-search"><?php /* <h4><?php _e('Search'); ?></h4>*/ ?>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>
	</div>
<?php }
add_action('thematic_header','canis_search',10); 


// Change the text in the search box
function canis_search_field_value($value) {
    $value = 'Type your search term';
    return $value;
}
add_filter('search_field_value','canis_search_field_value');


// Customize top menu
// http://codex.wordpress.org/Template_Tags/wp_page_menu
function childtheme_menu_args($args) {
    $args = array(
//        'show_home' => 'Home',
        'depth' => '2',
        'sort_column' => 'menu_order, post_title',
        'menu_class' => 'menu',
        'echo' => true
    );
    return $args;
}
add_filter('wp_page_menu_args','childtheme_menu_args');


// Menu for subpages of current page
function subpage_menu() {
    global $notfound;
    global $post;
    if (is_page() and ($notfound != '1')) {			
	    $ancestor = array_pop(get_post_ancestors($post->ID));
	    $ancestor = isset($ancestor) ? $ancestor : $post->ID;
	    $title = get_the_title($ancestor);
	    $page_menu = wp_list_pages(array(
	        'sort_column' => 'menu_order, post_title', 
	        'title_li' => '',
	        'child_of' => (int)$ancestor,
	        'echo' => 0
	    ));
	    if ($page_menu) { ?>
            <div class="sb-pagemenu aside main-aside">
                <ul>
	                <?php echo $page_menu; ?>
                </ul>
            </div>
    <?php }}
    if(!is_page()) {?>
        <div class="sb-pagemenu aside main-aside">
            <ul class="categories">
                <?php wp_list_categories(
                    array(
                        'title_li'=> '',
                        'hide_empty' => 1,
                    )
                ); ?>
        </div>
    <?php }    
}
add_action('thematic_abovemainasides','subpage_menu');


// Add breadcrumbs above the footer if Yoast Breadcrumbs are installed
// http://yoast.com/wordpress/breadcrumbs/
function childtheme_breadcrumbs() {
    if ( function_exists('yoast_breadcrumb') ) { ?>
        <div id="breadcrumb-nav">      
            <div id="breadcrumb-nav-container">
                	<?php yoast_breadcrumb('<p id="breadcrumbs">','</p>'); ?>
            </div><!-- #breadcrumb-nav-container -->
        </div><!-- #breadcrumb-nav-container -->    
    <?php }    
}
add_action('thematic_abovefooter','childtheme_breadcrumbs',5);


// Add Thematic Power Blog Subscribe Widget
function thematic_power_blog_subscribe() { ?>
    <li id="thematic-power-blog-subscribe" class="widgetcontainer widget_thematic_power_blog_subscribe">
    	<h3 class="widget-title"><?php _e('Subscribe', 'thematic'); ?></h3>
    	<ul>
        	<li><a href="<?php bloginfo('rss2_url') ?>" title="<?php echo wp_specialchars(get_bloginfo('name'), 1) ?> <?php _e('Site RSS feed', 'thematic'); ?>" rel="alternate nofollow" type="application/rss+xml"><?php _e('Site RSS Feed', 'thematic') ?></a></li>
      	</ul>
    </li>
<?php }


// Register new widgetized areaa and the new widgets
function childtheme_widgets_init() {
    // Register the new widgets
    register_sidebar_widget('Thematic Power Blog Subscribe', 'thematic_power_blog_subscribe');
    
}
add_action( 'init', 'childtheme_widgets_init' );  








// Rehook #access for just tabs
/*
function canis_access() { 
    // arguments for wp_list_pages
	$list_args = 'sort_column=menu_order&depth=1&title_li=';
	// if a page is used as a front page, exclude it from page list
	if ( get_option('show_on_front') == 'page' )
		$list_args .= '&exclude=' . get_option('page_on_front'); ?>
	<div id="access">
		<div class="skip-link"><a href="#content" title="<?php _e('Skip navigation to the content', 'thematic'); ?>"><?php _e('Skip to content', 'thematic'); ?></a></div>
        <ul class="menu">
            <li class="<?php if ( is_front_page() && !is_paged() ): ?>current_page_item<?php else: ?>page_item<?php endif; ?> hometab">
                <a href="<?php echo get_option('home'); ?>/" title="<?php echo esc_attr( get_option('k2blogornoblog') ); ?>">
                    <?php echo get_option('k2blogornoblog'); ?>
                </a>
            </li>
            <?php wp_list_pages($list_args) ?>
        </ul>
    </div><!-- #access -->
<?php }
add_action('thematic_header','canis_access',9); 
*/










?>
