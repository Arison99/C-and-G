<?php
/**
 * The main template file for the C&G theme
 */

get_header(); // Include header.php
?>

<!-- =========================================
     SLIDING CARDS SECTION
========================================= -->
<div class="carousel-wrapper">
  <!-- Bootstrap Carousel -->
  <div id="servicesCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="3500">
    <div class="carousel-inner">
      <!-- Slide 1 -->
      <div class="carousel-item active">
        <div class="container-fluid py-5 border" style="background-color: #5c1a4b;">
          <div class="row align-items-center">
            <!-- Left Column: Text Content -->
            <div class="col-md-6 text-white px-5">
              <h1 class="display-4 fw-bold mb-3">
                Compassionate Care, Every Step of the Way
              </h1>
              <p class="lead mb-4" style="max-width: 550px;">
                Providing warmth, support, and professional caregiving for your loved ones.
              </p>
            </div>

            <!-- Right Column: Image -->
            <div class="col-md-6 text-center img">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/slide 1.jpg"
                alt="Compassionate Care"
                class="img-fluid rounded-circle img-cd"
                
              >
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="carousel-item">
        <div class="container-fluid py-5 border" style="background-color: #5c1a4b;">
          <div class="row align-items-center">
            <!-- Left Column: Text Content -->
            <div class="col-md-6 text-white px-5">
              <h1 class="display-4 fw-bold mb-3">
                Reliable Elderly Care – Comfort &amp; Dignity First
              </h1>
              <p class="lead mb-4" style="max-width: 550px;">
                We help seniors age gracefully with personalized support and companionship.
              </p>
            </div>

            <!-- Right Column: Image -->
            <div class="col-md-6 text-center img">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/slide 2.jpg"
                alt="Elderly Care"
                class="img-fluid rounded-circle img-cd"
                
              >
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="carousel-item">
        <div class="container-fluid py-5 border" style="background-color: #5c1a4b;">
          <div class="row align-items-center">
            <!-- Left Column: Text Content -->
            <div class="col-md-6 text-white px-5">
              <h1 class="display-4 fw-bold mb-3">
                Sparkling Clean Homes, Stress-Free Living
              </h1>
              <p class="lead mb-4" style="max-width: 550px;">
                Professional home cleaning services for a fresher, healthier space.
              </p>
            </div>

            <!-- Right Column: Image -->
            <div class="col-md-6 text-center img">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/slide 8.jpg"
                alt="Home Cleaning"
                class="img-fluid rounded-circle img-cd"
                
              >
            </div>
          </div>
        </div>
      </div>

      <!-- Slide 4 -->
      <div class="carousel-item">
        <div class="container-fluid py-5 border" style="background-color: #5c1a4b;">
          <div class="row align-items-center">
            <!-- Left Column: Text Content -->
            <div class="col-md-6 text-white px-5">
              <h1 class="display-4 fw-bold mb-3">
                Flavors You'll Love – Cooking for Every Occasion
              </h1>
              <p class="lead mb-4" style="max-width: 550px;">
                Through our catering services, we prepare delicious meals crafted with care for your special events.
              </p>
            </div>

            <!-- Right Column: Image -->
            <div class="col-md-6 text-center img">
              <img
                src="<?php echo get_template_directory_uri(); ?>/images/slide 14.jpg"
                alt="Catering Service"
                class="img-fluid rounded-circle img-cd"
                
              >
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.carousel-inner -->

  </div><!-- /#servicesCarousel -->
</div><!-- /.carousel-wrapper -->

<!-- =========================================
     ABOUT US SECTION
========================================= -->

<div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="about-us-container">
                    <div class="row g-0">
                        <!-- Image Column -->
                        <div class="col-md-6">
                            <div class="about-image-container">
                                <img src="<?php echo get_template_directory_uri(); ?>/images/elderlycare.jpg" alt="" class="img-fluid about-image">
                            </div>
                        </div>
                        
                        <!-- Text Column -->
                        <div class="col-md-6">
                            <div class="about-text-container">
                                <div class="section-label">About Us</div>
                                <h class="section-titlez">Welcome to Guard & Care</h>
                                <p class="section-description">
                                    At Guard & Care LLC, we are committed to providing compassionate, professional, and reliable caregiving services tailored to meet the unique needs of your loved ones. Whether you need elderly support, child care, home cleaning, or special event cooking, our dedicated team ensures a comfortable and stress-free experience.
                                </p>
                                <p class="section-description">
                                    We bring peace of mind to families by delivering personalized and high-quality care that enhances well-being and daily living.
                                </p>
                                <a href="#" class="read-more-btn">Read More &rsaquo;</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- =========================================
     SERVICES SECTION
========================================= -->


