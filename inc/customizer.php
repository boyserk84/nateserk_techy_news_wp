<?php
/**
 * nateserk_techy_news Theme Customizer
 *
 * @package nateserk_techy_news
 */
 require get_template_directory() .'/inc/init.php';

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function nateserk_techy_news_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

  /* Retrieve 'defaults' options*/
	$defaults = nateserk_techy_news_get_default_theme_options();

  /** Load input sanitizer functions */
  $sanitize_func_file_path = nateserk_techy_news_file_directory('inc/sanitize-functions.php');
  require $sanitize_func_file_path;

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'nateserk_techy_news_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'nateserk_techy_news_customize_partial_blogdescription',
		) );
	}

  /** Theme Primary Color options */
  $custom_theme_color_option_file_path = nateserk_techy_news_file_directory('inc/options/custom-theme-color-options.php');
  require $custom_theme_color_option_file_path;

  /** Footer or fineprint options. */
  $footer_statement_option_file_path = nateserk_techy_news_file_directory('inc/options/footer-statement-options.php');
  require $footer_statement_option_file_path;

  /** social links options. */
  $social_links_option_file_path = nateserk_techy_news_file_directory('inc/options/social-links-options.php');
  require $social_links_option_file_path;

  /** Site listing options. */
  $listing_layout_option_file_path = nateserk_techy_news_file_directory('inc/options/site-listing-layout-options.php');
  require $listing_layout_option_file_path;
}
add_action( 'customize_register', 'nateserk_techy_news_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function nateserk_techy_news_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function nateserk_techy_news_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function nateserk_techy_news_customize_preview_js() {
	wp_enqueue_script( 'nateserk_techy_news-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'nateserk_techy_news_customize_preview_js' );
