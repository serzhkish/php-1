<?php
  $sql = "SELECT * FROM goods";
  $resultSQL = mysqli_query($connectMySQL, $sql);
?>

<main class="main">
  <div class="left">
  </div>
  <div class="center">
    <?php while ($data = mysqli_fetch_assoc($resultSQL)) :?>
      <div class="good-wrp">
        <span class="good-title"><?= $data["name"] ?></span>
        <img src=<?= IMG_PATH.$data["img"] ?> alt="" class="good-img" width=<?= IMG_WIDTH ?> height=<?= IMG_HEIGHT ?>>
        <span class="good-price">Цена: <?= $data["price"] ?></span>
        <button class="good-btn" onclick="postCartAdd(this,<?= $data['id'] ?>);"><span class="good-btn-txt">Купить</span></button>
      </div>
    <?php
      endwhile;
    ?>
  </div>
  <div class="right">
  </div>
</main>