<?php
/**
* hooks/social-links.php
* Social network links/functionality related hooks.
*/

if ( ! function_exists( 'nateserk_techy_display_social_links' ) ) :

    function nateserk_techy_display_social_links() {
        $options = nateserk_techy_news_get_theme_options();
        if ($options['nateserk_techy_news-disable-social'] === false) :
            if (!empty($options['nateserk_techy_news-facebook-url'])) : ?>
              <a href="<?php echo esc_url($options['nateserk_techy_news-facebook-url']); ?>" target="_blank"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>
            <?php
            endif;

            if (!empty($options['nateserk_techy_news-twitter-url'])) : ?>
              <a href="<?php echo esc_url($options['nateserk_techy_news-twitter-url']); ?>" target="_blank"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
            <?php
            endif;

            if (!empty($options['nateserk_techy_news-instagram-url'])) : ?>
              <a href="<?php echo esc_url($options['nateserk_techy_news-instagram-url']); ?>" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
            <?php
            endif;
        endif;
    }

endif;
add_action( 'nateserk_technynews_action_show_social_links', 'nateserk_techy_display_social_links', 0 );
