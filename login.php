<!DOCTYPE html>
<html lang="en">

<head>
  <? include 'templates/head.php';?>
  <title>Семейный портал - Амурская область</title>

</head>

<body>
  <div class="wrapper"> <!--wrapper-->

    <? include 'templates/modal.php';?>

    <header class="header"> <!--header-->
      <? include 'templates/header.php'; ?>
    </header> <!--header end-->

    <main class="main"> <!--main-->
      <div class="main-reg">
        
				<form action="" method="post" class="reg-form">
          <h2 class="login-h">Вход</h2>
					<span class="input-title reg-title">Логин:</span>
					<label>
						<input class="input-reg" id="input-login" name="login" placeholder="Иван Иванов">
					</label>
					<span class="input-title reg-title">Пароль:</span>
					<label>
						<input class="input-reg" id="input-password" name="password" type="password" placeholder="*********">
					</label>
          <button type="button" class="btn btn-login btn-outline-secondary">
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
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/form.js"></script>
  <!-- scripts end -->

</body>

</html>