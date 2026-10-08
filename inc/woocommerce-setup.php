<?php
/**
 * Custom WooCommerce Integration & Enhancements for Prabhu's Website
 *
 * @package Prabhus_Website
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Remove default WooCommerce styles wrapper if custom styling is used
 */
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );

/**
 * Custom Flute Specifications Meta Box (Scale, Frequency, Material)
 */
function prabhus_add_flute_custom_meta() {
	add_meta_box(
		'prabhus_flute_specs',
		'Flute Technical Specifications',
		'prabhus_flute_specs_callback',
		'product',
		'normal',
		'high'
	);
}
add_action( 'add_meta_boxes', 'prabhus_add_flute_custom_meta' );

function prabhus_flute_specs_callback( $post ) {
	$scale = get_post_meta( $post->ID, '_flute_scale', true );
	$frequency = get_post_meta( $post->ID, '_flute_frequency', true );
	$material = get_post_meta( $post->ID, '_flute_material', true );
	$threading = get_post_meta( $post->ID, '_flute_threading', true );

	wp_nonce_field( 'prabhus_save_flute_specs', 'prabhus_flute_specs_nonce' );
	?>
	<p>
		<label for="_flute_scale"><strong>Flute Scale / Key (e.g. E Natural, C Bass):</strong></label><br>
		<input type="text" id="_flute_scale" name="_flute_scale" value="<?php echo esc_attr( $scale ); ?>" class="widefat">
	</p>
	<p>
		<label for="_flute_frequency"><strong>Tuning Frequency (440Hz / 432Hz):</strong></label><br>
		<input type="text" id="_flute_frequency" name="_flute_frequency" value="<?php echo esc_attr( $frequency ); ?>" class="widefat">
	</p>
	<p>
		<label for="_flute_material"><strong>Material:</strong></label><br>
		<input type="text" id="_flute_material" name="_flute_material" value="<?php echo esc_attr( $material ); ?>" class="widefat">
	</p>
	<p>
		<label for="_flute_threading"><strong>Silk Threading Color:</strong></label><br>
		<input type="text" id="_flute_threading" name="_flute_threading" value="<?php echo esc_attr( $threading ); ?>" class="widefat">
	</p>
	<?php
}

function prabhus_save_flute_custom_meta( $post_id ) {
	if ( ! isset( $_POST['prabhus_flute_specs_nonce'] ) || ! wp_verify_nonce( $_POST['prabhus_flute_specs_nonce'], 'prabhus_save_flute_specs' ) ) {
		return;
	}

	if ( isset( $_POST['_flute_scale'] ) ) {
		update_post_meta( $post_id, '_flute_scale', sanitize_text_field( $_POST['_flute_scale'] ) );
	}
	if ( isset( $_POST['_flute_frequency'] ) ) {
		update_post_meta( $post_id, '_flute_frequency', sanitize_text_field( $_POST['_flute_frequency'] ) );
	}
	if ( isset( $_POST['_flute_material'] ) ) {
		update_post_meta( $post_id, '_flute_material', sanitize_text_field( $_POST['_flute_material'] ) );
	}
	if ( isset( $_POST['_flute_threading'] ) ) {
		update_post_meta( $post_id, '_flute_threading', sanitize_text_field( $_POST['_flute_threading'] ) );
	}
}
add_action( 'save_post_product', 'prabhus_save_flute_custom_meta' );
