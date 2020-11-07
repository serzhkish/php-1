<main class="main">
  <div class="left">
  </div>
  <div class="reg-center">
    <?php
      if ($loginName == "") :?>   
        <form action="modules/reg-ajax.php" method="post" class="reg-form">
          <p class="reg-name">Имя:</p>
          <input type="text" name="login" class="reg-name-in formVal">
          <p class="reg-pwd">Пароль:</p>
          <input type="password" name="pwd" class="reg-pwd-in formVal">
          <br>
          <input type="submit" name="sbt" value="Вход" class="formVal" onclick="postReg(); return false;">
        </form>
    <?php 
      else:?>
      <h1>Hello <?= $loginName ?> </h1>
    <?php endif;
    ?>
  </div>
  <div class="right">
  </div>
</main>