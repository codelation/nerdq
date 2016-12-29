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
    </div>
    <div class="your-clock"></div>
  </div>
  <div class="about-nerdq">
    <? while ( have_posts() ) : the_post(); ?>
      <?php the_content(); ?>
   <? endwhile; ?>
  </div>
</div>
<?php
get_footer();
