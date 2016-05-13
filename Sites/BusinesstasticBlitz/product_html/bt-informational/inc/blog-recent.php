<?php
  $query = new WP_Query();
  $query->query(array(
    'post_type'                 => 'post',
    'posts_per_page'            => 1,
    'order'                     => 'ASC'
  ));

  $post_count = $query->post_count;
  $count = 0;
?>
<div class="center from-the-blog">
  <h1>From the Blog</h1>
  <?php if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post(); $count++ ?>

    <?php $url = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); ?>
    <div class="blog-cta" style="background-image: url('<?php echo $url[0]; ?>');">
      <h2><?php the_title(); ?></h2>
      <div class="btn-custom">
        <a href="<?php the_permalink(); ?>">Read Full Post</a>
      </div>
    </div>

  <?php endwhile; ?>
  <?php endif; ?>
</div>
<?php wp_reset_query(); ?>