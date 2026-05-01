</main>

<!-- Footer -->
<footer class="site-footer">

  <!-- Trust Logos -->
  <div class="footer-brands">
    <div class="container">
      <p class="brands-label">Authorized Reseller Of</p>
      <div class="brands-logos">
        <span class="brand-badge">McAfee</span>
        <span class="brand-badge">Bitdefender</span>
        <span class="brand-badge">Malwarebytes</span>
        
        <span class="brand-badge">Western Digital</span>
        <span class="brand-badge">Seagate</span>
    
        <span class="brand-badge">TP-Link</span>
        <span class="brand-badge">Logitech</span>
        <span class="brand-badge">Microsoft</span>
        <span class="brand-badge">iolo</span>
      </div>
    </div>
  </div>

  <div class="footer-main">
    <div class="container footer-grid">

      <!-- Brand Col -->
      <div class="footer-col footer-brand-col">
        <div class="footer-logo">
          <div class="logo-icon">
             <img src="../assets/images/icons/MyComputerCare logo.png" alt="MyComputerCare Logo">
        </div>
          <!-- <span class="logo-name">MyComputerCare</span> -->
        </div>
        <p class="footer-tagline">Authorized US reseller of genuine computer security software, hardware, and accessories — with 24/7 post-sale technician assistance on every order.</p>
        <div class="footer-social">
          <?php if(SOCIAL_FACEBOOK): ?><a href="<?php echo SOCIAL_FACEBOOK; ?>" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a><?php endif; ?>
          <?php if(SOCIAL_TWITTER): ?><a href="<?php echo SOCIAL_TWITTER; ?>" aria-label="Twitter"><i class="fab fa-x-twitter"></i></a><?php endif; ?>
          <?php if(SOCIAL_LINKEDIN): ?><a href="<?php echo SOCIAL_LINKEDIN; ?>" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a><?php endif; ?>
        </div>
      </div>

      <!-- Products Col -->
      <div class="footer-col">
        <h4 class="footer-col-title">Products</h4>
        <ul class="footer-links">
          <li><a href="<?php echo isset($depth) ? $depth : ''; ?>products.php?cat=Security+Software">Security Software</a></li>
          <li><a href="<?php echo isset($depth) ? $depth : ''; ?>products.php?cat=PC+Optimization">PC Optimization</a></li>
          <li><a href="<?php echo isset($depth) ? $depth : ''; ?>products.php?cat=OS+%26+Recovery">OS &amp; Recovery</a></li>
          <li><a href="<?php echo isset($depth) ? $depth : ''; ?>products.php?cat=Storage">Storage</a></li>
          <li><a href="<?php echo isset($depth) ? $depth : ''; ?>products.php?cat=Networking">Networking</a></li>
          <li><a href="<?php echo isset($depth) ? $depth : ''; ?>products.php?cat=Printers">Printers</a></li>
          <li><a href="<?php echo isset($depth) ? $depth : ''; ?>products.php?cat=Coverage+Plans">Coverage Plans</a></li>
        </ul>
      </div>

      <!-- Company Col -->
      <div class="footer-col">
        <h4 class="footer-col-title">Company</h4>
        <ul class="footer-links">
          <li><a href="<?php echo isset($depth) ? $depth : ''; ?>about.php">About Us</a></li>
          <li><a href="<?php echo isset($depth) ? $depth : ''; ?>contact.php">Contact</a></li>
          <li><a href="<?php echo isset($depth) ? $depth : ''; ?>contact.php#help">Help Center</a></li>
          <li><a href="<?php echo isset($depth) ? $depth : ''; ?>terms.php">Terms &amp; Conditions</a></li>
          <li><a href="<?php echo isset($depth) ? $depth : ''; ?>privacy.php">Privacy Policy</a></li>
          <li><a href="<?php echo isset($depth) ? $depth : ''; ?>refund.php">Refund Policy</a></li>
          <li><a href="<?php echo isset($depth) ? $depth : ''; ?>shipping.php">Shipping Policy</a></li>
        </ul>
      </div>

      <!-- Contact Col -->
      <div class="footer-col">
        <h4 class="footer-col-title">Contact Us</h4>
        <ul class="footer-contact-list">
          <li><i class="fas fa-location-dot"></i>
            <span><?php echo SITE_ADDRESS_LINE1; ?><br><?php echo SITE_ADDRESS_LINE2; ?></span>
          </li>
          <li><i class="fas fa-phone"></i>
            <a href="tel:<?php echo SITE_PHONE_RAW; ?>"><?php echo SITE_PHONE; ?></a>
          </li>
          <li><i class="fas fa-envelope"></i>
            <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>
          </li>
          <li><i class="fas fa-clock"></i>
            <span><?php echo SITE_HOURS_WEEKDAY; ?><br>
            <!-- <?php echo SITE_HOURS_WEEKEND; ?> -->
          </span>
          </li>
        </ul>
      </div>

    </div>
  </div>

  <!-- Disclaimer -->
  <div class="footer-disclaimer">
    <div class="container">
      <p><?php echo SITE_LEGAL_NAME; ?> (<?php echo SITE_ADDRESS_FULL; ?>) is an independent authorized reseller of select antivirus software products. We are not affiliated with, endorsed by, or acting on behalf of any software manufacturer, technology brand, or OEM unless explicitly stated. Brand names, logos, and trademarks mentioned belong to their respective owners and are used solely for product identification. All software products are sold as-is per their respective manufacturer's terms. Remote installation is provided as part of the purchase to assist with product setup only. Prices and availability are subject to change. Software purchases are non-refundable once activated per manufacturer licensing terms.</p>
      <p>Opt-Out: To stop receiving communications, call <a href="tel:<?php echo SITE_PHONE_RAW; ?>"><?php echo SITE_PHONE; ?></a> or email <a href="mailto:<?php echo SITE_EMAIL; ?>"><?php echo SITE_EMAIL; ?></a>.</p>
    </div>
  </div>

  <!-- Footer Bottom -->
  <div class="footer-bottom">
    <div class="container footer-bottom-inner">
      <p>&copy; <?php echo date('Y'); ?> <?php echo SITE_LEGAL_NAME; ?> dba <?php echo SITE_NAME; ?>. All rights reserved. Authorized reseller — not affiliated with or endorsed by manufacturers.</p>
      <div class="footer-bottom-links">
        <a href="<?php echo isset($depth) ? $depth : ''; ?>privacy.php">Privacy</a>
        <a href="<?php echo isset($depth) ? $depth : ''; ?>terms.php">Terms</a>
        <a href="<?php echo isset($depth) ? $depth : ''; ?>refund.php">Refunds</a>
        <a href="<?php echo isset($depth) ? $depth : ''; ?>shipping.php">Shipping</a>
      </div>
    </div>
  </div>
</footer>

<!-- Scripts -->
<script src="<?php echo isset($depth) ? $depth : ''; ?>assets/js/main.js"></script>
<?php if(isset($extra_scripts)) echo $extra_scripts; ?>
</body>
</html>
