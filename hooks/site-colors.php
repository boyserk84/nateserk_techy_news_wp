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
 add_action( 'nateserk_techy_news_action_before_head', 'nateserk_techy_news_set_global', 0 );


if ( ! function_exists( 'nateserk_techy_news_setup_site_primary_color' ) ) :

    function nateserk_techy_news_setup_site_primary_color() {
        $options = nateserk_techy_news_get_theme_options();
        if (isset($options['nateserk_techy_news-custom-theme-color'])) {
          $theme_color = $options['nateserk_techy_news-custom-theme-color'];
          $text_color = $options['nateserk_techy_news-custom-theme-text-color'];
          ?>
          <style type="text/css">
            .cat-links,
            .site-primary-menu-item,
            .site-primary-category,
            .site-primary-reading_button,
            .site-primary-pagination,
            .site-primary {
              background-color: <?php echo esc_attr( $theme_color ); ?>;
              <?php if (!empty($text_color)) { ?>
              color: <?php echo esc_attr( $text_color ); ?>;
              <?php } ?>
            }
            <?php
            $link_color = $options['nateserk_techy_news-custom-link-color'];
            if (!empty($link_color)) {
              ?>
              .cat-links a,
              .site-primary-menu-item a,
              .site-primary-category a,
              .site-primary-reading_button a,
              .site-primary-pagination a,
              .site-primary a{
                color: <?php echo esc_attr( $link_color ); ?>;
              }
              <?php
            }
            $hover_color = $options['nateserk_techy_news-custom-link-hover-color'];
            if (!empty($hover_color)) {
              ?>
              .cat-links a:hover,
              .site-primary-menu-item a:hover,
              .site-primary-category a:hover,
              .site-primary-reading_button a:hover,
              .site-primary-pagination a:hover,
              .site-primary a:hover{
                color: <?php echo esc_attr( $hover_color ); ?>;
              }
              <?php
            }

            $visited_color = $options['nateserk_techy_news-custom-link-visited-color'];
            if (!empty($visited_color)) {
              ?>
              .site-primary-menu-item a:visited,
              .site-primary-category a:visited,
              .site-primary-reading_button a:visited,
              .site-primary-pagination a:visited,
              .site-primary a:visited{
                color: <?php echo esc_attr( $visited_color ); ?>;
              }
              <?php
            }

            ?>

          </style>
        <?php
        }//if
    }//func
endif;
add_action( 'nateserk_techy_news_action_in_header', 'nateserk_techy_news_setup_site_primary_color', 0 );
