<?php
/**
 * default search form
 */
?>



<form role="search" action="#<?php //echo esc_url( home_url( '/' ) ); ?>" method="get">
  <input type="text" name="s" id="search" placeholder="Search Here" value="<?php echo esc_attr( get_search_query() ); ?>">
  <button type="submit"><i class="fa fa-search fa-1x"></i></button>
</form>