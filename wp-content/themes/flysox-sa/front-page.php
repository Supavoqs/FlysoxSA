<?php
/**
 * Homepage
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
get_header();

$shop_url = function_exists( 'wc_get_page_permalink' ) ? wc_get_page_permalink( 'shop' ) : home_url( '/shop/' );

$vibes = array(
	'Food Socks'      => array( 'slug' => 'food-socks', 'icon' => '🍔' ),
	'Geometric Socks' => array( 'slug' => 'geometric-socks', 'icon' => '🔷' ),
	'Space Socks'     => array( 'slug' => 'space-socks', 'icon' => '🚀' ),
	'Ocean Socks'     => array( 'slug' => 'ocean-socks', 'icon' => '🐠' ),
	'Animal Socks'    => array( 'slug' => 'animal-socks', 'icon' => '🐶' ),
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

<section class="shop-by-vibe">
	<div class="container">
		<h2>Shop by Vibe</h2>
		<div class="vibe-grid">
			<?php foreach ( $vibes as $label => $data ) : ?>
				<a class="vibe-chip" href="<?php echo esc_url( home_url( '/product-category/' . $data['slug'] . '/' ) ); ?>">
					<span class="vibe-icon"><?php echo esc_html( $data['icon'] ); ?></span>
					<?php echo esc_html( $label ); ?>
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
