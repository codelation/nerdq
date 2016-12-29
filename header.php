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
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
	<script src="/wp-content/themes/codelation-wordpress-theme/assets/javascripts/bxslider.js"></script>
</head>

<body <?php body_class(); ?>>
	<div class="whatever-you-want-the-container-to-be">
	  <div class="outer-container-if-needed">
	    <div class="logo">
	      <a href="/">
	        <? echo get_custom_logo(); ?>
	      </a>
	    </div>
	  </div>
		<? get_template_part( 'navigation'); ?>
	</div>
