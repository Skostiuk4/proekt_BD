<?php
  $login = filter_var(trim($_POST['login']),
  FILTER_SANITIZE_STRING);
  $name = filter_var(trim($_POST['name']),
  FILTER_SANITIZE_STRING);
  $pass = filter_var(trim($_POST['pass']),
  FILTER_SANITIZE_STRING);

  if(mb_strlen($login) < 3 || mb_strlen($login) > 90) {
      echo "Недопустимая длина логина";
    exit();
  }

  $pass = md5($pass."dgdfhtr432");

  $mysql = new mysqli('localhost', 'root',  '1111', 'resource');
  $mysql->query("INSERT INTO `resource`  (`login`, `password`, `name`)
  VALUES('$login', '$pass', '$name')");

   $mysql->close();

  header('Location: /proekt_BD');
  ?>