<?php include 'includes/db.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GUSTAV Частные дома</title>
    <link rel="icon" href="images/Union.svg">
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <?php include 'includes/header.php'; ?>
    <div class="apartments-content">
      <a href="#">Частные дома</a>
      <div class="panels">
        <?php
        for ($i = 0; $i<16; $i++) {
            include 'advert.php';
        };
        ?>
      </div>
    </div>
  </body>
</html>
