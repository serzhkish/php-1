<?php
  const IMG_PATH = "img/";
  const IMG_WIDTH = "100";
  const IMG_HEIGHT = "200";

  const SERVER = "localhost";
  const DB = "shop";
  const USER = "root";
  const PWD = "";
  $connectMySQL = mysqli_connect(SERVER, USER, PWD, DB) or die("Could not connect: " . DB);