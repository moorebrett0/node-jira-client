<?php
/**
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bt-informational
 */

get_header(); ?>

<?php while( have_posts() ) : the_post(); ?>

<div class="contact-page">
  <div class="container">
    <div class="row">
      <div class="col-md-8">
        <?php the_post_thumbnail(); ?>
        <?php the_content(); ?>
      </div>
      <div class="col-md-4">
        <div class="sidebar">
          <img src="<?php echo get_field( 'profile_image' )['url']; ?>" alt="" />
          <?php the_field( 'info' ); ?>
          <?php get_template_part( 'template-parts/content', 'social' ); ?>
        </div>
      </div>
    </div>
  </div>
<?php endwhile; //end contact page content ?>
</div>

<?php get_footer(); ?>
