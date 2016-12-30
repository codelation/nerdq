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
	</footer>
	<?php wp_footer(); ?>
	<script type="text/javascript">
		var today = new Date();
		var launchDate = new Date('2017-01-01T05:59:59');
		var timeLeft =  ((launchDate - today) / 1000).toFixed(0);

		console.log(timeLeft);

		if(timeLeft > 0) {
			var clock = new FlipClock($('.countdown-to-launch'), {
				autoStart: false,
				countdown: true
			});

			clock.setTime(timeLeft);
			clock.start();
		}
	</script>
</body>
</html>
