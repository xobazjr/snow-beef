<nav>
  <a href="index.php" class="nav-brand">
    <img src="assets/images/logo/logo-snow-beef.webp" class="nav-logo" alt="Bio Fresh Foods">
    <div class="nav-brand-text">
      <span class="nav-brand-name outfit">BIO FRESH FOODS</span>
      <span class="nav-brand-sub white">Thailand Company Limited</span>
    </div>
  </a>

  <button class="hamburger-btn" aria-label="Menu" onclick="toggleMenu()">
      <span></span>
      <span></span>
      <span></span>
  </button>

  <div class="nav-menu-wrapper" id="navMenu">
      <button class="close-btn" onclick="toggleMenu()">✕</button>

      <div class="mobile-menu-header">
          <img src="assets/images/logo/logo-snow-beef.webp" alt="Bio Fresh Foods">
      </div>

      <ul class="nav-menu outfit p-detail">
        <li class="mobile-only nav-label">NAVIGATION</li>
        <li><a href="our-product.php">Our Product</a></li>
        <li><a href="why-page.php">Why Snowbeef?</a></li>
        <li><a href="our-standard.php">Our Standards</a></li>
        <li><a href="contact.php">Sale & Support</a></li>
        
        </ul>
  </div>

  <div class="nav-overlay" id="navOverlay" onclick="toggleMenu()"></div>
</nav>