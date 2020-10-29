<?php
  include 'includes/db.php';

  $email = $_POST[email];
  $pass = $_POST[pass];

  $result1 = $connection->query("SELECT * FROM `user` WHERE `email` = '$email'");
  $user1 = $result1->fetch_assoc(); // Конвертируем в массив
  if(!empty($user1)){
    header ('Location: PersonalArea.php');  // перенаправление на нужную страницу
    exit();
  }?>
    <!DOCTYPE html>
    <html>
      <head>
        <meta charset="utf-8">
        <title>GUSTAV Регистрация</title>
        <link rel="icon" href="images/Union.svg">
        <link rel="stylesheet" href="style2.css">
      </head>
      <body>
        <?php include 'includes/header.php'; ?>
        <div class="login">
          <p class="">Регистрация</p>
          <form action="registration.php" method="post">
            <input type="text" name="name" placeholder="Имя"><br>
            <input type="text" name="surname" placeholder="Фамилия"><br>
            <input type="text" name="patronymic" placeholder="Отчество"><br>
            <input type="email" name="email" placeholder="email" value="<?=$email?>"><br>
            <input type="password" name="pass" placeholder="пароль" value="<?=$pass?>"><br>
            <input type="tel" name="phone" placeholder="Номер телефона без +7" maxlength="10"><br>
            <input type="submit" class="btn2" value="Войти">
          </form>
        </div>
      </body>
    </html>
