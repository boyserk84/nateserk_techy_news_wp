<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nateserk_techy_news
 */

do_action( 'nateserk_techy_news_action_before_head' );
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<!-- Pure CSS -->
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/assets/library/purecss/css/pure-min.css'; ?>" >

	<!--[if lte IE 8]>
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/assets/library/purecss/css/grids-responsive-old-ie-min.css';?>">
	<![endif]-->
	<!--[if gt IE 8]><!-->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri() .'/assets/library/purecss/css/grids-responsive-min.css';?>">
	<!--<![endif]-->

	<?php

	wp_head();
	do_action( 'nateserk_techy_news_action_in_header' );
	?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header">
		<?php do_action("nateserk_techy_news_action_setup_header");?>
	</header><!-- #masthead -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nateserk_techy_news' ); ?></a>
	<div id="content" class="pure-g site-content">
