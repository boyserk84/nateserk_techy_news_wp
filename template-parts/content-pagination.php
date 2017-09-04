<?php
/**
* Template part for displaying pagination.
*
* @link https://codex.wordpress.org/Template_Hierarchy
*
* @package nateserk_techy_news
*/

?>
<div class="pure-u-1 pure-md-1 pagination">
    <h3>
    <?php
    the_posts_pagination( array(
      'mid_size' => 5,
      'prev_text' => __( '<button class="button-error pure-button site-primary-pagination">Back</button>', 'textdomain' ),
      'next_text' => __( '<button class="button-error pure-button site-primary-pagination">Next</button>', 'textdomain' ),
    ));
    ?>
    </h3>
</div>
