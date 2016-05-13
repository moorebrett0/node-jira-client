<?php
/**
 * Template part for displaying a hero image at the top of the page.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package bt-informational
 */
?>
<div class="hero-image" <?php if( has_post_thumbnail() ) : ?>style="background-image: url('<?php echo wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID()), 'full')[0];; ?>')"<?php endif; ?>>

</div>
