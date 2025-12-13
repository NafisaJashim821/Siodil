<?php
$progress = $_SESSION['skin_progress'] ?? 0;
?>

<div class="progress" style="height: 14px; border-radius: 0;">
  <div class="progress-bar progress-bar-striped progress-bar-animated"
       style="width: <?= $progress ?>%; background-color: #00a5c8; border-radius:0; color:#fff;">
       <?= $progress ?>%
  </div>
</div>
