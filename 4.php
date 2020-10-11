<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lesson 4.4</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <form enctype="multipart/form-data" action="4-compress.php" method="POST">  
      <input type="hidden" name="MAX_FILE_SIZE" value="30000000" />
      <input type="file" class="pic" name="pic" accept=".jpg, .jpeg, .png" />
      <input type="submit" value="Отправить" />
  </form>
</body>
</html>