<?php 

$base_url = "http://localhost/siodil/"; // adjust according to your setup



$extra_css = [
  '../assets/css/siodil.css',          
  '../assets/css/skin-calculator.css'  
];

$extra_js = [
  '../assets/js/siodil.js',          
];

$logoUrlOther = "../assets/images/logo.png";
$footerUrlOther ="../assets/images/SIODIL-White-Logo-small-01-1.png";


include_once('../partials/header.php'); 

?>

   <section class="question-section d-flex justify-content-center align-items-center text-center">
  <div class="content">
    <h2 class="question-text">Do you recognize your skin type?</h2>
    <div class="button-group mt-4">
      <a href="yes-page.html" class="btn btn-outline-siodil px-4 me-3 rounded-pill fw-semibold">Yes</a>
      <a href="no-page.html" class="btn btn-outline-siodil px-4 rounded-pill fw-semibold">No</a>
    </div>
  </div>
</section>

<?php include_once('../partials/footer.php'); ?>



    

  <!-- JS (required for Offcanvas) -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
