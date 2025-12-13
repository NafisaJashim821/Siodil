<?php
session_start();
if (isset($_POST['skin_type'])) {
    $_SESSION['skin_type'] = $_POST['skin_type'];
}

// Set progress for this page
$_SESSION['skin_progress'] = 75;

$page_title = "Skin Calculator – SIODIL";
$base_url = "http://localhost/siodil/";

$extra_css = [
    $base_url . 'assets/css/siodil.css',
    $base_url . 'assets/css/skin-calculator-step3.css',
    $base_url . 'assets/icomoon/style.css',
    $base_url . 'assets/font/fonts.css'
];

$extra_js = [
    '../assets/js/siodil.js',
];

$logoUrlOther = "../assets/images/logo.png";
$footerUrlOther = "../assets/images/SIODIL-White-Logo-small-01-1.png";

// Handle form submission
if (isset($_POST['save_user'])) {

    $name  = trim($_POST['user_name']);
    $email = trim($_POST['user_email']);
    $skinType = $_SESSION['skin_type'] ?? "Unknown";

    $_SESSION['user_name']  = $name;
    $_SESSION['user_email'] = $email;

  $file = __DIR__ . '/skin_users.json';


    if (!file_exists($file)) {
        file_put_contents($file, json_encode([], JSON_PRETTY_PRINT));
    }

    $json = json_decode(file_get_contents($file), true);

    $json[] = [
        "name"       => $name,
        "email"      => $email,
        "skin_type"  => $skinType
    ];

    file_put_contents($file, json_encode($json, JSON_PRETTY_PRINT));

    header("Location: skin-calculator-step4.php");
    exit();
}


if (isset($_GET['reset'])) {
    $_SESSION['user_name'] = '';
    $_SESSION['user_email'] = '';
}

include_once('../partials/header.php'); 
include_once('../partials/progress.php');
?>


<div class="signup-section">
    <h2 class="signup-title">Sign up to get skincare regime for you.</h2>

<form action="skin-calculator-step3.php" method="post" class="signup-form">


        <input type="text" name="user_name" class="input-box" placeholder="Full name" required value="<?= htmlspecialchars($_SESSION['user_name'] ?? '') ?>">
        <input type="email" name="user_email" class="input-box" placeholder="E-mail Address" required value="<?= htmlspecialchars($_SESSION['user_email'] ?? '') ?>">

        <button type="submit" name="save_user" class="signup-btn">Sign Up</button>

        <a href="skin-calculator-step3.php?reset=1" class="reload-btn">
            <i class="fa-solid fa-rotate-right"></i>
        </a>

    </form>
</div>

<?php include_once('../partials/footer.php'); ?>
