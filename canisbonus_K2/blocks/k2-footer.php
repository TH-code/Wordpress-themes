<?php
/**
 * Footer Template
 *
 * This file is loaded by footer.php and used for content inside the #footer div
 *
 * @package K2
 * @subpackage Templates
 */
?>

<ul>
    <li class="copyright">Copyright &copy; <span class="speciesName">Canis bonus</span></li>

    <li class="footerfeedlinks">
	    <?php
		    /* translators: 1: entries feed, 2: comments feed */ 
		    printf( __('%1$s and %2$s', 'k2'),
			    '<a href="' . get_bloginfo('rss2_url') . '">' . __('Entries Feed', 'k2') . '</a>',
			    '<a href="' . get_bloginfo('comments_rss2_url') . '">' . __('Comments Feed', 'k2') . '</a>'
		    );
	    ?>
    </li>
</ul>

