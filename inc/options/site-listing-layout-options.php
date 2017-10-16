<?php
/**
* post-listing-layout-options.php
* This is for post listing layout options.
*/

$SECTION_NAME = 'nateserk_techy_news-post-listing-layout-options';


/* Section Header: Custom links color options */
$wp_customize->add_section( $SECTION_NAME, array(
    'priority'       => 27,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description' => __('Customize a layout of the posts listing.'),
    'title'          => __( 'Site Layout', 'nateserk_techy_news' ),
) );


$HEADER_STYLE_ID = 'nateserk_techy_news_theme_options[nateserk_techy_news-header-style]';
$HEADER_STYLE_KEY = 'nateserk_techy_news-header-style';
/** Header style */
$wp_customize->add_setting( $HEADER_STYLE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$HEADER_STYLE_KEY],
    'sanitize_callback' => 'nateserk_techny_news_sanitize_select'
) );

$wp_customize->add_control( $HEADER_STYLE_ID, array(
    'label'		=> __( 'Header Style', 'nateserk_techy_news' ),
    'section'   => $SECTION_NAME,
    'description'=> __(''),
    'settings'  => $HEADER_STYLE_ID,
    'type'	  	=> 'select',
    'choices'   => array('default'=>'Default Style','newsweekly'=>'Newsweekly Style','complex'=>'Complex Style (Icon Only)'),
    'priority'  => 12
) );


$SHOW_FEATURE_ID = 'nateserk_techy_news_theme_options[nateserk_techy_news-post-listing-feature-enable]';
$SHOW_FEATURE_KEY = 'nateserk_techy_news-post-listing-feature-enable';

/** Setting for showing feature post */
$wp_customize->add_setting( $SHOW_FEATURE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$SHOW_FEATURE_KEY],
    'sanitize_callback' => 'nateserk_techny_news_sanitize_checkbox'
) );

$wp_customize->add_control( $SHOW_FEATURE_ID, array(
    'label'		=> __( 'Show feature post', 'nateserk_techy_news' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Most recent posts will be displayed as feature posts.'),
    'settings'  => $SHOW_FEATURE_ID,
    'type'	  	=> 'checkbox',
    'priority'  => 13
) );

$NUM_FEAT_ID = 'nateserk_techy_news_theme_options[nateserk_techy_news-post-listing-feature-num]';
$NUM_FEAT_KEY = 'nateserk_techy_news-post-listing-feature-num';
$wp_customize->add_setting( $NUM_FEAT_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$NUM_FEAT_KEY],
    'sanitize_callback' => 'nateserk_techny_news_sanitize_number'
) );

$wp_customize->add_control( $NUM_FEAT_ID, array(
    'label'		=> __( 'How many to show as feature posts?', 'nateserk_techy_news' ),
    'section'   => $SECTION_NAME,
    'description'=> __(''),
    'settings'  => $NUM_FEAT_ID,
    'type'	  	=> 'select',
    'choices'   => array(1=>1,2=>2,3=>3,4=>4,5=>5,6=>6),
    'priority'  => 14
) );

$SHOW_MINI_ID = 'nateserk_techy_news_theme_options[nateserk_techy_news-post-listing-mini-enable]';
$SHOW_MINI_KEY = 'nateserk_techy_news-post-listing-mini-enable';

/** Setting for showing feature post */
$wp_customize->add_setting( $SHOW_MINI_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$SHOW_MINI_KEY],
    'sanitize_callback' => 'nateserk_techny_news_sanitize_checkbox'
) );

$wp_customize->add_control( $SHOW_MINI_ID, array(
    'label'		=> __( 'Show mini post', 'nateserk_techy_news' ),
    'section'   => $SECTION_NAME,
    'description'=> __('The subsequent posts will be shown as mini posts.'),
    'settings'  => $SHOW_MINI_ID,
    'type'	  	=> 'checkbox',
    'priority'  => 15
) );

$NUM_MINI_ID = 'nateserk_techy_news_theme_options[nateserk_techy_news-post-listing-mini-num]';
$NUM_MINI_KEY = 'nateserk_techy_news-post-listing-mini-num';
$wp_customize->add_setting( $NUM_MINI_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$NUM_MINI_KEY],
    'sanitize_callback' => 'nateserk_techny_news_sanitize_number'
) );

$wp_customize->add_control( $NUM_MINI_ID, array(
    'label'		=> __( 'How many to show as mini posts?', 'nateserk_techy_news' ),
    'section'   => $SECTION_NAME,
    'description'=> __(''),
    'settings'  => $NUM_MINI_ID,
    'type'	  	=> 'select',
    'choices'   => array(2=>2,4=>4,6=>6),
    'priority'  => 16
) );
