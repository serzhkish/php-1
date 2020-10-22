<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Калькулятор. Версия 1.</title>
  <link href="css/style.css" rel="stylesheet">
</head>
<body>
  <form action="#" method="post" class="frm">
    <input class="formVal" type="number" name="nbr1" value="0">
    <select class="formVal" name="sign">
      <option name="operator[]" value="+" selected>+</option>
      <option name="operator[]" value="-">-</option>
      <option name="operator[]" value="*">*</option>
      <option name="operator[]" value="/">/</option>
    </select>
    <input class="formVal" type="number" name="nbr2" value="0">
    <span class="eq">=</span>
    <input id="result" class="formVal" type="number" name="result" value="0" readonly>
    <input class="formVal" type="submit" name="sbt" value="Вычислить" onclick="postXML(); return false;">
  </form>
  <p id="error">    
  </p>
  <script src="js/main.js"></script>
</body>
</html>