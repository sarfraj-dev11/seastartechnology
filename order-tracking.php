<?php
require_once 'includes/config.php';
$page_title = 'Order Tracking';
$page_desc  = 'Track your order from Seastar Technology. Contact us with your order number and we will provide a shipping update.';
include 'includes/header.php';
?>

<section class="page-hero page-hero--sm">
  <div class="container">
    <h1>Order Tracking</h1>
    <p>Need an update on your order? We'll get you the information you need.</p>
  </div>
</section>

<section class="section policy-section">
  <div class="container policy-content">

    <h2>How to Track Your Order</h2>
    <p>All physical orders shipped from our US warehouse include a tracking number sent to your email address at the time of dispatch. To track your order:</p>
    <ol>
      <li>Check your inbox (and spam folder) for a shipping confirmation email from <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>.</li>
      <li>Click the tracking link in the email, or enter your tracking number directly on the carrier's website.</li>
      <li>If you did not receive a tracking email, contact us and we will locate your shipment.</li>
    </ol>

    <h2>Contact Us for Order Status</h2>
    <p>If you have questions about your order, please reach out with your order number and we will respond within 1 business day:</p>
    <ul>
      <li><strong>Email:</strong> <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a></li>
      <li><strong>Phone:</strong> <a href="tel:<?php echo SITE_PHONE_RAW; ?>"><?php echo SITE_PHONE; ?></a></li>
      <li><strong>Hours:</strong> <?php echo SITE_HOURS_WEEKDAY; ?></li>
    </ul>

    <h2>Shipping Timeframes</h2>
    <ul>
      <li><strong>Digital software:</strong> Delivered by email within 24 hours of order confirmation.</li>
      <li><strong>Physical hardware:</strong> Ships within 1–2 business days via tracked carrier. Estimated delivery 3–7 business days depending on location.</li>
    </ul>

    <p>For full shipping details, see our <a href="shipping.php">Shipping Policy</a>.</p>

  </div>
</section>

<?php include 'includes/footer.php'; ?>
