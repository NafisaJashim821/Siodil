<?php
$page_title = "Shop – SIODIL";

$base_url = "http://localhost/siodil/"; 

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
<div class="filters-container">
    <div id="selectedFilters" class="mb-3"></div>
    <a href="product.php" id="clearFilters" class="btn-clear">Clear All</a>
</div>



        <div class="row">

            <!--  DESKTOP FILTER SIDEBAR  -->
            <div class="col-md-3 d-none d-md-block">
                <div class="filter-section">
                    <h2>All Products</h2>


<div class="accordion" id="productFilter">

<?php
$filters = [
    "Line Up" => [
        "Anti-Acne", "Anti-Aging", "Brightening", "Depigmenting",
        "Eye Care", "Hair Care", "Moisturizing", "Sun Screen"
    ],
    "Category" => [
        "Balm", "Cleanser", "Cream", "Gel", "Glycolic Cleanser",
        "Lotion", "Mist", "Serum", "Shampoo"
    ],
    "Ingredients" => [
        "Alpha Arbutin", "Chamomile Extract", "Dipotassium Glycyrrhizinate",
        "Ethyl Ascorbic Acid", "Glycolic Acid", "Niacinamide",
        "Salicylic Acid", "Sodium Hyaluronate", "Sodium PCA"
    ],
    "Concern" => [
        "Acne / Pimples", "Acne Spots", "Clogged Pores", "Dandruff",
        "Dark Circles", "Dark Patches", "Dark Spots", "Dehydrated Skin",
        "Dry Skin", "Dull Skin", "Fine Lines", "Freckles", "Hair Fall",
        "Hyperpigmented Skin", "Irritated", "Large Pores",
        "Loss of Elasticity", "Rough Hair", "Skin Damage",
        "Uneven Skin Tone", "Wrinkles"
    ],
    "Skin Type" => [
        "Acne Scar", "All Skin Type", "Dry to Very Dry Skin",
        "Normal to Dry Skin", "Normal to Oily Skin",
        "Oily to Acne Prone Skin", "Sensitive Skin"
    ]
];


function makeId($str) {
    return preg_replace('/[^A-Za-z0-9]/', '', $str);
}
?>

<div class="accordion" id="productFilter">

<?php 
if (!function_exists('toCamelCase')) {
    function toCamelCase($str) {
        $str = preg_replace('/[^A-Za-z0-9 ]/', '', $str); // remove special chars
        $words = explode(' ', $str);
        $camel = strtolower(array_shift($words));
        foreach ($words as $w) {
            $camel .= ucfirst(strtolower($w));
        }
        return $camel;
    }
}

foreach ($filters as $filterName => $options): 
    $cleanName = makeId($filterName); 
    $buttonId = "by$cleanName";        
    $collapseId = "collapse$cleanName"; 
?>
    <div class="accordion-item">
        <h2 class="accordion-header" id="heading<?= $cleanName ?>">
            <button class="accordion-button collapsed" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#<?= $collapseId ?>"
                    aria-expanded="false"
                    aria-controls="<?= $collapseId ?>"
                    id="<?= $buttonId ?>">
                By <?= $filterName ?>
            </button>
        </h2>

        <div id="<?= $collapseId ?>" class="accordion-collapse collapse"
             aria-labelledby="heading<?= $cleanName ?>"
             data-bs-parent="#productFilter">

            <div class="accordion-body">
                <?php foreach ($options as $value): 
                    $checkboxId = $cleanName . "_" . makeId($value);
                    $camelValue = toCamelCase($value); 
                ?>
                  <label for="<?= $checkboxId ?>">
                      <input type="checkbox" 
                             id="<?= $checkboxId ?>" 
                             class="filterCheck <?= $cleanName ?>" 
                             value="<?= $camelValue ?>"> 
                      <?= $value ?> 
                  </label><br>
                <?php endforeach; ?>
            </div>

        </div>
    </div>
<?php endforeach; ?>


</div>


</div>


                </div>
            </div>

            <!--  MOBILE OFFCANVAS FILTER  -->
