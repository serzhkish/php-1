<?php
  $sql = "SELECT * FROM cart WHERE loginID=".$loginID;
  $resultSQL = mysqli_query($connectMySQL, $sql);
  $emptyCart = TRUE;
  if (mysqli_num_rows($resultSQL) != 0) {
    $emptyCart = FALSE;
  }
?>

<main class="main">
  <div class="left">
  </div>
  <div class="center">
    <?php
      if ($loginName == "") :?> 
      <a href="reg.php">Авторизуйтесь</a>
    <?php
      elseif ($emptyCart) :?>
        <p>Корзина пока пуста</p>
    <?php
      else :?>
    <?php
      while ($data = mysqli_fetch_assoc($resultSQL)) :?>
        <div class="good-wrp">
          <?php
            $sql = "SELECT * FROM goods WHERE id=".$data["goodID"];
            $resultSQLGood = mysqli_query($connectMySQL, $sql);
            $dataGood = mysqli_fetch_assoc($resultSQLGood);
          ?>
          <span class="good-title"><?= $dataGood["name"] ?></span>
          <img src=<?= IMG_PATH.$dataGood["img"] ?> alt="" class="good-img" width=<?= IMG_WIDTH ?> height=<?= IMG_HEIGHT ?>>
          <span class="good-price">Цена: <?= $dataGood["price"] ?></span>
          <span class="good-price">Количество: <?= $data["countGoods"] ?></span>
          <button class="good-btn" onclick="postCartRemove(this,<?= $data['id'] ?>);"><span class="good-btn-txt">Удалить</span></button>
        </div>
    <?php
      endwhile;
      endif;
    ?>
        
  </div>
  <div class="right">
  </div>
</main>