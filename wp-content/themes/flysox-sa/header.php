<?php
/**
 * Header template
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div class="flysox-announcement">
	🇿🇦 Free delivery over R<?php echo esc_html( get_theme_mod( 'flysox_free_shipping_threshold', 500 ) ); ?> &nbsp;•&nbsp; Proudly South African &nbsp;•&nbsp; Step Up. Stand Out.
</div>

<header class="site-header">
	<div class="container site-header-inner">
		<div class="site-branding">
			<?php if ( has_custom_logo() ) : ?>
				<?php the_custom_logo(); ?>
			<?php else : ?>
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="site-title">FlySox <span>SA</span></a>
			<?php endif; ?>
		</div>

		<nav class="site-nav" aria-label="<?php esc_attr_e( 'Primary', 'flysox-sa' ); ?>">
			<?php
			wp_nav_menu( array(
				'theme_location' => 'primary',
				'container'      => false,
				'menu_class'     => 'primary-menu',
				'fallback_cb'    => false,
			) );
			?>
		</nav>

		<div class="site-header-actions">
			<?php if ( class_exists( 'WooCommerce' ) ) : ?>
				<a class="cart-link" href="<?php echo esc_url( wc_get_cart_url() ); ?>">
					🛒 <span class="cart-count"><?php echo esc_html( flysox_cart_count() ); ?></span>
				</a>
			<?php endif; ?>
			<button class="mobile-nav-toggle" aria-label="<?php esc_attr_e( 'Menu', 'flysox-sa' ); ?>">☰</button>
		</div>
	</div>
</header>
