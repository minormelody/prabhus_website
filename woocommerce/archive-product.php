<?php
/**
 * WooCommerce Shop Archive Template for Prabhu's Flutes
 *
 * @package Prabhus_Website
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header( 'shop' );
?>

<div class="container" style="padding: 4rem 0;">
	<header class="woocommerce-products-header section-header">
		<span class="section-subtitle">Catalog</span>
		<h1 class="woocommerce-products-header__title page-title">Bansuri & Flutes Shop</h1>
		<p>Browse our complete handcrafted scale inventory, tuned for professionals & beginners alike.</p>
	</header>

	<div style="display: grid; grid-template-columns: 240px 1fr; gap: 2.5rem; margin-top: 3rem;">
		
		<!-- Sidebar Filters -->
		<aside class="shop-sidebar bg-card" style="padding: 1.5rem; border-radius: var(--radius-md); border: 1px solid var(--color-border); height: fit-content;">
			<h4 style="color:var(--color-primary-light); margin-bottom: 1.2rem; border-bottom:1px solid var(--color-border); padding-bottom:0.5rem;">
				Filter By Scale
			</h4>
			<ul style="list-style: none; display: flex; flex-direction: column; gap: 0.6rem; font-size: 0.9rem;">
				<li><a href="#" style="color:var(--color-primary);">All Scales</a></li>
				<li><a href="#" style="color:var(--color-text-muted);">E Natural Medium (440Hz)</a></li>
				<li><a href="#" style="color:var(--color-text-muted);">C Natural Bass (440Hz)</a></li>
				<li><a href="#" style="color:var(--color-text-muted);">G Natural Treble (440Hz)</a></li>
				<li><a href="#" style="color:var(--color-text-muted);">A Natural Bass (440Hz)</a></li>
				<li><a href="#" style="color:var(--color-text-muted);">B Natural Medium (440Hz)</a></li>
			</ul>

			<h4 style="color:var(--color-primary-light); margin-top: 2rem; margin-bottom: 1.2rem; border-bottom:1px solid var(--color-border); padding-bottom:0.5rem;">
				Frequency Tuning
			</h4>
			<div style="display:flex; flex-direction:column; gap:0.5rem; font-size:0.9rem; color:var(--color-text-muted);">
				<label><input type="checkbox" checked> 440Hz Standard Concert</label>
				<label><input type="checkbox"> 432Hz Healing Frequency</label>
			</div>
		</aside>

		<!-- Main Products Loop -->
		<main>
			<?php
			if ( woocommerce_product_loop() ) {
				woocommerce_product_loop_start();
				if ( wc_get_loop_prop( 'total' ) ) {
					while ( have_posts() ) {
						the_post();
						wc_get_template_part( 'content', 'product' );
					}
				}
				woocommerce_product_loop_end();
			} else {
				do_action( 'woocommerce_no_products_found' );
			}
			?>
		</main>
	</div>
</div>

<?php
get_footer( 'shop' );
