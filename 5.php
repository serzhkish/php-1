<?php
  function changeSpaceToUnderline($str) {
    $strLength = strlen($str);
    for ($i = 0; $i < $strLength; $i++) {      
      if (mb_substr($str, $i, 1) == " ") {
        $newStr .= "_";
      } else {
        $newStr .= mb_substr($str, $i, 1);
      }
    }
    return $newStr;
  }

  $str = "Привет Мир";
  echo "Оригинальная строка: $str<hr>";
  echo "Преобразованная строка: ".changeSpaceToUnderline($str);