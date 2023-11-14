<div class="modal" id="modal-window"> <!-- Модальное окно -->
      <div class="modal-content">
        <span class="close">&times;</span>
        <?php if (!empty($_SESSION["auth"])): ?>
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
            <span class="input-title">Ваш номер телефона:</span>
            <input class="ask_question_input" type="text" name="phone" id="phone" placeholder="+7(___)___-__-__"
              required>
          </label>
          <label>
            <span class="input-title">Ваш вопрос:</span>
            <textarea class="ask_question_input ask_question_textarea" name="message" id="message"
              placeholder="Распишите свой вопрос" required></textarea>
          </label>
          <input id="ask_question_btn" type="submit" class="btn ask_question_btn btn-outline-secondary ">
          </input>
          <div class="error_message_block" id="error_mess">
            <p class="error_message">Ошибка</p>
          </div>
        </form>
        <?php else: ?>
          <a href="login.php">
            <button type="submit" class="btn btn-login auth-modal btn-outline-secondary">
              Войти
            </button>
          </a>
        <?php endif; ?>
      </div>
    </div> <!-- Модальное окно -->