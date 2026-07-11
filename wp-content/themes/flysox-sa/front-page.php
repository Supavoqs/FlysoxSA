<?php
/**
 * Homepage
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();

$shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' );

$colors = array(
	'Fire Red'        => '#E4572E',
	'Electric Blue'   => '#1B98E0',
	'Sunshine Yellow'  => '#FFC914',
	'Jungle Green'    => '#2E933C',
	'Ocean Teal'      => '#16C79A',
	'Charcoal Camo'   => '#4A4E69',
	'Sunset Orange'   => '#F77F00',
	'Royal Purple'    => '#6A4C93',
);
?>

<section class="hero">
	<div class="container hero-inner">
		<h1><?php echo esc_html( flysox_hero_field( 'flysox_hero_headline', 'Your Feet Called. They Want FlySox.' ) ); ?></h1>
		<p class="hero-sub"><?php echo esc_html( flysox_hero_field( 'flysox_hero_subheadline', "Bold colors, funky prints, premium comfort — sock game strong, Mzansi style. Free delivery over R500." ) ); ?></p>
		<a class="btn btn-primary btn-large" href="<?php echo esc_url( $shop_url ); ?>"><?php echo esc_html( flysox_hero_field( 'flysox_hero_cta_label', 'Shop the Collection 🔥' ) ); ?></a>
	</div>
</section>

<section class="trust-badges">
	<div class="container trust-badges-grid">
		<div>🇿🇦 <span>Proudly South African</span></div>
		<div>🚚 <span>Free delivery over R500</span></div>
		<div>🔒 <span>Secure Checkout</span></div>
		<div>↩️ <span>Easy Returns</span></div>
	</div>
</section>

<section class="shop-by-colour">
	<div class="container">
		<h2>Shop by Colour</h2>
		<div class="colour-grid">
			<?php foreach ( $colors as $name => $hex ) : ?>
				<a class="colour-chip" href="<?php echo esc_url( add_query_arg( 'filter_color', sanitize_title( $name ), $shop_url ) ); ?>">
					<span class="swatch" style="background:<?php echo esc_attr( $hex ); ?>"></span>
					<?php echo esc_html( $name ); ?>
				</a>
			<?php endforeach; ?>
		</div>
	</div>
</section>

<?php if ( shortcode_exists( 'featured_products' ) ) : ?>
<section class="featured-products">
	<div class="container">
		<h2>Fan Favourites</h2>
		<?php echo do_shortcode( '[featured_products limit="8" columns="4"]' ); ?>
	</div>
</section>
<?php endif; ?>

<section class="about-teaser">
	<div class="container about-teaser-inner">
		<h2>Real South African Socks, Real South African Swagger</h2>
		<p>FlySox SA started with one mission: kill the boring black sock forever. Every pair is built for comfort, made to last, and designed to turn heads from Cape Town to Joburg.</p>
		<a class="btn btn-outline" href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">Our Story</a>
	</div>
</section>

<section class="cta-banner">
	<div class="container">
		<h2>Wear something loud. Wear FlySox.</h2>
		<a class="btn btn-primary btn-large" href="<?php echo esc_url( $shop_url ); ?>">Shop the Collection 🔥</a>
	</div>
</section>

<?php get_footer(); ?>
