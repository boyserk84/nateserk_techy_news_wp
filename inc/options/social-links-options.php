<?php
/**
* social-links-options.php
*/

$SECTION_NAME = 'nateserk_techy_news-social-links-options';


/* Section Header: Custom links color options */
$wp_customize->add_section( $SECTION_NAME, array(
    'priority'       => 26,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description' => __('Integrate social-network sites link (i.e. Facebook, Twitter, Instagram...)'),
    'title'          => __( 'Social Links', 'nateserk_techy_news' ),
) );

$DISABLE_ID = 'nateserk_techy_news_theme_options[nateserk_techy_news-disable-social]';
$DISABLE_KEY = 'nateserk_techy_news-disable-social';

/* Disable all social links Options*/
$wp_customize->add_setting( $DISABLE_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$DISABLE_KEY],
    'sanitize_callback' => 'nateserk_techny_news_sanitize_checkbox'
) );

$wp_customize->add_control( $DISABLE_ID, array(
    'label'		=> __( 'Disable Social Links', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('If checked, it will hide all social links. Default is unchecked.'),
    'settings'  => $DISABLE_ID,
    'type'	  	=> 'checkbox',
    'priority'  => 12
) );


$FB_ID = 'nateserk_techy_news_theme_options[nateserk_techy_news-facebook-url]';
$FB_KEY = 'nateserk_techy_news-facebook-url';

/** Setting for Facebook URL */
$wp_customize->add_setting( $FB_ID , array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$FB_KEY],
    'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( $FB_ID , array(
    'label'		=> __( 'Facebook Page', 'nateserk_techy_news' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Enter your Facebook page url.'),
    'settings'  => $FB_ID,
    'type'	  	=> 'text',
    'priority'  => 13
) );

$TWITTER_ID = 'nateserk_techy_news_theme_options[nateserk_techy_news-twitter-url]';
$TWITTER_KEY = 'nateserk_techy_news-twitter-url';

/** Setting for Twitter URL */
$wp_customize->add_setting( $TWITTER_ID , array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$TWITTER_KEY],
    'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( $TWITTER_ID , array(
    'label'		=> __( 'Twitter', 'nateserk_techy_news' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Enter your Twitter url.'),
    'settings'  => $TWITTER_ID,
    'type'	  	=> 'text',
    'priority'  => 14
) );

$INSTAGRAM_ID = 'nateserk_techy_news_theme_options[nateserk_techy_news-instagram-url]';
$INSTAGRAM_KEY = 'nateserk_techy_news-instagram-url';

/** Setting for Instgram URL */
$wp_customize->add_setting( $INSTAGRAM_ID , array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$INSTAGRAM_KEY],
    'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( $INSTAGRAM_ID , array(
    'label'		=> __( 'Instagram', 'nateserk_techy_news' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Enter your Instagram url.'),
    'settings'  => $INSTAGRAM_ID,
    'type'	  	=> 'text',
    'priority'  => 15
) );
