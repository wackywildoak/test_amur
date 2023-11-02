<!DOCTYPE html>
<html lang="en">

<head>
  <? include 'templates/head.php';?>
  <title>Семейный портал - Амурская область</title>

</head>

<body>
  <div class="wrapper"> <!--wrapper-->

    <div class="modal" id="modal-window"> <!-- Модальное окно -->

      <div class="modal-content">
        <span class="close">&times;</span>
        <form id="ask_question" action="" class="ask_question_form" method="post">
          <label>
            <span class="input-title">Ваше имя:</span>
            <input class="ask_question_input" type="text" name="name" id="name" placeholder="Иван Иванов" required>
          </label>
          <label id="gender">
            <span class="input-title">Ваш пол:</span>
            <input type="radio" value="man" name="gender" for="gender" checked> <span
              class="input-title-gender">Мужской</span>
            <input type="radio" value="woman" name="gender" for="gender"> <span
              class="input-title-gender">Женский</span>
          </label>
          <label>
            <span class="input-title">Ваша профессия:</span>
            <select name="professions" id="professions">
              <option value="Разработчик">Разработчик</option>
              <option value="Врач" selected>Врач</option>
              <option value="Менеджер">Менеджер</option>
              <option value="Электрик">Электрик</option>
              <option value="Юрист">Юрист</option>
              <option value="Аналитик">Аналитик</option>
              <option value="Экономист">Экономист</option>
              <option value="Учитель">Учитель</option>
            </select>
          </label>
          <label>
            <span class="input-title">Ваша почта:</span>
            <input class="ask_question_input" type="email" name="email" id="email" placeholder="family@portal.ru"
              required>
          </label>
          <label>
            <span class="input-title">Ваш вопрос:</span>
            <textarea class="ask_question_input ask_question_textarea" name="message" id="message"
              placeholder="Распишите свой вопрос" required></textarea>
          </label>
          <button id="ask_question_btn" type="submit" class="btn ask_question_btn btn-outline-secondary ">
            Задать вопрос
          </button>
          <div class="error_message" id="error_mess"></div>
        </form>
      </div>
    </div> <!-- Модальное окно -->


    <header class="header"> <!--header-->
      <? include 'templates/header.php'; ?>
    </header> <!--header end-->

    <main class="main"> <!--main-->
      <div class="main-reg">
				<form action="" method="POST" class="reg-form">
					<span class="input-title reg-title">Логин:</span>
					<label>
						<input name="login">
					</label>
					<span class="input-title reg-title">Пароль:</span>
					<label>
						<input name="password" type="password">
					</label>
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