<?php

$fileNumber = pathinfo(basename(__FILE__), PATHINFO_FILENAME);  // [AI: pathinfo]
require 'main.php';

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
    <textarea name="textarea" class="textarea"><?= $previousContent ?></textarea>
    <button class="btn btn-save" type="submit">Save</button>
  </form>
</main>
  
</body>
</html>