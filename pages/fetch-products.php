<?php
header("Content-Type: application/json");

$per_page = 12;
$page = isset($_GET['page']) ? intval($_GET['page']) : 1;


$apiUrl = "https://herlan.shop/wp-json/wc-api/v1/products?per_page=120";


$ch = curl_init($apiUrl);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "x-api-key: wc_fa758f3e00bda880ae87aff6da6def2361ccdfef3a9d2e6779b4b880923520fb"
]);
$response = curl_exec($ch);

if(curl_errno($ch)){
    echo json_encode(["error" => curl_error($ch)]);
    exit;
}
curl_close($ch);

$all_products = json_decode($response);

if (!is_array($all_products)) {
    $all_products = [];
}

$total_pages = ceil(count($all_products) / $per_page);
$products = array_slice($all_products, ($page - 1) * $per_page, $per_page);

$cleanProducts = [];
foreach ($products as $p) {
    $desc_raw = !empty($p->short_description) ? $p->short_description : $p->description ?? "";
    $cleanDesc = strip_tags(preg_replace('/\[[^\]]*\]/', '', $desc_raw));

    $cleanProducts[] = [
        "id" => $p->id,
        "title" => $p->title ?? $p->name ?? "No Title",
        "img" => $p->images[0]->src ?? "../assets/images/default.jpg",
         "desc" => mb_strimwidth($cleanDesc, 0, 49, ""),
         

    ];
}

echo json_encode([
    "products" => $cleanProducts,
    "total_pages" => $total_pages
]);
