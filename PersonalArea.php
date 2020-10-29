<?php
  include 'includes/db.php';?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GUSTAV</title>
    <link rel="icon" href="images/Union.svg">
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <header>
      <div class="head">
        <a href="main.php"><img class="logo" src="images/logo.png" alt=""></a>
        <div class="number">
          <p class="phoneNumber">+7 (978) 861-86-97 </p>
          <p class="callTime"> Звоните нам с 9:00 до 21:00</p>
        </div>
        <div class="rightH">
          <img class="favorites" src="images/heart.png" alt="">
          <a href="/"><?php
          $email = $_POST[email];
          $result1 = $connection->query("SELECT * FROM `user` WHERE `email` = '$email'");
          $user1 = $result1->fetch_assoc();
          echo $user1['name'] . $user1['surname'];
          ?></a>
        </div>
      </div>
    </header>
    <div class="content">
      <div class="apartments">
        <a href="#">Мои объявления</a>
        <div class="panels">
          <?php include 'advert.php'; ?>
          <a href="add-cat.php"><img href="" class="addimg" src="images/add.png" alt=""></a>
        </div>
      </div>
    </div>
  </body>
</html>
