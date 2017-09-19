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
            'nateserk_techy_news-disable-social'        => false,

            /**related post options*/
            'nateserk_techy_news-enable-related-posts' => true,
            'nateserk_techy_news-related-posts-type'=>'tags',
            'nateserk_techy_news-related-posts-per-page'=> 4,

            /** Logo header image */
            'nateserk_techy_news-show-header-logo' => false,
            'nateserk_techy_news-header-logo-media-url'=> '',

            /** Primary Theme Color */
            'nateserk_techy_news-custom-theme-color'=>'#ca3c3c',
            'nateserk_techy_news-custom-theme-text-color'=>'#ffffff',
            /** Link colors **/
            'nateserk_techy_news-custom-link-color'=>'',
            'nateserk_techy_news-custom-link-hover-color'=>'',
            'nateserk_techy_news-custom-link-visited-color'=>'',

            /** Footer statement */
            'nateserk_techy_news-copyright-name'=>'NateSerk Techy News',
            'nateserk_techy_news-footer-fineprint'=>'No part of this publication may be reproduced, distributed, or transmitted in any form or by any means, including photocopying, recording, or other electronic or mechanical methods, without the prior written permission of the publisher, except in the case of brief quotations embodied in critical reviews and certain other noncommercial uses permitted by copyright law. For permission requests, write to the publisher, addressed “Attention: Permissions Coordinator,” at the address below.',
            'nateserk_techy_news-powerby-toggle'=> true,

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

$nateserk_techy_news_site_colors_file_path = nateserk_techy_news_file_directory('hooks/site-colors.php');
require $nateserk_techy_news_site_colors_file_path;

$nateserk_techy_news_social_links_file_path = nateserk_techy_news_file_directory('hooks/social-links.php');
require $nateserk_techy_news_social_links_file_path;

$nateserk_techy_news_custom_comment_file_path = nateserk_techy_news_file_directory('hooks/custom-comment.php');
require $nateserk_techy_news_custom_comment_file_path;

$nateserk_techy_news_utility_file_path = nateserk_techy_news_file_directory('hooks/utility.php');
require $nateserk_techy_news_utility_file_path;
