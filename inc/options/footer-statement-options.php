<?php
/**
* footer-statement-options.php
*/

$SECTION_NAME = 'nateserk_techy_news-footer-statements-options';


/* Section Header: Custom links color options */
$wp_customize->add_section( $SECTION_NAME, array(
    'priority'       => 25,
    'capability'     => 'edit_theme_options',
    'theme_supports' => '',
    'description' => __('Legal statements or fineprints in the footer.'),
    'title'          => __( 'Footer statements', 'nateserk_techy_news' ),
) );

$COPYRIGHT_STATEMENT_ID = 'nateserk_techy_news_theme_options[nateserk_techy_news-copyright-name]';
$COPYRIGHT_STATEMENT_KEY = 'nateserk_techy_news-copyright-name';

/** Setting for copyright */
$wp_customize->add_setting( $COPYRIGHT_STATEMENT_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$COPYRIGHT_STATEMENT_KEY],
    'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( $COPYRIGHT_STATEMENT_ID, array(
    'label'		=> __( 'Site Owner Name', 'nateserk_techy_news' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Copyright statement will be generated with the given site owner name.'),
    'settings'  => $COPYRIGHT_STATEMENT_ID,
    'type'	  	=> 'text',
    'priority'  => 13
) );

$FINEPRINT_STATEMENT_ID = 'nateserk_techy_news_theme_options[nateserk_techy_news-footer-fineprint]';
$FINEPRINT_STATEMENT_KEY = 'nateserk_techy_news-footer-fineprint';

/* Enable/Disable Related posts Options*/
$wp_customize->add_setting( $FINEPRINT_STATEMENT_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$FINEPRINT_STATEMENT_KEY],
    'sanitize_callback' => 'sanitize_text_field'
) );

$wp_customize->add_control( $FINEPRINT_STATEMENT_ID, array(
    'label'		=> __( 'Fineprint Statement', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Fineprint or legal statement in the footer area.'),
    'settings'  => $FINEPRINT_STATEMENT_ID,
    'type'	  	=> 'textarea',
    'priority'  => 14
) );

$TOGGLE_POWERBY_ID = 'nateserk_techy_news_theme_options[nateserk_techy_news-powerby-toggle]';
$TOGGLE_POWERBY_KEY = 'nateserk_techy_news-powerby-toggle';

/* Enable/Disable Related posts Options*/
$wp_customize->add_setting( $TOGGLE_POWERBY_ID, array(
    'capability'		=> 'edit_theme_options',
    'default'			=> $defaults[$TOGGLE_POWERBY_KEY],
    'sanitize_callback' => 'nateserk_techny_news_sanitize_checkbox'
) );

$wp_customize->add_control( $TOGGLE_POWERBY_ID, array(
    'label'		=> __( 'Display Theme Powered By.', 'nateserk_tinycup' ),
    'section'   => $SECTION_NAME,
    'description'=> __('Toggle on/off showing powered by statement.'),
    'settings'  => $TOGGLE_POWERBY_ID,
    'type'	  	=> 'checkbox',
    'priority'  => 15
) );
