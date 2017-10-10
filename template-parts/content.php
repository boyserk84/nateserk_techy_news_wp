<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package nateserk_techy_news
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header pure-g pure-u-1">
		<?php
		do_action('nateserk_technynews_action_show_post_category_labels');
		do_action('nateserk_technynews_action_show_post_labels');

		if ( is_singular() ) :
			the_title( '<h1 class="entry-title-post pure-u-1">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title-post pure-u-1">' .'<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() ) :?>
		<div class="entry-meta pure-g pure-u-1">
		<?php nateserk_techy_news_posted_on(); ?>
		</div><!-- .entry-meta -->
		<?php
		endif;

		$tb_size = 'large';
		$tb_attr = array("class"=>'pure-u-1', "title"=>get_the_title() );
		if( has_post_thumbnail() ){
			echo get_the_post_thumbnail( null, $tb_size, $tb_attr);
		} else {
			echo '<img src="' .get_template_directory_uri() .'/assets/img/300x190_fff.png" class="pure-u-1"/></a>';
		}
		?>
		<p class="tags-section">
		<?php
			do_action('nateserk_technynews_action_show_post_tags_labels'); ?>
		</p>
	</header><!-- .entry-header -->

	<div class="entry-content pure-g pure-u-1">
		<?php
			the_content( sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'nateserk_techy_news' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				get_the_title()
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'nateserk_techy_news' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
