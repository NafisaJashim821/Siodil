<?php 

$extra_css = [
    'assets/css/siodil.css',
    'assets/icomoon/style.css',
    'assets/font/fonts.css',

];

$extra_js  = ['assets/js/siodil.js'];

include_once('partials/header.php'); 
?>
<section class="slider-section">
  <div class="swiper mySwiper">
    <div class="swiper-wrapper">
      
      <!-- Slide 1 -->
      <div class="swiper-slide hero-slide" 
           data-desktop="assets/images/bg/Anti-Acne Desktop 1920X970.jpg"
           data-mobile="assets/images/bg/Anti-Acne Phone W800XH1333.jpg">
        <div class="slide-text1">
          <h2>Acne Doesn’t <br> Stand a Chance</h2>
          <p>Clinically tested, dermatologist-backed anti-acne solutions for clearer, healthier skin</p>
        </div>
      </div>

      <!-- Slide 2 -->
      <div class="swiper-slide" 
           data-desktop="assets/images/bg/Brightening Desktop 1920X970.jpg"
           data-mobile="assets/images/bg/D-Pigment Phone W800XH1333.jpg">
        <div class="slide-text2">
          <h2>Say Goodbye to Dull Skin</h2>
          <p>Clinically tested, dermatologist-backed formulas designed <br>
to reduce dark spots and brighten your complexion.</p>
        </div>
      </div>

      <!-- Slide 3 -->
      <div class="swiper-slide" 
           data-desktop="assets/images/bg/D-Pigment Range Desktop 1920X970.jpg"
           data-mobile="assets/images/bg/D-Pigment Phone W800XH1333.jpg">
        <div class="slide-text3">
          <h2>Target Pigmentation at the Source</h2>
          <p>Clinically tested, dermatologist-approved advanced solutions 
to reduce hyperpigmentation and melasma </p>
        </div>
      </div>

    </div>
    <div class="swiper-pagination"></div>
  </div>
</section>





<section class="our-section py-5 lazy-section">

  <div class="container">
    <div class="swiper lineupSwiper">

      <div class="swiper-wrapper">

        <!-- Slide 1 -->
        <div class="swiper-slide">
          <div class="our-card">
            <div class="our-container">
              <div class="our-img">
                <img src="assets/images/products/p2.png" alt="Brightening Lineup">
              </div>
              <div class="text-content">
                <div class="heading1">Experience Our</div>
                <div class="bg-text pink-bg">BRIGHTENING</div>
                <div class="footer pink-text">LINE UP</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="swiper-slide">
          <div class="our-card">
            <div class="our-container">
              <div class="our-img">
                <img src="assets/images/products/p1.png" alt="Revitalizing Lineup">
              </div>
              <div class="text-content">
                <div class="heading2">Check Out Our</div>
                <div class="bg-text orange-bg">Acne</div>
                <div class="footer orange-text">LINE UP</div>
              </div>
            </div>
          </div>
        </div> 

        <!-- Slide 3 -->
        <div class="swiper-slide">
          <div class="our-card">
            <div class="our-container">
              <div class="our-img">
                <img src="assets/images/products/p3.png" alt="Hydrating Lineup">
              </div>
              <div class="text-content">
                <div class="heading3">Try Out Our</div>
                <div class="bg-text blue-bg">MOISTURIZING</div>
                <div class="footer blue-text">LINE UP</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="swiper-slide">
          <div class="our-card">
            <div class="our-container">
              <div class="our-img">
                <img src="assets/images/products/p1.png" alt="Revitalizing Lineup">
              </div>
              <div class="text-content">
                <div class="heading2">Check Out Our</div>
                <div class="bg-text orange-bg">Acne</div>
                <div class="footer orange-text">LINE UP</div>
              </div>
            </div>
          </div>
        </div> 

        <!-- Slide 5 -->
        <div class="swiper-slide">
          <div class="our-card">
            <div class="our-container">
              <div class="our-img">
                <img src="assets/images/products/p2.png" alt="Brightening Lineup">
              </div>
              <div class="text-content">
                <div class="heading1">Experience Our</div>
                <div class="bg-text pink-bg">BRIGHTENING</div>
                <div class="footer pink-text">LINE UP</div>
              </div>
            </div>
          </div>
        </div>

        <!-- Slide 6 -->
        <div class="swiper-slide">
          <div class="our-card">
            <div class="our-container">
              <div class="our-img">
                <img src="assets/images/products/p3.png" alt="Hydrating Lineup">
              </div>
              <div class="text-content">
                <div class="heading3">Try Out Our</div>
                <div class="bg-text blue-bg">MOISTURIZING</div>
                <div class="footer blue-text">LINE UP</div>
              </div>
            </div>
          </div>
        </div>

      </div>

    
      <div class="lineup-pagination"></div>

    </div>

  </div>