<div class="container services-container">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <!-- Services Header -->
                <div class="services-header">
                    <h1 class="services-title">Services</h1>
                    <p class="services-subtitle">
                        Your Partner in Care and Support. Trusted Services for Seniors, Children, and Homes, Plus Delicious Event Catering.
                    </p>
                </div>
                
                <!-- Services Carousel -->
                <div class="position-relative">
                    <!-- Navigation Buttons -->
                    <button class="carousel-nav-btn prev-btn" id="prevBtn">
                        <i class="fas fa-arrow-left"></i>
                    </button>
                    <button class="carousel-nav-btn next-btn" id="nextBtn">
                        <i class="fas fa-arrow-right"></i>
                    </button>
                    
                    <!-- Services Cards -->
                    <div class="services-carousel">
                        <div class="row">
                            <!-- Service Card 1 -->
                            <div class="col-md-3">
                                <div class="service-card">
                                    <div class="service-img-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/cook.jpeg" alt="Cooking For Special Events" class="img-fluid service-img">
                                    </div>
                                    <div class="service-content">
                                        <h2 class="service-card-title">Cooking For Special Events</h2>
                                        <p class="service-card-text">And your events are colorful</p>
                                        <a href="#" class="read-more">Read More <i class="bi bi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Service Card 2 -->
                            <div class="col-md-3">
                                <div class="service-card">
                                    <div class="service-img-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/caregiving.jpeg" alt="Care Giving" class="img-fluid service-img">
                                    </div>
                                    <div class="service-content">
                                        <h2 class="service-card-title">Care Giving</h2>
                                        <p class="service-card-text">We support all kinds of people, the young and old.</p>
                                        <a href="#" class="read-more">Read More <i class="bi bi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Service Card 3 -->
                            <div class="col-md-3">
                                <div class="service-card">
                                    <div class="service-img-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/elderlysupport.jpg" alt="Elderly Support" class="img-fluid service-img">
                                    </div>
                                    <div class="service-content">
                                        <h2 class="service-card-title">Elderly Support</h2>
                                        <p class="service-card-text">Support for those that brought us up</p>
                                        <a href="#" class="read-more">Read More <i class="bi bi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- Service Card 4 -->
                            <div class="col-md-3">
                                <div class="service-card">
                                    <div class="service-img-container">
                                        <img src="<?php echo get_template_directory_uri(); ?>/images/elderlycare.jpg" alt="Child Care Services" class="img-fluid service-img">
                                    </div>
                                    <div class="service-content">
                                        <h2 class="service-card-title">Child Care Services</h2>
                                        <p class="service-card-text">Support for the young generation</p>
                                        <a href="#" class="read-more">Read More <i class="bi bi-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Carousel Indicators -->
                    <div class="carousel-indicators-container">
                        <button class="carousel-indicator active"></button>
                        <button class="carousel-indicator"></button>
                    </div>
                </div>
            </div>
        </div>
    </div>




<!-- =========================================
     SERVICES SECTION
========================================= -->

<section class="why-choose-us-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <div class="content-wrapper">
                        <h2 class="section-title">Why Choose Us?</h2>
                        <p class="section-text">
                            At Guard & Care, we understand that choosing the right care service can be a difficult decision.
                        </p>
                        <p class="section-text">
                            That's why we're committed to providing expert, personalized, and compassionate care that meets the unique needs of each client.
                        </p>
                        <a href="#" class="read-more-btn">Read More ›</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


<!-- =========================================
     APPOINTMENT BOOKING FORM
========================================= -->


    <div class="container form-container">
        <div class="row justify-content-center align-items-center min-vh-100">
            <div class="col-md-10">
                <div class="appointment-container">
                    <div class="row">
                        <div class="col-md-5 info-section">
                            <div class="info-content">
                                <h1 class="heading">Book Your <br>Appointment</h1>
                                <p class="description">
                                    To schedule an appointment for our services, please book now. We recommend booking in advance to ensure availability. You can schedule your appointment online or by contacting us directly. We look forward to serving you.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-7 form-section">
                            <form>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="fullName" class="form-label">Full Name</label>
                                        <input type="text" class="form-control" id="fullName">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="phone" class="form-label">Phone</label>
                                        <input type="tel" class="form-control" id="phone">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" class="form-control" id="email">
                                    </div>
                                    <div class="col-md-6">
                                        <label for="service" class="form-label">Service Request</label>
                                        <select class="form-select" id="service">
                                            <option selected>Choose...</option>
                                            <option value="1">Service 1</option>
                                            <option value="2">Service 2</option>
                                            <option value="3">Service 3</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="message" rows="4"></textarea>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="privacyCheck">
                                    <label class="form-check-label" for="privacyCheck">
                                        By using this form you agree with the storage and handling of your data by this website as defined in our <a href="#" class="privacy-link">Privacy Policy</a>.
                                    </label>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-light">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php get_footer(); // Include footer.php
