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
	<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
	<!--[if lte IE 8]>
			<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-old-ie-min.css">
	<![endif]-->
	<!--[if gt IE 8]><!-->
			<link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/grids-responsive-min.css">
	<!--<![endif]-->

	<?php

	wp_head();
	do_action( 'nateserk_techy_news_action_in_header' );
	?>
</head>

<body <?php body_class(); ?>>
	<header id="masthead" class="site-header">
		<!--header-->
				<div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed site-primary">
						<?php // TODO: P2 Put this header into its own template or customizable template. ?>
						<div class="site-title pure-menu-heading pure-u-sm-5-24 pure-u-md-5-24 pure-u-5-24 site-primary">
							<?php
							 	if ( has_custom_logo() ) :
									the_custom_logo();
								else:?>
									<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' );?></a>
								<?php
								endif;
							?>
						</div>

						<?php // TODO: P2 Making menu collapsable --> ?>
						<ul class="pure-menu-list pure-u-sm-1 pure-u-12-24 pure-u-md-12-24" style="vertical-align:middle">
								<?php do_action('nateserk_techy_news_action_setup_menu', 'menu-header'); ?>
						</ul><!-- menu -->

						<div class="pure-u-sm-1 pure-u-md-8-24 pure-u-8-24" style="vertical-align:middle">
							<div class="pure-u-sm-1 pure-u-md-1-5 pure-u-1-5 pure-hidden-xs pure-hidden-sm" style="margin-right:1.5em;">
								<?php do_action( 'nateserk_technynews_action_show_social_links' ); ?>
							</div>
							<div class="pure-u-sm-1 pure-u-md-1-5 pure-u-1-5 pure-hidden-xs pure-hidden-sm">
								<?php get_search_form(); ?>
							</div>
						</div><!-- Social links & search -->
				</div>
		<!--header-->
	</header><!-- #masthead -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nateserk_techy_news' ); ?></a>
	<div id="content" class="pure-g site-content">
