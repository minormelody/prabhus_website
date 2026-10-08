<?php
/**
 * WooCommerce Single Product Template for Prabhu's Flutes
 *
 * @package Prabhus_Website
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'shop' );
?>

<div class="container" style="padding: 4rem 0;">
	<?php while ( have_posts() ) : the_post(); global $product; ?>
		<div style="display: grid; grid-template-columns: 1fr 1fr; gap: 4rem; align-items: start;">
			
			<!-- Product Gallery -->
			<div class="bg-card" style="padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid var(--color-border);">
				<div class="product-image-wrap" style="aspect-ratio: 1/1;">
					<?php echo $product->get_image( 'full' ); ?>
				</div>
			</div>

			<!-- Product Details -->
			<div>
				<span class="product-category"><?php echo wc_get_product_category_list( $product->get_id(), ', ' ); ?></span>
				<h1 style="font-family: var(--font-serif); margin-bottom: 0.5rem;"><?php the_title(); ?></h1>
				
				<div class="product-price" style="font-size: 2rem; margin-bottom: 1.5rem; color: var(--color-primary-light);">
					<?php echo $product->get_price_html(); ?>
				</div>

				<div class="product-description" style="color: var(--color-text-muted); margin-bottom: 2rem;">
					<?php the_content(); ?>
				</div>

				<!-- Technical Specifications Table -->
				<div class="bg-card" style="padding: 1.25rem; border-radius: var(--radius-sm); border: 1px solid var(--color-border); margin-bottom: 2rem;">
					<h4 style="color:var(--color-primary); margin-bottom: 0.8rem; font-size: 1rem;">Flute Technical Specifications</h4>
					<table style="width: 100%; font-size: 0.85rem; color: var(--color-text-main); border-collapse: collapse;">
						<tr style="border-bottom: 1px solid rgba(197, 160, 89, 0.1);">
							<td style="padding: 0.4rem 0; color: var(--color-text-muted);">Scale / Key:</td>
							<td style="font-weight: 600; text-align: right; color: var(--color-primary-light);">E Natural Medium</td>
						</tr>
						<tr style="border-bottom: 1px solid rgba(197, 160, 89, 0.1);">
							<td style="padding: 0.4rem 0; color: var(--color-text-muted);">Tuning Frequency:</td>
							<td style="font-weight: 600; text-align: right;">440Hz Concert Pitch</td>
						</tr>
						<tr style="border-bottom: 1px solid rgba(197, 160, 89, 0.1);">
							<td style="padding: 0.4rem 0; color: var(--color-text-muted);">Length:</td>
							<td style="font-weight: 600; text-align: right;">15 Inches approx.</td>
						</tr>
						<tr>
							<td style="padding: 0.4rem 0; color: var(--color-text-muted);">Material:</td>
							<td style="font-weight: 600; text-align: right;">Aged Assam Bamboo</td>
						</tr>
					</table>
				</div>

				<!-- Add to Cart Form -->
				<div style="display: flex; gap: 1rem; align-items: center;">
					<?php woocommerce_template_single_add_to_cart(); ?>
				</div>
			</div>

		</div>
	<?php endwhile; ?>
</div>

<?php
get_footer( 'shop' );
