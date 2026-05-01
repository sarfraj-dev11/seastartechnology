<?php
require_once 'includes/config.php';
require_once 'includes/db.php';

$page_title = 'Home';
$page_desc  = 'MyComputerCare is an authorized US reseller of McAfee, Bitdefender, Malwarebytes,  TP-Link and more. Every purchase includes 24/7 post-sale assistance.';
$featured   = get_featured_products(6);

include 'includes/header.php';
?>

<!-- ═══════════════════════════════════════════════
     HERO SECTION
═══════════════════════════════════════════════ -->
<section class="hero" id="hero">
  <div class="hero-bg-shapes">
    <div class="shape shape-1"></div>
    <div class="shape shape-2"></div>
    <div class="shape shape-3"></div>
  </div>
  <div class="container hero-inner">
    <div class="hero-content">
      <div class="hero-badge">
        <i class="fas fa-certificate"></i> Authorized US Reseller
      </div>
      <h1 class="hero-title">
        Trusted Computer &amp;<br><span class="gradient-text">Security Products</span><br>Delivered to Your Door
      </h1>
      <p class="hero-subtitle">
        Genuine software, hardware &amp; accessories from the brands you trust —
        McAfee, Bitdefender, Malwarebytes,  TP-Link &amp; more. Every purchase includes
        setup & post-sale assistance.
      </p>
      <div class="hero-actions">
        <a href="products.php" class="btn btn-primary btn-lg">
          <i class="fas fa-th-large"></i> Shop All Products
        </a>
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-primary btn-lg">
          <i class="fas fa-phone"></i> <?php echo SITE_PHONE; ?>
        </a>
      </div>
      <div class="hero-trust-badges">
        <span><i class="fas fa-lock"></i> Secure Checkout</span>
        <span><i class="fas fa-rotate-left"></i> 30-Day Returns</span>
        <span><i class="fas fa-truck-fast"></i> Fast Shipping</span>
        <span><i class="fas fa-headset"></i> Post-Sale assistance</span>
      </div>
    </div>
    <div class="hero-visual">
      <div class="hero-card-stack">
        <div class="hero-card hc-1">
          <i class="fas fa-shield-halved"></i>
          <span>Antivirus Protection</span>
        </div>
        <div class="hero-card hc-2">
          <i class="fas fa-hard-drive"></i>
          <span>Storage Upgrades</span>
        </div>
        <div class="hero-card hc-3">
          <i class="fas fa-wifi"></i>
          <span>Networking</span>
        </div>
        <div class="hero-card hc-4">
          <i class="fas fa-desktop"></i>
          <span>Computers &amp; Printers</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════
     FEATURED PRODUCTS
═══════════════════════════════════════════════ -->
<section class="section featured-products" id="featured-products">
  <div class="container">
    <div class="section-header">
      <div class="section-badge">Top Sellers</div>
      <h2 class="section-title">Featured Products</h2>
      <p class="section-subtitle">Handpicked best-sellers across every category — from antivirus to storage to printers.</p>
    </div>

    <div class="products-grid">
      <?php foreach ($featured as $p): ?>
      <div class="product-card" data-category="<?php echo htmlspecialchars($p['category']); ?>">
        <?php if (!empty($p['badge'])): ?>
          <div class="product-badge"><?php echo htmlspecialchars($p['badge']); ?></div>
        <?php endif; ?>
        <div class="product-img-wrap">
          <img src="<?php echo htmlspecialchars($p['image']); ?>"
               alt="<?php echo htmlspecialchars($p['title']); ?>"
               onerror="this.src='assets/images/icons/product-placeholder.svg'"
               loading="lazy">
        </div>
        <div class="product-card-body">
          <div class="product-brand"><?php echo htmlspecialchars($p['brand']); ?></div>
          <h3 class="product-name"><?php echo htmlspecialchars($p['title']); ?></h3>
          <p class="product-short-desc"><?php echo htmlspecialchars($p['short_desc']); ?></p>
          <div class="product-problems">
            <?php foreach(array_slice($p['problem_solved'], 0, 2) as $prob): ?>
              <span class="problem-tag"><i class="fas fa-check-circle"></i> <?php echo htmlspecialchars($prob); ?></span>
            <?php endforeach; ?>
          </div>
        </div>
        <div class="product-card-footer">
          <div class="product-price">$<?php echo htmlspecialchars($p['price']); ?></div>
          <a href="product-details.php?slug=<?php echo urlencode($p['slug']); ?>" class="btn btn-primary btn-sm">View Details</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>

    <div class="section-cta">
      <a href="products.php" class="btn btn-outline btn-lg">View All Products <i class="fas fa-arrow-right"></i></a>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════
     USP BLOCK — WHY BUY FROM US