<?php
$filters = [
    "Line Up" => [
        "Anti-Acne", "Anti-Aging", "Brightening", "Depigmenting",
        "Eye Care", "Hair Care", "Moisturizing", "Sun Screen"
    ],
    "Category" => [
        "Balm", "Cleanser", "Cream", "Gel", "Glycolic Cleanser",
        "Lotion", "Mist", "Serum", "Shampoo"
    ],
    "Ingredients" => [
        "Alpha Arbutin", "Chamomile Extract", "Dipotassium Glycyrrhizinate",
        "Ethyl Ascorbic Acid", "Glycolic Acid", "Niacinamide",
        "Salicylic Acid", "Sodium Hyaluronate", "Sodium PCA"
    ],
    "Concern" => [
        "Acne / Pimples", "Acne Spots", "Clogged Pores", "Dandruff",
        "Dark Circles", "Dark Patches", "Dark Spots", "Dehydrated Skin",
        "Dry Skin", "Dull Skin", "Fine Lines", "Freckles", "Hair Fall",
        "Hyperpigmented Skin", "Irritated", "Large Pores",
        "Loss of Elasticity", "Rough Hair", "Skin Damage",
        "Uneven Skin Tone", "Wrinkles"
    ],
    "Skin Type" => [
        "Acne Scar", "All Skin Type", "Dry to Very Dry Skin",
        "Normal to Dry Skin", "Normal to Oily Skin",
        "Oily to Acne Prone Skin", "Sensitive Skin"
    ]
];

if (!function_exists('makeIdMobile')) {
    function makeIdMobile($str) {
        return preg_replace('/[^A-Za-z0-9]/', '', $str);
    }
}
?>

<div class="offcanvas offcanvas-start" tabindex="-1" id="filterCanvas">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title">Filters</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body overflow-auto" style="max-height: 100vh;">
        <div class="accordion" id="productFilterMobile">
            <?php foreach ($filters as $filterName => $options): 
                $cleanName = makeIdMobile($filterName);
                $buttonId = "by{$cleanName}M";
                $collapseId = "collapse{$cleanName}M";
            ?>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading<?= $cleanName ?>M">
                        <button class="accordion-button collapsed" type="button"
                                data-bs-toggle="collapse"
                                data-bs-target="#<?= $collapseId ?>"
                                aria-expanded="false"
                                aria-controls="<?= $collapseId ?>"
                                id="<?= $buttonId ?>">
                            By <?= $filterName ?>
                        </button>
                    </h2>
                    <div id="<?= $collapseId ?>" class="accordion-collapse collapse"
                         aria-labelledby="heading<?= $cleanName ?>M">
                        <div class="accordion-body">
                           <?php foreach ($options as $value): 
    $checkboxId = $cleanName . "_M_" . makeIdMobile($value);
    $camelValue = toCamelCase($value); 
?>
    <label for="<?= $checkboxId ?>">
        <input type="checkbox" 
               id="<?= $checkboxId ?>" 
               class="filterCheck <?= $cleanName ?>" 
               value="<?= $camelValue ?>"> 
        <?= $value ?>
    </label><br>
<?php endforeach; ?>

                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>



            <!--  PRODUCT GRID  -->
<div class="col-md-9">

    <!-- Loader -->
 <div class="row g-4" id="skeleton-loader" style="display:none;">
  <?php for($i=0; $i<6; $i++): ?>
    <div class="col-md-4 col-sm-6">
      <div class="skeleton-card">
        <div class="skeleton-img"></div>
        <div class="skeleton-line w-75"></div>
        <div class="skeleton-line w-100"></div>
        <div class="skeleton-btn"></div>
      </div>
    </div>
  <?php endfor; ?>
</div>





   
    <div class="row g-4" id="product-container"></div>

    <!-- Pagination -->
    <div class="pagination-wrapper text-center mt-4" id="pagination"></div>

</div>




        </div>
    </div>
</section>

<?php include_once('../partials/footer.php'); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
