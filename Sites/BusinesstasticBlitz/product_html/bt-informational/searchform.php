<?php

?>

<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
  <div class="input-group">
  		<span class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></span>
  		<input type="search" class="form-control" placeholder="<?php echo esc_attr_x( '', 'placeholder' ) ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" />
    <span class="input-group-btn">
    	<input type="submit" class="btn btn-default search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>" />
    </span>
  </div>
</form>
