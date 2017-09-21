<?php
/**
 * Template part for displaying all items.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nateserk_techy_news
 */

$index = 0;

// Listing Layout parameters fetched from customizer.
$options = nateserk_techy_news_get_theme_options();
$feat_post_num = $options['nateserk_techy_news-post-listing-feature-num'];
$mini_post_num = $options['nateserk_techy_news-post-listing-mini-num'];
$feat_post_enable = $options['nateserk_techy_news-post-listing-feature-enable'];
$mini_post_enable = $options['nateserk_techy_news-post-listing-mini-enable'];

$offset = ($feat_post_enable===true)?$feat_post_num:0;
$endMiniPostIndex = ($mini_post_enable===true)?($offset + $mini_post_num):0;

?>
<div class="pure-u-sm-1 pure-u-md-1 pure-u-1 content-listing">
<?php
/* Start the Loop */
while ( have_posts() ) : the_post();


  /*
   * Include the Post-Format-specific template for the content.
   * If you want to override this in a child theme, then include a file
   * called content-___.php (where ___ is the Post Format name) and that will be used instead.
   */

  if ( $index == $offset ) { // this is for mini post section.
    echo '<div class="pure-u-1" style="text-align:left;">';
  }

  if ( $index < $offset ) :
    get_template_part( 'template-parts/content', 'feature_item' );
  elseif ($index < $endMiniPostIndex ) :
    get_template_part( 'template-parts/content', 'mini_item' );
  else:
    get_template_part( 'template-parts/content', 'item' );
  endif;

  if ($index == $endMiniPostIndex) { // this is for mini post section.
    echo '</div>';
  }

  $index++;
endwhile;

get_template_part('template-parts/content' ,'pagination');
?>
</div>
