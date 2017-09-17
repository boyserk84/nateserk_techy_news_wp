<?php
/**
 * Template part for displaying all items.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nateserk_techy_news
 */

$index = 0;
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

   // TODO: Add customize option
  if ( $index == 1) {
    echo '<div class="pure-u-1" style="text-align:left;">';
  }

  if ( $index==0 ) :
    get_template_part( 'template-parts/content', 'feature_item' );
  elseif ($index < 3) :
    get_template_part( 'template-parts/content', 'mini_item' );
  else:
    get_template_part( 'template-parts/content', 'item' );
  endif;

  if ($index == 2) {
    echo '</div>';
  }

  $index++;
endwhile;

get_template_part('template-parts/content' ,'pagination');
?>
</div>
