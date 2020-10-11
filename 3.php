<?php
  function gallery($path) {
    if (is_dir($path)) {
      $lsImg = scandir($path);
      $gallaryHTML = "<div class=\"wrp-img\">";
      for ($i = 2; $i < count($lsImg); $i++) {
        $gallaryHTML .= "<a class=\"imgs-a\" href=\"img/$lsImg[$i]\">";
        $gallaryHTML .=  "<img class=\"imgs\" src=\"img/$lsImg[$i]\" alt=\"Картинка $lsImg[$i]\" width=\"150\" height=\"100\"></a>";
      }
      $gallaryHTML .= "</div>";
      return $gallaryHTML;
    } else {
      return "Упс, директория отсутствует";
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="js/fancybox/jquery.fancybox-1.3.4.css" type="text/css" media="screen" />
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?= gallery("img") ?>

  <script type="text/javascript" src="js/jquery-1.4.3.min.js"></script>
  <script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
</body>
</html>