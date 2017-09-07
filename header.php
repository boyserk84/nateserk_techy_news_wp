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
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
						<a class="site-title pure-menu-heading pure-u-md-1-5 site-primary" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php the_custom_logo(); bloginfo( 'name' );?></a>
						<ul class="pure-menu-list pure-u-md-3-5"><?php do_action('nateserk_techy_news_action_setup_menu', 'menu-header'); ?></ul>
						<div class="content-center pure-u-sm-1 pure-u-md-1-5">
							<?php
								// TODO: move this to action
								$options = nateserk_techy_news_get_theme_options();
								if ($options['nateserk_techy_news-disable-social'] === false) :
										if (!empty($options['nateserk_techy_news-facebook-url'])) : ?>
											<a href="<?php echo $options['nateserk_techy_news-facebook-url']; ?>"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
										<?php
										endif;

										if (!empty($options['nateserk_techy_news-twitter-url'])) : ?>
											<a href="<?php echo $options['nateserk_techy_news-twitter-url']; ?>"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
										<?php
										endif;

										if (!empty($options['nateserk_techy_news-instgram-url'])) : ?>
											<a href="<?php echo $options['nateserk_techy_news-instgram-url']; ?>"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
										<?php
										endif;
								endif;
							?>
						</div>
				</div>
		<!--header-->
	</header><!-- #masthead -->
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'nateserk_techy_news' ); ?></a>
	<div id="content" class="pure-g site-content">
