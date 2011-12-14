<?php
/**
 * @package WordPress
 * @subpackage HTML5_Boilerplate
 */

// Custom HTML5 Comment Markup
function mytheme_comment($comment, $args, $depth) {
   $GLOBALS['comment'] = $comment; ?>
   <li>
     <article <?php comment_class(); ?> id="comment-<?php comment_ID(); ?>">
       <header class="comment-author vcard">
          <?php echo get_avatar($comment,$size='48',$default='<path_to_url>' ); ?>
          <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
          <time><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>"><?php printf(__('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a></time>
          <?php edit_comment_link(__('(Edit)'),'  ','') ?>
       </header>
       <?php if ($comment->comment_approved == '0') : ?>
          <em><?php _e('Your comment is awaiting moderation.') ?></em>
          <br />
       <?php endif; ?>

       <?php comment_text() ?>

       <nav>
         <?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
       </nav>
     </article>
    <!-- </li> is added by wordpress automatically -->
<?php
}

automatic_feed_links();

// Widgetized Sidebar HTML5 Markup
if ( function_exists('register_sidebar') ) {
    register_sidebar(array(
        'before_widget' => '<section>',
        'after_widget' => '</section>',
        'before_title' => '<h2 class="widgettitle">',
        'after_title' => '</h2>',
    ));
}

// Custom Functions for CSS/Javascript Versioning
$GLOBALS["TEMPLATE_URL"] = get_bloginfo('template_url')."/";
$GLOBALS["TEMPLATE_RELATIVE_URL"] = wp_make_link_relative($GLOBALS["TEMPLATE_URL"]);

// Add ?v=[last modified time] to style sheets
function versioned_stylesheet($relative_url, $add_attributes=""){
  echo '<link rel="stylesheet" href="'.versioned_resource($relative_url).'" '.$add_attributes.'>'."\n";
}

// Add ?v=[last modified time] to javascripts
function versioned_javascript($relative_url, $add_attributes=""){
  echo '<script src="'.versioned_resource($relative_url).'" '.$add_attributes.'></script>'."\n";
}

// Add ?v=[last modified time] to a file url
function versioned_resource($relative_url){
  $file = $_SERVER["DOCUMENT_ROOT"].$relative_url;
  $file_version = "";

  if(file_exists($file)) {
    $file_version = "?v=".filemtime($file);
  }

  return $relative_url.$file_version;
}

// Customize search
function thijs_search_form() {

    $search_form = '<form class="searchform" method="get" action="' . get_bloginfo('home') .'">';
    $search_form .= '<p>';
    $search_form .= '<label class="hiddenStructure" for="s">Search</label>';

    if (is_search()) {
        $search_form .= '<input id="s" name="s" type="text" size="32" tabindex="1" ';
        $search_form .=        'placeholder="To search, type and hit enter" ';
        $search_form .=        'title="To search, type and hit enter" ';
        $search_form .=        'value=" ' . wp_specialchars(stripslashes($_GET['s']), true) .'" />';
    } else {
        $search_form .= '<input id="s" name="s" type="text" size="32" tabindex="1" ';
        $search_form .=        'placeholder="To search, type and hit enter" ';
        $search_form .=        'title="To search, type and hit enter" value="" />';
    }

    $search_submit = '<input class="searchsubmit" name="searchsubmit" type="submit" value="Search" tabindex="2" />';
    $search_form .= '</p>';
    $search_form .= '</form>';

echo apply_filters('thijs_search_form', $search_form);

}

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
    <nav>
    <ul class="menu pages">
        <?php echo $page_menu; ?>
    </ul>
    </nav>
<?php }}
if(!is_page()) {?>
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
<?php }
}


// Register new widgetized areaa and the new widgets
function thijs_widgets_init() {

// Register the new widgets
register_sidebar_widget('THijs Subpages', 'thijs_subpages');

}
add_action( 'init', 'thijs_widgets_init' );  

// End widgets
?>
