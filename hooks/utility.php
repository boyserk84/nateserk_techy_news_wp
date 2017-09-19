<?php
/**
* hooks/utility.php
* Utility methods.
*/

/**
* Setup recently posted label.
*
* @return html string
*/
if ( ! function_exists( 'nateserk_techy_news_setup_recent_label' ) ) :
function nateserk_techy_news_setup_recent_label() {
    $delta = current_time( 'timestamp', 1 ) - get_post_time('U', true);
    $hours_48_in_seconds = 172800;
    $hour_ago_in_seconds = 3600;
    $hours_24_in_seconds = 86400;
    $recent_html = '';
    $text = '';
    if ( $delta < ($hour_ago_in_seconds * 10)) {
      $num = floor($delta/$hour_ago_in_seconds);
      if ($num < 1) {
        $text = __('Just Now');
      } else if ($num == 1){
        $text = __($num .' hour ago');
      } else {
        $text = __($num .' hours ago');
      }
    } else if ( $delta < $hours_24_in_seconds ) {
      $text = __('Latest');
    } else if ( $delta < $hours_48_in_seconds) {
      $text = __('Recent');
    }

    if (!empty($text)) {
      $recent_html = sprintf( '<button class="pure-button button-error"><i class="fa fa-clock-o" aria-hidden="true"></i> '
          . esc_html__( '%1$s', 'nateserk_techy_news' ) . '</button> ', $text);
    }
    return $recent_html;
}
endif;
