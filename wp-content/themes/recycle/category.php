<?php
/**
 * The template for displaying category pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Recycle
 */

?>

<?php get_header(); ?>
<?php get_template_part('template-parts/recycle-blog-list', get_post_format()); ?>
<?php get_footer(); ?>