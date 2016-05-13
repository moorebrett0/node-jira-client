<?php
/**
 * Template part for the thirds content block with 3 columns
 * images on top of headers with copy then a link for more info
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bt-informational
 */
?>

<div class="thirds-content">
	<div class="container">
		<div class="row">
			<?php if( has_sub_field( 'section_header' )) : ?>
			<div class="col-xs-12">
				<h1><?php echo get_field('section_header'); ?></h1>
			</div>
			<?php endif; ?>
			<?php if (get_field('call_to_action_areas')) : ?>
				<?php $count = 0; while(has_sub_field('call_to_action_areas')) : $count++; ?>
				<?php $thirdsphoto = get_sub_field('image'); ?>
					<div class="col-sm-4">
						<div class="thirds-inner">
							<?php if($thirdsphoto) : ?>
                <div class="img-wrapper" style="background-image:url('<?php echo $thirdsphoto['url'] ?>')" height="50" width="50">
                </div>
							<?php else : ?>
                <div class="img-wrapper">
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
