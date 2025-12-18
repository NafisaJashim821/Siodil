<?php
$base_url = "http://localhost/siodil/";
$extra_css = [
    $base_url . 'assets/css/siodil.css',
    $base_url . 'assets/css/product-page.css',
    $base_url . 'assets/icomoon/style.css',
    $base_url . 'assets/font/fonts.css'
];
$extra_js = [
    '../assets/js/siodil.js',
    '../assets/js/product-page.js'
];

$logoUrlOther = "../assets/images/logo.png";
$footerUrlOther ="../assets/images/SIODIL-White-Logo-small-01-1.png";

include_once('../partials/header.php'); 


$productId = isset($_GET['id']) ? intval($_GET['id']) : 0;
if (!$productId) die("Product ID missing");



$apiUrl = "https://herlan.shop/wp-json/wc-api/v1/products/$productId";

$ch = curl_init($apiUrl);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HTTPHEADER => [
        "x-api-key: wc_fa758f3e00bda880ae87aff6da6def2361ccdfef3a9d2e6779b4b880923520fb"
    ]
]);
$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode !== 200) die("Product not found");

$product = json_decode($response, true);






function stripShortcode($html) {
    if (!$html) return "";
    $html = preg_replace('/\[\/?cg_accordion.*?\]/', '', $html);
    return strip_tags($html);
}
function getDescriptionFromShortDescription($html) {
    if (!$html) return '';

    if (preg_match(
        '/\[cg_accordion\s+title="Description"(?:\s+open="open")?\](.*?)\[\/cg_accordion\]/s',
        $html,
        $match
    )) {
        return trim(strip_tags($match[1]));
    }

    return '';
}



function parseAccordions($html, $maxPoints = 5) {
    preg_match_all('/\[cg_accordion title="(.*?)"(?: open="open")?\](.*?)\[\/cg_accordion\]/s', $html, $matches, PREG_SET_ORDER);
    $accordions = [];
    foreach ($matches as $m) {
        $title = $m[1];
        $content = stripShortcode($m[2]);
        $lines = array_filter(array_map('trim', explode("\n", $content)));
        $preview = array_slice($lines, 0, $maxPoints);
        $accordions[] = [
            'title' => $title,
            'content_preview' => implode("\n", $preview),
            'content_full' => $content
        ];
    }
    return $accordions;
}


$description = stripShortcode($product['short_description']);
$description_preview = implode(' ', array_slice(explode(' ', $description), 0, 43)) . '...';
$accordions = parseAccordions($product['short_description']);
$images = $product['images'] ?? [];

?>

<section class="product-detail">
    <div class="container product-container" style="display:flex; flex-wrap:wrap; gap:60px;">

        <!-- Product Gallery -->
        <div class="product-gallery" style="flex:1; min-width:300px;">
            <div class="swiper main-swiper">
                <div class="swiper-wrapper">
                    <?php foreach($images as $img): ?>
                        <div class="swiper-slide">
                            <img src="<?= $img['src'] ?>" alt="">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="swiper thumb-swiper">
                <div class="swiper-wrapper">
                    <?php foreach($images as $img): ?>
                        <div class="swiper-slide">
                            <img src="<?= $img['src'] ?>" alt="">
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

        <!-- Product Info -->
        <div class="product-details-wrapper" style="flex:1; min-width:300px;">
            <div class="product-info">
                <h1><?= $product['name'] ?></h1>
                <h3>Product Description</h3>
                <p><?= $description_preview ?></p>
            
            </div>

            <!-- Accordion Sections -->
            <div class="accordion" id="accordionExample" style="margin-top:40px;">
    <?php 
    
    $skipTitles = ['Description', 'Features & Details'];

    foreach($accordions as $i => $acc): 
        $num = $i+1; 

        $titleNormalized = trim(html_entity_decode($acc['title']));

       
        if (in_array($titleNormalized, $skipTitles)) continue;
    ?>
        <div class="accordion-item">
            <h2 class="accordion-header" id="heading<?= $num ?>">
                <button class="accordion-button <?= $i==0?'':'collapsed' ?>" type="button" data-bs-toggle="collapse" data-bs-target="#collapse<?= $num ?>" aria-expanded="<?= $i==0?'true':'false' ?>" aria-controls="collapse<?= $num ?>" style="padding:15px 20px; font-weight:600; background:#f9f9f9; border:none;">
                    <?= $acc['title'] ?>
                    <span class="acc-icon" style="margin-left:auto; font-weight:700; font-size:16px; color:#009CD8;">
                        <span class="icon-plus">+</span>
                        <span class="icon-minus">−</span>
                    </span>
                </button>
            </h2>
            <div id="collapse<?= $num ?>" class="accordion-collapse collapse <?= $i==0?'show':'' ?>" aria-labelledby="heading<?= $num ?>" data-bs-parent="#accordionExample">
                <div class="accordion-body" style="padding:20px; background:#fafafa; color:#555; font-size:15px; line-height:1.6;">
                    <?= nl2br($acc['content_preview']) ?>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>

        </div>

    </div>
</section>

<?php include_once('../partials/footer.php'); ?>


