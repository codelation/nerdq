<?php
/**
 * Template Name: Homepage Template
 *
 * @package WordPress
 * @subpackage Codelation_Default
 * @since Codelation Default 0.1
 */
get_header(); ?>

<div class="homepage-flex-grid-wrapper">
  <div class="homepage-flex-grid">
    <? $featured_home_posts = latest_posts(8, 'featured'); ?>
    <? $count = 0; ?>
    <? foreach($featured_home_posts as $post) { ?>
      <? $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
      <? $author_id = $post->post_author; ?>
      <div class="post item-<?= $count; ?>">
        <div class="grid-item">
          <div class="grid-item-image" style="background-image: url(<?= $featured_image ?>); background-size: cover; background-position: top center;"></div>
          <div class="summary">
            <h2>
              <a href="<? the_permalink(); ?>">
                <? the_title(); ?>
              </a>
            </h2>
            <div class="summary-footer">
              <span>By</span>
              <?php the_author_meta( "first_name", $author_id ); ?>
              <?php the_author_meta( "last_name", $author_id ); ?>
            </div>
          </div>
        </div>
      </div>
      <? $count++; ?>
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
