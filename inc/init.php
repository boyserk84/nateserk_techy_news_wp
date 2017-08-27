<?php
/**
 * Main include functions ( to support child theme )
 *
 * @param string $file_path, path from the theme
 * @return string full path of file inside theme
 *
 */
if( !function_exists('nateserk_techy_news_file_directory') ){

    function nateserk_techy_news_file_directory( $file_path ){
        if( file_exists( trailingslashit( get_stylesheet_directory() ) . $file_path) ) {
            return trailingslashit( get_stylesheet_directory() ) . $file_path;
        }
        else{
            return trailingslashit( get_template_directory() ) . $file_path;
        }
    }
}


/**
 *  Default Theme Options
 *
 * @param null
 * @return array $acmephoto_default_theme_options
 *
 */
if ( !function_exists('nateserk_techy_news_get_default_theme_options') ) :
    function nateserk_techy_news_get_default_theme_options() {

        $default_theme_options = array(
            /*header options*/
            'nateserk_techy_news-header-logo'          => '',
            'nateserk_techy_news-facebook-url'         => '',
            'nateserk_techy_news-twitter-url'          => '',
            'nateserk_techy_news-instagram-url'        => '',
            'nateserk_techy_news-google-plus-url'      => '',
            'nateserk_techy_news-tumblr-url'           => '',
            'nateserk_techy_news-snapchat-url'         => '',
            'nateserk_techy_news-enable-social'        => true,

            /**related post options*/
            'nateserk_techy_news-enable-related-posts' => true,
            'nateserk_techy_news-related-posts-type'=>'tags',
            'nateserk_techy_news-related-posts-per-page'=> 4,

            /** Logo header image */
            'nateserk_techy_news-show-header-logo' => false,
            'nateserk_techy_news-header-logo-media-url'=> '',


            /** Link colors **/
            'nateserk_techy_news-custom-link-color'=>'',
            'nateserk_techy_news-custom-link-hover-color'=>'',
            'nateserk_techy_news-custom-link-visited-color'=>'',

            /** Google Analytics */
            'nateserk_techy_news-g-analytic-tracking-id'=>'',

        );

        return apply_filters( 'nateserk_techy_news_default_theme_options', $default_theme_options );
    }
endif;

/**
 *  Get theme options
 *
 *
 * @param null
 * @return array nateserk_theme_options
 *
 */
if ( !function_exists('nateserk_techy_news_get_theme_options') ) :

    function nateserk_techy_news_get_theme_options() {
        $nateserk_techy_news_default_theme_options = nateserk_techy_news_get_default_theme_options();
        $nateserk_techy_news_get_theme_options = get_theme_mod( 'nateserk_techy_news_theme_options' );
        if( is_array( $nateserk_techy_news_get_theme_options ) ){
            return array_merge( $nateserk_techy_news_default_theme_options ,$nateserk_techy_news_get_theme_options );
        }
        else{
            return $nateserk_techy_news_default_theme_options;
        }
    }
endif;

/** Load 'Hooks' */
$nateserk_techy_news_footer_file_path = nateserk_techy_news_file_directory('hooks/menu.php');
require $nateserk_techy_news_footer_file_path;
