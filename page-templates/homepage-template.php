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
    <?php $featured_home_posts = latest_posts(16, 'featured'); ?>
    <?php $count = 0; ?>
    <?php foreach($featured_home_posts as $post) { ?>
      <?php $featured_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>
      <?php $author_id = $post->post_author; ?>
      <div class="post item-<?= $count; ?>">
        <div class="grid-item">
          <div class="grid-item-image" style="background-image: url(<?= $featured_image ?>); background-size: cover; background-position: top center;"></div>
          <div class="summary">
            <h2>
              <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
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
      <?php $count++; ?>
    <?php } ?>
  </div>
  <div class="about-nerdq">
    <?php while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
   <?php endwhile; ?>
  </div>
</div>
<?php
get_footer();
