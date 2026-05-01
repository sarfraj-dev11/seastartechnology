<?php
require_once 'includes/config.php';
$page_title = 'Refund Policy';
$page_desc  = 'MyComputerCare Refund Policy — 30-day returns on physical products and software key issues.';
include 'includes/header.php';
?>
<section class="page-hero page-hero--sm">
  <div class="container"><h1>Refund Policy</h1><p>Last Updated: January 1, 2025</p></div>
</section>
<section class="section policy-section">
<div class="container policy-content">

<p>We want you to be fully satisfied with every purchase. Please read the following refund guidelines carefully.</p>

<h2>1. Physical Products (Hardware, USB Media, Accessories)</h2>
<ul>
  <li><strong>Return window:</strong> 30 days from confirmed delivery date.</li>
  <li><strong>Condition:</strong> Items must be unopened and in original packaging to qualify for a full product refund.</li>
  <li><strong>Opened / defective items:</strong> If an item arrives damaged or defective, contact us within 30 days and we will arrange a replacement or full refund.</li>
  <li><strong>Return shipping:</strong> Customer is responsible for return shipping costs unless the item arrived damaged or was incorrectly shipped.</li>
  <li><strong>Non-returnable:</strong> Items that have been physically installed (e.g., SSD, HDD, laptop screen) are non-returnable unless defective upon arrival.</li>
</ul>

<h2>2. Digital Products (Software Licenses, Activation Codes)</h2>
<ul>
  <li><strong>Non-functional key:</strong> If your license key fails to activate and we cannot resolve the issue within 48 hours, you are entitled to a full refund.</li>
  <li><strong>Activated keys:</strong> Once a software key has been successfully activated, it is non-refundable.</li>
  <li><strong>Wrong product:</strong> If you received a license for the wrong product or edition, we will exchange it or refund it in full.</li>
  <li><strong>Claim window:</strong> Digital product claims must be submitted within 30 days of purchase.</li>
</ul>

<h2>3. Coverage Plans &amp; Renewals</h2>
<ul>
  <li>Annual renewal codes that have not been applied may be refunded within 14 days of purchase.</li>
  <li>Extended warranty plans may be cancelled for a prorated refund within 30 days of purchase.</li>
</ul>

<h2>4. How to Request a Refund</h2>
<p>Email us at <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a> or call <a href="tel:<?php echo SITE_PHONE_RAW; ?>"><?php echo SITE_PHONE; ?></a> with your order details and reason for the request. We aim to process all approved refunds within 5–7 business days.</p>

<h2>5. Refund Method</h2>
<p>Approved refunds are issued to the original payment method. Processing time may vary by bank or card issuer (typically 3–10 business days after approval).</p>

<h2>Contact Us</h2>
<p><?php echo SITE_NAME; ?> — <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a> | <a href="tel:<?php echo SITE_PHONE_RAW; ?>"><?php echo SITE_PHONE; ?></a></p>

</div>
</section>
<?php include 'includes/footer.php'; ?>
