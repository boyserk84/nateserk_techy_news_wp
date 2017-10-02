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
* Helper function to check whether the user is viewed the page from the mobile device.
*
*/
if( !function_exists('nateserk_techy_news_is_mobile_view') ){
    // Reference: https://stackoverflow.com/questions/4117555/simplest-way-to-detect-a-mobile-device
    function nateserk_techy_news_is_mobile_view() {
      $useragent=$_SERVER['HTTP_USER_AGENT'];

      if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))
      {
        return true;
      }
      return false;
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

            'nateserk_techy_news-post-listing-feature-enable'=>true,
            'nateserk_techy_news-post-listing-mini-enable'=>true,
            'nateserk_techy_news-post-listing-feature-num'=> 1,
            'nateserk_techy_news-post-listing-mini-num'=>2,

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
