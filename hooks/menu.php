<?php
/**
* hooks/menu.php
* All functions related to customizing menus.
*/

/**
* Setup a customized menu for the given menu theme-location
*
* @param menu theme location
* @return null
*
*/
if ( ! function_exists( 'nateserk_techy_news_setup_customized_menu' ) ) :
function nateserk_techy_news_setup_customized_menu($theme_location,$header_theme) {
    $locations = get_nav_menu_locations();
    if ( !empty($locations) ) {
      $menu_items = wp_get_nav_menu_items($locations[$theme_location]);
      if ( $menu_items )
      {
        $div = "site-primary-menu-item";
        if ($header_theme === 'newsweekly') {
          $div = "site-primary-menu-item-newsweekly";
        } else if ($header_theme === 'complex') {
          $div = "site-primary-menu-item-complex";
        }

        foreach ($menu_items as $item)
        {
            echo '<li class="pure-menu-item"><a href="'.$item->url .'" class="pure-menu-link ' .$div .'">' .$item->title .'</a></li>';
        }//foreach
      }//if
    }
}
endif;
add_action( 'nateserk_techy_news_action_setup_menu', 'nateserk_techy_news_setup_customized_menu', 0, 3 );
