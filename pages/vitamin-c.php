<?php 

$base_url = "http://localhost/siodil/"; 



$extra_css = [
  '../assets/css/siodil.css',          
  '../assets/css/vitamin-c.css'  
];

$extra_js = [
  '../assets/js/siodil.js', 
            
];

$logoUrlOther = "../assets/images/logo.png";
$footerUrlOther ="../assets/images/SIODIL-White-Logo-small-01-1.png";


include_once('../partials/header.php'); 

?>

  <section class="ingredient-details py-5">
  <div class="container">
    <div class="row align-items-center">
     
      <div class="col-md-8">
        <h2 class="section-title">Description</h2>
        <p class="section-text">
          We all know how important Vitamin C is for skin health. It gives more than one blessing to the pores and skin. 
          Vitamin C is found in lots of citrus fruits as well as certain greens. But we can’t get enough Vitamin C just by eating. 
          The ingredients in dietary supplements are useful for your average fitness level. After they are digested, 
          there may be very little left for the pores and skin. One way to ensure your skin receives a daily boost of Vitamin C 
          is by choosing a skincare solution made with the vitamin and including it in your skincare routine.
        </p>

        <h2 class="section-title mt-5">Objective</h2>
        <p class="section-text">
          Vitamin C is a natural antioxidant that helps your skin detoxify. 
          It hydrates the skin and smooths out wrinkles. It’s also great for fading acne scars and hyperpigmentation. 
          As a result, your skin will retain long-lasting radiance.
        </p>
      </div>

      <!-- img -->
      <div class="col-md-4 text-center">
        <img src="../assets/images/key_ingredient/vitaminc-C.jpg" alt="Vitamin C Molecule" class="img-fluid rounded shadow-sm">
      </div>
    </div>
  </div>
</section>  

<section class="vitamin-products py-5">
  <div class="container text-center">
    <h2 class="section-title mb-5">Products with Vitamin C</h2>

    <div class="product-item">
      <img src="ingredients with product/anti-aging-serum.webp" alt="Anti-Aging Serum" class="product-img img-fluid">
      <h4 class="product-name mt-4">ANTI-AGING</h4>
      <h3 class="product-type fw-bold">SERUM</h3>
      <p class="product-desc">
        Visible results for reducing wrinkles and glowing skin.
      </p>
    </div>
  </div>
</section>

<div class="pagination-wrapper text-center mt-4">

  <a href="Glycolic-Acid.html" class="page-btn"> Glycolic Acid >> </a>
</div>

<?php include_once('../partials/footer.php'); ?>