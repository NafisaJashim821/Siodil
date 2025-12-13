
<?php
session_start();

// Set progress for this page
$_SESSION['skin_progress'] = 50;

$page_title = "Skin Calculator – SIODIL";
$base_url = "http://localhost/siodil/";

$extra_css = [
    $base_url . 'assets/css/siodil.css',
    $base_url . 'assets/css/skin-calculator2.css',
   $base_url . 'assets/icomoon/style.css',  
    $base_url . 'assets/font/fonts.css'
   
];
$extra_js = [
    '../assets/js/siodil.js',
    '../assets/js/skin-calculator-step3.js'
];

$logoUrlOther = "../assets/images/logo.png";
$footerUrlOther = "../assets/images/SIODIL-White-Logo-small-01-1.png";

include_once('../partials/header.php'); 
include_once('../partials/progress.php');
?>

<div class="skin-wrapper">

    <!-- LEFT IMAGE -->
    <div class="skin-img">
        <img src="../assets/images/skin_calulator-removebg-preview.png" alt="Skin Face">
    </div>

    <!-- RIGHT BLUE BOX -->
    <div class="skin-box">
        <h3>Let us know your skin</h3>

        <form action="skin-calculator-step3.php" method="post">

            <div class="radio-group">
                <label><input type="radio" name="skin_type" value="Acne" required> Acne Prone Skin</label>
                <label><input type="radio" name="skin_type" value="Oily"> Oily Skin</label>
                <label><input type="radio" name="skin_type" value="Dry"> Dry Skin</label>
                <label><input type="radio" name="skin_type" value="Aged"> Aged Skin</label>
                <label><input type="radio" name="skin_type" value="Combination"> Combination Skin</label>
                <label><input type="radio" name="skin_type" value="Sensitive"> Sensitive Skin</label>
                <label><input type="radio" name="skin_type" value="Normal"> Normal Skin</label>
            </div>

            <div class="controls">
                <a href="skin-calculator.php" class="btn btn-light px-4">
                    <i class="fas fa-arrow-left"></i>
                </a>

                <button type="submit" class="btn btn-light px-2 fw-bold">
                    Go Forward <i class="fas fa-arrow-right"></i>
                </button>

                <a href="skin-calculator.php?restart=1" class="btn btn-light px-4">
                    <i class="fa-solid fa-arrows-rotate"></i>
                </a>
            </div>

        </form>
    </div>

</div>




       

 

<?php include_once('../partials/footer.php'); ?>
