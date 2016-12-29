<?php
/**
 * Template Name: Homepage Template
 *
 * @package WordPress
 * @subpackage Codelation_Default
 * @since Codelation Default 0.1
 */
get_header(); ?>

<div class="whatever-you-want-the-container-to-be">
  <div class="all-eight-homepage-posts">
    <? $featured_home_posts = latest_posts(8); ?>
    <? foreach($featured_home_posts as $post) { ?>
      <? $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
      <? $author_id = $post->post_author; ?>
      <div class="post-or-whatnot" style="background-image: url(<?= $featured_image ?>);">
        <p>
          <a href="<? the_permalink(); ?>">
            <? the_title(); ?>
          </a>
        </p>
        <p>
          <?php the_author_meta( "first_name", $author_id ); ?>
          <?php the_author_meta( "last_name", $author_id ); ?>
        </p>
      </div>
    <? } ?>
  </div>
  <div class="about-nerdq">
    <? while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
   <? endwhile; ?>
  </div>
</div>
<?php
get_footer();
