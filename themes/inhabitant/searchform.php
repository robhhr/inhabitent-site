<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<fieldset>
		<a href="<?php echo esc_html( 'Search' ); ?>">
			<i class="fa fa-search"></i>
		<label>
			<input type="search" class="search-field" placeholder="TYPE AND HIT ENTER..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
		</a>
	</fieldset>
</form>