═══════════════════════════════════════════════ -->
<section class="section usp-section" id="why-us">
  <div class="container">
    <div class="section-header">
      <div class="section-badge">Our Promise</div>
      <h2 class="section-title">More Than Just a Product</h2>
      <p class="section-subtitle">
        When you buy from MyComputerCare, you get more than a product. Every purchase includes
        24/7 setup and post-sale technician assistance from our certified team —
        so the product you bought actually works the way it should, on your system, from day one.
      </p>
    </div>

    <div class="usp-grid">
      <div class="usp-card">
        <div class="usp-icon"><i class="fas fa-certificate"></i></div>
        <h3>Genuine Products</h3>
        <p>Every item we sell is sourced from authorized distribution channels. No gray market, no counterfeits — guaranteed.</p>
      </div>
      <div class="usp-card usp-card--highlight">
        <div class="usp-icon"><i class="fas fa-headset"></i></div>
        <h3>24/7 Setup assistance</h3>
        <p>Our certified technicians are available to help you install, activate, and configure your purchase — included with every order.</p>
        <div class="usp-highlight-badge">24/7 Support</div>
      </div>
      <div class="usp-card">
        <div class="usp-icon"><i class="fas fa-rotate-left"></i></div>
        <h3>30-Day Return Policy</h3>
        <p>Not satisfied? Return any unopened physical product or report a non-functioning software key within 30 days for a full resolution.</p>
      </div>
      <div class="usp-card">
        <div class="usp-icon"><i class="fas fa-truck-fast"></i></div>
        <h3>Fast Delivery</h3>
        <p>Software delivered digitally within 24 hours. Physical hardware ships within 1–2 business days via tracked carrier.</p>
      </div>
      <div class="usp-card">
        <div class="usp-icon"><i class="fas fa-lock"></i></div>
        <h3>Secure Transactions</h3>
        <p>SSL-encrypted checkout. Your payment and personal information are protected at every step.</p>
      </div>
      <div class="usp-card">
        <div class="usp-icon"><i class="fas fa-star"></i></div>
        <h3>Trusted by Thousands</h3>
        <p>Thousands of customers across the US rely on MyComputerCare for their technology purchases every year.</p>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════
     TRUST STRIP — BRAND LOGOS
═══════════════════════════════════════════════ -->
<section class="trust-strip" id="brands">
  <div class="container">
    <p class="trust-strip-label">Authorized Reseller Of Leading Brands</p>
    <div class="trust-logos-ticker">
      <div class="trust-logos-track">
        <?php
        $brands = ['McAfee','Bitdefender','Malwarebytes','Western Digital','Seagate','TP-Link','Logitech','Microsoft','iolo','Crucial','Canon','Epson'];
        foreach($brands as $b): ?>
          <div class="trust-logo-item"><span><?php echo $b; ?></span></div>
        <?php endforeach; ?>
        <?php foreach($brands as $b): ?>
          <div class="trust-logo-item"><span><?php echo $b; ?></span></div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<!-- ═══════════════════════════════════════════════
     CALL TO ACTION BANNER
═══════════════════════════════════════════════ -->
<section class="cta-banner">
  <div class="container cta-banner-inner">
    <div class="cta-banner-content">
      <h2>Not Sure Which Product You Need?</h2>
      <p>Call our product specialists — we'll help you find the right solution for your situation, no pressure.</p>
    </div>
    <div class="cta-banner-actions">
      <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-white btn-lg">
        <i class="fas fa-phone"></i> <?php echo SITE_PHONE; ?>
      </a>
      <a href="contact.php" class="btn btn-outline-white btn-lg">Send a Message</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
