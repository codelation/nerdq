<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Codelation_Default
 * @since Codelation Default 0.1
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php if ( is_singular() && pings_open( get_queried_object() ) ) : ?>
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php endif; ?>
	<?php wp_head(); ?>
	<script src="https://use.fontawesome.com/c8968d80da.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Condensed:400,500,700" rel="stylesheet">
	<script src="/wp-content/themes/nerdq/assets/javascripts/flipclock.min.js"></script>
</head>

<body <?php body_class(); ?>>
	<div class="header">
	  <div class="header-logo">
			<a href="/">
				<?php echo get_custom_logo(); ?>
			</a>
	  </div>
	  <nav class="navigation">
	    <?php get_template_part( 'navigation'); ?>
	  </nav>
	</div>
