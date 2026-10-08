<?php
/**
 * Front Page Template for Prabhu's Flutes Website
 *
 * @package Prabhus_Website
 */

get_header();
?>

<!-- Hero Banner -->
<section class="hero-section">
	<div class="container">
		<div class="hero-content">
			<div class="hero-badge">
				✨ Mastercraft Indian Bansuri Showcase
			</div>
			<h1 class="hero-title">
				Resonance That Touches The <span>Soul</span>
			</h1>
			<p class="hero-description">
				Handcrafted from premium seasoned Assam bamboo. Precision tuned to 440Hz & 432Hz by master artisans. Explore our catalog below and reach out directly to inquire or place custom orders.
			</p>
			<div class="hero-actions">
				<a href="#featured-flutes" class="btn btn-primary">
					View Showcase Catalog 🪈
				</a>
				<a href="#contact" class="btn btn-outline">
					Contact to Order 📩
				</a>
			</div>
		</div>
	</div>
</section>

<!-- Audio Sound Preview Player Bar -->
<section id="audio-preview" style="padding-top:1px;">
	<div class="container">
		<div class="audio-preview-bar">
			<div class="preview-info">
				<h4>🎵 Live Scale Sound Tester</h4>
				<p>Select a scale to preview the authentic bamboo flute tone:</p>
			</div>
			<div class="scale-selector-buttons" id="scale-sound-selector">
				<button class="scale-btn active" data-scale="E Natural Medium" data-freq="329.63">E Natural (329Hz)</button>
				<button class="scale-btn" data-scale="C Natural Bass" data-freq="261.63">C Bass (261Hz)</button>
				<button class="scale-btn" data-scale="G Natural Treble" data-freq="392.00">G Treble (392Hz)</button>
				<button class="scale-btn" data-scale="A Natural Bass" data-freq="220.00">A Bass (220Hz)</button>
			</div>
			<div class="audio-controls">
				<button class="play-sound-btn" id="play-flute-audio" aria-label="Play Sound Sample">
					▶
				</button>
				<div>
					<div style="font-size:0.85rem; font-weight:600; color:var(--color-primary-light);" id="current-playing-title">
						E Natural Medium
					</div>
					<div style="font-size:0.75rem; color:var(--color-text-muted);" id="current-playing-freq">
						440Hz Concert Standard
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Scale Finder & Showcase Products Section -->
<section id="featured-flutes" style="padding: 4rem 0;">
	<div class="container">
		<div class="section-header">
			<span class="section-subtitle">Catalog Showcase</span>
			<h2>Handcrafted Concert Flutes</h2>
			<p>Every flute is individually tested, tuned, and thread-wrapped. Contact us directly to order or inquire about custom pitch tuning.</p>
		</div>

		<!-- Products Grid -->
		<div class="products-grid">

			<!-- Product 1 -->
			<div class="product-card">
				<div class="product-image-wrap">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/flute_e_natural.png' ); ?>" alt="Prabhu Concert Bansuri - E Natural Medium">
					<span class="product-badge">Most Popular</span>
					<span class="product-scale-tag">Key: E Natural (440Hz)</span>
				</div>
				<div class="product-info">
					<div class="product-category">Medium Concert Flute</div>
					<h3 class="product-title">Prabhu Concert Bansuri - E Natural Medium</h3>
					<div class="product-specs-mini">
						<span>📏 15 Inches</span> • <span>Bamboo</span> • <span>🔴 Red Silk Thread</span>
					</div>
					<p style="font-size:0.85rem; color:var(--color-text-muted);">
						The most popular scale for classical Indian music, light music & Bollywood covers. Effortless blowing.
					</p>
					<div class="product-price-row">
						<div>
							<span class="product-price" style="font-size:0.95rem;">Price on Request</span>
							<span style="display:block; font-size:0.75rem; color:var(--color-primary);">Direct Order</span>
						</div>
						<button class="btn btn-primary btn-sm inquire-trigger" data-title="Prabhu Concert Bansuri - E Natural Medium" data-img="<?php echo esc_url( get_template_directory_uri() . '/assets/images/flute_e_natural.png' ); ?>">
							Inquire to Order 📩
						</button>
					</div>
				</div>
			</div>

			<!-- Product 2 -->
			<div class="product-card">
				<div class="product-image-wrap">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero_flute_banner.png' ); ?>" alt="Prabhu Masterclass Flute - C Natural Bass">
					<span class="product-badge">Master Grade</span>
					<span class="product-scale-tag">Key: C Bass (440Hz)</span>
				</div>
				<div class="product-info">
					<div class="product-category">Deep Bass Flute</div>
					<h3 class="product-title">Prabhu Masterclass Flute - C Natural Bass</h3>
					<div class="product-specs-mini">
						<span>📏 32 Inches</span> • <span>Bamboo</span> • <span>🟡 Gold Thread</span>
					</div>
					<p style="font-size:0.85rem; color:var(--color-text-muted);">
						Deep, meditative bass resonance preferred by classical maestros. Rich low octave warmth.
					</p>
					<div class="product-price-row">
						<div>
							<span class="product-price" style="font-size:0.95rem;">Price on Request</span>
							<span style="display:block; font-size:0.75rem; color:var(--color-primary);">Direct Order</span>
						</div>
						<button class="btn btn-primary btn-sm inquire-trigger" data-title="Prabhu Masterclass Flute - C Natural Bass" data-img="<?php echo esc_url( get_template_directory_uri() . '/assets/images/hero_flute_banner.png' ); ?>">
							Inquire to Order 📩
						</button>
					</div>
				</div>
			</div>

			<!-- Product 3 -->
			<div class="product-card">
				<div class="product-image-wrap">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/flute_e_natural.png' ); ?>" alt="Prabhu Soloist Bansuri - G Natural Treble">
					<span class="product-badge">High Pitch</span>
					<span class="product-scale-tag">Key: G Treble (440Hz)</span>
				</div>
				<div class="product-info">
					<div class="product-category">Treble Flute</div>
					<h3 class="product-title">Prabhu Soloist Bansuri - G Natural Treble</h3>
					<div class="product-specs-mini">
						<span>📏 12 Inches</span> • <span>Fine Bamboo</span> • <span>🟢 Sage Thread</span>
					</div>
					<p style="font-size:0.85rem; color:var(--color-text-muted);">
						Crisp, bright high notes perfect for fast rhythmic passages and solo improvisations.
					</p>
					<div class="product-price-row">
						<div>
							<span class="product-price" style="font-size:0.95rem;">Price on Request</span>
							<span style="display:block; font-size:0.75rem; color:var(--color-primary);">Direct Order</span>
						</div>
						<button class="btn btn-primary btn-sm inquire-trigger" data-title="Prabhu Soloist Bansuri - G Natural Treble" data-img="<?php echo esc_url( get_template_directory_uri() . '/assets/images/flute_e_natural.png' ); ?>">
							Inquire to Order 📩
						</button>
					</div>
				</div>
			</div>

			<!-- Product 4 -->
			<div class="product-card">
				<div class="product-image-wrap">
					<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/flute_accessory.png' ); ?>" alt="Padded Canvas Flute Carry Case">
					<span class="product-badge">Accessory</span>
					<span class="product-scale-tag">Padded Protection</span>
				</div>
				<div class="product-info">
					<div class="product-category">Accessories & Care</div>
					<h3 class="product-title">Padded Canvas Flute Carry Case</h3>
					<div class="product-specs-mini">
						<span>🎒 Fits 5 Flutes</span> • <span>🖤 Velvet Interior</span> • <span>💧 Water Resistant</span>
					</div>
					<p style="font-size:0.85rem; color:var(--color-text-muted);">
						Heavy-duty protective gig bag with adjustable shoulder strap and separate compartment for beeswax.
					</p>
					<div class="product-price-row">
						<div>
							<span class="product-price" style="font-size:0.95rem;">Price on Request</span>
							<span style="display:block; font-size:0.75rem; color:var(--color-primary);">Direct Order</span>
						</div>
						<button class="btn btn-primary btn-sm inquire-trigger" data-title="Padded Canvas Flute Carry Case" data-img="<?php echo esc_url( get_template_directory_uri() . '/assets/images/flute_accessory.png' ); ?>">
							Inquire to Order 📩
						</button>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>

