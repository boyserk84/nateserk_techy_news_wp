<?php
/**
* hooks/utility.php
* Utility methods.
*/

/**
* Setup 'new' label of the current post based on the creation timestamp.
*
* @return html string
*/
if ( ! function_exists( 'nateserk_techy_news_setup_recent_post_label' ) ) :
function nateserk_techy_news_setup_recent_post_label() {
    $curr_timestamp = current_time( 'timestamp', 1 );
    $delta =  $curr_timestamp - get_post_time('U', true);

    $hours_48_in_seconds = 172800;
    $hour_ago_in_seconds = 3600;
    $hours_24_in_seconds = 86400;
    $recent_html = '';

    $text = '';
    if ( $delta < ($hour_ago_in_seconds * 10)) {
      $num = floor($delta/$hour_ago_in_seconds);
      if ($num < 1) {
        $text = __('Just Now');
      } else {
        $text = sprintf(_nx( '%1$s hour ago', '%1$s hours ago', $num, 'Label', 'nateserk_techy_news' ), number_format_i18n($num));
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

/**
* Setup 'update' label of the current post based on the modified timestamp.
*
*/
if ( ! function_exists( 'nateserk_techy_news_setup_update_post_label' ) ) :
function nateserk_techy_news_setup_update_post_label() {
    $curr_timestamp = current_time( 'timestamp', 1 );
    $delta = $curr_timestamp - get_post_modified_time('U', true);
    $hours_48_in_seconds = 172800;
    $hour_ago_in_seconds = 3600;

    $recent_html = '';
    $text = '';

    if ( $delta <= $hour_ago_in_seconds ) {
      $text = __('Just Updated');
    } else if ( $delta <= $hours_48_in_seconds ) {
      $text = __('Updated');
    }

    if (!empty($text)) {
      $recent_html = sprintf( '<button class="pure-button button-update-label"><i class="fa fa-clock-o" aria-hidden="true"></i> '
          . esc_html__( '%1$s', 'nateserk_techy_news' ) . '</button> ', $text);
    }
    return $recent_html;
}
endif;

/**
* Display the labels (new or update) of the current post.
*/
if ( ! function_exists( 'nateserk_techy_news_display_post_labels' ) ) :
function nateserk_techy_news_display_post_labels() {
    echo nateserk_techy_news_setup_recent_post_label();
    echo nateserk_techy_news_setup_update_post_label();
}
endif;
add_action( 'nateserk_technynews_action_show_post_labels', 'nateserk_techy_news_display_post_labels', 0 );


/**
* Display the category labels of the current post.
*/
if ( ! function_exists( 'nateserk_techy_news_display_post_category_labels' ) ) :
function nateserk_techy_news_display_post_category_labels() {
  $categories_list = get_the_category();
  $categories_html = '';
  if ( $categories_list ) {
    foreach($categories_list as $item)
    {
      /* translators: 1: list of categories. */
      $categories_html = $categories_html .sprintf( '<button class="pure-button button-update cat-links site-primary-category">' . esc_html__( '%1$s', 'nateserk_techy_news' ) . '</button> ', $item->name ); // WPCS: XSS OK.
    }
  }

  if (!empty($categories_html)) {
    echo $categories_html;
  }
}
endif;
add_action( 'nateserk_technynews_action_show_post_category_labels', 'nateserk_techy_news_display_post_category_labels', 0 );

/**
* Display the tags labels of the current post.
*/
if ( ! function_exists( 'nateserk_techy_news_display_post_tags_labels' ) ) :
function nateserk_techy_news_display_post_tags_labels() {
  $tags_list = get_the_tags();
  $tags_html = '';
  if ( $tags_list ) {
    foreach($tags_list as $item)
    {
      /* translators: 1: list of categories. */
      $tags_html = $tags_html .sprintf( '<button class="pure-button button-update cat-links site-primary-category"><a href="'.get_tag_link($item->term_id)  .'">' . esc_html__( '%1$s', 'nateserk_techy_news' ) . '</a></button> ', $item->name ); // WPCS: XSS OK.
    }
  }

  if (!empty($tags_html)) {
    echo $tags_html;
  }
}
endif;
add_action( 'nateserk_technynews_action_show_post_tags_labels', 'nateserk_techy_news_display_post_tags_labels', 0 );
