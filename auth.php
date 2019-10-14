<?php

$login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);

$pass = filter_var(trim($_POST['pass']),
  FILTER_SANITIZE_STRING);

$pass = md5($pass."dgdfhtr432");

$mysql = new mysqli('localhost', 'root',  '1111', 'resource');

 $result = $mysql->query("SELECT * FROM `resource` WHERE `login` = '$login' AND `password` = '$pass'");
 $user = $result->fetch_assoc();
 if(count($user) == 0) {
   echo "такой пользователь не найден";
   exit();
 }

  setcookie('user', $user['name'], time() + 3600, "/");

$mysql->close();

header('Location: /proekt_BD');

?>
