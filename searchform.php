<?php
/**
* searchform.php
*
* Customize search form according to https://developer.wordpress.org/reference/functions/get_search_form/.
*/
?>
<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
				<label>
					<span class="screen-reader-text">Search for:</span>
					<input type="search" class="search-field" placeholder="Search &hellip;" size=15 value="" name="s" required="required"/>
				</label>
				<button type="submit" class="pure-button site-primary" value="Search"><i class="fa fa-search" aria-hidden="true"></i></button>
</form>
