<?php
/**
 * The template for displaying all pages.
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

<?php while( have_posts() ) : the_post(); ?>

<div class="page-static">
  <div class="page-title">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1><?php the_title(); ?></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="page-content">
    <div class="container">
      <div class="row">
        <div class="col-md-9">
          <div class="page-item">
            <?php the_content(); ?>
          </div>
          <?php the_posts_pagination( array( 'prev_text' => '&laquo;', 'next_text' => '&raquo;' ) ); ?>
        </div>
      </div>
    </div>
  </div> <!-- End page content -->
  <?php get_template_part( 'template-parts/content', 'consultation' ); ?>
  <?php get_template_part( 'template-parts/recent', 'blogs' ); ?>
</div> <!-- End Blog -->

<?php endwhile; ?>
<?php get_footer(); ?>
