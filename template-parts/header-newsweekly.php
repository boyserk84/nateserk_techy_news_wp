<?php
/**
 * Template part for displaying a newsweekly header
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nateserk_techy_news
 */

$isMobile = nateserk_techy_news_is_mobile_view();
?>
<!--header-->
<div class="home-menu pure-menu pure-menu-fixed pure-g pure-u-1">
    <div class="site-title-newsweekly pure-menu-heading pure-u-sm-1 pure-u-md-1 pure-u-1 site-primary">
      <?php
        if ( has_custom_logo() && !$isMobile ) :
          the_custom_logo();
        else:?>
          <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' );?></a>
        <?php
        endif;?>
        <div class="pure-u-sm-3-5 pure-u-xs-3-5 pure-u-3-5 pure-hidden-lg pure-hidden-xl pure-hidden-md">
          <i class="fa fa-bars fa-lg fa-2x" aria-hidden="true" id="collapse-button"></i>
          <!-- Collapsable Menu -->
              <div class="site-menu-newsweekly-collapse home-menu pure-menu pure-menu-vertical pure-u-1 pure-hidden-lg pure-hidden-xl pure-hidden-md collapse-menu-newsweekly" id="collapse-menu">
                    <ul class="pure-menu-list">
                        <?php do_action('nateserk_techy_news_action_setup_menu', 'menu-header', 'newsweekly'); ?>
                    </ul><!-- menu -->
              </div>
          <!-- Collasable Menu -->
        </div><!--collpase-button-->
    </div>

    <div class="site-menu-newsweekly pure-menu-horizontal pure-menu-heading pure-u-sm-1 pure-u-1 pure-u-md-1 pure-hidden-xs pure-hidden-sm" id="desktop-collapse-menu">
      <div class="pure-hidden-xs pure-hidden-sm">
      <ul class="pure-menu-list">
          <?php do_action('nateserk_techy_news_action_setup_menu', 'menu-header', 'newsweekly'); ?>
      </ul><!-- menu -->
      <div class="pure-u-sm-1 pure-u-md-1-5 pure-u-1-5 pure-hidden-xs pure-hidden-sm">
        <?php get_search_form(); ?>
      </div><!--Search-->
    </div>
  </div><!--menu-->
</div>
<!--header-->
