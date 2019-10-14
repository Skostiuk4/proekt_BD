 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <title>Форма регистрации</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" type="text/css"/>
   <link rel="stylesheet" href="style.css">
  </head>
  <body>
  <div class="container mt-4">
    <?php
    if($_COOKIE['user'] == ''):
    ?>
      <div class="row">
        <div class="col">
            <h1>Форма регистрации</h1>
            <form action="add.php" method="post">
                <input type="text" class="form-control" name="login"
                       id="login" placeholder="Введите логин"><br>
                <input type="password" class="form-control" name="name"
                       id="name" placeholder="Введите имя"><br>
                <input type="pass" class="form-control" name="pass"
                       id="pass" placeholder="Введите пароль"><br>
                <button class="btn btn-success"
                        type="submit">Зарегистрировать</button>
            </form>
         </div>
        <div class="col">
            <h1>Форма авторизации</h1>
            <form action="auth.php" method="post">
                <input type="text" class="form-control" name="login"
                       id="login" placeholder="Введите логин"><br>
                <input type="pass" class="form-control" name="pass"
                       id="pass" placeholder="Введите пароль"><br>
                <button class="btn btn-success"
                        type="submit">Авторизоватся</button>
            </form>
    </div>
       <?php else: ?>
      <p>Привет <?=$_COOKIE['user']?>. Чтоби вийти нажмите <a
      href="exit.php">здесь</a>.</p>
      <?php endif;?>

  </div>
  </div>
  </body>
  </html>