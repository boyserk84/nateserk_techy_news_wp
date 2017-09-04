<?php
/**
* hooks/site-colors.php
* All functions that need to be called or triggered within the header related to site colors.
*/

/**
 * Setting global variables for all theme options db saved values
 *
 * @param null
 * @return null
 *
 */
 if ( ! function_exists( 'nateserk_techy_news_set_global' ) ) :

     function nateserk_techy_news_set_global() {
         /*Getting saved values start*/
         $saved_theme_options = nateserk_techy_news_get_theme_options();
         $GLOBALS['nateserk_techy_news_customizer_all_values'] = $saved_theme_options;
         /*Getting saved values end*/
     }

 endif;
 add_action( 'nateserk_tinycup_action_before_head', 'nateserk_techy_news_set_global', 0 );


if ( ! function_exists( 'nateserk_techy_news_setup_site_primary_color' ) ) :

    function nateserk_techy_news_setup_site_primary_color() {
        $options = nateserk_techy_news_get_theme_options();
        if (isset($options['nateserk_techy_news-custom-theme-color'])) {
          $theme_color = $options['nateserk_techy_news-custom-theme-color'];
          $text_color = $options['nateserk_techy_news-custom-theme-text-color'];
          ?>
          <style type="text/css">
            .site-primary-reading_button,
            .site-primary-pagination,
            .site-primary {
              background-color: <?php echo esc_attr( $theme_color ); ?>;
            }
            .site-primary-text {
              color: <?php echo esc_attr( $text_color ); ?>;
            }
          </style>
        <?php
        }//if
    }//func
endif;
add_action( 'nateserk_techy_news_action_in_header', 'nateserk_techy_news_setup_site_primary_color', 0 );
