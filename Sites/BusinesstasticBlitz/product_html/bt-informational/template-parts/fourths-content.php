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

<div class="fourths-content">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>{% block.fourths-content %}</h1>
				<br />
			</div>
			<?php if (get_field('call_to_action_areas')) : ?>
				<?php $count = 0; while(has_sub_field('call_to_action_areas')) : $count++; ?>
				<?php $photo = get_sub_field('image'); ?>
					<div class="col-sm-6 col-md-3">
						<div class="fourths-inner">
							<?php if($photo) : ?>
                <div class="img-wrapper">
									<img src="<?php echo $photo['url']; ?>">
                </div>
							<?php endif; ?>

							<?php echo the_sub_field('content'); ?>

							<?php
								$more_info = get_sub_field('more_info');
								if($more_info) : ?>
							<a href="<?php echo the_sub_field('more_info_link'); ?>">
								<?php echo $more_info; ?>
							</a>
							<?php endif; ?>
						</div>
					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div><!-- #content -->
	</div><!-- .container -->
</div><!-- .home-intro -->
