<?php
session_start();
// Determine current skin type
if (isset($_POST['start_skin'])) {
    $_SESSION['skin'] = $_POST['start_skin'];
    $_SESSION['answers'] = [];
    $skin = $_SESSION['skin'];
    $current = 0;
} else {
    $skin = $_SESSION['skin'] ?? null;
    $current = isset($_POST['q']) ? (int)$_POST['q'] : 0;
}


// Restart quiz
if (isset($_POST['restart'])) {
    session_unset();
    session_destroy();
    session_start();
    header("Location: skin-calculator.php");
    exit();
}

// Handle review submission
$review_submitted = false;
if (isset($_POST['submit_review'])) {
    $reviewData = [
        "name" => $_POST['user_name'],
        "email" => $_POST['user_email'],
        "review" => $_POST['user_review'],
        "skin_result" => $_POST['skin_result']
    ];

    $file = __DIR__ . '/reviews.json';
    $allReviews = [];
    if (file_exists($file)) {
        $allReviews = json_decode(file_get_contents($file), true);
    }
    $allReviews[] = $reviewData;
    file_put_contents($file, json_encode($allReviews, JSON_PRETTY_PRINT));
    $review_submitted = true; 
}

// Page settings
$page_title = "Skin Calculator – SIODIL"; 
$base_url = "http://localhost/siodil/";
$extra_css = [
    $base_url . 'assets/css/siodil.css',
    $base_url . 'assets/css/skin-calculator.css',
    $base_url . 'assets/icomoon/style.css',
    $base_url . 'assets/font/fonts.css'
];
$extra_js = [
    '../assets/js/siodil.js',
];
$logoUrlOther = "../assets/images/logo.png";
$footerUrlOther ="../assets/images/SIODIL-White-Logo-small-01-1.png";

include_once('../partials/header.php');

// Skin quiz questions
$questions = [
    [
        "question" => "How does your skin feel after washing?",
        "options" => [
            ["text"=>"Tight and dry", "category"=>"dry"],
            ["text"=>"Oily and greasy", "category"=>"oily"],
            ["text"=>"Oily T-zone but dry cheeks", "category"=>"combination"],
            ["text"=>"Normal, comfortable", "category"=>"normal"]
        ]
    ],
    [
        "question" => "How often do you get acne or pimples?",
        "options" => [
            ["text"=>"Frequently", "category"=>"acneprone"],
            ["text"=>"Sometimes", "category"=>"combination"],
            ["text"=>"Rarely", "category"=>"normal"],
            ["text"=>"Almost never", "category"=>"dry"]
        ]
    ],
    [
        "question" => "How does your skin look by mid-day?",
        "options" => [
            ["text"=>"Very shiny", "category"=>"oily"],
            ["text"=>"Shiny on T-zone only", "category"=>"combination"],
            ["text"=>"Normal, not shiny", "category"=>"normal"],
            ["text"=>"Dry/flaky", "category"=>"dry"]
        ]
    ],
    [
        "question" => "Do you experience redness, burning or irritation?",
        "options" => [
            ["text"=>"Often", "category"=>"sensitive"],
            ["text"=>"Sometimes", "category"=>"combination"],
            ["text"=>"Rarely", "category"=>"normal"],
            ["text"=>"Almost never", "category"=>"dry"]
        ]
    ]
];

// Starting progress from skin-calculator.php (or default 10)
$startingProgress = $_SESSION['skin_progress'] ?? 10;

// Current question number (0-based)
$current = isset($_POST['q']) ? (int)$_POST['q'] : 0;

// Total questions in this quiz
$totalQuestions = count($questions);

// Calculate progress as a continuation from skin-calculator
$percent = $startingProgress + ($current / $totalQuestions) * (100 - $startingProgress);
$percent = max(0, min(100, $percent)); // keep between 0-100

// Save to session so next page knows
$_SESSION['skin_progress'] = $percent;


// Include progress bar
?>
<div class="container my-4">
    <div class="progress" style="height: 18px; border-radius: 30px; overflow:hidden;">
        <div class="progress-bar bg-info progress-bar-striped progress-bar-animated"
             role="progressbar"
             style="width: <?= $percent ?>%; background-color:#00a5c8;"
             aria-valuenow="<?= $percent ?>"
             aria-valuemin="0"
             aria-valuemax="100">
            <?= round($percent) ?>%
        </div>
    </div>
</div>


