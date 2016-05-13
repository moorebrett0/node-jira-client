
<!-- /**
 * Template part for the 3 more recent blog posts
 *
 *
 *
 * bt-informational
 */ -->

<div class="recent-blogs">
  <div class="container">
    <div class="row">
      <h1>Recent Posts From the Blog</h1>

    {% for post in posts %}
      <div class="col-sm-4">
          {% post.id %}
        <div class="blog-preview" style="background-image:url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>')">

        <div class="blog-preview">

          <div class="title-overlay">
            <h3>{% post.preview %}</h3>
            <!-- <a href="@TODO">Read More &raquo;</a> -->
          </div>
        </div>
      </div>
  <!-- @TODO -->
    </div>
  </div>

</div>
