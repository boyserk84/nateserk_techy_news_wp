<?php
/**
 * Template part for displaying a default header
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nateserk_techy_news
 */

?>
<!--header-->
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed site-primary">
        <div class="site-title pure-menu-heading pure-u-sm-5-24 pure-u-md-5-24 pure-u-5-24 site-primary">
          <?php
            if ( has_custom_logo() ) :
              the_custom_logo();
            else:?>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' );?></a>
            <?php
            endif;
          ?>
        </div>

        <?php // TODO: P2 Making menu collapsable --> ?>
        <ul class="pure-menu-list pure-u-sm-1 pure-u-12-24 pure-u-md-12-24" style="vertical-align:middle">
            <?php do_action('nateserk_techy_news_action_setup_menu', 'menu-header', 'default'); ?>
        </ul><!-- menu -->

        <div class="pure-u-sm-1 pure-u-md-8-24 pure-u-8-24" style="vertical-align:middle">
          <div class="pure-u-sm-1 pure-u-md-1-5 pure-u-1-5 pure-hidden-xs pure-hidden-sm" style="margin-right:1.5em;">
            <?php do_action( 'nateserk_technynews_action_show_social_links' ); ?>
          </div>
          <div class="pure-u-sm-1 pure-u-md-1-5 pure-u-1-5 pure-hidden-xs pure-hidden-sm">
            <?php get_search_form(); ?>
          </div>
        </div><!-- Social links & search -->

    </div>
<!--header-->
