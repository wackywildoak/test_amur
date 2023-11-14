<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <? include 'templates/head.php'; ?>
  <title>Вход - Семейный портал - Амурская область</title>

</head>

<body>
  <? include "php/log_in.php" ?>
  <div class="wrapper"> <!--wrapper-->
  
    <? include 'templates/modal.php'; ?>
    <? include 'templates/header.php'; ?>

    <main class="main"> <!--main-->
      <div class="main-reg">
        <?php if (!empty($_SESSION["auth"])): ?>
          <div class="auth-success">
          <p>Вы успешно авторизированы! <?echo $_COOKIE['login'];?></p>
          <form action="php/log_out.php" method="post">
          <button type="submit" class="btn btn-login btn-outline-secondary">
            Выйти
          </button>
          </form>
        </div>
        <?php else : ?>
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
          <div class="wrong-pass">
            <?=$wrongPassword?>
          </div>
        </form>
        <?php endif;?>
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