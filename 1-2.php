<?php
  require("config.php");  
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 5.1</title>
</head>
<body>
  <?php
    if (isset($_GET["id"])) {      
      $sql = "SELECT address, name, views FROM images WHERE id=".$_GET["id"];      
      $resultSQL = mysqli_query($connectMySQL, $sql);
      $data = mysqli_fetch_assoc($resultSQL);
      $sqlUpd = "UPDATE images SET views=".++$data["views"]." WHERE id=".$_GET["id"];
      $resultSQLUpd = mysqli_query($connectMySQL, $sqlUpd);
    }
  ?>
  <img src="<?= $data["address"].$data["name"] ?>" alt="Картинка <?= $lsImg[$i] ?>" width="1200">
  <br>
  <span>Количество просмотров: <?= $data["views"] ?></span>
</body>
</html>