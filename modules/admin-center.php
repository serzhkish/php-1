<main class="main">
  <div class="left">
  </div>
  <div class="center">
    <p style="display:<?= $addGood ?>">Товар добавлен</p>
    <form action="admin.php" method="post" enctype="multipart/form-data" class="admin-frm">
      <input type="text" name="title" class="formVal" placeholder="Название">
      <textarea name="desc" class="admin-desc formVal" rows="5" cols="30" placeholder="Описание"></textarea>
      <input type="text" name="price" class="formVal" placeholder="Цена">
      <input type="number" name="count" class="formVal">
      <input type="file" name="img-path" class="admin-file formVal" accept=".jpg, .jpeg, .png">
      <input type="submit" value="Отправить" class="formVal">
    </form>
  </div>
  <div class="right">
  </div>
</main>