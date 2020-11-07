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
    $idGood = mysqli_real_escape_string($connectMySQL, $post_data);
    $sql = "SELECT goodsCount FROM goods WHERE id='$idGood'";
    if ($resultSQL = mysqli_query($connectMySQL, $sql)) {
      if (mysqli_num_rows($resultSQL) != 0) {
        // в БД есть товар с запрошенным id
        $data = mysqli_fetch_assoc($resultSQL);
        if ($data["goodsCount"] == 0) {
          // Количество товара 0
          echo json_encode(["num" => "2"]);
          // echo 2;
        } else {
          // Товар есть
          // Уменьшить на 1 в таблице goods, увеличить на 1 в таблице cart
          $goodsDeg = $data["goodsCount"] - 1;
          $sql = "UPDATE goods SET goodsCount='$goodsDeg' WHERE id='$idGood'";
          $resultSQL = mysqli_query($connectMySQL, $sql);
          
          $sql = "SELECT id,countGoods FROM cart WHERE loginID='$loginID' && goodID='$idGood'";
          $resultSQL = mysqli_query($connectMySQL, $sql);
          if ($resultSQL) {
            if (mysqli_num_rows($resultSQL) != 0) {
              // В корзине пользователя уже есть такой товар, увеличить на 1
              $data = mysqli_fetch_assoc($resultSQL);
              $goodsInc = $data["countGoods"] + 1;
              $idCartGood = $data["id"];
              $sql = "UPDATE cart SET countGoods='$goodsInc' WHERE id='$idCartGood'";
              $resultSQL = mysqli_query($connectMySQL, $sql);
            } else {
              // В корзине пользователя еще нет такого товара, создать запись в таблице cart
              $dateNow = date("Y-m-d H:i:s");
              $goodsInc = 1;
              $sql = "INSERT into cart (loginID, goodID, countGoods, dateBuy) VALUES ('$loginID', '$idGood', '$goodsInc', '$dateNow')";
              $resultSQL = mysqli_query($connectMySQL, $sql);
            }    
          } else {
            echo json_encode(["num" => "4"]);
            // echo "Ошибка в запросе SELECT";
          }
        }
      } else {
        // в БД нет товара с запрошенным id
        echo json_encode(["num" => "5"]);
        // echo 5;
        exit;
      }
      $sql = "SELECT sum(countGoods) FROM cart WHERE loginID='$loginID'";
      $resultSQL = mysqli_query($connectMySQL, $sql);
      if ($resultSQL) {
        if (mysqli_num_rows($resultSQL) != 0) {
          $goodsInc = "(".mysqli_fetch_assoc($resultSQL)["sum(countGoods)"].")";
        } else {
          $goodsInc = "0";
        }    
      } else {
        $goodsInc = "0";
      }
      echo json_encode(["num" => "0", "goodCount" => $goodsInc]);
      // echo 0;
    }    
  } else {
    // в POST значение id неверное
    echo json_encode(["num" => "1"]);
    // echo 1;
  }

  // num
  // 0 - Нормальное завершение
  // 1 - Ошибка, в POST значение id передано неверно
  // 2 - В таблице товаров количество товара 0
  // 3 - Нет сессии пользователя
  // 4 - Ошибка в запросе SELECT
  // 5 - в БД нет товара с запрошенным id