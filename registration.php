<?php
  include 'includes/db.php';

  $name = $_POST['name'];
  $surname = $_POST['surname'];
  $patronymic = $_POST['patronymic'];
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  $phone = $_POST['phone'];

  $connection->query("INSERT INTO `user`
    (`id`, `name`, `surname`, `patronymic`, `email`, `pass`, `phone`)
    VALUES (NULL, `$name`, `$surname`, `$patronymic`, `$email`, `$pass`, `$phone`)");

  header ('Location: PersonalArea.php');  // перенаправление на нужную страницу
