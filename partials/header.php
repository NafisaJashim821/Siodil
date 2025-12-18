
<?php

if(!isset($base_url)) {
    $base_url = '/siodil/'; 
}


$logoUrl = $base_url . 'assets/images/logo.png';




?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Siodil offers advanced skincare solutions formulated with science and nature. Discover dermatologically tested products for healthy, radiant, and glowing skin.">
    <meta name="keywords" content="Siodil, skincare, beauty products, face cream, moisturizer, cleanser, serum, sunscreen, dermatologist tested, glowing skin, healthy skin">

 <title>
  <?php echo isset($page_title) ? $page_title : "SIODIL – Doctor Recommanded"; ?>
</title>


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

   <link rel="icon" type="image/png" sizes="16x16" href="https://us.siodil.com/wp-content/themes/siodil/img/favicon/favicon-16x16.png">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

 
  <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">


  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">



  
    <?php 
    
    if(isset($extra_css) && is_array($extra_css)) {
        foreach ($extra_css as $key => $css) {
            echo '<link rel="stylesheet" href="'. htmlspecialchars($css) .'">';
        }
    }
    
    $logoUrl =  "assets/images/logo.png";

    $footerurl="assets/images/SIODIL-White-Logo-small-01-1.png";


    if(isset($logoUrlOther)) {
      $logoUrl = $logoUrlOther;
    } 

    if (isset($footerUrlOther)) {
    $footerurl = $footerUrlOther;
}

    ?>

  


</head>

<body>


 
<!-- Top Info Bar -->
<div class="top-bar text-center text-white">
  Get Free Shipment on all Orders in USA
</div>

<!-- Navbar Section -->
<section class="navbar-section sticky-top lazy-section">
  <nav class="navbar navbar-expand-lg bg-white shadow-sm">
    <div class="container-fluid d-flex align-items-center justify-content-between">

      <!--  Hamburger -->
      <button class="navbar-toggler border-0 d-lg-none" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#mobileMenu" aria-controls="mobileMenu" aria-label="Toggle navigation">
        <i class="bi bi-list" style="font-size: 1.8rem; color: #00a5c8;"></i>
      </button>

      <!--  Logo -->
 <a class="navbar-brand" href="<?php echo $base_url; ?>index.php">
    <img src="<?php echo $logoUrl; ?>" alt="Siodil Logo" class="navbar-logo">
</a>



      
      <div class="collapse navbar-collapse d-none d-lg-flex justify-content-center" id="desktopMenu">
        <ul class="navbar-nav">
        <li class="nav-item">
  <a class="nav-link" href="<?php echo $base_url; ?>pages/skin-calculator.php">Skin Calculator</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="<?php echo $base_url; ?>pages/skin-tips.php">Skin Tips</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="<?php echo $base_url; ?>pages/product.php">Products</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="<?php echo $base_url; ?>pages/ingrediant.php">Ingredients</a>
</li>
<li class="nav-item">
  <a class="nav-link" href="<?php echo $base_url; ?>pages/about.php">About Us</a>
</li>

        </ul>
      </div>

      
<div class="search-box d-none d-lg-flex align-items-center">
    <form action="<?php echo $base_url; ?>pages/search.php" method="get" class="d-flex w-100">
        <input type="text" name="q" class="form-control me-2" 
       style="
           border: none; 
           outline: none; 
           box-shadow: none; 
           background-color: transparent;  
           color: #333; 
           font-weight: 200; 
           font-size: 0.95rem;
       "
>

    </form>
</div>




    </div>
  </nav>
</section>

<!-- Offcanvas  -->
<div class="offcanvas offcanvas-start d-lg-none" tabindex="-1" id="mobileMenu" aria-labelledby="mobileMenuLabel">
  <div class="offcanvas-header">
    <h5 class="offcanvas-title" id="mobileMenuLabel">Menu</h5>
    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body">
    <ul class="navbar-nav text-center">
      <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>pages/skin-calculator.php">Skin Calculator</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>pages/skin-tips.php">Skin Tips</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>pages/product.php">Products</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>pages/ingrediant.php">Ingredients</a></li>
      <li class="nav-item"><a class="nav-link" href="<?php echo $base_url; ?>pages/about.php">About Us</a></li>
    </ul>
  </div>
</div>