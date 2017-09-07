<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package nateserk_techy_news
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">
		<?php
		if ( have_posts() ) : ?>

			<header class="pure-g pure-u-1 page-header">
				<h1 class="page-title"><?php
					/* translators: %s: search query. */
					printf( esc_html__( 'Search Results for: %s', 'nateserk_techy_news' ), '<span>' . get_search_query() . '</span>' );
				?></h1>
			</header><!-- .page-header -->

			<?php
			get_template_part( 'template-parts/content', 'listing' );

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_sidebar('footer');
get_footer();
