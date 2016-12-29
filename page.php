<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
* @package WordPress
* @subpackage Codelation_Default
* @since Codelation Default 0.1
*/
 get_header(); ?>
 <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 <div class="page-hero" style="background-image: url( <?php the_post_thumbnail_url('full'); ?> )">
   <div class="background-screen"></div>
   <div class="content-wrapper">
     <h1>
       <? the_title(); ?>
     </h1>
     <h2 class="subheading">
       <? the_field("subtitle") ?>
     </h2>
   </div>
 </div>

 <div class="content-wrapper">
   <div class="page-full">
     <div class="page-content">
       <div class="page-summary">
         <? the_content(); ?>
       </div>
     </div>
   </div>
 </div>
 <? endwhile ?>
 <? endif ?>
 <?php get_footer(); ?>
