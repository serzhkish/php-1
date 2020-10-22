<?php
  $nbr1 = (int)$_POST["nbr1"];
  $sign = $_POST["sign"];
  $nbr2 = (int)$_POST["nbr2"];
  switch ($sign) {
    case "+":
      echo $nbr1 + $nbr2;
      break;
    case "-":
      echo $nbr1 - $nbr2;
      break;
    case "*":
      echo $nbr1 * $nbr2;
      break;
    case "/":
      if ($nbr2 == 0) {
        echo "divByZero";
      } else {
        echo $nbr1 / $nbr2;
      }      
      break;
    default:
      echo "noSign";
  }