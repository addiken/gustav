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
      <?php include 'header.php'; ?>
    </header>
    <?php include 'search.php'; ?>
    <div class="content">
      <div class="apartments">
        <a href="appartments.php">Квартиры</a>
        <div class="panels">
          <?php include 'advert.php'; ?>
          <?php include 'advert.php'; ?>
          <?php include 'advert.php'; ?>
          <?php include 'advert.php'; ?>
        </div>
      </div>
      <div class="apartments">
        <a href="houses.php">Частные дома</a>
        <div class="panels">
          <?php include 'advert.php'; ?>
          <?php include 'advert.php'; ?>
          <?php include 'advert.php'; ?>
          <?php include 'advert.php'; ?>
        </div>
      </div>
      <div class="apartments">
        <a href="areas.php">Земельные участки</a>
        <div class="panels">
          <?php include 'advert.php'; ?>
          <?php include 'advert.php'; ?>
          <?php include 'advert.php'; ?>
          <?php include 'advert.php'; ?>
        </div>
      </div>
    </div>
  </body>
</html>
