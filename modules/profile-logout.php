<?php
  session_start();
  unset($_SESSION["loginID"]);
  unset($_SESSION["privilege"]);
  header("Location: http://lesson-06-ok/shop/index.php");