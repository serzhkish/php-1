<?php
  include_once("config.php");
  $post_data = (int)$_POST["id"];
  session_start();
  // Пользовать авторизовался?
  if ((isset($_SESSION["loginID"]) && ((int)$_SESSION["loginID"] != 0))) {
    $loginID = $_SESSION["loginID"];
  } else {
    echo json_encode(["num" => "3"]);
    // echo 3;
    exit();
  }

  if ($post_data != 0) {
    // в POST значение id верное
    $idCart = mysqli_real_escape_string($connectMySQL, $post_data);
    // Вернуть количество товара из корзины (cart) в основную таблицу (goods)
    $sql = "SELECT countGoods, goodID FROM cart WHERE id='$idCart'";
    $resultSQL = mysqli_query($connectMySQL, $sql);
    if ($resultSQL) {
      if (mysqli_num_rows($resultSQL) != 0) {
        $data = mysqli_fetch_assoc($resultSQL);
        //echo json_encode(["num" => "1", "countGoods" => $data["countGoods"]]);
        $dataGoodId = $data["goodID"];
        $sql = "SELECT goodsCount FROM goods WHERE id='$dataGoodId'";
        $resultSQL = mysqli_query($connectMySQL, $sql);
        if ($resultSQL) {
          if (mysqli_num_rows($resultSQL) != 0) {
            $dataGoodCount = mysqli_fetch_assoc($resultSQL);
            $returnGood = $dataGoodCount["goodsCount"] + $data["countGoods"];
            //echo json_encode(["num" => "1", "countGoods" => $returnGood]);
            $sql = "UPDATE goods SET goodsCount=$returnGood WHERE id='$dataGoodId'";
            $resultSQL = mysqli_query($connectMySQL, $sql);
          } else {
            echo json_encode(["num" => "3"]);
            exit();
          }    
        } else {
          echo json_encode(["num" => "3"]);
          exit();
        }
      } else {
        echo json_encode(["num" => "3"]);
        exit();
      }    
    } else {
      echo json_encode(["num" => "3"]);
      exit();
    }
    // Удалить товар из корзины
    $sql = "DELETE FROM cart WHERE id='$idCart'";
    if ($resultSQL = mysqli_query($connectMySQL, $sql)) {
      echo json_encode(["num" => "0"]);
    } else {
      // Ошибка в выполнении DELETE
      echo json_encode(["num" => "2"]);
    }
  } else {
    // в POST значение id неверное
    echo json_encode(["num" => "1"]);
    // echo 1;
  }

  // num
  // 0 - Нормальное завершение
  // 1 - Ошибка, в POST значение id передано неверно
  // 2 - Ошибка, при выполнении DELETE
  // 3 - Ошибка, при выполнении SELECT