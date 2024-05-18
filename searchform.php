<div class="search-widget">
	<form role="search" method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<div class="form-group">
			<input type="search" id="<?php echo esc_attr( uniqid( 'search-form-' ) ); ?>" class="search-field"
				placeholder="<?php esc_attr_e( 'Search', 'dvprintplan' ); ?>" value="<?php echo get_search_query(); ?>" name="s" required="required"/>
			<button type="submit"><i class="fas fa-search"></i></button>
		</div>
	</form>
</div>
