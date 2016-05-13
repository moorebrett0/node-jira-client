<?php
/**
 * Template Name: Contact Us Page
 *
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bt-informational
 */

get_header(); ?>

<div class="container">
	<div class="container-fluid">
		<div id="content" class="site-content row">
			<div class="col-md-12">
				<img src="">
				<h1>Contact Us</h1>
				<h2>A header tag</h2>
				<p><?php echo do_shortcode('[contact-form-7 id="100" title="Untitled"]'); ?></p>
			</div>
		</div><!-- #content -->
	</div><!-- .container-fluid -->
		<?php require 'inc/blog-recent.php' ;?>
</div><!-- .container -->

<?php get_footer(); ?>
