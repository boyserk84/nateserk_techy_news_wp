<?php
/**
 * Template part for displaying all items.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nateserk_techy_news
 */


/* Start the Loop */
while ( have_posts() ) : the_post();

  /*
   * Include the Post-Format-specific template for the content.
   * If you want to override this in a child theme, then include a file
   * called content-___.php (where ___ is the Post Format name) and that will be used instead.
   */
  //get_template_part( 'template-parts/content', get_post_format() );
  get_template_part( 'template-parts/content', 'item' );
endwhile;
?>
<div class="pure-u-1 pure-md-1 pagination">
    <h3>
    <?php
    the_posts_pagination( array(
      'mid_size' => 5,
      'prev_text' => __( '<button class="button-error pure-button">Back</button>', 'textdomain' ),
      'next_text' => __( '<button class="button-error pure-button">Next</button>', 'textdomain' ),
    ));
    ?>
    </h3>
</div>
