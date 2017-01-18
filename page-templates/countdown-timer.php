<?php
/**
 * Template Name: Countdown Template
 *
 * @package WordPress
 * @subpackage Codelation_Default
 * @since Codelation Default 0.1
 */
get_header(); ?>

<div class="countdown-wrapper">
  <div class="countdown">
    <div class="heading">
      <h1>Welcome to the NerdQ</h1>
      <p>Something cool is coming to Fargo in</p>
    </div>
    <div class="countdown-to-launch"></div>
  </div>
</div>
<div class="content-area">
  <?php while ( have_posts() ) : the_post(); ?>
    <?php the_content(); ?>
 <?php endwhile; ?>
</div>
<?php
get_footer();
