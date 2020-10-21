<?php
  $connection = mysqli_connect("127.0.0.1", "root", "root", "Gustav");

  if ($connection == false){
    echo "Не удалось подключится к базе данных<br>";
    echo mysqli_connect_error();
    exit;
  }
?>
