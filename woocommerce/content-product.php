<?php
/**
 * WooCommerce Product Card Content Template
 *
 * @package Prabhus_Website
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;

if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<li <?php wc_product_class( 'product-card', $product ); ?>>
	<div class="product-image-wrap">
		<?php if ( $product->is_on_sale() ) : ?>
			<span class="product-badge">Sale</span>
		<?php endif; ?>
		<a href="<?php the_permalink(); ?>">
			<?php echo $product->get_image( 'woocommerce_thumbnail' ); ?>
		</a>
		<span class="product-scale-tag">Assam Bamboo</span>
	</div>
	<div class="product-info">
		<div class="product-category">
			<?php echo wc_get_product_category_list( $product->get_id(), ', ' ); ?>
		</div>
		<h3 class="product-title">
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</h3>
		<div class="product-price-row">
			<div class="product-price">
				<?php echo $product->get_price_html(); ?>
			</div>
			<?php
			woocommerce_template_loop_add_to_cart( array(
				'class' => 'btn btn-primary btn-sm add-to-cart-trigger',
			) );
			?>
		</div>
	</div>
</li>
