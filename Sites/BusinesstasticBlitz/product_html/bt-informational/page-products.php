<?php
/**
 * The template for displaying products
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bt-informational
 */
get_header(); ?>
  <?php get_template_part( 'template-parts/content', 'products'); ?>
  <?php get_template_part( 'template-parts/content', 'consultation' ); ?>
  <?php get_template_part( 'template-parts/content', 'rentals'); ?>

</div> <!-- End Blog -->


<?php get_footer(); ?>
