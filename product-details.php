<?php
require_once 'includes/config.php';
require_once 'includes/db.php';

$slug = isset($_GET['slug']) ? trim($_GET['slug']) : '';
$p    = $slug ? get_product_by_slug($slug) : null;

if (!$p) {
    header('Location: products.php');
    exit;
}

$related  = get_related_products($p['related'] ?? []);
$page_title = htmlspecialchars($p['title']);
$page_desc  = htmlspecialchars($p['short_desc']);
$extra_head = '<script type="application/ld+json">' . json_encode([
  '@context' => 'https://schema.org/',
  '@type'    => 'Product',
  'name'     => $p['title'],
  'image'    => SITE_URL . '/' . $p['image'],
  'description' => $p['short_desc'],
  'brand'    => ['@type' => 'Brand', 'name' => $p['brand']],
  'offers'   => [
    '@type'         => 'Offer',
    'url'           => SITE_URL . '/product-details.php?slug=' . urlencode($slug),
    'priceCurrency' => 'USD',
    'price'         => $p['price'],
    'availability'  => 'https://schema.org/InStock',
    'seller'        => ['@type' => 'Organization', 'name' => 'SEASTAR TECHNOLOGIES LLC'],
  ],
]) . '</script>';
include 'includes/header.php';
?>

<section class="page-hero page-hero--sm">
  <div class="container breadcrumb-bar">
    <a href="index.php">Home</a> <i class="fas fa-chevron-right"></i>
    <a href="products.php">Products</a> <i class="fas fa-chevron-right"></i>
    <a href="products.php?cat=<?php echo urlencode($p['category']); ?>"><?php echo htmlspecialchars($p['category']); ?></a> <i class="fas fa-chevron-right"></i>
    <span><?php echo htmlspecialchars($p['title']); ?></span>
  </div>
</section>

<section class="section product-detail-section">
  <div class="container product-detail-grid">

    <!-- LEFT: Image -->
    <div class="pd-image-col">
      <div class="pd-image-wrap">
        <img src="<?php echo htmlspecialchars($p['image']); ?>"
             alt="<?php echo htmlspecialchars($p['title']); ?>"
             onerror="this.src='assets/images/icons/product-placeholder.svg'">
      </div>
      <?php if(!empty($p['badge'])): ?>
        <div class="pd-badge"><?php echo htmlspecialchars($p['badge']); ?></div>
      <?php endif; ?>
    </div>

    <!-- RIGHT: Details -->
    <div class="pd-info-col">
      <div class="product-brand pd-brand"><?php echo htmlspecialchars($p['brand']); ?></div>
      <h1 class="pd-title"><?php echo htmlspecialchars($p['title']); ?></h1>
      <p class="pd-category"><i class="fas fa-tag"></i> <?php echo htmlspecialchars($p['category']); ?></p>
      <div class="pd-price">$<?php echo htmlspecialchars($p['price']); ?></div>
      <p style="font-size:0.85rem;color:#22c55e;margin-bottom:0.5rem;"><i class="fas fa-circle-check"></i> In Stock &middot; Ships within 1–2 business days from US warehouse</p>
      <p class="pd-short-desc"><?php echo htmlspecialchars($p['short_desc']); ?></p>
      <p class="product-pricing">(* Pricing may vary depending on your region and product variants.)</p>

      <div class="pd-cta-group">
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-primary btn-lg pd-cta">
          <i class="fas fa-phone"></i> Order by Phone: <?php echo SITE_PHONE; ?>
        </a>
        <a href="contact.php?product=<?php echo urlencode($p['title']); ?>" class="btn btn-outline btn-lg">
          <i class="fas fa-envelope"></i> Send Inquiry
        </a>
      </div>

        <!-- Description -->
      <div class="pd-block">
        <h3><i class="fas fa-circle-info"></i> Description</h3>
       <p class="pd-short-desc" style="margin-bottom: 1.4rem;"><?php echo htmlspecialchars($p['description1']); ?></p>
       <p class="pd-short-desc"><?php echo htmlspecialchars($p['description2']); ?></p>
      </div>

      <!-- What's Included -->
      <div class="pd-block">
        <h3><i class="fas fa-box-open"></i> What's Included</h3>
        <ul class="pd-list">
          <?php foreach($p['whats_included'] as $item): ?>
            <li><i class="fas fa-check"></i> <?php echo htmlspecialchars($item); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
      

          <!-- What's Included -->
      

      <!-- Activation Guidance USP -->
      <div class="pd-assistance-usp">
        <i class="fas fa-headset"></i>
        <div>
          <strong>Activation Guidance Included</strong>
          <p>One-time license activation guidance is included with eligible software purchases to confirm your license is registered correctly.</p>
        </div>
      </div>
      <p class="product-reseller-note" style="font-size:0.8rem;color:#666;margin-top:1rem;">Sold by SEASTAR TECHNOLOGIES LLC. Not affiliated with <?php echo htmlspecialchars($p['brand']); ?>.</p>
    </div>
  </div>
