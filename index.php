<?php

//require autoloader
require_once "src/Autoloader.php";
Routing::route();

?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>RPG</title>
  <link rel="stylesheet" href="assets/css/styles.css" type="text/css">
</head>
<body>
  <?php include_once $_SERVER['DOCUMENT_ROOT'] . "/rpg/src/View/default.php"?>
</body>
</html>