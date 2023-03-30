<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Recycle
 */

?>
<?php get_header(); ?>
<?php get_template_part('template-parts/recycle-blog-list', get_post_format()); ?>
<?php get_footer(); ?>