</section>



<section class="product-carousel-section lazy-section">
  <div class="container">
    <h2 class="section-title">Products</h2>

    <div class="swiper productSwiper">
      <div class="swiper-wrapper">

 <div class="swiper-slide product-card">

    <a href="pages/product-details.php" class="product-link">

        <div class="product-content">
            <img src="assets/images/cart/c1.webp" alt="Anti-Acne Gel" class="product-img">

            <h3 class="product-title-main">ANTI-ACNE</h3>
            <h4 class="product-title-sub">CREAM</h4>

            <p class="product-details">
                Siodil Anti-Acne Cream is an advanced anti-acne solution...
            </p>
        </div>

    </a>

</div>




        <div class="swiper-slide product-card">

    <a href="product-details.html" class="product-link">

        <div class="product-content">
            <img src="assets/images/cart/c2.png" alt="Anti-Acne Gel" class="product-img">

            <h3 class="product-title-main">ANTI-ACNE</h3>
            <h4 class="product-title-sub">CREAM</h4>

            <p class="product-details">
                Siodil Anti-Acne Cream is an advanced anti-acne solution...
            </p>
        </div>

    </a>

</div>

              <div class="swiper-slide product-card">

    <a href="product-details.html" class="product-link">

        <div class="product-content">
            <img src="assets/images/cart/c3.png" alt="Anti-Acne Gel" class="product-img">

            <h3 class="product-title-main">ANTI-ACNE</h3>
            <h4 class="product-title-sub">CREAM</h4>

            <p class="product-details">
                Siodil Anti-Acne Cream is an advanced anti-acne solution...
            </p>
        </div>

    </a>

</div>

               <div class="swiper-slide product-card">

    <a href="product-details.html" class="product-link">

        <div class="product-content">
            <img src="assets/images/cart/c4.png" alt="Anti-Acne Gel" class="product-img">

            <h3 class="product-title-main">ANTI-ACNE</h3>
            <h4 class="product-title-sub">CREAM</h4>

            <p class="product-details">
                Siodil Anti-Acne Cream is an advanced anti-acne solution...
            </p>
        </div>

    </a>

</div>

               <div class="swiper-slide product-card">

    <a href="product-details.html" class="product-link">

        <div class="product-content">
            <img src="assets/images/cart/c5.png" alt="Anti-Acne Gel" class="product-img">

            <h3 class="product-title-main">ANTI-ACNE</h3>
            <h4 class="product-title-sub">CREAM</h4>

            <p class="product-details">
                Siodil Anti-Acne Cream is an advanced anti-acne solution...
            </p>
        </div>

    </a>

</div>

               <div class="swiper-slide product-card">

    <a href="product-details.html" class="product-link">

        <div class="product-content">
            <img src="assets/images/cart/c6.png" alt="Anti-Acne Gel" class="product-img">

            <h3 class="product-title-main">ANTI-ACNE</h3>
            <h4 class="product-title-sub">CREAM</h4>

            <p class="product-details">
                Siodil Anti-Acne Cream is an advanced anti-acne solution...
            </p>
        </div>

    </a>

