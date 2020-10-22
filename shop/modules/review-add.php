<?php
  include_once("config.php");
  
  function addReview($connectMySQL, $author, $txt) {
    $author = mysqli_real_escape_string($connectMySQL, $author);
    $txt = mysqli_real_escape_string($connectMySQL, $txt);
    $dateNow = date("Y-m-d H:i:s");
    $sql = "INSERT into reviews (author, txt, date) VALUES ('$author', '$txt', '$dateNow')";
    $resultSQL = mysqli_query($connectMySQL, $sql);
    return $dateNow;
  }

  echo addReview($connectMySQL, $_POST["author"], $_POST["txt"]);
?>