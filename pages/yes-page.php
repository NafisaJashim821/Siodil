
<?php 
$page_title = "Skin Calculator – SIODIL"; 

$base_url = "http://localhost/siodil/"; 



$extra_css = [
    $base_url . 'assets/css/siodil.css',
             
    $base_url . 'assets/css/skin-calculator.css',
     $base_url . 'assets/icomoon/style.css',
    $base_url . 'assets/font/fonts.css' 
];




$extra_js = [
  '../assets/js/siodil.js',          
];

$logoUrlOther = "../assets/images/logo.png";
$footerUrlOther ="../assets/images/SIODIL-White-Logo-small-01-1.png";


include_once('../partials/header.php'); 


?>





<div class="container my-5">
  <div class="row align-items-center">

    <!-- LEFT SIDE -->
    <div class="col-md-6">
      <h3 class="mb-4">What type of skin do you have?</h3>

      <a href="normal_skin.php?skin=normal" 
        class="btn btn-outline-siodil px-4 py-2 me-3 mb-3 rounded-pill fw-semibold">
        Normal Skin
      </a>

      <a href="question.php?skin=oily" 
        class="btn btn-outline-siodil px-4 py-2 me-3 mb-3 rounded-pill fw-semibold">
        Oily Skin
      </a>

      <a href="question.php?skin=dry" 
        class="btn btn-outline-siodil px-4 py-2 me-3 mb-3 rounded-pill fw-semibold">
        Dry Skin
      </a>

      <a href="question.php?skin=combination" 
        class="btn btn-outline-siodil px-4 py-2 me-3 mb-3 rounded-pill fw-semibold">
        Combination Skin
      </a>
    </div> <!-- END LEFT COLUMN -->


    <!-- RIGHT SIDE: IMAGE -->
    <div class="col-md-6 text-center">
      <img src="../assets/images/different-skin-types.png" 
           class="img-fluid rounded" 
           alt="Skin Type Image" 
           style="max-width: 350px;">
    </div>

  </div>
</div>












<?php include_once('../partials/footer.php'); ?> 



    

  <!-- JS (required for Offcanvas) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
