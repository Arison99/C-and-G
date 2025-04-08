<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

  <!-- Start of Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark custom-navbar-bg fixed-top" id="mainNav">
    <div class="container">

      <!-- Logo / Brand Name -->
      <a class="navbar-brand d-flex align-items-center" href="<?php echo home_url(); ?>">
        
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-guardandcare-2.png" alt="Logo" class="me-2" id="navbar-logo"> 
      </a>

      <!-- Mobile Menu Toggle -->
      <button 
        class="navbar-toggler" 
        type="button" 
        data-bs-toggle="collapse"
        data-bs-target="#mainNavbar"
        aria-controls="mainNavbar" 
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Navbar Links -->
      <div class="collapse navbar-collapse" id="mainNavbar">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0 align-items-lg-center">

          
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">About Us</a>
          </li>

          
          <li class="nav-item dropdown">
            <a 
              class="nav-link dropdown-toggle" 
              href="#" 
              id="servicesDropdown" 
              role="button" 
              data-bs-toggle="dropdown" 
              aria-expanded="false"
            >
              Our Care Services
            </a>
            <ul class="dropdown-menu" aria-labelledby="servicesDropdown">
              <li><a class="dropdown-item" href="#">Care Giving</a></li>
              <li><a class="dropdown-item" href="#">Elderly Support</a></li>
              <li><a class="dropdown-item" href="#">Child Care Services</a></li>
              <li><a class="dropdown-item" href="#">Cleaning Homes</a></li>
              <li><a class="dropdown-item" href="#">Cooking for Special Events</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Why G&G?</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="#">Contact Us</a>
          </li>

          <!-- Social Icons -->
          <li class="nav-item d-flex align-items-center ms-lg-3">
          <a href="#" class="nav-link social-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter-x" viewBox="0 0 16 16">
    <path d="M12.6.75h2.454l-5.36 6.142L16 15.25h-4.937l-3.867-5.07-4.425 5.07H.316l5.733-6.57L0 .75h5.063l3.495 4.633L12.601.75Zm-.86 13.028h1.36L4.323 2.145H2.865z"/>
  </svg>
<i class="bi bi-twitter-x"></i>
            </a>
            <a href="#" class="nav-link social-icon">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#" class="nav-link social-icon">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#" class="nav-link social-icon">
              <i class="fab fa-tiktok"></i>
            </a>
          </li>

        </ul>
      </div>
    </div>
  </nav>
  <!-- End of Navbar -->
  
  <!-- padding to prevent content from being hidden under the fixed navbar -->
  <div class="navbar-spacer" style="height: 70px;"></div> <!-- Adjust height to match navbar height -->

  <!-- JavaScript for navbar scroll behavior - Add before closing body tag -->
  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const navbar = document.getElementById('mainNav');
      const logo = document.getElementById('navbar-logo');
      
      // Initial state - expanded
      navbar.classList.add('navbar-expanded');
      
      window.addEventListener('scroll', function() {
        if (window.scrollY > 50) {
          // Scrolled state
          navbar.classList.remove('navbar-expanded');
          navbar.classList.add('navbar-scrolled');
        } else {
          // At top state
          navbar.classList.add('navbar-expanded');
          navbar.classList.remove('navbar-scrolled');
        }
      });
    });
  </script>
