<?php
/**
 * Template Name: Home Page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bt-informational
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part( 'template-parts/hero', 'slider' ); ?>

<div class="home-intro center">
	<div class="container">
		<div id="content" class="site-content row">
			<div class="col-xs-12 col-md-8 col-md-offset-2">
				<?php echo get_field('intro'); ?>
			</div>
		</div><!-- #content -->
	</div><!-- .container -->
</div><!-- .home-intro -->

<?php get_template_part( 'template-parts/content', 'consultation' ); ?>

<?php get_template_part( 'template-parts/fourths', 'content' ); ?>

<?php get_template_part( 'template-parts/recent', 'blogs' ); ?>

<?php endwhile; // End of the loop. ?>

<?php get_footer(); ?>
