

<?php 

$base_url = "http://localhost/siodil/"; // adjust according to your setup




 $extra_css = [
    $base_url . 'assets/css/siodil.css',
    $base_url . 'assets/css/product-page.css',
    $base_url . 'assets/icomoon/style.css',
    $base_url . 'assets/font/fonts.css'
  
];

$extra_js = [
  '../assets/js/siodil.js', 
  '../assets/js/product-page.js'         
];

$logoUrlOther = "../assets/images/logo.png";
$footerUrlOther ="../assets/images/SIODIL-White-Logo-small-01-1.png";


include_once('../partials/header.php'); 

?>

<section class="product-detail">
  <div class="container product-container">
  
  
<div class="product-gallery">
  <!-- Big Image  -->
  <div class="swiper main-swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Anti-Acne Cleanser">
      </div>
      <div class="swiper-slide">
        <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Anti-Acne Cleanser Side View">
      </div>
      <div class="swiper-slide">
        <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="Anti-Acne Cleanser Back">
      </div>
    </div>
  </div>

  <!--  Navigation -->
  <div class="swiper thumb-swiper">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="">
      </div>
      <div class="swiper-slide">
        <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="">
      </div>
      <div class="swiper-slide">
        <img src="../assets/images/nav_product/anti-acne-cleanser.webp" alt="">
      </div>
    </div>
  </div>
</div>


    <!-- Product Info -->
    <div class="product-info">
      <h1>Anti-Acne Cleanser</h1>
      <h3>Product Description</h3>
      <p>
        Siodil offers an efficient acne cleanser with an advanced formulation. Infused with 
        Glycolic Acid and Salicylic Acid, Siodil Anti-Acne Cleanser exfoliates dead skin cells 
        and removes impurities and dirt from the face surface.
      </p>

      <a href="buy.php" class="buy-btn">Buy Now</a>

      <h3>Skin Concern</h3>
      <p>Acne / Pimples, Clogged Pores, Dark Spots, Uneven Skin tone</p>

      <h3>Skin Type</h3>
      <p >Oily to Acne Prone Skin</p>

      <div class="benefits">
    <h3>Ingredients based benefits</h3>
    <ul>
      <li>✔ Glycolic Acid exfoliates dead skin cells and leaves the skin fresh and clean</li>
      <li>✔ Salicylic Acid removes impurities and extra oil to keep pores clear</li>
      <li>✔ Glycolic Acid creates a pleasantly foamy reaction to remove dirt from the face surface</li>
    </ul>
</div> 

<div class="accordion" id="accordionExample">

  <!-- Accordion Item 1 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Ingredients
        <span class="acc-icon" aria-hidden="true">
            <span class="icon-plus">+</span>
            <span class="icon-minus">−</span>
          </span>
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Key Ingredients:</strong> Glycolic Acid, Salicylic Acid<br><br>
        <strong>Other Ingredients:</strong> AQUA, SODIUM COCO SULFATE, COCAMIDOPROPYL BETAINE, COCAMIDE MEA, GLYCOLIC ACID, PEG12 DIMETHICONE, PEG-150 PENTAERYTHRITYL TETRA STEARATE, PEG-6 CAPRIC/CAPRYLIC GLYCERIDES, GLYCOL DISTEARATE, SALICYLIC ACID, LICORICE ROOT EXTRACT, SHEA BUTTER, CHAMOMILE EXTRACT, ALOE VERA LEAF EXTRACT, TANGERINE OIL, ORANGE FRAGRANCE, AMMONIUM HYDROXIDE, PHENOXYETHANOL, POTASSIUM SORBATE.
      </div>
    </div>
  </div>

  <!-- Accordion Item 2 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        How to Use
         <span class="acc-icon" aria-hidden="true">
            <span class="icon-plus">+</span>
            <span class="icon-minus">−</span>
          </span>
      </button>
    </h2>
    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <ul>
      <li>✔ Apply a dime-sized amount on a wet face. Massage gently, then rinse</li>
      <li>✔ Carry on with your regular skincare routine.</li>
      <li>✔ Carry on with your regular skincare routine.</li>
    </ul>
      </div>
    </div>
  </div>

  <!-- Accordion Item 3 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Product Safety
         <span class="acc-icon" aria-hidden="true">
            <span class="icon-plus">+</span>
            <span class="icon-minus">−</span>
          </span>
      </button>
    </h2>
    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
       
        <ul>
      <li>✔ Paraben-Free</li>
      <li>✔ Paraben-Free</li>
      <li>✔ Paraben-Free</li>
    </ul>
      
      </div>
    </div>
  </div>
   <!-- Accordion Item 4 -->
 
   <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
        Disclaimer
         <span class="acc-icon" aria-hidden="true">
            <span class="icon-plus">+</span>
            <span class="icon-minus">−</span>
          </span>
      </button>
    </h2>
    <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        This cleanser contains salicylic and glycolic acid as active ingredients. Please be advised that initial usage may cause irritation. To get better results, please use it for at least 2 weeks. In case of irritation or allergic reaction, please contact a dermatologist.
      </div>
    </div>
  </div>

</div>




      </div>
    </div>

    </div>

   

  </div>
</section> 
 






<?php include_once('../partials/footer.php'); ?>

  
</body>
</html>
