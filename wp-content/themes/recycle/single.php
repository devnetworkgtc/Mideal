<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Recycle
 */
?>
<?php get_header(); ?>
<?php get_template_part( 'template-parts/recycle-single', get_post_format() ); ?>
<?php get_footer(); ?>