<?php
/**
 * Footer Template for Prabhu's Flutes Website
 *
 * @package Prabhus_Website
 */
?>

<!-- Slide-out Product Inquiry Drawer -->
<div class="inquire-drawer-backdrop" id="inquire-backdrop"></div>
<div class="inquire-drawer" id="inquire-drawer">
	<div class="inquire-drawer-header">
		<h3>Product Inquiry & Order</h3>
		<button class="icon-btn" id="close-inquire-btn" aria-label="Close Drawer">&times;</button>
	</div>
	<div class="inquire-drawer-body">
		<!-- Selected Product Summary -->
		<div class="inquire-selected-product">
			<img src="<?php echo esc_url( get_template_directory_uri() . '/assets/images/flute_e_natural.png' ); ?>" id="inquire-product-img" alt="Selected Flute">
			<div>
				<h5 id="inquire-product-title">Prabhu Concert Bansuri - E Natural Medium</h5>
				<span style="font-size:0.8rem; color:var(--color-primary);">Handcrafted Assam Bamboo</span>
			</div>
		</div>

		<!-- Direct Contact Options -->
		<div style="margin-bottom: 1.5rem;">
			<label class="form-label" style="margin-bottom: 0.5rem;">Fastest Way to Order:</label>
			<a href="#" id="whatsapp-inquire-link" target="_blank" class="btn btn-whatsapp" style="width: 100%; margin-bottom: 0.75rem;">
				💬 Order via WhatsApp Directly
			</a>
			<a href="tel:+919876543210" class="btn btn-outline" style="width: 100%;">
				📞 Call Us (+91 98765 43210)
			</a>
		</div>

		<div style="text-align: center; margin: 1rem 0; font-size: 0.85rem; color: var(--color-text-muted);">
			── OR SEND QUICK MESSAGE ──
		</div>

		<!-- Quick Form -->
		<form id="quick-inquire-form">
			<div class="form-group">
				<label class="form-label">Your Name</label>
				<input type="text" class="form-control" placeholder="Enter your name" required>
			</div>
			<div class="form-group">
				<label class="form-label">Phone / WhatsApp</label>
				<input type="tel" class="form-control" placeholder="Your phone number" required>
			</div>
			<div class="form-group">
				<label class="form-label">Message / Custom Requests</label>
				<textarea class="form-control" id="inquire-message" required></textarea>
			</div>
			<button type="submit" class="btn btn-primary" style="width: 100%;">
				Submit Inquiry 📩
			</button>
		</form>
	</div>
</div>

<!-- Main Footer -->
<footer class="site-footer">
	<div class="container">
		<div class="footer-grid">
			<!-- Brand Info -->
			<div class="footer-brand">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="brand-logo" style="margin-bottom:1rem;">
					<div class="brand-logo-icon">🪈</div>
					<div>
						<div class="brand-title">PRABHU'S</div>
						<span class="brand-subtitle">FLUTES & INSTRUMENTS</span>
					</div>
				</a>
				<p>Crafting master-grade Indian Bansuri and concert flutes using seasoned Assam bamboo. Tuned to perfection for professional musicians, disciples, and enthusiasts worldwide.</p>
			</div>

			<!-- Quick Links -->
			<div class="footer-column">
				<h4>Flute Categories</h4>
				<ul class="footer-links">
					<li><a href="#featured-flutes">Medium Bansuri Flutes</a></li>
					<li><a href="#featured-flutes">Deep Bass Flutes</a></li>
					<li><a href="#featured-flutes">Beginner Flute Sets</a></li>
					<li><a href="#featured-flutes">Flute Carrying Bags</a></li>
					<li><a href="#featured-flutes">Maintenance Beeswax</a></li>
				</ul>
			</div>

			<!-- Customer Care -->
			<div class="footer-column">
				<h4>Customer Support</h4>
				<ul class="footer-links">
					<li><a href="#audio-preview">Listen Sound Clips</a></li>
					<li><a href="#contact">Contact & Inquiry</a></li>
					<li><a href="#contact">Custom Pitch Tuning</a></li>
					<li><a href="#contact">Dispatch & Delivery Info</a></li>
				</ul>
			</div>

			<!-- Contact & Info -->
			<div class="footer-column">
				<h4>Get In Touch</h4>
				<p style="font-size:0.9rem; margin-bottom:0.5rem;">📍 Assam & New Delhi, India</p>
				<p style="font-size:0.9rem; margin-bottom:0.5rem;">📞 +91 98765 43210</p>
				<p style="font-size:0.9rem; margin-bottom:1rem;">✉️ support@prabhusflutes.com</p>
				
				<div style="background:var(--color-bg-card); padding:0.8rem; border-radius:var(--radius-sm); border:1px solid var(--color-border); font-size:0.75rem; color:var(--color-primary-light);">
					💬 Direct Contact & Custom Tuning Consultation Available
				</div>
			</div>
		</div>

		<!-- Footer Bottom -->
		<div class="footer-bottom">
			<div>
				&copy; <?php echo date('Y'); ?> Prabhu's Flutes. Showcase Catalog & Direct Contact Orders.
			</div>
			<div style="display:flex; gap:1.5rem;">
				<a href="#contact">Contact Us</a>
				<a href="#featured-flutes">Catalog Showcase</a>
			</div>
		</div>
	</div>
</footer>

<?php wp_footer(); ?>
</body>
</html>

