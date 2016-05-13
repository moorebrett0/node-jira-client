<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package bt-informational
 */

get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<div class="blog">
  <div class="blog-list">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
					<div class="single-post-navigation">
						<?php previous_post_link('%link', '&laquo; Previous Post'); ?>&nbsp;&nbsp;&sol;&sol;&nbsp;&nbsp;<?php next_post_link('%link', 'Next Post &raquo;'); ?>
					</div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
            <div class="blog-item">
              <h3><?php the_title(); ?></h3>
              <?php the_content(); ?>
            </div>
						<div class="single-post-navigation">
							<?php previous_post_link('%link', '&laquo; Previous Post'); ?>&nbsp;&nbsp;&sol;&sol;&nbsp;&nbsp;<?php next_post_link('%link', 'Next Post &raquo;'); ?>
						</div>
        </div>
        <div class="col-md-4">
          <div class="sidebar">
            <?php dynamic_sidebar(  ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> <!-- End Blog -->

<?php endwhile; // End of the loop. ?>
<?php get_footer(); ?>
