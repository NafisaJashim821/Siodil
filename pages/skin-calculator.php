<?php
session_start();


$_SESSION['skin_progress'] = 25;   

$page_title = "Skin Calculator – SIODIL"; 
$base_url = "http://localhost/siodil/";

$extra_css = [
    $base_url . 'assets/css/siodil.css',
    $base_url . 'assets/css/skin-calculator.css',
    $base_url . 'assets/icomoon/style.css',  
    $base_url . 'assets/font/fonts.css'
];


$extra_js = [
    '../assets/js/siodil.js'
];

$logoUrlOther = "../assets/images/logo.png";
$footerUrlOther = "../assets/images/SIODIL-White-Logo-small-01-1.png";

include_once('../partials/header.php'); 
include_once(__DIR__ . '/../partials/progress.php');
?>
<section class="question-section d-flex justify-content-center align-items-center text-center">
  <div class="content">
    <h2 class="question-text">Do you recognize your skin type?</h2>

    <div class="button-group mt-4">
      <a href="skin-calculator-step2.php" class="btn btn-outline-siodil px-4 me-3 rounded-pill fw-semibold">Yes</a>
      <a href="no-page.php" class="btn btn-outline-siodil px-4 rounded-pill fw-semibold">No</a>
    </div>
  </div>
</section>
<?php include_once('../partials/footer.php'); ?>
