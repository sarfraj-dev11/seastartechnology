<?php
require_once 'includes/config.php';
require_once 'includes/db.php';
require_once 'includes/form-handler.php';

$page_title = 'Contact Us';
$page_desc  = 'Contact MyComputerCare — authorized reseller of consumer technology. Call, email, or fill in our form.';
$products   = get_all_products();
$preset_product = isset($_GET['product']) ? htmlspecialchars(urldecode($_GET['product'])) : '';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <div class="section-badge">Get in Touch</div>
    <h1>Contact Us</h1>
    <p>Have a question about a product or your order? We're here to help. Reach us by phone, email, or the form below.</p>
  </div>
</section>

<section class="section" id="contact-main">
  <div class="container contact-grid">

    <!-- Form -->
    <div class="contact-form-col">
      <div class="contact-card">
        <h2>Send Us a Message</h2>
        <p class="form-subtext">We typically respond within 1 business day.</p>

        <?php if(isset($response) && !empty($response['message'])): ?>
          <div class="form-alert form-alert--<?php echo $response['success']?'success':'error'; ?>">
            <i class="fas fa-<?php echo $response['success']?'check-circle':'exclamation-circle'; ?>"></i>
            <?php echo htmlspecialchars($response['message']); ?>
          </div>
        <?php endif; ?>

        <form id="contact-form" method="POST" action="contact.php" novalidate>
          <input type="hidden" name="form_token" value="1">
          <!-- Honeypot -->
          <input type="text" name="website" style="display:none" tabindex="-1" autocomplete="off">

          <div class="form-row">
            <div class="form-group">
              <label for="name">Full Name <span class="req">*</span></label>
              <input type="text" id="name" name="name" placeholder="John Smith" required
                     value="<?php echo htmlspecialchars($_POST['name'] ?? ''); ?>">
            </div>
            <div class="form-group">
              <label for="email">Email Address <span class="req">*</span></label>
              <input type="email" id="email" name="email" placeholder="john@example.com" required
                     value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
            </div>
          </div>
          <div class="form-row">
            <div class="form-group">
              <label for="phone">Phone Number</label>
              <input type="tel" id="phone" name="phone" placeholder="+1 (555) 000-0000"
                     value="<?php echo htmlspecialchars($_POST['phone'] ?? ''); ?>">
            </div>
            <div class="form-group">
              <label for="product_interest">Product Interest</label>
              <select id="product_interest" name="product_interest">
                <option value="">— Select a product —</option>
                <?php foreach($products as $prod): ?>
                  <option value="<?php echo htmlspecialchars($prod['title']); ?>"
                    <?php echo ($preset_product===$prod['title']||($_POST['product_interest']??'')===$prod['title'])?'selected':''; ?>>
                    <?php echo htmlspecialchars($prod['title']); ?>
                  </option>
                <?php endforeach; ?>
              </select>
            </div>
          </div>
          <div class="form-group">
            <label for="message">Message <span class="req">*</span></label>
            <textarea id="message" name="message" rows="5" placeholder="Tell us what you need..." required><?php echo htmlspecialchars($_POST['message'] ?? ''); ?></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-lg btn-full" id="submit-btn">
            <i class="fas fa-paper-plane"></i> Send Message
          </button>
        </form>
      </div>
    </div>

    <!-- Info -->
    <div class="contact-info-col">
      <div class="contact-info-card">
        <h3><i class="fas fa-phone"></i> Phone</h3>
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="contact-link-lg"><?php echo SITE_PHONE; ?></a>
        <p>Call for immediate product assistance or order inquiries.</p>
      </div>
      <div class="contact-info-card">
        <h3><i class="fas fa-envelope"></i> Email</h3>
        <a href="mailto:<?php echo SITE_EMAIL; ?>" class="contact-link-lg"><?php echo SITE_EMAIL; ?></a>
        <p>We respond to emails within 1 business day.</p>
      </div>
      <div class="contact-info-card">
        <h3><i class="fas fa-location-dot"></i> Address</h3>
        <p><?php echo SITE_ADDRESS_LINE1; ?><br><?php echo SITE_ADDRESS_LINE2; ?></p>
      </div>
      <div class="contact-info-card">
        <h3><i class="fas fa-clock"></i> Business Hours</h3>
        <p><?php echo SITE_HOURS_WEEKDAY; ?><br><?php echo SITE_HOURS_WEEKEND; ?></p>
      </div>

      <!-- Help Center anchor -->
      <div class="contact-info-card help-anchor" id="help">
        <h3><i class="fas fa-circle-question"></i> Help Center</h3>
        <p>Need help with a product you already purchased? Call us or send a message — 24/7 post-sale assistance is included with every order.</p>
        <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-primary"><?php echo SITE_PHONE; ?></a>
      </div>
    </div>

  </div>
</section>

<!-- Map Placeholder -->
<div class="map-placeholder">
  <div class="map-placeholder-inner">
    <i class="fas fa-map-location-dot"></i>
    <p>Map embed — replace with your Google Maps iframe in contact.php</p>
  </div>
</div>

<?php include 'includes/footer.php'; ?>
