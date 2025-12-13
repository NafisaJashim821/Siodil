<?php
session_start();
date_default_timezone_set('Asia/Dhaka');


if (!isset($_SESSION['skin_type']) || !isset($_SESSION['user_name'])) {
    header("Location: skin-calculator.php");
    exit();
}

$skinType = $_SESSION['skin_type'];
$userName = $_SESSION['user_name'];
$date = date("d/m/Y");

// API URL + KEY
$apiUrl = "https://herlan.shop/wp-json/wc-api/v1/products?per_page=120";

$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "x-api-key: wc_fa758f3e00bda880ae87aff6da6def2361ccdfef3a9d2e6779b4b880923520fb"
]);

$response = curl_exec($ch);
if ($response === false) {
    die("cURL Error: " . curl_error($ch));
}
curl_close($ch);

// Decode API response
$data = json_decode($response, true);
$allProducts = [];

if (!empty($data)) {
    // Support both $data['products'] or plain array
    $productsArray = $data['products'] ?? $data;

    foreach ($productsArray as $p) {
        // Normalize title
        $p['title'] = $p['title'] ?? $p['name'] ?? 'No title';
        $allProducts[] = $p;
    }
} else {
    echo "<p>No products found from API.</p>";
}


$siodilProducts = array_filter($allProducts, function($p) {
    return !empty($p['title']) && stripos($p['title'], "Siodil") !== false;
});


$skinRules = [
    "Dry"         => ["Ato", "Hydra", "Moist", "Mist", "Rose"],
    "Oily"        => ["Oil Control", "Acne", "Clay", "Cleanser"],
    "Acne"        => ["Acne", "BHA", "Spot"],
    "Aged"        => ["Retinol", "Anti Aging", "Vitamin C"],
    "Combination" => ["Balance", "Gel", "Light Moisture"],
    "Sensitive"   => ["Ato", "Calming", "Soothing"],
    "Normal"      => ["Hydrating", "Cleanser", "Moisture"]
];

$matchKeywords = $skinRules[$skinType] ?? [];

// 3. Filter recommended SIODIL products
$recommended = array_filter($siodilProducts, function($p) use ($matchKeywords) {
    if (empty($matchKeywords) || empty($p['title'])) return false;

    foreach ($matchKeywords as $word) {
        if (stripos($p['title'], $word) !== false) {
            return true;
        }
    }
    return false;
});


if (empty($recommended)) {
    $recommended = $siodilProducts;
}
function parseCgAccordionAsBullets($text) {
    preg_match_all('/\[cg_accordion\s+title="([^"]+)"(?:\s+open="open")?\](.*?)\[\/cg_accordion\]/s', $text, $matches, PREG_SET_ORDER);

    $html = '';

    foreach ($matches as $match) {
        $title = trim($match[1]);
        $content = trim($match[2]);

     
        $content = preg_replace('/\r?\n\s*/', "\n", $content);

     
        $lines = array_filter(array_map('trim', explode("\n", $content)));

        if (empty($lines)) continue;

        $html .= '<strong>' . htmlspecialchars($title) . ':</strong>';

        
        if (preg_match('/[•●]/', $content) || preg_match('/<[^>]+>/', $content)) {
      
            $html .= '<div class="product-section">' . $content . '</div>';
        } else {
          
            $html .= '<ul style="margin:2px 0; padding-left:20px;">';
            foreach ($lines as $line) {
                $html .= '<li style="margin:0; padding:0; line-height:1.2;">' . htmlspecialchars($line) . '</li>';
            }
            $html .= '</ul>';
        }
    }

    return $html;
}








$_SESSION['skin_progress'] = 100;

$page_title = "Skin Calculator – SIODIL";
$base_url = "http://localhost/siodil/";

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

include_once('../partials/header.php'); 
include_once('../partials/progress.php');
?>

<div class="recommend-box">

    <h2>Based on responses, we have created this skincare regime for you.</h2>

    <div style="margin:20px 0;">
        <strong>Name:</strong> <?= htmlspecialchars($userName) ?><br>
        <strong>Your Skin Type:</strong> <?= htmlspecialchars($skinType) ?><br>
        <strong>Date:</strong> <?= $date ?>
    </div>

    <hr>

  

    <?php foreach ($recommended as $p): ?>
        <div class="product-row">
            <img src="<?= htmlspecialchars($p['images'][0]['src'] ?? '') ?>" alt="">
            <div class="product-info">
                <h4><?= htmlspecialchars($p['title']) ?></h4>
              <div class="product-description">
    <?= parseCgAccordionAsBullets($p['short_description'] ?? '') ?>
</div>

      
            </div>
        </div>
    <?php endforeach; ?>
</div>

<?php include_once('../partials/footer.php'); ?>
