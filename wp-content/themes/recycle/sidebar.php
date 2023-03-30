<?php
/**
 * The sidebar containing the main widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Recycle
 */

if ( ! is_active_sidebar( 'sidebar' ) ) {
	return;
}
?>


<div class="col-lg-3">
<?php dynamic_sidebar( 'sidebar' ); ?>       
</div>