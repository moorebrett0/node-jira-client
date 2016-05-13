<?php
/**
 * Template Name: Team Page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bt-informational
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part('template-parts/content', 'team'); ?>

<?php get_template_part( 'template-parts/content', 'jobs' ); ?>

<?php get_template_part( 'template-parts/recent', 'blogs' ); ?>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
