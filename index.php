<?php
error_reporting(E_ALL);
require_once "src/Autoloader.php";
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>RPG</title>
  <link rel="stylesheet" href="assets/css/styles.css" type="text/css">
</head>
<body>
  <?= RPGController::main(); ?>
</body>
</html>