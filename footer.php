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


			<div class="pure-u-1">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nateserk_techy_news' ) ); ?>"><?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'nateserk_techy_news' ), 'WordPress' ); ?></a>
			</div>

			<div class="pure-u-1"><!--copyright-->
			Copyright 2017 Techny Tech, Inc. All rights reserved.
			</div><!--copyright-->
		</div><!-- .site-info -->

		<div class="pure-g pure-u-1 site-footer-legal">
			No part of this publication may be reproduced, distributed, or transmitted in any form or by any means, including photocopying, recording, or other electronic or mechanical methods, without the prior written permission of the publisher, except in the case of brief quotations embodied in critical reviews and certain other noncommercial uses permitted by copyright law. For permission requests, write to the publisher, addressed “Attention: Permissions Coordinator,” at the address below.
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
