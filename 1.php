<?php

$fileNumber = pathinfo(basename(__FILE__), PATHINFO_FILENAME);  // [AI: pathinfo]
require 'main.php';

// [AI]
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";
$current_url = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="assets/css/main.css">
  <title>Document</title>
</head>
<body>

<main class="main cont">
  <form action="back-end/save.php" method="POST">
    <input name="fileNumber" type="hidden" value="<?= $fileNumber ?>">
    <input name="returnLocation" type="hidden" value="<?= $current_url ?>">
    <textarea name="textarea" class="textarea"><?= $previousContent ?></textarea>
    <button class="btn btn-save" type="submit">Save</button>
  </form>
</main>
  
</body>
</html>