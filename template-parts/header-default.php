<?php
/**
 * Template part for displaying a default header
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nateserk_techy_news
 */
$isMobile = nateserk_techy_news_is_mobile_view();
?>
<!--header-->
    <div class="home-menu pure-menu pure-menu-horizontal pure-menu-fixed site-primary">
        <div class="site-title pure-menu-heading pure-u-sm-5-24 pure-u-md-5-24 pure-u-5-24 site-primary">
          <div class="pure-u-sm-2-5 pure-u-xs-2-5 pure-u-2-5 pure-hidden-lg pure-hidden-xl pure-hidden-md">
            <i class="fa fa-bars fa-lg" aria-hidden="true" id="collapse-button"></i>
          </div><!--collpase-button-->
          <div class="pure-u-sm-1 pure-u-xs-1 pure-u-1">
          <?php
            if ( has_custom_logo() && !$isMobile ) :
              the_custom_logo();
            else:?>
              <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' );?></a>
            <?php
            endif;
          ?>
          </div><!--logo-->
        </div>

        <div class="pure-u-sm-1 pure-u-10-24 pure-u-md-10-24" style="vertical-align:middle">
          <div class="pure-hidden-xs pure-hidden-sm">
            <ul class="pure-menu-list">
                <?php do_action('nateserk_techy_news_action_setup_menu', 'menu-header', 'default'); ?>
            </ul><!-- menu -->
          </div>
        </div><!--menu div-->

        <div class="pure-u-xs-1 pure-u-sm-1 pure-u-md-8-24 pure-u-8-24" style="vertical-align:middle">
          <div class="pure-u-xs-1 pure-u-sm-1 pure-u-md-1-5 pure-u-1-5" style="margin-right:1.5em;">
            <?php do_action( 'nateserk_technynews_action_show_social_links' ); ?>
          </div>
          <div class="pure-u-sm-1 pure-u-md-1-5 pure-u-1-5 pure-hidden-xs pure-hidden-sm">
            <?php get_search_form(); ?>
          </div>
        </div><!-- Social links & search -->
    </div>
<!--header-->

<!-- Collapsable Menu -->
    <div class="home-menu pure-menu pure-menu-vertical pure-u-1 pure-hidden-lg pure-hidden-xl pure-hidden-md" id="collapse-menu">
          <ul class="pure-menu-list">
              <?php do_action('nateserk_techy_news_action_setup_menu', 'menu-header', 'default'); ?>
          </ul><!-- menu -->
    </div>
<!-- Collasable Menu -->
