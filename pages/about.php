<?php 
$page_title = "Abput Us – SIODIL";

$base_url = "http://localhost/siodil/"; 



$extra_css = [
    $base_url . 'assets/css/siodil.css',
    $base_url . 'assets/css/about.css',
      $base_url . 'assets/icomoon/style.css',
    $base_url . 'assets/font/fonts.css'
];


$extra_js = [
  '../assets/js/siodil.js' 
           
];

$logoUrlOther = "../assets/images/logo.png";
$footerUrlOther ="../assets/images/SIODIL-White-Logo-small-01-1.png";


include_once('../partials/header.php'); 

?>
   <section class="why-siodil-section">
  <div class="why-siodil-content">
    <h2>Why <span>SIODIL</span></h2>
    <p>Complete skin digest</p>
  </div>
</section>

<section class="why-siodil-description">
  <div class="container">
    <p>
      “SIODIL,” challenges effective skin treatments and presents a Medicated Skin Care Product Category 
      that covers a variety of skin-related issues like brightening solutions, skin conditions including 
      moisturizing, aging, scalp care, and so on. “SIODIL” is a dermatologist-recommended total skin care 
      digest that includes everything from skin analysis to find solutions of particular problems. 
      With devotion and trust, we use our advanced skin analyzer to discover individual skin issues 
      and offer accurate treatments to cures. Most significantly, the brand has established credibility 
      in the sector of high-quality products while keeping global standards with the guidance and 
      approval of prominent dermatologists.
    </p>
  </div>
</section> 


<section class="skin-analyzer-section">
  <div class="container">
    <div class="skin-analyzer-content">
      <div class="skin-analyzer-text">
        <h2>Skin Analyzer</h2>
        <hr>
        <p>
          Now let’s talk about the magic of the skin analyzer! Well, a skin analyzer is a professional facial
          skin analysis device that uses RGB and UV light sources, as well as PL spectral imaging technology
          to detect various skin problems such as surface and deep skin spots, skin roughness, and
          hyperpigmentation. Faster image capture, automatic skin type classification, improved facial
          feature detection, and other features are now possible. The only tool that can quantitatively
          examine skin features is the complexion analysis system. Through this active skin care analyzer,
          consumers may obtain immediate assistance by examining their skin.
        </p>
      </div>
      <div class="skin-analyzer-image">
        <img src="../assets/images/about/skinanalyzer.jpg" alt="Skin Analyzer">
      </div>
    </div>
  </div>
</section> 

<section class="dermatologist-section">
  <div class="container">
    <h2>Recommended by Dermatologist</h2>
    <hr>
    <p>
      “SIODIL” is an exclusively dermatologist-recommended skincare brand. The products are individually
      formulated based on specific skin problems and are approved by well-known dermatologists. From
      controlling brightness and moisture to understanding sensitive skin, either oily or dry skin,
      SIODIL is there as a comprehensive skin digest. Even after analyzing the skin, one can ensure
      proper care and verify the recommended products through certified dermatologists present on spot.
    </p>
  </div>
</section>




<!-- footer part -->
 






<?php include_once('../partials/footer.php'); ?>
      

   
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>