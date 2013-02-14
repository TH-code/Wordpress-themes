<?php
/**
 * The template for displaying search forms in Twenty Eleven
 *
 * @package OhMyDog
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>
<form class="navbar-search pull-right" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
	<input type="text" class="search-query span3" name="s" id="s" placeholder="<?php esc_attr_e( 'Search', 'twentyeleven' ); ?>" />
</form>
