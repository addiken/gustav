<?php include 'includes/db.php' ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>GUSTAV</title>
    <link rel="icon" href="images/Union.svg">
    <link rel="stylesheet" href="style2.css">
  </head>
  <body>
    <?php include 'includes/header.php'; ?>
    <?php include 'search.php'; ?>

    <div class="content">
      <div class="apartments">
        <a href="appartments.php">Квартиры</a>
        <div class="panels">
          <?php
            $adverts = mysqli_query($connection, "SELECT * FROM `apartment` ORDER BY 'id' DESC LIMIT 4");
            while($adv = mysqli_fetch_assoc($adverts)){ ?>
              <div class="panel">
                <img src="images/apartment.png" alt="">
                <div class="cont">
                  <a href="#"><?php echo $adv['price']; ?> ₽</a>
                  <p><?php echo $adv['qty_rooms']; ?>-комн. квартира,<br><?php echo $adv['area']; ?>м², <?php echo $adv['qty_floor']; ?> этаж</p>
                  <p class="gray"><?php echo $adv['district']; ?>, ул.<br><?php echo $adv['street']; ?>, д. <?php echo $adv['house_number']; ?></p>
                  <button class="btn1" type="button" name="button">Показать номер</button>
                </div>
              </div>
            <?php }
          ?>
        </div>
      </div>
      <div class="apartments">
        <a href="houses.php">Частные дома</a>
        <div class="panels">
          <?php
            $adverts = mysqli_query($connection, "SELECT * FROM `house` ORDER BY 'id' DESC LIMIT 4");
            while($adv = mysqli_fetch_assoc($adverts)){ ?>
              <div class="panel">
                <img src="images/apartment.png" alt="">
                <div class="cont">
                  <a href="#"><?php echo $adv['price']; ?> ₽</a>
                  <p>Дом, <?php echo $adv['area']; ?>м², <?php echo $adv['qty_floor']; ?> этажа</p>
                  <p class="gray"><?php echo $adv['district']; ?>, ул.<br><?php echo $adv['street']; ?>, д. <?php echo $adv['house_number']; ?></p>
                  <button class="btn1" type="button" name="button">Показать номер</button>
                </div>
              </div>
            <?php }
          ?>
        </div>
      </div>
      <div class="apartments">
        <a href="areas.php">Земельные участки</a>
        <div class="panels">
          <?php
            $adverts = mysqli_query($connection, "SELECT * FROM `land_plot` ORDER BY 'id' DESC LIMIT 4");
            while($adv = mysqli_fetch_assoc($adverts)){ ?>
              <div class="panel">
                <img src="images/apartment.png" alt="">
                <div class="cont">
                  <a href="#"><?php echo $adv['price']; ?> ₽</a>
                  <p>Участок ,<?php echo $adv['area']; ?>м²</p>
                  <p class="gray"><?php echo $adv['district']; ?>, ул.<?php echo mb_substr($adv['street'], 0, 30); ?> ...</p>
                  <button class="btn1" type="button" name="button">Показать номер</button>
                </div>
              </div>
            <?php }
          ?>
        </div>
      </div>
    </div>
  </body>
</html>
