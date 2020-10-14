<?php
  const SERVER = "localhost";
  const DB = "lesson-5";
  const USER = "root";
  const PWD = "root";

  $connectMySQL = mysqli_connect(SERVER, USER, PWD, DB) or die("Could not connect: " . DB);