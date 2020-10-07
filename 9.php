<?php
  $letters = [
    "а" => "a",
    "б" => "b",
    "в" => "v",
    "г" => "g",
    "д" => "d",
    "е" => "e",
    "ё" => "jo",
    "ж" => "zh",
    "з" => "z",
    "и" => "i",
    "й" => "y",
    "к" => "k",
    "л" => "l",
    "м" => "m",
    "н" => "n",
    "о" => "o",
    "п" => "p",
    "р" => "r",
    "с" => "s",
    "т" => "t",
    "у" => "u",
    "ф" => "f",
    "х" => "h",
    "ц" => "ts",
    "ч" => "ch",
    "ш" => "sh",
    "щ" => "shch",
    "ъ" => "\"",
    "ы" => "y",
    "ь" => "'",
    "э" => "e",
    "ю" => "yu",
    "я" => "ya",
    " " => "_",
  ];

  function transliteration2($str, $trans) {
    $str = mb_strtolower($str);
    $strLength = strlen($str);
    for ($i = 0; $i < $strLength; $i++) {      
      if ($trans[mb_substr($str, $i, 1)]) {
        $newStr .= $trans[mb_substr($str, $i, 1)];
      } else {
        $newStr .= mb_substr($str, $i, 1);
      }
    }
    return $newStr;
  }

  $txt = "Привет Мир, ложь!";
  echo "Оригинальный текст: $txt<hr>";
  echo "Транслитерация: ".transliteration2($txt, $letters);