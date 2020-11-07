<?php
  include_once("config.php");
  $post_data = $_POST["data"];
  parse_str($post_data, $new_data);
  if (($new_data["login"] != "") && ($new_data["pwd"] != "")) {
    //echo $new_data["login"]." ".$new_data["pwd"]."---12345";
    $lgn = mysqli_real_escape_string($connectMySQL, $new_data["login"]);
    $pwd = mysqli_real_escape_string($connectMySQL, $new_data["pwd"]);
    $sql = "SELECT * FROM shopusers WHERE login='$lgn'";
    //echo $lgn." ".$pwd." ".$sql;
    $resultSQL = mysqli_query($connectMySQL, $sql);
    //echo mysqli_num_rows($resultSQL);
    if (mysqli_num_rows($resultSQL) != 0) {
      $data = mysqli_fetch_assoc($resultSQL);
      //echo $data["id"]." ".$data["login"]." ".$data["pwd"];
      if ($data["pwd"] == $new_data["pwd"]) {
        session_start();
        $_SESSION["loginID"] = $data["id"];
        $_SESSION["privilege"] = $data["privilege"];
        // header("Location: http://lesson-06-ok/shop/index.php");
        echo "1";
      } else {
        // echo "0";
      }
    } else {
      $sql = "INSERT into shopusers (login, pwd) VALUES ('$lgn', '$pwd')";
      $resultSQL = mysqli_query($connectMySQL, $sql);
      echo "New user";
    }
  }
  else {
    echo "Не хватает параметров";
  }