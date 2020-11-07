<?php
  session_start();
  include_once("modules/config.php");
  if ((isset($_SESSION["loginID"]) && ((int)$_SESSION["loginID"] != 0))) {
    $sql = "SELECT login FROM shopusers WHERE id=".$_SESSION["loginID"]."";
    $resultSQL = mysqli_query($connectMySQL, $sql);
    if (mysqli_num_rows($resultSQL) != 0) {
      $data = mysqli_fetch_assoc($resultSQL);
      $loginName = $data["login"];
      $loginID = $_SESSION["loginID"];
      $privilege = 1;
    } else {
      unset($_SESSION["loginID"]);
      $loginName = "";
      $privilege = 0;
    }
  } else {
    $loginName = "";
    $loginID = "";
    $privilege = 0;
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= $titlePage ?></title>
  <link href="css/style.css" rel="stylesheet">
  <link href="img/favicon.png" rel="icon" type="image/png">
</head>
<body>
  <?php 
    include_once("modules/header.php");
    if (!isset($contentPage)) {
      $contentPage = "modules/center.php";
    }
    if (($contentPage == "modules/admin-center.php") && ($privilege == 0)) {
      $contentPage = "modules/not-found-center.php";
    }
    include_once($contentPage);
    include_once("modules/footer.php");
  ?>

  <script src="js/jquery-3.5.1.min.js"></script>
  <script src="js/main.js"></script>
</body>

<?php
  // Закрыть соединение с БД
?>