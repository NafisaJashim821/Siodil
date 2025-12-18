<?php
session_start();

$page_title = "Search SIODIL Products";
$base_url = "http://localhost/siodil/";

// Include header
$extra_css = [
    $base_url . 'assets/css/siodil.css',
    $base_url . 'assets/css/skin-calculator-step4.css',
    $base_url . 'assets/icomoon/style.css',
    $base_url . 'assets/font/fonts.css'
];

$extra_js = [
    $base_url . 'assets/js/siodil.js',
    $base_url . 'assets/js/skin-calculator-step4.js'
];

$logoUrlOther = $base_url . "assets/images/logo.png";
$footerUrlOther = $base_url . "assets/images/SIODIL-White-Logo-small-01-1.png";

include_once __DIR__ . '/../partials/header.php';


$search     = $_GET['q'] ?? '';
$skin_type  = $_GET['skin_type'] ?? '';
$price_min  = $_GET['min_price'] ?? '';
$price_max  = $_GET['max_price'] ?? '';


$products = [];


if (!empty($search)) {

   
  $params = [
    'brand'   => 'siodil',
    'search'  => $search,
    
];

if ($skin_type) $params['skin_type'] = $skin_type; 
if ($price_min) $params['min_price'] = $price_min;
if ($price_max) $params['max_price'] = $price_max;

$apiUrl = 'https://herlan.shop/wp-json/wc-api/v1/products?' . http_build_query($params);
 

    $ch = curl_init($apiUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "x-api-key: wc_fa758f3e00bda880ae87aff6da6def2361ccdfef3a9d2e6779b4b880923520fb"
    ]);

    $response = curl_exec($ch);

    if(curl_errno($ch)) {
        echo "Curl error: " . curl_error($ch);
    }

    curl_close($ch);

    $allProducts = json_decode($response, true);

    
    foreach ($allProducts as $product) {
        $title = $product['title'] ?? $product['name'] ?? '';
        if (stripos($title, 'siodil') !== false) {
            $products[] = $product;
        }
    }
}
?>

<div class="container my-5">
    <div class="row">

        <!-- FILTER ACCORDION -->
        <div class="col-md-3">
            <div class="accordion" id="filterAccordion">

                <!-- Skin Type -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#skinType">
                            Skin Type
                        </button>
                    </h2>
                    <div id="skinType" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <?php
                            $skins = ['Normal','Oily','Dry','Sensitive','Combination'];
                            foreach ($skins as $s):
                            ?>
                                <div class="form-check">
                                    <input class="form-check-input"
                                           type="radio"
                                           name="skin_type"
                                           value="<?= htmlspecialchars($s) ?>"
                                           form="searchForm"
                                           <?= ($skin_type == $s) ? 'checked' : '' ?>>
                                    <label class="form-check-label"><?= htmlspecialchars($s) ?></label>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>

                <!-- Price Filter -->
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#priceFilter">
                            Price
                        </button>
                    </h2>
                    <div id="priceFilter" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <input type="number" name="min_price"
                                   class="form-control mb-2"
                                   placeholder="Min"
                                   value="<?= htmlspecialchars($price_min) ?>"
                                   form="searchForm">
                            <input type="number" name="max_price"
                                   class="form-control"
                                   placeholder="Max"
                                   value="<?= htmlspecialchars($price_max) ?>"
                                   form="searchForm">
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- SEARCH + RESULTS -->
        <div class="col-md-9">

            <!-- Search Form -->
            <form method="GET" id="searchForm" class="mb-4 d-flex">
                <input type="text" name="q"
                       class="form-control me-2"
                       placeholder="Search SIODIL products..."
                       value="<?= htmlspecialchars($search) ?>"
                       required>
                <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i> Search</button>
            </form>

            <?php
            if (!empty($products)) {
                echo '<div class="row">';
                foreach ($products as $product) {

                    $productTitle = $product['title'] ?? $product['name'] ?? 'No title';
                    $productPrice = $product['price'] ?? 'N/A';
                    $productImage = $product['images'][0]['src'] ?? $base_url . 'assets/images/default-product.png';

                    // Apply price filter
                    if ($price_min && $productPrice < $price_min) continue;
                    if ($price_max && $productPrice > $price_max) continue;

                    echo '
                    <div class="col-md-4 mb-4">
                        <div class="card h-100 shadow-sm">
                            <img src="'.htmlspecialchars($productImage).'"
                                 class="card-img-top"
                                 style="height:200px;object-fit:cover;">
                            <div class="card-body">
                                <h6>'.htmlspecialchars($productTitle).'</h6>
                                <p class="fw-bold">'.htmlspecialchars($productPrice).' ৳</p>
                            </div>
                        </div>
                    </div>';
                }
                echo '</div>';
            } else {
                echo '<p>No SIODIL products found.</p>';
            }
            ?>
        </div>

    </div>
</div>

<?php
include_once __DIR__ . '/../partials/footer.php';
?>
