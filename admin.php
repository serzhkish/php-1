<?php
  include_once("modules/config.php");
  include_once("modules/classSimpleImage.php");

  function addGood($connectMySQL, $title, $desc, $price, $count, $file) {
    $tmp_name = $file["tmp_name"];
    $name = basename($file["name"]);
    $path = $_SERVER["DOCUMENT_ROOT"]."/shop\/".IMG_PATH.$name;
    $pathSmall = $_SERVER["DOCUMENT_ROOT"]."/shop\/".IMG_PATH."small/".$name;
    if (move_uploaded_file($tmp_name, $path)) {
      $image = new SimpleImage();
      $image->load($path);
      $image->resize(200, 100);
      $image->save($pathSmall);
    }
    $title = mysqli_real_escape_string($connectMySQL, $title);
    $desc = mysqli_real_escape_string($connectMySQL, $desc);
    $price = mysqli_real_escape_string($connectMySQL, $price);
    $count = mysqli_real_escape_string($connectMySQL, $count);
    $sql = "INSERT into goods (name, description, price, goodsCount, img) VALUES ('$title', '$desc', '$price', '$count', '$name')";
    $resultSQL = mysqli_query($connectMySQL, $sql);
  }

  $tmp_name = $_FILES["img-path"]["tmp_name"];
  $title = $_POST["title"];
  $desc = $_POST["desc"];
  $price = $_POST["price"];
  $count = $_POST["count"];
  
  if ($title) {
    addGood($connectMySQL, $title, $desc, $price, $count, $_FILES["img-path"]);
    $addGood = "block";
  } else {
    $addGood = "none";
  }

  $titlePage = "Админка";
  $contentPage = "modules/admin-center.php";
  include_once("template.tpl");
?>