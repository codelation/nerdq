<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Codelation_Default
 * @since Codelation Default 0.1
 */
?>
	<footer>
		<div class="footer-logo">
			<span>&copy; 2017 The NerdQ<span>
		</div>
		<div class="socials">
			<div class="social-icons">
				<a href="https://www.facebook.com/TheNerdQ/">
					<i class="fa fa-facebook-official" aria-hidden="true"></i>
				</a>
				<a href="https://twitter.com/thenerdq">
					<i class="fa fa-twitter-square" aria-hidden="true"></i>
				</a>
				<a href="https://www.instagram.com/TheNerdQ/">
					<i class="fa fa-instagram" aria-hidden="true"></i>
				</a>
			</div>
			<div class="snapchat">
				<i class="fa fa-snapchat" aria-hidden="true"></i>
				<span>@TheNerdQ</span>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	<script type="text/javascript">
	var clock = $('.your-clock').FlipClock({
	// ... your options here
	});
	</script>
</body>
</html>