<!-- Why Prabhu Flutes / Craftsmanship Features -->
<section class="features-section" id="craftsmanship">
	<div class="container">
		<div class="section-header">
			<span class="section-subtitle">Unmatched Quality</span>
			<h2>Why Musicians Choose Prabhu's Flutes</h2>
		</div>

		<div class="features-grid">
			<div class="feature-item">
				<div class="feature-icon">🎋</div>
				<h3>Seasoned Assam Bamboo</h3>
				<p>Hand-selected naturally aged bamboo cured for over 3 years to prevent cracking and ensure optimal acoustic density.</p>
			</div>

			<div class="feature-item">
				<div class="feature-icon">🎯</div>
				<h3>Precision Master Tuning</h3>
				<p>Accurately tuned to 440Hz / 432Hz standard pitch using electronic tanpura and stroboscopic tuners.</p>
			</div>

			<div class="feature-item">
				<div class="feature-icon">🧵</div>
				<h3>Silk Thread Binding</h3>
				<p>Protective high-grade nylon silk binding reinforces ends and tone holes against humidity and stress.</p>
			</div>

			<div class="feature-item">
				<div class="feature-icon">📦</div>
				<h3>Safe Direct Dispatch</h3>
				<p>Shipped in ultra-sturdy PVC hard tube packaging guaranteeing 100% damage-free delivery anywhere globally.</p>
			</div>
		</div>
	</div>
</section>

<!-- Contact & Order Inquiry Section -->
<section id="contact" style="padding: 5rem 0; background-color: var(--color-bg-card); border-top: 1px solid var(--color-border);">
	<div class="container">
		<div class="section-header">
			<span class="section-subtitle">Get In Touch</span>
			<h2>Contact Us to Order or Custom Tune</h2>
			<p>Have a question about flute scales, customized pitches, or placing an order? Reach out to us directly!</p>
		</div>

		<div class="contact-cards-grid">
			<div class="contact-card">
				<div class="contact-card-icon">💬</div>
				<h3>WhatsApp Instant Chat</h3>
				<p>Connect with our flute specialist on WhatsApp for quick answers and audio notes.</p>
				<a href="https://wa.me/919876543210?text=Hi%20Prabhu%27s%20Flutes!%20I%20would%20like%20to%20inquire%20about%20ordering." target="_blank" class="btn btn-whatsapp btn-sm" style="margin-top:0.75rem;">
					Chat on WhatsApp 📲
				</a>
			</div>

			<div class="contact-card">
				<div class="contact-card-icon">📞</div>
				<h3>Direct Call</h3>
				<p>Speak to us directly for scale consultations and custom orders.</p>
				<a href="tel:+919876543210" class="btn btn-outline btn-sm" style="margin-top:0.75rem;">
					Call +91 98765 43210 📞
				</a>
			</div>

			<div class="contact-card">
				<div class="contact-card-icon">✉️</div>
				<h3>Email Support</h3>
				<p>Send your custom specifications or inquiry via email.</p>
				<a href="mailto:support@prabhusflutes.com" class="btn btn-outline btn-sm" style="margin-top:0.75rem;">
					Email Us ✉️
				</a>
			</div>
		</div>
	</div>
</section>

<?php
get_footer();

