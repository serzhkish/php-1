<?php
  include('classSimpleImage.php');

  $tmp_name = $_FILES["pic"]["tmp_name"];
  $name = basename($_FILES["pic"]["name"]);
  $path = "img/big/$name";
  $pathSmall = "img/small/$name";
  if (move_uploaded_file($tmp_name, $path)) {
    $image = new SimpleImage();
    $image->load($path);
    $image->resize(200, 100);
    $image->save($pathSmall);
    echo "Файл успешно загружен и уменьшен";
  } else {
    echo "К сожалению, возникли проблемы. Попробуйте еще раз.";
  }
