<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Калькулятор. Версия 2.</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <form action="#" method="post" class="frm">
    <input class="formVal" type="number" name="nbr1" value="0">
    <input class="formVal" type="submit" name="sbt[]" value="+" onclick="postXML('plus', this); return false;">
    <input class="formVal" type="submit" name="sbt[]" value="-" onclick="postXML('minus', this); return false;">
    <input class="formVal" type="submit" name="sbt[]" value="*" onclick="postXML('multiple', this); return false;">
    <input class="formVal" type="submit" name="sbt[]" value="/" onclick="postXML('division', this); return false;">
    <input class="formVal" type="number" name="nbr2" value="0">
    <span class="eq">=</span>
    <input id="result" class="formVal" type="number" name="result" value="0" readonly>
  </form>
  <p id="error">
  </p>
  <script src="js/main.js"></script>
</body>
</html>