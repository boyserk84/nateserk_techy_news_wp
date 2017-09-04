<?php
/**
* custom-theme-color-options.php
*/

$SECTION_NAME = 'nateserk_techy_news-custom-links-color-options';


/* Section Header: Custom links color options */
$wp_customize->add_section( $SECTION_NAME, array(
    'priority'       => 24,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description' => __('Default to the theme color if leave blank. All values must be hex-value (i.e. #4286f4).'),
    'title'          => __( 'Theme Colors', 'nateserk_techy_news' ),
) );

$THEME_COLOR_ID = 'nateserk_techy_news_theme_options[nateserk_techy_news-custom-theme-color]';
$THEME_COLOR_KEY = 'nateserk_techy_news-custom-theme-color';

/** Setting for theme color */
$wp_customize->add_setting( $THEME_COLOR_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$THEME_COLOR_KEY],
    'sanitize_callback' => 'sanitize_hex_color'
) );

$wp_customize->add_control( $THEME_COLOR_ID, array(
    'label'		=> __( 'Primary Theme Color', 'nateserk_techy_news' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Theme color for the site.'),
    'settings'  => $THEME_COLOR_ID,
    'type'	  	=> 'text',
    'priority'  => 13
) );

$THEME_COLOR_TEXT_ID = 'nateserk_techy_news_theme_options[nateserk_techy_news-custom-theme-text-color]';
$THEME_COLOR_TEXT_KEY = 'nateserk_techy_news-custom-theme-text-color';

/** Setting for theme text color */
$wp_customize->add_setting( $THEME_COLOR_TEXT_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$THEME_COLOR_TEXT_KEY],
    'sanitize_callback' => 'sanitize_hex_color'
) );

$wp_customize->add_control( $THEME_COLOR_TEXT_ID, array(
    'label'		=> __( 'Primary Theme Text Color', 'nateserk_techy_news' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Theme text color for the site.'),
    'settings'  => $THEME_COLOR_TEXT_ID,
    'type'	  	=> 'text',
    'priority'  => 14
) );


$LINK_MAIN_COLOR_ID = 'nateserk_techy_news_theme_options[nateserk_techy_news-custom-link-color]';
$LINK_MAIN_COLOR_KEY = 'nateserk_techy_news-custom-link-color';

/** Setting for main link color */
$wp_customize->add_setting( $LINK_MAIN_COLOR_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$LINK_MAIN_COLOR_KEY],
    'sanitize_callback' => 'sanitize_hex_color'
) );

$wp_customize->add_control( $LINK_MAIN_COLOR_ID, array(
    'label'		=> __( 'Normal links color', 'nateserk_techy_news' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Color for a hyperlink for your website.'),
    'settings'  => $LINK_MAIN_COLOR_ID,
    'type'	  	=> 'text',
    'priority'  => 15
) );

$LINK_HOVER_COLOR_ID = 'nateserk_techy_news_theme_options[nateserk_techy_news-custom-link-hover-color]';
$LINK_HOVER_COLOR_KEY = 'nateserk_techy_news-custom-link-hover-color';
/** Setting for hover link color */
$wp_customize->add_setting( $LINK_HOVER_COLOR_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$LINK_HOVER_COLOR_KEY],
    'sanitize_callback' => 'sanitize_hex_color'
) );

$wp_customize->add_control( $LINK_HOVER_COLOR_ID, array(
    'label'		=> __( 'Hover links color', 'nateserk_techy_news' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Color for a \'hovered\' hyperlink for your website (aka css \'a:hover\').'),
    'settings'  => $LINK_HOVER_COLOR_ID,
    'type'	  	=> 'text',
    'priority'  => 16
) );

$LINK_VISITED_COLOR_ID = 'nateserk_techy_news_theme_options[nateserk_techy_news-custom-link-visited-color]';
$LINK_VISITED_COLOR_KEY = 'nateserk_techy_news-custom-link-visited-color';
/** Setting for visited link color */
$wp_customize->add_setting( $LINK_VISITED_COLOR_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$LINK_VISITED_COLOR_KEY],
    'sanitize_callback' => 'sanitize_hex_color'
) );

$wp_customize->add_control( $LINK_VISITED_COLOR_ID, array(
    'label'		=> __( 'Visited links color', 'nateserk_techy_news' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Color for a \'visited\' hyperlink for your website (aka css \'a:visited\').'),
    'settings'  => $LINK_VISITED_COLOR_ID,
    'type'	  	=> 'text',
    'priority'  => 17
) );
