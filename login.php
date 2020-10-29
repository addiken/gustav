<?php include 'includes/db.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GUSTAV Вход</title>
    <link rel="icon" href="images/Union.svg">
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <?php include 'includes/header.php'; ?>
    <div class="login">
      <p class="">Вход</p>
      <form action="auth.php" method="post">
        <input type="email" name="email" placeholder="email" ><br>
        <input type="password" name="pass" placeholder="пароль" ><br>
        <input type="submit" class="btn2" value="Войти">
      </form>
      <img src="images/orsocial.png" alt="">
      <div class="socials">
        <img src="images/bxl-google.png" alt="">
        <img src="images/bxl-vk.png" alt="">
        <img src="images/bxl-facebook.png" alt="">
      </div>
    </div>
  </body>
</html>
