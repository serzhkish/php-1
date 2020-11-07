<?php
  $sql = "SELECT * FROM reviews ORDER BY date DESC";
  $resultSQL = mysqli_query($connectMySQL, $sql);
?>

<main class="main">
  <div class="left">
  </div>
  <div class="center">
    <form action="#" method="post" class="review-frm">
      <input type="text" name="author" class="formVal" placeholder="Имя">
      <textarea name="txt" class="review-txt formVal" rows="5" cols="30" placeholder="Отзыв"></textarea>
      <input type="submit" value="Отправить" class="formVal" name="sbt" onclick="postXML(); return false;">
    </form>
    <?php while ($data = mysqli_fetch_assoc($resultSQL)) :?>
      <div class="review-wrp">
        <p class="review-show-author"><?= $data["author"] ?></p>
        <p class="review-show-date"><?= $data["date"] ?></p>
        <p class="review-show-txt"><?= $data["txt"] ?></p>
      </div>
    <?php
      endwhile;
    ?>
  </div>
  <div class="right">
  </div>
</main>