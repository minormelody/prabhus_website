# Hostinger & WordPress Deployment Guide for Prabhu's Flutes E-Commerce Website

This document provides a clear, step-by-step procedure to deploy the **Prabhu's Flutes** custom e-commerce theme to **Hostinger** using **WordPress** and **WooCommerce**.

---

## 📋 Overview of Included Project Files

| File / Directory | Purpose |
| :--- | :--- |
| `prabhus_website/style.css` | Theme stylesheet header & custom design system tokens |
| `prabhus_website/functions.php` | WooCommerce support, theme setup, AJAX cart counters |
| `prabhus_website/header.php` | Top bar announcement, brand logo, navigation & cart button |
| `prabhus_website/footer.php` | Footer, customer support, trust badges & cart drawer overlay |
| `prabhus_website/front-page.php` | Homepage layout, live audio scale tester, product grids |
| `prabhus_website/woocommerce/` | WooCommerce custom archive & single product template overrides |
| `prabhus_website/assets/js/theme.js` | Web Audio API flute sound synthesizer & cart drawer JS |
| `prabhus_website/sample-products-import.csv` | 1-Click ready WooCommerce product import CSV |
| `prabhus_website/index.html` | Standalone interactive preview file to test in local browser |

---

## 🚀 Step 1: Install WordPress on Hostinger hPanel

1. Log into your **Hostinger Control Panel (hPanel)** at [hostinger.com](https://hostinger.com).
2. Go to **Websites** -> Click **Add Website** (or select your domain, e.g., `prabhusflutes.com`).
3. Choose **WordPress** as your platform.
4. Set up your Administrator Email, Username, and Strong Password.
5. Choose your desired region/data center location (e.g., Mumbai, India or nearest location).
6. Click **Install**. Hostinger will install WordPress with free SSL automatically.

---

## 📦 Step 2: Zip & Upload `prabhus_website` Theme

### Option A: Upload via WordPress Admin Dashboard (Easiest)
1. Compress the `prabhus_website` directory into a `.zip` file: `prabhus_website.zip`.
2. Log into your WordPress Dashboard (`https://yourdomain.com/wp-admin`).
3. Navigate to **Appearance** > **Themes** > Click **Add New Theme**.
4. Click **Upload Theme** > Select `prabhus_website.zip`.
5. Click **Install Now** and then click **Activate**.

### Option B: Upload via Hostinger File Manager
1. In Hostinger hPanel, open **File Manager** (`public_html`).
2. Navigate to `public_html/wp-content/themes/`.
3. Upload the `prabhus_website` folder directly.
4. Go to WP Admin > **Appearance** > **Themes** and click **Activate**.

---

## 🛒 Step 3: Install WooCommerce Plugin

1. In WP Admin, go to **Plugins** > **Add New**.
2. Search for **WooCommerce**.
3. Click **Install Now**, then click **Activate**.
4. Follow the brief WooCommerce Setup Wizard (Set Currency to **INR ₹** or **USD $**, Address, and Shipping settings).

---

## 📥 Step 4: Import Flute Products (1-Click Import)

1. In WP Admin, go to **WooCommerce** > **Products**.
2. Click the **Import** button at the top.
3. Select the file `prabhus_website/sample-products-import.csv`.
4. Click **Continue** and then **Run the Importer**.
5. All 6+ flute products, categories (Medium, Bass, Treble, Accessories), prices, and scale tags will be populated automatically!

---

## 💳 Step 5: Configure Payment Gateways (Razorpay / Stripe / UPI)

1. **For Indian Customers (UPI / NetBanking / Cards)**:
   - Install the **Razorpay WooCommerce Plugin** or **PhonePe WooCommerce Plugin**.
   - Enter your Key ID & Key Secret from your Razorpay/PhonePe dashboard.
2. **For International Customers (Credit Cards / PayPal)**:
   - Go to **WooCommerce** > **Settings** > **Payments**.
   - Enable **Stripe** or **PayPal Checkout**.

---

## ⚡ Step 6: Hostinger Speed & Cache Optimization

1. Hostinger provides built-in **LiteSpeed Web Server**.
2. Go to **Plugins** > **Add New** > Search for **LiteSpeed Cache**.
3. Install & Activate **LiteSpeed Cache**.
4. Turn on **Object Cache (Memcached/Redis)** and **CSS/JS Minification** in LiteSpeed settings for lightning fast page loads.

---

## 🔍 Previewing Locally Before Hostinger Upload

You can preview the interactive store on your computer right now! Simply open:
`file:///Users/rushikeshdidhe/Antigravity/rajesh-portfolio/prabhus_website/index.html` in your web browser (Chrome/Safari).
