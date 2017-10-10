<?php
/**
* hooks/custom-header.php
* All functions related to customizing headers.
*/


/**
* Show the customize header based on the selected option
*/
if ( ! function_exists( 'nateserk_techy_news_setup_customized_header' ) ) :
function nateserk_techy_news_setup_customized_header() {
    $options = nateserk_techy_news_get_theme_options();
    get_template_part( 'template-parts/header', $options['nateserk_techy_news-header-style'] );
}
endif;
add_action( 'nateserk_techy_news_action_setup_header', 'nateserk_techy_news_setup_customized_header', 0 );
