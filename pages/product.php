<?php
$page_title = "Shop – SIODIL";

$base_url = "http://localhost/siodil/"; // adjust according to your setup

$extra_css = [
    $base_url . 'assets/css/siodil.css',
    $base_url . 'assets/css/product.css',
    $base_url . 'assets/icomoon/style.css',
    $base_url . 'assets/font/fonts.css'
];


$extra_js = [
    '../assets/js/siodil.js',
    '../assets/js/product.js',
];

$logoUrlOther = "../assets/images/logo.png";
$footerUrlOther = "../assets/images/SIODIL-White-Logo-small-01-1.png";

include_once('../partials/header.php');

?>

<section class="product-bg">
    <div class="container text-center">
        <div class="product-text">
            <h1>SKIN WELL BEING STARTS HERE</h1>
            <p>Get much more than your average skincare line</p>
        </div>
    </div>
</section>

<section class="all-products">
    <div class="container">

        <!--  MOBILE FILTER BUTTON  -->
   <div class="d-md-none text-end mb-3">
  <button class="btn  d-flex align-items-center gap-2"
          data-bs-toggle="offcanvas" data-bs-target="#filterCanvas">
    <i class="fa-solid fa-sliders" style="font-size: 1.2rem;"></i>
    Filters
  </button>
</div>


        <div class="row">

            <!--  DESKTOP FILTER SIDEBAR  -->
            <div class="col-md-3 d-none d-md-block">
                <div class="filter-section">
                    <h2>All Products</h2>

                    <div class="accordion" id="productFilter">

                        <!-- By Line Up -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingLineup">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseLineup" aria-expanded="false"
                                    aria-controls="collapseLineup">
                                    By Line Up
                                </button>
                            </h2>
                            <div id="collapseLineup" class="accordion-collapse collapse"
                                aria-labelledby="headingLineup" data-bs-parent="#productFilter">
                                <div class="accordion-body">
                                    <label><input type="checkbox"> Anti-Acne</label><br>
                                    <label><input type="checkbox"> Anti-Aging</label><br>
                                    <label><input type="checkbox"> Brightening</label><br>
                                    <label><input type="checkbox"> Depigmenting</label><br>
                                    <label><input type="checkbox"> Eye Care</label><br>
                                    <label><input type="checkbox"> Hair Care</label><br>
                                    <label><input type="checkbox"> Moisturizing</label><br>
                                    <label><input type="checkbox"> Sunscreen</label>
                                </div>
                            </div>
                        </div>

                        <!-- By Category -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingCategory">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseCategory" aria-expanded="false"
                                    aria-controls="collapseCategory">
                                    By Category
                                </button>
                            </h2>
                            <div id="collapseCategory" class="accordion-collapse collapse" aria-labelledby="headingCategory"
                                data-bs-parent="#productFilter">
                                <div class="accordion-body">
                                    <label><input type="checkbox"> Balm</label><br>
                                    <label><input type="checkbox"> Cleanser</label><br>
                                    <label><input type="checkbox"> Cream</label><br>
                                    <label><input type="checkbox"> Gel</label><br>
                                    <label><input type="checkbox"> Glycolic Cleanser</label><br>
                                    <label><input type="checkbox"> Lotion</label><br>
                                    <label><input type="checkbox"> Mist</label><br>
                                    <label><input type="checkbox"> Serum</label><br>
                                    <label><input type="checkbox"> Shampoo</label>
                                </div>
                            </div>
                        </div>

                        <!-- By Ingredients -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingIngredients">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseIngredients" aria-expanded="false"
                                    aria-controls="collapseIngredients">
                                    By Ingredients
                                </button>
                            </h2>
                            <div id="collapseIngredients" class="accordion-collapse collapse"
                                aria-labelledby="headingIngredients" data-bs-parent="#productFilter">
                                <div class="accordion-body">
                                    <label><input type="checkbox"> Alpha Arbutin</label><br>
                                    <label><input type="checkbox"> Chamomile Extract</label><br>
                                    <label><input type="checkbox"> Dipotassium Glycyrrhizinate</label><br>
                                    <label><input type="checkbox"> Ethyl Ascorbic Acid</label><br>
                                    <label><input type="checkbox"> Glycolic Acid</label><br>
                                    <label><input type="checkbox"> Niacinamide</label><br>
                                    <label><input type="checkbox"> Salicylic Acid</label><br>
                                    <label><input type="checkbox"> Sodium Hyaluronate</label><br>
                                    <label><input type="checkbox"> Sodium PCA</label>
                                </div>
                            </div>
                        </div>

                        <!-- By Concern -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingConcern">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseConcern" aria-expanded="false"
                                    aria-controls="collapseConcern">
                                    By Concern
                                </button>
                            </h2>
                            <div id="collapseConcern" class="accordion-collapse collapse" aria-labelledby="headingConcern"
                                data-bs-parent="#productFilter">
                                <div class="accordion-body">
                                    <label><input type="checkbox"> Acne / Pimples</label><br>
                                    <label><input type="checkbox"> Acne Spots</label><br>
                                    <label><input type="checkbox"> Clogged Pores</label><br>
                                    <label><input type="checkbox"> Dandruff</label><br>
                                    <label><input type="checkbox"> Dark Circles</label><br>
                                    <label><input type="checkbox"> Dark Patches</label><br>
                                    <label><input type="checkbox"> Dark Spots</label><br>
                                    <label><input type="checkbox"> Dehydrated Skin</label><br>
                                    <label><input type="checkbox"> Dry Skin</label><br>
                                    <label><input type="checkbox"> Dull Skin</label><br>
                                    <label><input type="checkbox"> Fine Lines</label><br>
                                    <label><input type="checkbox"> Freckles</label><br>
                                    <label><input type="checkbox"> Hair Fall</label><br>
                                    <label><input type="checkbox"> Hyperpigmented Skin</label><br>
                                    <label><input type="checkbox"> Irritated</label><br>
                                    <label><input type="checkbox"> Large Pores</label><br>
                                    <label><input type="checkbox"> Loss of Elasticity</label><br>
                                    <label><input type="checkbox"> Rough Hair</label><br>
                                    <label><input type="checkbox"> Skin Damage</label><br>
                                    <label><input type="checkbox"> Uneven Skin Tone</label><br>
                                    <label><input type="checkbox"> Wrinkles</label>
                                </div>
                            </div>
                        </div>

                        <!-- By Skin Type -->
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="headingSkinType">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseSkinType" aria-expanded="false"
                                    aria-controls="collapseSkinType">
                                    By Skin Type
                                </button>
                            </h2>
                            <div id="collapseSkinType" class="accordion-collapse collapse"
                                aria-labelledby="headingSkinType" data-bs-parent="#productFilter">
                                <div class="accordion-body">
                                    <label><input type="checkbox"> Acne Scar</label><br>
                                    <label><input type="checkbox"> All Skin Type</label><br>
                                    <label><input type="checkbox"> Dry to Very Dry Skin</label><br>
                                    <label><input type="checkbox"> Normal to Dry Skin</label><br>
                                    <label><input type="checkbox"> Normal to Oily Skin</label><br>
                                    <label><input type="checkbox"> Oily to Acne Prone Skin</label><br>
                                    <label><input type="checkbox"> Sensitive Skin</label>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

            <!--  MOBILE OFFCANVAS FILTER  -->
            <div class="offcanvas offcanvas-start" tabindex="-1" id="filterCanvas">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title">Filters</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
                </div>
                <div class="offcanvas-body">
                   <div class="accordion" id="productFilterMobile">

    <!-- By Line Up -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingLineupM">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseLineupM" aria-expanded="false"
                aria-controls="collapseLineupM">
                By Line Up
            </button>
        </h2>
        <div id="collapseLineupM" class="accordion-collapse collapse"
            aria-labelledby="headingLineupM" data-bs-parent="#productFilterMobile">
            <div class="accordion-body">
                <label><input type="checkbox"> Anti-Acne</label><br>
                <label><input type="checkbox"> Anti-Aging</label><br>
                <label><input type="checkbox"> Brightening</label><br>
                <label><input type="checkbox"> Depigmenting</label><br>
                <label><input type="checkbox"> Eye Care</label><br>
                <label><input type="checkbox"> Hair Care</label><br>
                <label><input type="checkbox"> Moisturizing</label><br>
                <label><input type="checkbox"> Sunscreen</label>
            </div>
        </div>
    </div>

    <!-- By Category -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingCategoryM">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseCategoryM" aria-expanded="false"
                aria-controls="collapseCategoryM">
                By Category
            </button>
        </h2>
        <div id="collapseCategoryM" class="accordion-collapse collapse"
            aria-labelledby="headingCategoryM" data-bs-parent="#productFilterMobile">
            <div class="accordion-body">
                <label><input type="checkbox"> Balm</label><br>
                <label><input type="checkbox"> Cleanser</label><br>
                <label><input type="checkbox"> Cream</label><br>
                <label><input type="checkbox"> Gel</label><br>
                <label><input type="checkbox"> Glycolic Cleanser</label><br>
                <label><input type="checkbox"> Lotion</label><br>
                <label><input type="checkbox"> Mist</label><br>
                <label><input type="checkbox"> Serum</label><br>
                <label><input type="checkbox"> Shampoo</label>
            </div>
        </div>
    </div>

    <!-- By Ingredients -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingIngredientsM">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseIngredientsM" aria-expanded="false"
                aria-controls="collapseIngredientsM">
                By Ingredients
            </button>
        </h2>
        <div id="collapseIngredientsM" class="accordion-collapse collapse"
            aria-labelledby="headingIngredientsM" data-bs-parent="#productFilterMobile">
            <div class="accordion-body">
                <label><input type="checkbox"> Alpha Arbutin</label><br>
                <label><input type="checkbox"> Chamomile Extract</label><br>
                <label><input type="checkbox"> Dipotassium Glycyrrhizinate</label><br>
                <label><input type="checkbox"> Ethyl Ascorbic Acid</label><br>
                <label><input type="checkbox"> Glycolic Acid</label><br>
                <label><input type="checkbox"> Niacinamide</label><br>
                <label><input type="checkbox"> Salicylic Acid</label><br>
                <label><input type="checkbox"> Sodium Hyaluronate</label><br>
                <label><input type="checkbox"> Sodium PCA</label>
            </div>
        </div>
    </div>

    <!-- By Concern -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingConcernM">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseConcernM" aria-expanded="false"
                aria-controls="collapseConcernM">
                By Concern
            </button>
        </h2>
        <div id="collapseConcernM" class="accordion-collapse collapse"
            aria-labelledby="headingConcernM" data-bs-parent="#productFilterMobile">
            <div class="accordion-body">
                <label><input type="checkbox"> Acne / Pimples</label><br>
                <label><input type="checkbox"> Acne Spots</label><br>
                <label><input type="checkbox"> Clogged Pores</label><br>
                <label><input type="checkbox"> Dandruff</label><br>
                <label><input type="checkbox"> Dark Circles</label><br>
                <label><input type="checkbox"> Dark Patches</label><br>
                <label><input type="checkbox"> Dark Spots</label><br>
                <label><input type="checkbox"> Dehydrated Skin</label><br>
                <label><input type="checkbox"> Dry Skin</label><br>
                <label><input type="checkbox"> Dull Skin</label><br>
                <label><input type="checkbox"> Fine Lines</label><br>
                <label><input type="checkbox"> Freckles</label><br>
                <label><input type="checkbox"> Hair Fall</label><br>
                <label><input type="checkbox"> Hyperpigmented Skin</label><br>
                <label><input type="checkbox"> Irritated</label><br>
                <label><input type="checkbox"> Large Pores</label><br>
                <label><input type="checkbox"> Loss of Elasticity</label><br>
                <label><input type="checkbox"> Rough Hair</label><br>
                <label><input type="checkbox"> Skin Damage</label><br>
                <label><input type="checkbox"> Uneven Skin Tone</label><br>
                <label><input type="checkbox"> Wrinkles</label>
            </div>
        </div>
    </div>

    <!-- By Skin Type -->
    <div class="accordion-item">
        <h2 class="accordion-header" id="headingSkinTypeM">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#collapseSkinTypeM" aria-expanded="false"
                aria-controls="collapseSkinTypeM">
                By Skin Type
            </button>
        </h2>
        <div id="collapseSkinTypeM" class="accordion-collapse collapse"
            aria-labelledby="headingSkinTypeM" data-bs-parent="#productFilterMobile">
            <div class="accordion-body">
                <label><input type="checkbox"> Acne Scar</label><br>
                <label><input type="checkbox"> All Skin Type</label><br>
                <label><input type="checkbox"> Dry to Very Dry Skin</label><br>
                <label><input type="checkbox"> Normal to Dry Skin</label><br>
                <label><input type="checkbox"> Normal to Oily Skin</label><br>
                <label><input type="checkbox"> Oily to Acne Prone Skin</label><br>
                <label><input type="checkbox"> Sensitive Skin</label>
            </div>
        </div>
    </div>

