<?php
/**
* hooks/custom-comment.php
* All functions related to customizing comment item.
*/

/**
* Customize the given comment item.
*
*/
if ( ! function_exists( 'nateserk_techy_news_setup_custom_comments' ) ) :
function nateserk_techy_news_setup_custom_comments($comment, $args, $depth) {
  if ( 'div' === $args['style'] ) {
          $tag       = 'div';
          $add_below = 'comment';
      } else {
          $tag       = 'li';
          $add_below = 'div-comment';
      }
      ?>
      <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
      <?php if ( 'div' != $args['style'] ) : ?>
          <div id="div-comment-<?php comment_ID() ?>" class="comment-body pure-u-1">
      <?php endif; ?>
      <div class="comment-author vcard pure-u-1-5 pure-u-sm-1 pure-u-md-1-5">
          <div class="pure-u-1">
          <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
        </div>
          <div class="pure-u-1" style="font-size:small;">
          <?php printf( __( '<cite class="fn">%s</cite>' ), get_comment_author_link() ); ?>
            <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
                <?php
                /* translators: 1: date, 2: time */
                printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
                ?>
            </div>
          </div>
      </div>

      <div class="comment-content pure-u-3-5 pure-u-md-3-5 pure-u-sm-1">
      <?php comment_text(); ?>
      <?php if ( $comment->comment_approved == '0' ) : ?>
           <em class="comment-awaiting-moderation" style="color:red;"><?php _e( '(Your comment is awaiting moderation.)' ); ?></em>
            <br />
      <?php endif; ?>
      <div class="reply pure-u-1 pure-u-md-1 pure-u-sm-1">
        <button class="pure-button site-primary-reading_button">
          <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
        </button>
      </div>
    </div><!--comment-content-->

      <?php if ( 'div' != $args['style'] ) : ?>
      </div>
      <?php endif; ?>
      <?php
}
endif;

/**
 * Customized the comment form
 *
 * @param array $form
 * @return array $form
 *
 */
if ( !function_exists('nateserk_techy_news_comment_form') ) :

    function nateserk_techy_news_comment_form($form) {
        $required = get_option('require_name_email');
        $form['submit_button'] = '<button type="submit" name= "submit" class="pure-button site-primary-reading_button">' ._('Post Comment') .'</button>';
        return $form;
    }

endif;

add_filter('comment_form_defaults', 'nateserk_techy_news_comment_form');
