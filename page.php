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
   <div id="primary" class="content-area">
   	<main id="main" class="site-main" role="main">
   		<?php

   			// Include the single post content template.
   			get_template_part( 'template-parts/content', 'page' );
        
   		?>

   	</main><!-- .site-main -->

   </div><!-- .content-area -->
 <? endwhile ?>
 <? endif ?>
 <?php get_footer(); ?>