</div>


                    <div class="accordion" id="productFilterMobile">

                      
                        
                    </div>

                </div>
            </div>

            <!--  PRODUCT GRID  -->
 <div class="col-md-9">

<?php
$per_page = 12; 
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;


$apiUrl = "https://herlan.shop/wp-json/wc-api/v1/products?per_page=120"; 


$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
   
]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
curl_close($ch);


$all_products = json_decode($response);

if (!$all_products) {
    echo "<p style='color:red;'>Failed to load products.</p>";
    return;
}


$total_products = count($all_products);
$total_pages = ceil($total_products / $per_page);


$products = array_slice($all_products, ($page - 1) * $per_page, $per_page);
?>

<!-- Product Grid -->
<div class="row g-4">
    <?php foreach ($products as $product): 
        $title = $product->title ?? $product->name ?? "No Title";
        $img   = $product->images[0]->src ?? "../assets/images/default.jpg";
        $desc_raw = !empty($product->short_description)
                        ? $product->short_description
                        : $product->description ?? "";
        $desc_clean = strip_tags(preg_replace('/\[[^\]]*\]/', '', $desc_raw));
    ?>
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card h-100 product-card" style="border: none;">
                <img src="<?php echo $img; ?>" class="card-img-top" alt="<?php echo $title; ?>">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title" style="color:#707070;"><?php echo $title; ?></h5>
                    <p class="card-text" style="font-family: 'Gotham'; color: #99ABB2; font-size:18px"><?php echo mb_strimwidth($desc_clean, 0, 50, "..."); ?></p>
                    <a href="product-page.php?id=<?php echo $product->id; ?>" class="btn buy-now-btn mt-auto" style="background-color: #139dd9; color: #fff;">Buy Now</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<!-- Pagination -->
<?php if ($total_pages > 1): ?>
<div class="pagination-wrapper text-center mt-4">
    <?php for ($i = 1; $i <= $total_pages; $i++): ?>
        <a href="?page=<?php echo $i; ?>" class="page-btn <?php echo ($i == $page) ? 'active' : ''; ?>">
            <?php echo $i; ?>
        </a>
    <?php endfor; ?>
</div>
<?php endif; ?>

</div>



        </div>
    </div>
</section>

<?php include_once('../partials/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
