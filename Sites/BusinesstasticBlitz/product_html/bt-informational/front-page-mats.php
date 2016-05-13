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


<div class="home-thirds center">
	<div class="container">
		<div class="site-content row">
			<div class="col-xs-12">
				<h1><?php echo get_field('section_header') ?></h1>
			</div>
			<?php if (get_field('call_to_action_areas')) : ?>
				<?php $count = 0; while(has_sub_field('call_to_action_areas')) : $count++; ?>
				<?php $thirdsphoto = get_sub_field('image'); ?>
					<div class="col-sm-3">
						<div class="col-xs-12 home-thirds-inner home-thirds-inner-<?php echo $count; ?>">
							<?php if($thirdsphoto) : ?>
								<img class="round-image" src="<?php echo $thirdsphoto['url']; ?>" alt="<?php echo $thirdsphoto['alt']; ?>" />
							<?php endif; ?>
							<?php echo the_sub_field('content'); ?>
							<a href="<?php echo the_sub_field('more_info_link'); ?>">
								<?php echo the_sub_field('more_info'); ?>
							</a>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div><!-- #content -->
	</div><!-- .container -->
</div><!-- .home-intro -->

<?php if( get_field( 'customer_stories' ) ) : ?>
<div class="home-testimonials">
	<div id="testimonial-carousel" class="carousel slide" data-ride="carousel">
		<!-- Wrapper for Slides -->
		<div class="carousel-inner" role="listbox">
		<?php
			$count = 0;
			while(has_sub_field('customer_stories')) :
				$count++;
				$testimonial_image = get_sub_field('story_image');
		?>
			<div class="item <?php if( $count == 1 ) echo 'active'; ?>">
				<div class="container">
					<div class="slider-copy-wrapper">
						<div class="slider-copy">
						<?php if($testimonial_image) : ?>
							<img width="130" height="130" src="<?php echo $testimonial_image['url']; ?>" alt="<?php echo $testimonial_image['alt']; ?>" />
						<?php endif; ?>
						<?php if(get_sub_field('story')) : ?>
							<p>
								<span class="hanging">&ldquo;</span>
								<?php echo the_sub_field('story'); ?>&rdquo;
							</p>
							<div class="author">
								<?php echo the_sub_field('author'); ?>
							</div>
							<div class="title">
								<?php echo the_sub_field('title_and_company'); ?>
							</div>
						<?php endif; ?>
						</div>
					</div>
				</div> <!-- .container -->
			</div> <!-- .item -->
		<?php endwhile; ?>
		</div> <!-- .carousel-inner -->

		<?php
			$stories_array = get_field( 'customer_stories' );
			if( count($stories_array) > 1 ) :
		?>
		<!-- Controls -->
	  <a class="left carousel-control" href="#testimonial-carousel" role="button" data-slide="prev">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left-gray.png" alt="Gray arrow pointing left" />
	    <span class="sr-only">Previous</span>
	  </a>
	  <a class="right carousel-control" href="#testimonial-carousel" role="button" data-slide="next">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-rt-gray.png" alt="Gray arrow pointing right" />
	    <span class="sr-only">Next</span>
	  </a>
		<?php endif; ?>
	</div><!-- #testimonial-carousel -->
	<?php
		$cs_btn_link = get_field( 'customer_stories_button_link' );
		$cs_btn_text = get_field( 'customer_stories_button_text' );
		if($cs_btn_link && $cs_btn_text) :
	?>
	<div class="center">
		<a href="<?php echo $cs_btn_link ?>" class="btn btn-default"><?php echo $cs_btn_text; ?></a>
	</div>
	<?php endif; ?>
</div><!-- .home-testimonials -->

<div class="gallery">
	<div class="container text-center">
		<h1>Our Products</h1>
		<div class="pictures">
			product images will go here.
		</div>
	</div>
</div>
<?php endif; ?>

<?php get_template_part( 'template-parts/content', 'from-blog' ); ?>

<?php endwhile; // End of the loop. ?>


<?php get_footer(); ?>

<script type="text/javascript">
	//delete this and script tag when done editing
	jQuery(document).ready(function($){
		$('.carousel').carousel({
			interval: false,
		});
	})
</script>
