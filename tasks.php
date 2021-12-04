<?php
include_once "config.php";

$action = $_POST['action'] ?? '';
$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if (! $connection) {
    throw new Exception ("Can't connect to database");
}else {
    if ('register'==$action) {
      $username = $_POST['email']??'';
      $pass = $_POST['pass']??'';
      if ($username && $pass ) {
          $query = "INSERT INTO users(email, password) VALUES('{$username}','{$pass}')";
          mysqli_query($connection,$query);
          
      }
    }
}


