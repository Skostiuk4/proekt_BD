<?php
  setcookie('user', $user['name'], time() + 3600, "/");
  header('Location: /proekt_BD');
?>