<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

header('Content-Type: application/json');

$page    = max(1, intval($_GET['page'] ?? 1));
$perPage = max(1, intval($_GET['per_page'] ?? 10));

$apiUrl = "https://herlan.shop/wp-json/wc-api/v1/products"
        . "?brand=siodil"
        . "&page={$page}"
        . "&per_page={$perPage}";

$ch = curl_init($apiUrl);
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_HEADER => true,           
    CURLOPT_HTTPHEADER => [
        "x-api-key: wc_fa758f3e00bda880ae87aff6da6def2361ccdfef3a9d2e6779b4b880923520fb"
    ]
]);

$response = curl_exec($ch);

if (curl_errno($ch)) {
    echo json_encode(["error" => curl_error($ch)]);
    exit;
}

$headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
$headersRaw = substr($response, 0, $headerSize);
$body       = substr($response, $headerSize);
curl_close($ch);


$totalPages = 1;
if (preg_match('/X-Total-Pages:\s*(\d+)/i', $headersRaw, $m)) {
    $totalPages = (int)$m[1];
}


$products = json_decode($body, true) ?? [];


$cleanProducts = [];
foreach ($products as $p) {
    $descRaw = $p['short_description'] ?? $p['description'] ?? '';
    $cleanDesc = strip_tags(preg_replace('/\[[^\]]*\]/', '', $descRaw));

    $cleanProducts[] = [
        "id"    => $p['id'],
        "title" => $p['name'] ?? "No Title",
        "img"   => $p['images'][0]['src'] ?? "../assets/images/default.jpg",
        "desc"  => mb_strimwidth($cleanDesc, 0, 49, "")
    ];
}

echo json_encode([
    "products"     => $cleanProducts,
    "total_pages"  => $totalPages,
    "current_page" => $page
]);
exit;
