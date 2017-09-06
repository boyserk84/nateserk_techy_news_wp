<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nateserk_techy_news
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info pure-g">
			<?php
			// Footer menu
			if ( has_nav_menu( 'menu-footer') ) : ?>
			<div class="pure-u-1 pure-menu pure-menu-horizontal">
					<ul class="pure-menu-list pure-u-md-1 pure-u-1">
						<?php do_action('nateserk_techy_news_action_setup_menu', 'menu-footer'); ?>
					</ul>
			</div>
			<?php
			endif; ?>

			<div class="pure-u-1"><!--copyright-->
				<?php
				$currentYear = date("Y");
				$options = nateserk_techy_news_get_theme_options();
				$author = $options['nateserk_techy_news-copyright-name'];
				printf( esc_html__( 'Copyright %s %s. All rights reserved.', 'nateserk_techy_news' ), $currentYear, $author );
				?>
			</div><!--copyright-->
		</div><!-- .site-info -->

		<div class="pure-g pure-u-1 site-footer-legal">
			<?php
			$options = nateserk_techy_news_get_theme_options();
			$statement = $options['nateserk_techy_news-footer-fineprint'];
			printf( esc_html__( '%s', 'nateserk_techy_news' ), $statement );
			?>
		</div><!--fineprint-->

		<?php
		$options = nateserk_techy_news_get_theme_options();
		if ($options['nateserk_techy_news-powerby-toggle'] === true) : ?>
			<div class="pure-u-1">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nateserk_techy_news' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'nateserk_techy_news' ), 'WordPress' ); ?></a>
			</div><!--powerby-->
		<?php endif; ?>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
