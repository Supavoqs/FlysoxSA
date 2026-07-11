<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<footer class="site-footer">
	<div class="container footer-grid">
		<div class="footer-col">
			<h4>FlySox SA</h4>
			<p>Real South African socks, real South African swagger. Wear something loud. Wear FlySox.</p>
		</div>
		<div class="footer-col">
			<h4>Shop</h4>
			<ul>
				<li><a href="<?php echo esc_url( function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' ) ); ?>">All Socks</a></li>
				<li><a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a></li>
			</ul>
		</div>
		<div class="footer-col">
			<h4>Customer Care</h4>
			<ul>
				<li><a href="<?php echo esc_url( get_privacy_policy_url() ); ?>">Privacy Policy (POPIA)</a></li>
				<li><a href="<?php echo esc_url( home_url( '/returns-exchanges/' ) ); ?>">Returns &amp; Exchanges</a></li>
			</ul>
			<?php dynamic_sidebar( 'footer-1' ); ?>
		</div>
		<div class="footer-col">
			<h4>We Accept</h4>
			<p class="payment-badges">Visa &nbsp;•&nbsp; Mastercard &nbsp;•&nbsp; PayFast &nbsp;•&nbsp; SnapScan &nbsp;•&nbsp; Zapper</p>
		</div>
	</div>
	<div class="footer-bottom">
		<div class="container">
			&copy; <?php echo esc_html( date( 'Y' ) ); ?> FlySox SA. All rights reserved.
		</div>
	</div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
