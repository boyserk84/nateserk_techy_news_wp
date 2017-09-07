<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nateserk_techy_news
 */

get_header(); ?>
<div id="primary" class="pure-g content-wrapper content-area">
	<main id="main" class="site-main">

	<?php
	if ( have_posts() ) :?>
		<header class="pure-g pure-u-1 page-header">
			<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
			?>
		</header><!-- .page-header -->
<?php
		if ( is_home() && ! is_front_page() ) : ?>
			<header>
				<h1 class="page-title screen-reader-text">FRONT PAGE <?php single_post_title(); ?></h1>
			</header>

		<?php
		endif;

		get_template_part( 'template-parts/content', 'listing' );

	else :

		get_template_part( 'template-parts/content', 'none' );

	endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php
get_sidebar('archive');
get_footer();
