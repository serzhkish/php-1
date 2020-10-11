<?php
  function gallery($path) {
    if (is_dir($path)) {
      $lsImg = scandir($path);
      $gallaryHTML = "<div class=\"wrp-img\">";
      for ($i = 2; $i < count($lsImg); $i++) {
        $gallaryHTML .= "<a class=\"imgs-a\" href=\"1-full.php?img=$lsImg[$i]\" target=\"_blank\">";
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
  <title>Lesson 4.2</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <?= gallery("img") ?>
</body>
</html>