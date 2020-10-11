<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 4.1</title>
</head>
<body>
  <?php
    if (isset($_GET["img"])) :?>
      <img src="img/<?= $_GET["img"] ?>" alt="Картинка <?= $_GET["img"] ?>" width="1200">
  <?php
    endif;  
  ?>
</body>
</html>