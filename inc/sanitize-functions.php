<?php
/**
 * Function to sanitize number
 *
 *
 * @param input
 * @param setting
 * @return int || float || numeric value
 *
 */
if ( ! function_exists( 'nateserk_techny_news_sanitize_number' ) ) :
	function nateserk_techny_news_sanitize_number ( $input, $setting ) {
		$sanitize_text = sanitize_text_field( $input );
		// If the input is an number, return it; otherwise, return the default
		return ( is_numeric( $sanitize_text ) ? $sanitize_text : $setting->default );
	}

endif;

/**
 * Sanitizing the checkbox
 *
 *
 * @param $checked
 * @return Boolean
 *
 */
if ( !function_exists('nateserk_techny_news_sanitize_checkbox') ) :
	function nateserk_techny_news_sanitize_checkbox( $checked ) {
		/*Boolean check.*/
		return ( ( isset( $checked ) && true == $checked ) ? true : false );
	}
endif;

/**
 * Sanitizing the page/post
 *
 *
 * @param $input user input value
 * @return sanitized output as $input
 *
 */
if ( !function_exists('nateserk_techny_news_sanitize_page') ) :
	function nateserk_techny_news_sanitize_page( $input ) {
		/*Ensure $input is an absolute integer.*/
		$page_id = absint( $input );
		/*If $page_id is an ID of a published page, return it; otherwise, return false*/
		return ( 'publish' == get_post_status( $page_id ) ? $page_id : false );
	}
endif;

/**
 * Sanitizing the select callback example
 *
 *
 * @see sanitize_key()               https://developer.wordpress.org/reference/functions/sanitize_key/
 * @see $wp_customize->get_control() https://developer.wordpress.org/reference/classes/wp_customize_manager/get_control/
 *
 * @param $input
 * @param $setting
 * @return sanitized output
 *
 */
if ( !function_exists('nateserk_techny_news_sanitize_select') ) :
	function nateserk_techny_news_sanitize_select( $input, $setting ) {

		/*Ensure input is a slug.*/
		$input = sanitize_key( $input );

		/*Get list of choices from the control associated with the setting.*/
		$choices = $setting->manager->get_control( $setting->id )->choices;

		/*If the input is a valid key, return it; otherwise, return the default.*/
		return ( array_key_exists( $input, $choices ) ? $input : $setting->default );
	}
endif;
