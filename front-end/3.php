<?php

$previousContent = file_get_contents('..' . DIRECTORY_SEPARATOR . 'back-end' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . '3.txt');

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
  <form action="save.php" method="POST">
    <textarea name="textarea" class="textarea"><?= $previousContent ?></textarea>
    <button class="btn btn-save" type="submit">Save</button>
  </form>
</main>
  
</body>
</html>