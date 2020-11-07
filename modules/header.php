<?php
  if ($loginID != "") {
    $countGoodInCart = "";
    $sql = "SELECT sum(countGoods) FROM cart WHERE loginID='$loginID'";
    $resultSQL = mysqli_query($connectMySQL, $sql);
    if ($resultSQL) {
      if ($data = mysqli_fetch_assoc($resultSQL)["sum(countGoods)"]) {
        //$countGoodInCart = "(".mysqli_num_rows($resultSQL).")";
        $countGoodInCart = "(".$data.")";
      } else {
        $countGoodInCart = "";
      }    
    } else {
      $countGoodInCart = "";
    }
  }
?>

<header class="header">
  <img src=<?= IMG_PATH."favicon.png" ?> alt="" class="logo" width="100" height="100">
  <ul class="menu">
      <li><a href="index.php" class="menu-item">Главная</a></li>
      <?php
        if ($privilege == 1) :?>
          <li><a href="admin.php" class="menu-item">Админка</a></li>
      <?php
        endif;
      ?>      
      <li><a href="review.php" class="menu-item">Оставить отзыв о сайте</a></li>
      <li><a href="cart.php" class="menu-item menu-cart">Корзина <?= $countGoodInCart ?></a></li>
      <?php
        if ($loginName == "") :?>
          <li><a href="reg.php" class="menu-item">Вход</a></li>
      <?php
        else :?>
          <li><a href="profile.php" class="menu-item"><?= $loginName ?></a></li>
      <?php
        endif;
      ?>
  </ul>
</header>