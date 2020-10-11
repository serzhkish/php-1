<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 4.1</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="wrp-img">
    <?php
      $lsImg = scandir("img");
      for ($i = 2; $i < count($lsImg); $i++) :?>
        <a href="1-full.php?img=<?= $lsImg[$i] ?>" target="_blank">
          <img class="imgs" src="img/<?= $lsImg[$i] ?>" alt="Картинка <?= $lsImg[$i] ?>" width="150" height="100">
        </a>
    <?php
      endfor;
    ?>
  </div>
</body>
</html>