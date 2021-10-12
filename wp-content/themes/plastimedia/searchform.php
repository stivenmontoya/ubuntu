<?php
echo '<form role="search" method="get" class="search-form" action="' . esc_url( home_url( '/' ) ) . '">
		<label>
			<input type="search" class="search-field" value="' . get_search_query() . '" name="s" />
		</label>
    <button type="submit" value="Submit" class="btn btn-busca icon-search">'. esc_attr_x( 'Search', 'submit button' ) .'</button>
	</form>';

?>
