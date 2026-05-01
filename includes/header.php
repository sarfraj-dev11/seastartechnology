<?php
require_once __DIR__ . '/config.php';

$current_page = basename($_SERVER['PHP_SELF'], '.php');

function nav_class($page) {
    global $current_page;
    return $current_page === $page ? 'active' : '';
}

function products_url($slug = '') {
    return $slug ? 'product-details.php?slug=' . $slug : 'products.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_NAME . ' — ' . SITE_TAGLINE; ?></title>
  <meta name="description" content="<?php echo isset($page_desc) ? $page_desc : 'MyComputerCare is an authorized US reseller of trusted computer security software, hardware, and accessories. Every purchase includes 24/7 post-sale technician assistance.'; ?>">
  <meta name="robots" content="index, follow">
  <link rel="canonical" href="<?php echo SITE_URL . '/' . basename($_SERVER['PHP_SELF']); ?>">
  <link rel="icon" href="assets/images/icons/favicon.ico" type="image/x-icon">
  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:site_name" content="<?php echo SITE_NAME; ?>">
  <meta property="og:title" content="<?php echo isset($page_title) ? $page_title . ' | ' . SITE_NAME : SITE_NAME; ?>">
  <meta property="og:description" content="<?php echo isset($page_desc) ? $page_desc : 'Authorized reseller of McAfee, Bitdefender, Malwarebytes,  TP-Link, and more.'; ?>">
  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
  <!-- Icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo isset($depth) ? $depth : ''; ?>assets/css/base.css">
  <link rel="stylesheet" href="<?php echo isset($depth) ? $depth : ''; ?>assets/css/layout.css">
  <link rel="stylesheet" href="<?php echo isset($depth) ? $depth : ''; ?>assets/css/home.css">
  <link rel="stylesheet" href="<?php echo isset($depth) ? $depth : ''; ?>assets/css/products.css">
  <link rel="stylesheet" href="<?php echo isset($depth) ? $depth : ''; ?>assets/css/pages.css">
  <link rel="stylesheet" href="<?php echo isset($depth) ? $depth : ''; ?>assets/css/responsive.css">
  <?php if(isset($extra_head)) echo $extra_head; ?>
</head>
<body>

<!-- Top Bar -->
<div class="top-bar">
  <div class="container top-bar-inner">
    <span class="top-bar-text"><i class="fas fa-shield-halved"></i> Authorized Reseller — Genuine Products Guaranteed</span>
    <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="top-bar-phone">
      <i class="fas fa-phone"></i> <?php echo SITE_PHONE; ?>
    </a>
  </div>
</div>

<!-- Header -->
<header class="site-header" id="site-header">
  <div class="container header-inner">
    <a href="<?php echo isset($depth) ? $depth : ''; ?>index.php" class="logo">
      <div class="logo-icon">
        <img src="../assets/images/icons/MyComputerCare logo.png" alt="MyComputerCare Logo">
        <!-- <i class="fas fa-laptop-medical"></i> -->
    </div>
      <!-- <div class="logo-text">
        <span class="logo-name">MyComputerCare</span>
        <span class="logo-tag">Authorized Reseller</span>
      </div> -->
    </a>

    <nav class="main-nav" id="main-nav">
      <ul>
        <li><a href="<?php echo isset($depth) ? $depth : ''; ?>index.php" class="<?php echo nav_class('index'); ?>">Home</a></li>
        <li><a href="<?php echo isset($depth) ? $depth : ''; ?>products.php" class="<?php echo nav_class('products'); ?>">Products</a></li>
        <li><a href="<?php echo isset($depth) ? $depth : ''; ?>about.php" class="<?php echo nav_class('about'); ?>">About Us</a></li>
        <li><a href="<?php echo isset($depth) ? $depth : ''; ?>contact.php" class="<?php echo nav_class('contact'); ?>">Contact</a></li>
        <li><a href="<?php echo isset($depth) ? $depth : ''; ?>contact.php#help" class="nav-help"><i class="fas fa-circle-question"></i> Help Center</a></li>
      </ul>
    </nav>

    <div class="header-cta">
      <a href="tel:<?php echo SITE_PHONE_RAW; ?>" class="btn btn-primary btn-sm">
        <i class="fas fa-phone"></i> Call Now
      </a>
      <button class="hamburger" id="hamburger" aria-label="Open menu">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

<div class="nav-overlay" id="nav-overlay"></div>

<main>
