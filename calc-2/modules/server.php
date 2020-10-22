<?php
  $nbr1 = (int)$_POST["nbr1"];
  $sign = $_GET["sign"];
  $nbr2 = (int)$_POST["nbr2"];
  switch ($sign) {
    case "plus":
      echo $nbr1 + $nbr2;
      break;
    case "minus":
      echo $nbr1 - $nbr2;
      break;
    case "multiple":
      echo $nbr1 * $nbr2;
      break;
    case "division":
      if ($nbr2 == 0) {
        echo "divByZero";
      } else {
        echo $nbr1 / $nbr2;
      }      
      break;
    default:
      echo "noSign";
  }