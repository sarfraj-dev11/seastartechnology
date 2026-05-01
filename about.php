<?php
require_once 'includes/config.php';
$page_title = 'About Us';
$page_desc  = 'Solvent Technology LLC is a U.S.-registered authorized reseller of leading antivirus and security software products, located in Rockville, Maryland.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="page-hero-content">
      <div class="section-badge">Who We Are</div>
      <h1>About <?php echo SITE_NAME; ?></h1>
      <p>Solvent Technology LLC — a U.S.-registered authorized reseller of leading antivirus and security software products, located in Rockville, Maryland.</p>
    </div>
  </div>
</section>

<!-- Section 1: Who We Are -->
<section class="section">
  <div class="container about-grid">
    <div class="about-content">
      <div class="section-badge">Our Story</div>
      <h2 class="section-title">US-Based Authorized Technology Reseller</h2>
      <p>Solvent Technology LLC is a U.S.-registered authorized reseller of leading antivirus and security software products, located in Rockville, Maryland.</p>
      <p>We are an independent reseller — not affiliated with, endorsed by, or representing any software manufacturer or OEM unless explicitly stated. Brand names and trademarks belong to their respective owners and are used solely for product identification.</p>
      <p>Every purchase includes guided remote installation so you can start using your software immediately. We believe in transparent pricing and honest service.</p>
      <div class="about-stats">
        <div class="stat-item">
          <span class="stat-num">10,000+</span>
          <span class="stat-label">Orders Fulfilled</span>
        </div>
        <div class="stat-item">
          <span class="stat-num">25+</span>
          <span class="stat-label">Product Lines</span>
        </div>
        <div class="stat-item">
          <span class="stat-num">12+</span>
          <span class="stat-label">Trusted Brands</span>
        </div>
      </div>
    </div>
    <div class="about-visual">
      <div class="about-card-grid">
        <div class="about-icon-card"><i class="fas fa-shield-halved"></i><span>Security Software</span></div>
        <div class="about-icon-card"><i class="fas fa-hard-drive"></i><span>Storage</span></div>
        <div class="about-icon-card"><i class="fas fa-wifi"></i><span>Networking</span></div>
        <div class="about-icon-card"><i class="fas fa-print"></i><span>Printers</span></div>
        <div class="about-icon-card"><i class="fas fa-windows"></i><span>OS Media</span></div>
        <div class="about-icon-card"><i class="fas fa-keyboard"></i><span>Peripherals</span></div>
      </div>
    </div>
  </div>
</section>

<!-- Section 2: Our Commitment -->
<section class="section usp-section">
  <div class="container">
    <div class="section-header">
      <div class="section-badge">Our Commitment</div>
      <h2 class="section-title">Genuine Products. Backed by Real assistance.</h2>
      <p class="section-subtitle">
        When you buy from MyComputerCare, you get more than a product. Every purchase includes
        24/7 setup and post-sale technician assistance from our certified team —
        so the product you bought actually works the way it should, on your system, from day one.
      </p>
    </div>
    <div class="usp-grid">
      <div class="usp-card">
        <div class="usp-icon"><i class="fas fa-certificate"></i></div>
        <h3>Authorized &amp; Genuine</h3>
        <p>We source products only through authorized channels. Every item is genuine, manufacturer-warranted, and fully activatable.</p>
      </div>
      <div class="usp-card usp-card--highlight">
        <div class="usp-icon"><i class="fas fa-headset"></i></div>
        <h3>Post-Sale Technician assistance</h3>
        <p>Our certified technicians help you set up and configure every product you purchase — included with every order.</p>
        <div class="usp-highlight-badge">24/7 Included</div>
      </div>
      <div class="usp-card">
        <div class="usp-icon"><i class="fas fa-handshake"></i></div>
        <h3>Honest, Transparent Pricing</h3>
        <p>No hidden fees. The price you see is what you pay. Software renewals often 20–30% below manufacturer retail.</p>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section class="cta-banner">
  <div class="container cta-banner-inner">
    <div class="cta-banner-content">
      <h2>Ready to Find the Right Product?</h2>
      <p>Browse our full catalog or speak with a product specialist today.</p>
    </div>
    <div class="cta-banner-actions">
      <a href="products.php" class="btn btn-white btn-lg"><i class="fas fa-th-large"></i> Browse Products</a>
      <a href="contact.php" class="btn btn-outline-white btn-lg">Contact Us</a>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