</div>

              <div class="swiper-slide product-card">

    <a href="product-details.html" class="product-link">

        <div class="product-content">
            <img src="assets/images/cart/c7.webp" alt="Anti-Acne Gel" class="product-img">

            <h3 class="product-title-main">ANTI-ACNE</h3>
            <h4 class="product-title-sub">CREAM</h4>

            <p class="product-details">
                Siodil Anti-Acne Cream is an advanced anti-acne solution...
            </p>
        </div>

    </a>

</div>

              <div class="swiper-slide product-card">

    <a href="product-details.html" class="product-link">

        <div class="product-content">
            <img src="assets/images/cart/c2.png" alt="Anti-Acne Gel" class="product-img">

            <h3 class="product-title-main">ANTI-ACNE</h3>
            <h4 class="product-title-sub">CREAM</h4>

            <p class="product-details">
                Siodil Anti-Acne Cream is an advanced anti-acne solution...
            </p>
        </div>

    </a>

</div>

      </div>

      <!-- Pagination -->
      <div class="upper-pagination"></div>
      

 <div class="custom-arrow next-arrow">
    <i class="fa-solid fa-chevron-right"></i>
</div>

<div class="custom-arrow prev-arrow">
    <i class="fa-solid fa-chevron-left"></i>
</div> 

 







    </div>
  </div>
</section>




<h2 class="main-section-title lazy-section">Perfect skin possible?</h2>





<section class="blog-highlight-section lazy-section">
  <div class="blog-card">
    <div class="blog-image">
      <img src="assets/images/acne.jpg" alt="Perfect Skin">
    </div>

    <div class="blog-content">
      <h2>Acne breakouts! Know the reasons & get the solutions</h2>
      <a href="#" class="blog-btn">Read now to find out</a>
    </div>
  </div>
</section>

<section class="dual-grid-section lazy-section">
  <div class="dual-grid-container">

    <!-- LEFT BOX -->
    <div class="grid-box left-box">
      <div class="grid-img-left">
        <img src="assets/images/wash_away/w1.jpg" alt="Left Product">
      </div>
      <div class="grid-content">
        <h2>Remove the dark spots, revitalize the beauty</h2>
        <a href="#" class="grid-btn pink-btn">Read now to find out</a>
      </div>
    </div>

    <!-- RIGHT BOX -->
    <div class="grid-box right-box">
      <div class="grid-img-right">
        <img src="assets/images/wash_away/w2.jpg" alt="Right Product">
      </div>
      <div class="grid-content">
        <h2>Wash away the impurities</h2>
        <a href="#" class="grid-btn1 blue-btn1">Read now to find out</a>
      </div>
    </div>

  </div>
</section>





<section class="know-skin-section lazy-section">
  <div class="know-skin-container">
    <!-- LEFT CONTENT -->
    <div class="skin-text">
      <h2>KNOW YOUR SKIN</h2>
      <a href="#" class="find-out-btn">FIND OUT</a>
    </div>

    <!-- RIGHT IMAGES -->
    <div class="skin-images">
      <div class="img"><img src="assets/images/know_ur_skin/k1.png" alt="skin 1"></div>
      <div class="img"><img src="assets/images/know_ur_skin/k2.png" alt="skin 2"></div>
      <div class="img"><img src="assets/images/know_ur_skin/k3.png" alt="skin 3"></div>
      <div class="img"><img src="assets/images/know_ur_skin/k4.png" alt="skin 4"></div>
    </div>
  </div>
</section>
<section class="siodil-logo-section lazy-section">
  <div class="siodil-logo-container">
    <img src="assets/images/logo.png" alt="Siodil Logo">
  </div>
</section>




<section class="siodil-description-section lazy-section">
  <div class="container">
    <p>
      Presents a comprehensive medicated skin care digest that covers a variety of skin-related issues like brightening solutions, skin conditioning including moisturizing, scalp as well as hair care, and so on. From skin analysis to finding answers to every particular concern, ‘’SIODIL’’ is available as a full skin care reliability. Most importantly, with the advice and approval of leading dermatologists, the company has established legitimacy in the category of high-quality products while maintaining worldwide standards.
    </p>
  </div>
</section>

<?php include_once('partials/footer.php'); ?>
