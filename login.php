<!DOCTYPE html>
<html lang="en">

<head>
  <? include 'templates/head.php'; ?>
  <title>Семейный портал - Амурская область</title>

</head>

<body>
  <?php
  session_start();

  $login = $_POST["login"];
  $password = $_POST["password"];

  $dbc = mysqli_connect('localhost', 'root', '', 'reg');

  if (!empty($login) && !empty($password)) {
    $query = "SELECT * FROM users_log WHERE log_name = '$login' and log_password = '$password'";
    $res = mysqli_query($dbc, $query);
    $user = mysqli_fetch_array($res);

    if (!empty($user)) {
      $_SESSION['auth'] = true;
      echo "kruto";
    } else {
      echo "ne kruto";
      die();

    }


  }

  ?>
  <div class="wrapper"> <!--wrapper-->

    <? include 'templates/modal.php'; ?>

    <header class="header"> <!--header-->
      <? include 'templates/header.php'; ?>
    </header> <!--header end-->
    <main class="main"> <!--main-->
      <div class="main-reg">

        <form action="" method="post" class="reg-form">
          <h2 class="login-h">Вход</h2>
          <span class="input-title reg-title">Имя пользователя:</span>
          <label>
            <input class="input-reg" id="input-login" name="login" placeholder="Иван Иванов">
          </label>
          <span class="input-title reg-title">Пароль:</span>
          <label>
            <input class="input-reg" id="input-password" name="password" type="password" placeholder="*********">
          </label>
          <button type="submit" class="btn btn-login btn-outline-secondary">
            Войти
          </button>
        </form>
      </div>
    </main> <!--main end -->
    <!-- footer -->
    <? include 'templates/footer.php'; ?>
    <!-- footer end -->

  </div> <!-- wrapper end -->
  
  <!-- scripts -->
  <? include_once "templates/scripts.php" ?>
  <!-- scripts end -->

</body>

</html>