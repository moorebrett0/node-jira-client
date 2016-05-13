<?php
/**
 * Template part for displaying hero slider.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bt-informational
 */
?>
<div class="slider-container">
<?php if( get_field( 'slider' ) ) : ?>
<div class="hero-slider">
	<div id="hero-slider-carousel" class="carousel slide" data-ride="carousel">
		<?php
			$slider_array = get_field('slider');
		?>

	  <!-- Wrapper for slides -->
	  <div class="carousel-inner" role="listbox">
			<?php
				$count = 0;
				while( has_sub_field('slider') ) :
					$count++;
					$slider_image = get_sub_field( 'image' );
			?>
	    <div class="item <?php if( $count == 1 ) echo 'active'; ?>" style="background-image: url('<?php echo $slider_image['url']; ?>');">
				<div class="container">
					<div class="slider-copy">
		        <?php echo get_sub_field( 'copy' ); ?>
						<?php
							$btn_text = get_sub_field( 'button_text' );
							$btn_link = get_sub_field( 'link' );
							if($btn_text && $btn_link) :
						?>
						<a href="<?php echo $btn_link; ?>" class="btn btn-default"><?php echo $btn_text; ?></a>
						<?php endif; ?>
					</div>
				</div>
	    </div>
			<?php endwhile; ?>
	  </div>
		<?php if( count($slider_array) > 1 ) : ?>
			<!-- Controls -->
		  <a class="left carousel-control" href="#hero-slider-carousel" role="button" data-slide="prev">
		    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-left-white.png" alt="White arrow pointing left" />
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="right carousel-control" href="#hero-slider-carousel" role="button" data-slide="next">
		    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/arrow-rt-white.png" alt="White arrow pointing right" />
		    <span class="sr-only">Next</span>
		  </a>
		<?php endif; ?>
	</div>
</div> <!-- .hero-slider -->
</div>
<div class="slider-border">
</div>
<?php endif; ?>
