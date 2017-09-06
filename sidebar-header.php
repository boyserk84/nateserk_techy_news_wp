<?php
/**
 * The header sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nateserk_techy_news
 */

if ( ! is_active_sidebar( 'sidebar-header' ) ) {
	return;
}
?>

<aside id="secondary" class="pure-g pure-u-1 widget-area">
	<?php dynamic_sidebar( 'sidebar-header' ); ?>
</aside><!-- #secondary -->