<?php if (!$skin): ?>
<!-- Skin type selection -->
<div class="container my-5">
  <div class="row align-items-center">
    <div class="col-md-6">
      <h3 class="mb-4">What type of skin do you have?</h3>
      <form method="post">
        <?php foreach(['normal','oily','dry','combination'] as $type): ?>
        <button type="submit" name="start_skin" value="<?= $type ?>"
            class="btn btn-outline-siodil px-4 py-2 me-3 mb-3 rounded-pill fw-semibold">
            <?= ucfirst($type) ?> Skin
        </button>
        <?php endforeach; ?>
      </form>
    </div>
    <div class="col-md-6 text-center">
      <img src="../assets/images/different-skin-types.png" 
           class="img-fluid rounded"
           alt="Skin Type Image" 
           style="max-width: 350px;">
    </div>
  </div>
</div>
<?php
include_once('../partials/footer.php');
exit;
endif;
?>

<?php if ($current < $totalQuestions): 
$question = $questions[$current];
?>
<!-- Question display -->
<div class="container my-5">
    <h3 class="text-center mb-4">Selected Skin Type: <?= htmlspecialchars(ucfirst($skin)) ?></h3>
    <div class="question-box text-center p-4 mx-auto" style="max-width:600px;">
        <h4><?= htmlspecialchars($question['question']) ?></h4>
        <div class="mt-3">
            <?php foreach ($question['options'] as $option): ?>
            <form method="post" style="display:inline-block; margin:6px;">
                <input type="hidden" name="from_q" value="<?= $current ?>">
                <input type="hidden" name="cat" value="<?= htmlspecialchars($option['category']) ?>">
                <input type="hidden" name="q" value="<?= $current + 1 ?>">
                <button type="submit" class="btn btn-outline-primary px-3 py-2 rounded-pill">
                    <?= htmlspecialchars($option['text']) ?>
                </button>
            </form>
            <?php endforeach; ?>
        </div>
    </div>
</div>
<?php
include_once('../partials/footer.php');
exit;
endif;
?>

<?php
// Calculate final skin condition
$answers = $_SESSION['answers'] ?? [];
$matches = 0;
foreach ($answers as $ans) if ($ans === $skin) $matches++;
$selectedScorePercent = ($matches / $totalQuestions) * 100;
$skinConditionPercent = 100 - $selectedScorePercent;

// Advice
if ($skinConditionPercent <= 25) $advice = "Your skin is healthy! Keep up your routine.";
elseif ($skinConditionPercent <= 50) $advice = "Minor issues detected. Maintain a proper skincare routine.";
elseif ($skinConditionPercent <= 75) $advice = "Moderate issues detected. Consider consulting a dermatologist or using targeted skincare.";
else $advice = "Severe skin condition detected! Professional consultation is recommended.";
?>

<!-- Result display -->
<div class="container text-center my-5">
    <h2>Skin Analysis Result</h2>
    <h3>Skin Condition: <span class="text-primary"><?= round($skinConditionPercent) ?>%</span></h3>
    <h4 class="mt-3"><?= htmlspecialchars($advice) ?></h4>

    <!-- Progress bar -->
    <div class="container my-4">
        <div class="progress" style="height: 18px; border-radius: 30px; overflow:hidden;">
            <div class="progress-bar bg-info progress-bar-striped progress-bar-animated"
                 role="progressbar"
                 style="width: <?= $skinConditionPercent ?>%; background-color:#00a5c8;"
                 aria-valuenow="<?= $skinConditionPercent ?>"
                 aria-valuemin="0"
                 aria-valuemax="100">
                <?= round($skinConditionPercent) ?>%
            </div>
        </div>
    </div>

    <form method="post">
        <button type="submit" name="restart" class="btn btn-outline-secondary mt-3">Restart Quiz</button>
    </form>
</div>

<!-- Review submission -->
<div class="container my-5">
    <div class="card shadow-sm mx-auto p-4" style="max-width:600px;">
        <h3 class="text-center mb-4">Share Your Experience</h3>
        <?php if ($review_submitted): ?>
            <div class="alert alert-success text-center">
                <strong>Thank you!</strong> Your result has been recorded.<br>
                Your privacy matters to us. Take care!
            </div>
        <?php else: ?>
            <form method="post">
                <input type="hidden" name="skin_result" value="<?= round($skinConditionPercent) ?>">
                <div class="mb-3">
                    <input type="text" name="user_name" class="form-control form-control-sm" placeholder="Your Name" required>
                </div>
                <div class="mb-3">
                    <input type="email" name="user_email" class="form-control form-control-sm" placeholder="Your Email" required>
                </div>
                <div class="mb-3">
                    <textarea name="user_review" class="form-control form-control-sm" rows="4" placeholder="Share your experience" required></textarea>
                </div>
                <button type="submit" name="submit_review" class="btn btn-primary w-100">Submit Review</button>
            </form>
        <?php endif; ?>
    </div>
</div>

<?php include_once('../partials/footer.php'); ?>
