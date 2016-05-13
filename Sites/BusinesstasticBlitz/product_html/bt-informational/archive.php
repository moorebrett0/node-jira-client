<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bt-informational
 */

get_header(); ?>

<div class="blog">
  <div class="blog-list">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
					<?php
					 the_archive_title( '<h2 class="page-title">', '</h2>' );
					 //the_archive_description( '<div class="taxonomy-description">', '</div>' );
					?>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <?php while ( have_posts() ) : the_post(); ?>
            <div class="blog-item">
              <?php the_post_thumbnail( 'post-md' ); ?>
              <h3><?php the_title(); ?></h3>
              <p class="timestamp"><?php the_time('F j, Y'); ?>&nbsp;&nbsp;&sol;&sol;&nbsp;&nbsp;<?php the_author(); ?></p>
              <?php the_excerpt(); ?>
              <a class="btn btn-default" href="<?php the_permalink(); ?>">Read Post</a>
            </div>
          <?php endwhile; // End of the loop. ?>
          <?php the_posts_pagination( array( 'prev_text' => '&laquo;', 'next_text' => '&raquo;' ) ); ?>
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

<?php get_footer(); ?>
