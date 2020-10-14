<?php
  require("config.php");
  $sql = "SELECT id, address, name, views FROM images ORDER BY views DESC";
  $resultSQL = mysqli_query($connectMySQL, $sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 5.1</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div class="wrp-img">
    <?php
      while ($data = mysqli_fetch_assoc($resultSQL)) :?>
        <a href="1-2.php?id=<?= $data["id"] ?>" target="_blank">
          <img class="imgs" src="<?= $data["address"].$data["name"] ?>" alt="Картинка <?= $lsImg[$i] ?>" width="150" height="100">
          <br>
          <span>Просмотров: <?= $data["views"] ?></span>
        </a>
    <?php
      endwhile;
    ?>
  </div>
</body>
</html>