<?php 
$page_title = "Ingredients – SIODIL";

$base_url = "http://localhost/siodil/"; 



$extra_css = [
    $base_url . 'assets/css/siodil.css',
    $base_url . 'assets/css/ingrediant.css',
    $base_url . 'assets/icomoon/style.css',
    $base_url . 'assets/font/fonts.css'
];


$extra_js = [
  '../assets/js/siodil.js', 
  '../assets/js/ingrediant.js'          
];

$logoUrlOther = "../assets/images/logo.png";
$footerUrlOther ="../assets/images/SIODIL-White-Logo-small-01-1.png";


include_once('../partials/header.php'); 

?>
   <!-- bg -->
   <section class="ingrediant-section">
  <div class="container text-center">
    <div class="ingrediant-text">
      <h1 class="fw-bold">Our Ingredients</h1>
      
    </div>
  </div>
</section>

 <section class="ingrediant-intro lazy-section">
  <div class="container">
    <p>
     At SIODIL, we use a proprietary blend of pioneering ingredients. They are based on the latest research and innovations in the field of skincare. We do this to deliver the essence of beautiful skin to our consumers. Besides, it is not easy for everyone to figure out the functions and benefits of all those elements. To make skincare simpler for you, we have prepared a highly informative list of key ingredients which will give you a complete overview of every element. The list of all the key ingredients is given below:
    </p>
  </div>
</section> 

<section class="ingredient-cards py-5">
  <div class="container">
    <div class="row g-4" id="ingredientCards">

      <!-- Card 1 -->
      <div class="col-md-4 ingredient-item">
        <div class="ingredient-card text-center">
          <img src="../assets/images/key_ingredient/vitaminc-C.jpg" alt="Vitamin C">
          <a class="vitaminc-C" href="vitamin-c.php"><h5>Vitamin C</h5></a>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4 ingredient-item">
        <div class="ingredient-card text-center">
          <img src="../assets/images/key_ingredient/glycolic-acid.jpg" alt="Glycolic Acid">
          <a class="vitaminc-C" href="#"><h5>Glycolic Acid</h5></a>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4 ingredient-item">
        <div class="ingredient-card text-center">
          <img src="../assets/images/key_ingredient/salicylicacid.jpg" alt="Salicylic Acid">
          <a class="vitaminc-C" href="#"><h5>Salicylic Acid</h5></a>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="col-md-4 ingredient-item">
        <div class="ingredient-card text-center">
          <img src="../assets/images/key_ingredient/niacinamide.jpg" alt="Niacinamide">
          <a class="vitaminc-C" href="#"><h5>Niacinamide</h5></a>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="col-md-4 ingredient-item">
        <div class="ingredient-card text-center">
          <img src="../assets/images/key_ingredient/sodium-hyaluronate.jpg" alt="Sodium Hyaluronate">
          <a class="vitaminc-C" href="#"><h5>Sodium Hyaluronate</h5></a>
        </div>
      </div>

      <!-- Card 6 -->
      <div class="col-md-4 ingredient-item">
        <div class="ingredient-card text-center">
          <img src="../assets/images/key_ingredient/retinol.jpg" alt="Retinol">
          <a class="vitaminc-C" href="#"><h5>Retinol</h5></a>
        </div>
      </div>

      <!-- Card 7 -->
      <div class="col-md-4 ingredient-item">
        <div class="ingredient-card text-center">
          <img src="../assets/images/key_ingredient/allantoin.jpg" alt="Allantoin">
          <a class="vitaminc-C" href="#"><h5>Allantoin</h5></a>
        </div>
      </div>

      <!-- Card 8 -->
      <div class="col-md-4 ingredient-item">
        <div class="ingredient-card text-center">
          <img src="../assets/images/key_ingredient/kojic-acid.jpg" alt="Kojic Acid">
          <a class="vitaminc-C" href="#"><h5>Kojic Acid</h5></a>
        </div>
      </div>

      <!-- Card 9 -->
      <div class="col-md-4 ingredient-item">
        <div class="ingredient-card text-center">
          <img src="../assets/images/key_ingredient/biotin.jpg" alt="Biotin">
          <a class="vitaminc-C" href="#"><h5>Biotin</h5></a>
        </div>
      </div>

      <!-- Card 10 -->
      <div class="col-md-4 ingredient-item">
        <div class="ingredient-card text-center">
          <img src="../assets/images/key_ingredient/Panthenol.jpg" alt="Panthenol">
          <a class="vitaminc-C" href="#"><h5>Panthenol</h5></a>
        </div>
      </div>

      <!-- Card 11 -->
      <div class="col-md-4 ingredient-item">
        <div class="ingredient-card text-center">
          <img src="../assets/images/key_ingredient/Alpha-Arbutin.jpg" alt="Alpha Arbutin">
          <a class="vitaminc-C" href="#"><h5>Alpha Arbutin</h5></a>
        </div>
      </div>

      <!-- Card 12 -->
      <div class="col-md-4 ingredient-item">
        <div class="ingredient-card text-center">
          <img src="../assets/images/key_ingredient/Sodium-PCA.jpg" alt="Sodium PCA">
          <a class="vitaminc-C" href="#"><h5>Sodium PCA</h5></a>
        </div>
      </div>

      <!-- Card 13 -->
      <div class="col-md-4 ingredient-item">
        <div class="ingredient-card text-center">
          <img src="../assets/images/key_ingredient/Chamomile-extract.jpg" alt="Chamomile Extract">
          <a class="vitaminc-C" href="#"><h5>Chamomile Extract</h5></a>
        </div>
      </div>

      <!-- Card 14 -->
      <div class="col-md-4 ingredient-item">
        <div class="ingredient-card text-center">
          <img src="../assets/images/key_ingredient/Collaxyl.jpg" alt="Collaxyl">
          <a class="vitaminc-C" href="#"><h5>Collaxyl</h5></a>
        </div>
      </div>

    </div>

    <!-- Pagination -->
    <div class="pagination-wrapper text-center mt-4">
      <button class="page-btn active" data-page="1">1</button>
      <button class="page-btn" data-page="2">2</button>
    </div>
  </div>
</section> 

<!-- footer part -->
 






<?php include_once('../partials/footer.php'); ?>
      

   
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>