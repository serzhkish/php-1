<header class="header">
  <img src=<?= IMG_PATH."favicon.png" ?> alt="" class="logo" width="100" height="100">
  <ul class="menu">
      <li><a href="index.php" class="menu-item">Главная</a></li>
      <li><a href="admin.php" class="menu-item">Админка</a></li>
      <li><a href="review.php" class="menu-item">Оставить отзыв о сайте</a></li>
      <li><a href="cart.php" class="menu-item menu-cart">Корзина <?= $_COOKIE["cart"] ?></a></li>
  </ul>
</header>