<?php
if (!isset($_GET['url'])) {
  die("No video URL provided.");
}

$url = $_GET['url'];

// پاککردنەوەی headerە پێشینەکان
if (ob_get_level()) {
  ob_end_clean();
}

header("Content-Type: application/octet-stream");
header("Content-Disposition: attachment; filename=\"tiktok_video.mp4\"");
header("Content-Transfer-Encoding: binary");
header("Cache-Control: no-cache, no-store, must-revalidate");
header("Pragma: no-cache");
header("Expires: 0");

// ناردنی فایلە ڕاستەقین
readfile($url);
exit;
?>
