<?php
/**
 * Header Template for Prabhu's Flutes Website
 *
 * @package Prabhus_Website
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- Top Announcement Bar -->
<div class="top-announcement">
	✨ Handcrafted Assam Bamboo Flutes | Precision 440Hz & 432Hz Tuning | Showcase Catalog & Direct Contact Orders
</div>

<!-- Header -->
<header class="site-header" id="site-header">
	<div class="container header-inner">
		
		<!-- Brand Logo -->
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo" title="Prabhu's Flutes Home">
			<div class="brand-logo-icon">🪈</div>
			<div>
				<div class="brand-title">PRABHU'S</div>
				<span class="brand-subtitle">FLUTES & INSTRUMENTS</span>
			</div>
		</a>

		<!-- Main Navigation -->
		<nav class="main-nav">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="nav-link active">Home</a>
			<a href="#featured-flutes" class="nav-link">Flute Showcase</a>
			<a href="#audio-preview" class="nav-link">Sound Samples</a>
			<a href="#craftsmanship" class="nav-link">Our Craft</a>
			<a href="#contact" class="nav-link">Contact Us</a>
		</nav>

		<!-- Header Actions -->
		<div class="header-actions">
			<!-- Sound Sample Quick Button -->
			<a href="#audio-preview" class="btn btn-outline btn-sm d-none-mobile">
				🎵 Audio Preview
			</a>

			<a href="https://wa.me/919876543210?text=Hi%20Prabhu%27s%20Flutes!%20I%20want%20to%20inquire%20about%20ordering%20a%20bamboo%20flute." target="_blank" class="btn btn-whatsapp btn-sm">
				💬 Chat on WhatsApp
			</a>
		</div>

	</div>
</header>

