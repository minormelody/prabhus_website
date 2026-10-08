<?php
/**
 * Prabhu's Flutes Theme Functions & Setup
 *
 * @package Prabhus_Website
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function prabhus_website_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	// Let WordPress manage the document title.
	add_theme_support( 'title-tag' );

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support( 'post-thumbnails' );

	// Register Navigation Menus
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary Navigation Menu', 'prabhus-website' ),
		'footer'  => esc_html__( 'Footer Links Menu', 'prabhus-website' ),
	) );

	// Switch default core markup to output valid HTML5
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );

	// WooCommerce Theme Support
	add_theme_support( 'woocommerce', array(
		'thumbnail_image_width' => 600,
		'single_image_width'    => 800,
		'product_grid'          => array(
			'default_rows'    => 3,
			'min_rows'        => 1,
			'max_rows'        => 6,
			'default_columns' => 4,
			'min_columns'     => 1,
			'max_columns'     => 4,
		),
	) );
	
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'prabhus_website_setup' );

/**
 * Enqueue Theme Scripts and Styles
 */
function prabhus_website_scripts() {
	// Theme stylesheet
	wp_enqueue_style( 'prabhus-style', get_stylesheet_uri(), array(), '1.0.0' );

	// Theme JS
	wp_enqueue_script( 'prabhus-js', get_template_directory_uri() . '/assets/js/theme.js', array(), '1.0.0', true );

	// WooCommerce AJAX Cart Script support
	if ( class_exists( 'WooCommerce' ) ) {
		wp_localize_script( 'prabhus-js', 'prabhus_wc_params', array(
			'ajax_url' => admin_url( 'admin-ajax.php' ),
			'wc_ajax_url' => WC_AJAX::get_endpoint( '%%endpoint%%' ),
		) );
	}
}
add_action( 'wp_enqueue_scripts', 'prabhus_website_scripts' );

/**
 * Update Cart Item Count via AJAX for Header Badge
 */
function prabhus_website_cart_count_fragments( $fragments ) {
	ob_start();
	?>
	<span class="cart-badge" id="cart-count">
		<?php echo WC()->cart ? esc_html( WC()->cart->get_cart_contents_count() ) : '0'; ?>
	</span>
	<?php
	$fragments['#cart-count'] = ob_get_clean();
	return $fragments;
}
add_filter( 'woocommerce_add_to_cart_fragments', 'prabhus_website_cart_count_fragments' );

/**
 * Include Helper Files
 */
require_once get_template_directory() . '/inc/woocommerce-setup.php';
