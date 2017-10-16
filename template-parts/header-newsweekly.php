<?php
/**
 * Template part for displaying a newsweekly header
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nateserk_techy_news
 */
?>
<!--header-->
<div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed pure-g">
    <div class="site-title-newsweekly pure-menu-heading pure-u-sm-1 pure-u-md-1 pure-u-1 site-primary">
      <?php
        if ( has_custom_logo() ) :
          the_custom_logo();
        else:?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' );?></a>
        <?php
        endif;?>
    </div>

    <?php // TODO: P2 Making menu collapsable --> ?>
    <div class="site-menu-newsweekly pure-menu-heading pure-u-sm-1 pure-u-1 pure-u-md-1 pure-hidden-xs pure-hidden-sm">
      <ul class="pure-menu-list">
          <?php do_action('nateserk_techy_news_action_setup_menu', 'menu-header', 'newsweekly'); ?>
      </ul><!-- menu -->
      <div class="pure-u-sm-1 pure-u-md-1-5 pure-u-1-5 pure-hidden-xs pure-hidden-sm">
        <?php get_search_form(); ?>
      </div><!--Search-->
    </div><!--menu-->
</div>
<!--header-->
