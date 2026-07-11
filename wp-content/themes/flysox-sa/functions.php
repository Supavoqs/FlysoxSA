<?php
/**
 * FlySox SA theme functions
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'FLYSOX_VERSION', '1.0.0' );

/**
 * Theme setup
 */
function flysox_setup() {
	load_theme_textdomain( 'flysox-sa', get_template_directory() . '/languages' );

	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 240,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array( 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption', 'style', 'script' ) );

	// WooCommerce support.
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'flysox-sa' ),
		'footer'  => __( 'Footer Menu', 'flysox-sa' ),
	) );
}
add_action( 'after_setup_theme', 'flysox_setup' );

/**
 * Enqueue styles and scripts
 */
function flysox_assets() {
	wp_enqueue_style( 'flysox-google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@600;700;800&family=Inter:wght@400;500;600&display=swap', array(), null );
	wp_enqueue_style( 'flysox-main', get_template_directory_uri() . '/assets/css/main.css', array(), FLYSOX_VERSION );
	wp_enqueue_style( 'flysox-style', get_stylesheet_uri(), array(), FLYSOX_VERSION );

	wp_enqueue_script( 'flysox-main', get_template_directory_uri() . '/assets/js/main.js', array(), FLYSOX_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'flysox_assets' );

/**
 * Footer widget area
 */
function flysox_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Column', 'flysox-sa' ),
		'id'            => 'footer-1',
		'before_widget' => '<div class="footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="footer-widget-title">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'flysox_widgets_init' );

/**
 * Hero + store defaults, editable from Customizer under "FlySox Homepage Hero"
 */
function flysox_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'flysox_hero', array(
		'title'    => __( 'FlySox Homepage Hero', 'flysox-sa' ),
		'priority' => 30,
	) );

	$fields = array(
		'flysox_hero_headline'    => 'Your Feet Called. They Want FlySox.',
		'flysox_hero_subheadline' => 'Bold colors, funky prints, premium comfort — sock game strong, Mzansi style. Free delivery over R500.',
		'flysox_hero_cta_label'   => 'Shop the Collection \xf0\x9f\x94\xa5',
	);

	foreach ( $fields as $setting => $default ) {
		$wp_customize->add_setting( $setting, array(
			'default'           => $default,
			'sanitize_callback' => 'sanitize_text_field',
		) );
		$wp_customize->add_control( $setting, array(
			'label'   => ucwords( str_replace( array( 'flysox_hero_', '_' ), array( '', ' ' ), $setting ) ),
			'section' => 'flysox_hero',
			'type'    => strpos( $setting, 'subheadline' ) !== false ? 'textarea' : 'text',
		) );
	}

	$wp_customize->add_setting( 'flysox_free_shipping_threshold', array(
		'default'           => 500,
		'sanitize_callback' => 'absint',
	) );
	$wp_customize->add_control( 'flysox_free_shipping_threshold', array(
		'label'   => __( 'Free Shipping Threshold (R)', 'flysox-sa' ),
		'section' => 'flysox_hero',
		'type'    => 'number',
	) );
}
add_action( 'customize_register', 'flysox_customize_register' );

function flysox_hero_field( $key, $fallback = '' ) {
	return get_theme_mod( $key, $fallback );
}

/**
 * WooCommerce tuning
 */
add_filter( 'loop_shop_columns', function () {
	return 4;
} );

add_filter( 'loop_shop_per_page', function () {
	return 12;
}, 20 );

// Supply our own wrapper markup (see woocommerce.php) instead of WooCommerce's default.
remove_action( 'woocommerce_before_main_content', 'woocommerce_output_content_wrapper', 10 );
remove_action( 'woocommerce_after_main_content', 'woocommerce_output_content_wrapper_end', 10 );

/**
 * Cart count for header icon
 */
function flysox_cart_count() {
	if ( function_exists( 'WC' ) && WC()->cart ) {
		return WC()->cart->get_cart_contents_count();
	}
	return 0;
}

/**
 * Body classes
 */
add_filter( 'body_class', function ( $classes ) {
	$classes[] = 'flysox-sa';
	return $classes;
} );