</section>

<!-- How to Purchase -->
<section class="section pd-how-to-buy-section">
  <div class="container">
    <h2 class="section-title">How to Purchase From Us</h2>
    <p class="section-subtitle">Simple, secure, and transparent — here's how it works:</p>
    <div class="how-to-buy-steps">
      <div class="buy-step">
        <div class="buy-step-number">1</div>
        <div class="buy-step-content">
          <strong>Find Your Product</strong>
          <p>Browse our catalog and select the product that fits your needs.</p>
        </div>
      </div>
      <div class="buy-step">
        <div class="buy-step-number">2</div>
        <div class="buy-step-content">
          <strong>Call Our Sales Person</strong>
          <p>Reach out to our sales team directly to get expert guidance.</p>
        </div>
      </div>
      <div class="buy-step">
        <div class="buy-step-number">3</div>
        <div class="buy-step-content">
          <strong>Discuss Variants</strong>
          <p>Talk through available versions, licenses, and options with our team.</p>
        </div>
      </div>
      <div class="buy-step">
        <div class="buy-step-number">4</div>
        <div class="buy-step-content">
          <strong>Receive Official Pricing via Email</strong>
          <p>We send you a formal pricing quote before any commitment is made.</p>
        </div>
      </div>
      <div class="buy-step">
        <div class="buy-step-number">5</div>
        <div class="buy-step-content">
          <strong>Secure Payment &amp; Invoice</strong>
          <p>Complete your payment securely and receive an official invoice on your email.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- What It Fixes -->
<section class="section pd-problems-section">
  <div class="container">
    <h2 class="section-title product-problems-sections">Key Product Benefits</h2>
    <p class="product-problems-sections-subheading">We are a retailer of consumer technology products and do not provide standalone technical support services</p>
    <div class="problems-grid">
      <?php foreach($p['problem_solved'] as $prob): ?>
      <div class="problem-card">
        <div class="problem-icon"><i class="fas fa-triangle-exclamation"></i></div>
        <div class="problem-text">
          <span class="problem-label">Issue</span>
          <span><?php echo htmlspecialchars($prob); ?></span>
        </div>
        <i class="fas fa-arrow-right problem-arrow"></i>
        <div class="solution-label"><i class="fas fa-check-circle"></i> Solved</div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Specs -->
<?php if(!empty($p['specs'])): ?>
<section class="section pd-specs-section">
  <div class="container">
    <h2 class="section-title">Specifications</h2>
    <div class="specs-table-wrap">
      <table class="specs-table">
        <?php foreach($p['specs'] as $key => $val): ?>
        <tr>
          <th><?php echo htmlspecialchars($key); ?></th>
          <td><?php echo htmlspecialchars($val); ?></td>
        </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- Long Description -->
<section class="section pd-desc-section">
  <div class="container pd-desc-inner">
    <h2 class="section-title">About This Product</h2>
    <p><?php echo htmlspecialchars($p['long_desc']); ?></p>
  </div>
</section>

<!-- Related Products -->
<?php if(!empty($related)): ?>
<section class="section related-section">
  <div class="container">
    <h2 class="section-title">Related Products</h2>
    <div class="products-grid">
      <?php foreach($related as $rp): ?>
      <div class="product-card">
        <?php if(!empty($rp['badge'])): ?>
          <div class="product-badge"><?php echo htmlspecialchars($rp['badge']); ?></div>
        <?php endif; ?>
        <div class="product-img-wrap">
          <img src="<?php echo htmlspecialchars($rp['image']); ?>"
               alt="<?php echo htmlspecialchars($rp['title']); ?>"
               onerror="this.src='assets/images/icons/product-placeholder.svg'" loading="lazy">
        </div>
        <div class="product-card-body">
          <div class="product-brand"><?php echo htmlspecialchars($rp['brand']); ?></div>
          <h3 class="product-name"><?php echo htmlspecialchars($rp['title']); ?></h3>
          <p class="product-short-desc"><?php echo htmlspecialchars($rp['short_desc']); ?></p>
        </div>
        <div class="product-card-footer">
          <div class="product-price">$<?php echo htmlspecialchars($rp['price']); ?></div>
          <a href="product-details.php?slug=<?php echo urlencode($rp['slug']); ?>" class="btn btn-primary btn-sm">View Details</a>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- Sticky Mobile CTA -->
<div class="sticky-cta-mobile" id="sticky-cta">
  <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-primary btn-lg sticky-call-btn">
    <i class="fas fa-phone"></i> Order by Phone: <?php echo SITE_PHONE; ?>
  </a>
</div>

<?php include 'includes/footer.php'; ?>
