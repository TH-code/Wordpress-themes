<?php

// Grid functions considering 3 columns
$grid = 'grid';
$row = 'row';
$cell_column_one = 'cell width-8 position-0 column-one';
$cell_column_two = 'cell width-4 position-8 column-two';
$cell_column_three = 'cell width-4 position-12 column-three';

// Customize search
function thijs_search_form() {

	$search_form = '<form class="searchform" method="get" action="' . get_bloginfo('home') .'">';
	$search_form .= '<p>';
	$search_form .= '<label class="hiddenStructure" for="s">Search</label>';

	if (is_search()) {
			$search_form .= '<input id="s" name="s" type="text" size="32" tabindex="1" ';
		    $search_form .=        'title="To search, type and hit enter" ';
		    $search_form .=        'value=" ' . wp_specialchars(stripslashes($_GET['s']), true) .'" />';
	} else {
			$search_form .= '<input id="s" name="s" type="text" size="32" tabindex="1" ';
		    $search_form .=        'title="To search, type and hit enter" value="" />';
	}

	$search_submit = '<input class="searchsubmit" name="searchsubmit" type="submit" value="Search" tabindex="2" />';
	$search_form .= '</p>';
	$search_form .= '</form>';

	echo apply_filters('thijs_search_form', $search_form);

}

// Start widgets

    // Add THijs Subpages Widget
    function thijs_subpages() {
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
            <li>
                <nav>
                    <ul class="menu pages">
                        <?php echo $page_menu; ?>
                    </ul>
                </nav>
            </li>
        <?php }}
        if(!is_page()) {?>
            <li>
                <nav>   
                    <ul class="menu categories">
                    <?php wp_list_categories(
                        array(
                            'title_li'=> '',
                            'hide_empty' => 1,
                        )
                    ); ?>
                    </ul>
                </nav>
            </li>
        <?php }
    }


    // Register new widgetized areaa and the new widgets
    function thijs_widgets_init() {
        
        // Register the new widgets
        register_sidebar_widget('THijs Subscribe', 'thijs_subscribe');
        register_sidebar_widget('THijs Subpages', 'thijs_subpages');
        
    }
    add_action( 'init', 'thijs_widgets_init' );  

// End widgets


// Start head adjustments
function thijs_head() {
    $templatedir = get_bloginfo('template_directory');
    $stylesheetdir = get_bloginfo('stylesheet_directory');
    /**
    * Attach CSS3PIE behavior to elements
    * Add elements here that need PIE applied
    */
    $pie = '
<!--[if lt IE 9]>
<style type="text/css" media="screen">
.wrapper, .position-8, .page-template-onecolumn-page-php .header, 
.page-template-shop-php .header, .page-template-shop-php .position-0 .shop, 
.leftround span, .rightround span {
    behavior: url("'.trailingslashit($stylesheetdir).'pie/PIE.htc");
}
</style>
<![endif]-->'; ?>

        <link rel="shortcut icon" href="<?php echo $stylesheetdir ?>/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="<?php echo $stylesheetdir ?>/css/baseline.reset.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $stylesheetdir ?>/css/baseline.base.css" />
        <!-- link rel="stylesheet" type="text/css" href="<?php echo $stylesheetdir ?>/css/baseline.table.css" / -->
        <!--link rel="stylesheet" type="text/css" href="<?php echo $stylesheetdir ?>/css/baseline.forms.css" /-->
        <link rel="stylesheet" type="text/css" href="<?php echo $stylesheetdir ?>/css/decogrids-16.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $stylesheetdir ?>/fonts/faces.css" /> 
        <link rel="stylesheet" type="text/css" href="<?php echo $stylesheetdir ?>/css/thijs.css" /> 
        
        <script type="text/javascript" src="<?php echo $stylesheetdir ?>/svgweb/src/svg.js"></script>
        <script type="text/javascript" src="<?php echo $stylesheetdir ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php echo $stylesheetdir ?>/js/jquery.form.js"></script>
        <script type="text/javascript" src="<?php echo $stylesheetdir ?>/js/jquery.tools.min.js"></script>
        <script type="text/javascript" src="<?php echo $stylesheetdir ?>/js/jquery.hint.js"></script>
        <script type="text/javascript" src="<?php echo $stylesheetdir ?>/js/THi.js"></script>

        <?php //echo $pie ?>
        
<?php }
add_action('wp_head', 'thijs_head');
// End head adjustments



// Start body adjustments


// End body adjustments
?>
