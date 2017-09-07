<?php
/**
 * The footer sidebar containing the main widget area on the archive page.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nateserk_techy_news
 */

if ( ! is_active_sidebar( 'sidebar-archive' ) ) {
	return;
}
?>

<aside id="secondary" class="pure-g pure-u-1 widget-area">
	<?php dynamic_sidebar( 'sidebar-archive' ); ?>
</aside><!-- #secondary -->
