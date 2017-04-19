<?php
/**
 * The template for displaying all category posts
 *
 * @package WordPress
 * @subpackage Codelation_Default
 * @since Codelation Default 0.1
 */

 get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article>
			<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
			<small><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
			<div class="entry">
        <?php the_post_thumbnail("thumbnail"); ?>
				<?php the_excerpt(); ?>
			</div>
			<p class="postmetadata"><?php _e( 'Posted in' ); ?> <?php the_category( ', ' ); ?></p>
		</article>
	<?php endwhile; ?>
	<?php endif; ?>
	</main><!-- .site-main -->
</div><!-- .content-area -->
