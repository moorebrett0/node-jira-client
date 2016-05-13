<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bt-informational
 */

?>

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="footer-body">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-8 footer-nav">
						<?php wp_nav_menu( array( 'menu' => 'Footer C1' )); ?>
					</div>
					<div class="col-xs-12 col-sm-4">
						<?php get_template_part( 'template-parts/content', 'social' ); ?>
					</div>
				</div>
			</div>
		</div>
		<div class="footer-close">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<p>&copy; <?php bloginfo( 'name' ); ?> <?php echo date('Y'); ?>. All rights reserved.
							<span class="btastic">Site design by <a href="http://www.businesstastic.com">Businesstastic</a></span>
						</p>
					</div>
					<div class="col-md-6 lower-menu">
						<?php wp_nav_menu( array( 'menu' => 'Footer C3' )); ?>
					</div>
				</div>
			</div>
		</div>
	</footer>


</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
