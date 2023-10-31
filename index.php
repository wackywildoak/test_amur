<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/main.css">
  <link rel="stylesheet" href="assets/css/adaptive.css">
  <title>Семейный портал - Амурская область</title>
</head>

<body>
  <div class="wrapper"> <!--wrapper-->

    <div class="modal" id="modal-window"> <!-- Модальное окно -->

      <div class="modal-content">
        <span class="close">&times;</span>
        <form id="ask_question" action="" class="ask_question_form" method = "post">
          <label>
            <span class="input-title">Ваше имя:</span>
            <input class="ask_question_input" type="text" name="name" id="name" placeholder="Иван Иванов">
          </label>
          <label>
            <span class="input-title">Ваша почта:</span>
            <input class="ask_question_input" type="email" name="email" id="email" placeholder="family@portal.ru">
          </label>
          <label>
            <span class="input-title">Ваш вопрос:</span>
            <textarea class="ask_question_input ask_question_textarea" name="message"
              id = "message" placeholder="Распишите свой вопрос"></textarea>
          </label>
          <button id="ask_question_btn" type="submit" class="btn ask_question_btn btn-outline-secondary ">
            Задать вопрос
          </button>
          <div class="error_message" id = "error_mess"></div>
        </form>
      </div>
    </div> <!-- Модальное окно -->


    <header class="header"> <!--header-->
      <div class="header-desktop"> <!--header-desktop-->
        <div class="container-fluid">
          <div class="row menu-top mt-3">
            <div class="col ">
              <ul class="social-icons d-flex justify-content-end mt-3">
                <li><a href="" class="social-link vk"></a></li>
                <li><a href="" class="social-link twitter"></a></li>
                <li><a href="" class="social-link facebook"></a></li>
                <li><a href="" class="social-link instagram"></a></li>
                <li><a href="" class="social-link ok"></a></li>
              </ul>
            </div>
            <div class="col-2">
              <div class="logo text-center">
                <a href="">
                  <img src="assets/img/logo-top.png" alt="" class="logo-img ">
                </a>
              </div>
            </div>
            <div class="col text-center">
              <button id="modal-btn" type="button"
                class="btn btn-f btn-outline-secondary justify-content-center mt-2 me-5">
                Написать нам
              </button>
            </div>
          </div>
          <div class="row menu-bottom">
            <div class="col left">
              <nav class="navbar nav-left navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Переключатель навигации">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link head me-5" href="#">О портале</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link head me-5" href="#">Всё для семьи</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link head" href="#">События</a>
                      </li>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
            <div class="col-2 ">
              <div class="logo text-center">
                <a href="">
                  <img src="assets/img/logo-bottom.png" alt="" class="logo-img ">
                </a>
              </div>
            </div>
            <div class="col right">
              <nav class="navbar nav-right navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                  <div class="collapse navbar-collapse justify-content-start" id="navbarNav">
                    <ul class="navbar-nav">
                      <li class="nav-item">
                        <a class="nav-link head me-5" href="#">Вопросы</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link head" href="#">Контакты</a>
                      </li>
                      <button class="btn btn-find-head" type="submit"><img src="assets/img/bx_bx-search.png"
                          alt=""></button>
                    </ul>
                  </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div> <!--header-desktop-end-->
      <div class="header-mobile"> <!--header-mobile-->
        <div class="container-mobile header__container-mobile">
          <div class="container-fluid">
            <div class="row">
              <div class="col m-left  ">

                <nav class="menu-mobile">
                  <ul class="menu__list-mobile">

                    <ul class="social-icons mobile d-flex justify-content-end mb-5">
                      <li><a href="" class="social-link vk"></a></li>
                      <li><a href="" class="social-link twitter"></a></li>
                      <li><a href="" class="social-link facebook"></a></li>
                      <li><a href="" class="social-link instagram"></a></li>
                      <li><a href="" class="social-link ok"></a></li>
                    </ul>
                    <form class="d-flex" role="search">
                      <input class="form-control mobile me-2" type="search" placeholder="Поиск по сайту"
                        aria-label="Поиск">
                    </form>
                    <li class="menu__item-mobile">
                      <a class="menu__link-mobile active" href="#">
                        Главная
                      </a>
                    </li>
                    <li class="menu__item-mobile">
                      <a class="menu__link-mobile" href="#">
                        О портале
                      </a>
                    </li>
                    <li class="menu__item-mobile">
                      <a class="menu__link-mobile" href="#">
                        Всё для семьи
                      </a>
                    </li>
                    <li class="menu__item-mobile">
                      <a class="menu__link-mobile" href="#">
                        События
                      </a>
                    </li>
                    <li class="menu__item-mobile">
                      <a class="menu__link-mobile" href="#">
                        Вопросы
                      </a>
                    </li>
                    <li class="menu__item-mobile">
                      <a class="menu__link-mobile" href="#">
                        Контакты
                      </a>
                    </li>
                    <button type="button" class="btn btn-f btn-outline-secondary justify-content-center mt-4 me-4">
                      Написать нам
                    </button>
                  </ul>
                </nav>
                <button class="header__burger-btn-mobile" id="burger">
                  <span></span><span></span><span></span>
                </button>
              </div>
              <div class="col-6">
                <a href="#" class="logo-mobile justify-content-center">
                  <img class="logo__img-mobile" src="assets/img/logo.png" alt="Логотип">
                </a>
              </div>
              <div class="col m-right">
                <button class="btn btn-find-head-mobile" type="submit">
                  <img src="assets/img/bx_bx-search.png" alt="">
                </button>
              </div>
            </div>
          </div>
        </div>
      </div> <!--header-mobile end-->
      <div class="header-tablet"> <!--header-tablet-->
        <div class="container-tablet header__container-tablet">
          <button class="header__burger-btn-tablet" id="burger-tablet">
            <span></span><span></span><span></span>
          </button>
          <a href="#" class="logo-tablet">
            <img class="logo__img-tablet" src="assets/img/logo-bottom.png" alt="Логотип">
          </a>

          <nav class="menu-tablet">
            <ul class="menu__list-tablet">
              <ul class="social-icons d-flex justify-content-end mb-5 ms-5">
                <li><a href="" class="social-link vk"></a></li>
                <li><a href="" class="social-link twitter"></a></li>
                <li><a href="" class="social-link facebook"></a></li>
                <li><a href="" class="social-link instagram"></a></li>
                <li><a href="" class="social-link ok"></a></li>
              </ul>
              <form class="d-flex" role="search">
                <input class="form-control tablet me-2" type="search" placeholder="Поиск по сайту" aria-label="Поиск">
              </form>
              <li class="menu__item-tablet">
                <a class="menu__link-tablet active" href="#">
                  Главная
                </a>
              </li>
              <li class="menu__item-tablet">
                <a class="menu__link-tablet" href="#">
                  О портале
                </a>
              </li>
              <li class="menu__item-tablet">
                <a class="menu__link-tablet" href="#">
                  Всё для семьи
                </a>
              </li>
              <li class="menu__item-tablet">
                <a class="menu__link-tablet" href="#">
                  События
                </a>
              </li>
              <li class="menu__item-tablet">
                <a class="menu__link-tablet" href="#">
                  Вопросы
                </a>
              </li>
              <li class="menu__item-tablet">
                <a class="menu__link-tablet" href="#">
                  Контакты
                </a>
              </li>
              <button type="button" class="btn btn-f btn-outline-secondary justify-content-center mt-4 me-4">
                Написать нам
              </button>
            </ul>
          </nav>
        </div>
      </div> <!--header-tablet end-->
    </header> <!--header end-->

    <main class="main"> <!--main-->
      <div class="main-banner"> <!--main banner-->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-indicators justify-content-start position-absolute bottom-0 start-0">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active "
              aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
              aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
              aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner ">
            <div class="carousel-item active ">
              <img src="assets/img/banner1.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption b1 text-start .d-block">
                <h1>Вся информация по развитию и поддержке семьи в одном месте.</h1>
                <p>при поддержке правительства Амурской области</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/img/banner2.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption b2 text-start .d-block">
                <div class="row">
                  <div class="col-2">
                    <h1>С наступающим</h1>
                    <h2>2020</h2>
                    <p>Здоровья и любви Вам в новом году!</p>
                  </div>
                  <div class="col-2">
                    <h3>!</h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img src="assets/img/banner3.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption b3 text-start .d-block">
                <h1>Многодетные семьи получат помощь на рождение детей </h1>
                <p>Уже со следующего месяца многодетные семьи будут получать увеличенные пособия на детей. На заседании
                  ...</p>
              </div>
            </div>
          </div>
        </div>
      </div> <!--main banner end-->
      <div class="main-result"> <!--main result-->
        <div class="container">
          <div class="row result">
            <div class="col-4-md result-block">

              <h2 class="h-result h-blue">57</h2>
              <p class="result-text">
                семьям, обратившимся
                к нам, мы помогли
              </p>
            </div>
            <div class="col-4-md result-block">

              <h2 class="h-result h-orange">24/7</h2>
              <p class="result-text">
                мы принимаем обращения ежедневно
              </p>
            </div>
            <div class="col-4-md result-block">
              <h5 class="mini-result">более</h5>
              <h2 class="h-result h-purple">100</h2>
              <p class="result-text">
                квалифицированных
                сотрудников
              </p>
            </div>
          </div>
        </div>
      </div> <!--main result end-->
      <div class="hr-f"></div>
      <div class="main-family"> <!--main family-->
        <div class="container card-g f">
          <div class="menu-family">
            <ul class="nav nav-tabs justify-content-end">
              <div class="col">
                <h4 class="nav-h">Всё для семьи</h4>
              </div>
              <li class="nav-item">
                <a class="nav-link f active" aria-current="page" href="#">Всё</a>
              </li>
              <li class="nav-item">
                <a class="nav-link f" href="#">Важное</a>
              </li>
              <li class="nav-item">
                <a class="nav-link f" href="#">Новости</a>
              </li>
              <li class="nav-item">
                <a class="nav-link f">Полезное</a>
              </li>
              <li>
                <div class="btn-group f" role="group" aria-label="Простой пример">
                  <button type="button" class="btn btn-menu-f left"><img src="assets/img/лево1.png" alt=""></button>
                  <button type="button" class="btn btn-menu-f right"><img src="assets/img/право2.png" alt=""></button>
                </div>
              </li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary drop dropdown-toggle" id="dropdownMenuButton2" type="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Всё
            </button>
            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownMenuButton2">
              <li><a class="dropdown-item active" href="#">Всё</a></li>
              <li><a class="dropdown-item" href="#">Новости</a></li>
              <li><a class="dropdown-item" href="#">Полезное</a></li>
              <li><a class="dropdown-item" href="#">Важное</a></li>
            </ul>
          </div>
          <div class="card-group f"> <!--card-group-->
            <div class="card f card-1">
              <img src="assets/img/family1.jpg" class="card-img-top f" alt="...">
              <div class="square-block square-gray">
                <p class="square-text">
                  Семейные ценности и меры поддержки семьи
                </p>
              </div>
              <div class="card-body f">
                <h5 class="card-title f mb-11">Постоянный количественный рост определил дальнейшее развитие!</h5>
                <div class="row f">
                  <div class="col-2 f">
                    <p class="card-text f ms-4 mb-4 position-absolute bottom-0 start-0"><small
                        class="text-muted">23.12.2019г.</small></p>
                  </div>
                  <div class="col-2 f">
                    <ul class="social-icons-mini f d-flex justify-content-center position-absolute bottom-0 end-0">
                      <li><a href="" class="social-link-mini vk"></a></li>
                      <li><a href="" class="social-link-mini twitter"></a></li>
                      <li><a href="" class="social-link-mini facebook"></a></li>
                      <li><a href="" class="social-link-mini instagram"></a></li>
                      <li><a href="" class="social-link-mini ok"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card f card-2">
              <img src="assets/img/family2.jpg" class="card-img-top f" alt="...">
              <div class="square-block square-red">
                <p class="square-text">
                  Защита прав и законных интересов детей
                </p>
              </div>
              <div class="card-body f">
                <h5 class="card-title f mb-11">Чистый разум не скован границами</h5>
                <div class="row f">
                  <div class="col-2 f">
                    <p class="card-text f ms-4 mb-4 position-absolute bottom-0 start-0"><small
                        class="text-muted">23.12.2019г.</small></p>
                  </div>
                  <div class="col-2 f">
                    <ul class="social-icons-mini f d-flex justify-content-center position-absolute bottom-0 end-0">
                      <li><a href="" class="social-link-mini vk"></a></li>
                      <li><a href="" class="social-link-mini twitter"></a></li>
                      <li><a href="" class="social-link-mini facebook"></a></li>
                      <li><a href="" class="social-link-mini instagram"></a></li>
                      <li><a href="" class="social-link-mini ok"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card f card-3">
              <img src="assets/img/family3.jpg" class="card-img-top f" alt="...">
              <div class="square-block square-green">
                <p class="square-text">
                  Семья и здоровье
                </p>
              </div>
              <div class="card-body f">
                <h5 class="card-title f mb-11">Экономическая повестка сегодняшнего дня станет частью наших традиций</h5>
                <div class="row f">
                  <div class="col-2 f">
                    <p class="card-text f ms-4 mb-4 position-absolute bottom-0 start-0"><small
                        class="text-muted">23.12.2019г.</small></p>
                  </div>
                  <div class="col-2 f">
                    <ul class="social-icons-mini f d-flex justify-content-center position-absolute bottom-0 end-0">
                      <li><a href="" class="social-link-mini vk"></a></li>
                      <li><a href="" class="social-link-mini twitter"></a></li>
                      <li><a href="" class="social-link-mini facebook"></a></li>
                      <li><a href="" class="social-link-mini instagram"></a></li>
                      <li><a href="" class="social-link-mini ok"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <div class="card f card-4">
              <img src="assets/img/family4.jpg" class="card-img-top f" alt="...">
              <div class="square-block square-orange">
                <p class="square-text">
                  Семейный досуг и спорт
                </p>
              </div>
              <div class="card-body f">
                <h5 class="card-title f mb-11">Инцидент не исчерпан: героям были возданы соответствующие почести!</h5>
                <div class="row f">
                  <div class="col-2 f">
                    <p class="card-text f ms-4 mb-4 position-absolute bottom-0 start-0"><small
                        class="text-muted">23.12.2019г.</small></p>
                  </div>
                  <div class="col-2 f">
                    <ul class="social-icons-mini f d-flex justify-content-center position-absolute bottom-0 end-0">
                      <li><a href="" class="social-link-mini vk"></a></li>
                      <li><a href="" class="social-link-mini twitter"></a></li>
                      <li><a href="" class="social-link-mini facebook"></a></li>
                      <li><a href="" class="social-link-mini instagram"></a></li>
                      <li><a href="" class="social-link-mini ok"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div> <!--card-group end -->
          <div class="row ">
            <div class="col-12 text-center mt-5 mb-5">
              <button type="button" class="btn btn-f btn-outline-secondary ">
                Посмотреть всё
              </button>
            </div>
          </div>
        </div>
      </div><!--main family-->
      <div class="hr-a"></div>
      <div class="main-answers"> <!-- main-answers -->
        <div class="container">
          <div class="row">
            <div class="col-12 menu-ans">
              <div class="menu-family ans">
                <ul class="nav ans nav-tabs justify-content-end">
                  <div class="col">
                    <h4 class="nav-h">Вопрос - Ответ</h4>
                  </div>
                  <form class="d-flex search-ans" role="search">
                    <input class="form-control search-ans-input" type="search"
                      placeholder="Введите сюда ключевое слово вашего вопроса" aria-label="Поиск">
                    <button class="btn btn-find" type="submit"><img src="assets/img/mdi_magnify.png" alt=""></button>
                  </form>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-10 list-box">
              <a href="" class="nav-h-top ans">Часто задаваемые вопросы</a>
              <ol class="list-group text-start">
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-10 text-ans mt-3">
                      Являясь всего лишь частью общей картины, сторонники тоталитаризма в науке формируют глобальную
                      экономическую сеть и при этом - функционально разнесены на независимые элементы?
                    </div>
                    <div class="col-2 btn-ans-down">
                      <button type="button" class="btn btn-ans-down position-absolute end-0">
                      </button>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-10 text-ans mt-3">
                      Не следует, однако, забывать, что реализация намеченных плановых заданий требует анализа
                      глубокомысленных рассуждений?
                    </div>
                    <div class="col-2 btn-ans-down">
                      <button type="button" class="btn btn-ans-down position-absolute end-0">
                      </button>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-10 text-ans mt-3">
                      Внезапно, предприниматели в сети интернет лишь добавляют фракционных разногласий и своевременно
                      верифицированы?
                    </div>
                    <div class="col-2 btn-ans-down">
                      <button type="button" class="btn btn-ans-down position-absolute end-0">
                      </button>
                    </div>
                  </div>
                </li>
                <li class="list-group-item">
                  <div class="row">
                    <div class="col-10 text-ans mt-3">
                      С другой стороны, выбранный нами инновационный путь позволяет оценить значение приоритизации
                      разума над эмоциями. С другой стороны, дальнейшее развитие различных форм деятельности требует
                      определения и уточнения прогресса профессионального сообщества?
                    </div>
                    <div class="col-2 btn-ans-down">
                      <button type="button" class="btn btn-ans-down position-absolute end-0">
                      </button>
                    </div>
                  </div>
                </li>
              </ol>
            </div>
            <div class="col-2 text-center sideb">
              <div class="sidebar">
                <h4 class="h-ans">Наши специалисты готовы ответить на Ваши вопросы.</h4>
                <svg class="strelka" xmlns="http://www.w3.org/2000/svg" width="17" height="45" viewBox="0 0 17 45"
                  fill="none">
                  <path
                    d="M0.576291 43.9688C0.559066 44.2444 0.768524 44.4818 1.04413 44.499L5.53536 44.7797C5.81097 44.797 6.04836 44.5875 6.06558 44.3119C6.08281 44.0363 5.87335 43.7989 5.59774 43.7817L1.60553 43.5322L1.85505 39.54C1.87227 39.2643 1.66281 39.027 1.38721 39.0097C1.1116 38.9925 0.874219 39.202 0.856993 39.4776L0.576291 43.9688ZM7.23008 1.36168C9.06747 3.11555 11.1399 5.06924 12.7654 7.93424C14.3858 10.7901 15.5753 14.5788 15.5753 20H16.5753C16.5753 14.4212 15.3482 10.4599 13.6352 7.44076C11.9274 4.43076 9.74983 2.38445 7.92056 0.638322L7.23008 1.36168ZM15.5753 20C15.5753 25.1066 12.6227 30.3691 9.24309 34.7157C5.87676 39.0452 2.15529 42.3803 0.744507 43.6251L1.40613 44.3749C2.82868 43.1197 6.6072 39.7349 10.0325 35.3295C13.4446 30.9413 16.5753 25.4537 16.5753 20H15.5753Z"
                    fill="black" />
                </svg>
                <button id="modal-btn-sidebar" type="button" class="btn btn-ans btn-outline-secondary ">
                  Задать вопрос
                </button>
                <img src="assets/img/sidebar_img.png" alt="">
              </div>
            </div>
            <a href="" class="nav-h-bottom ans">Смотреть все вопросы и ответы</a>
            <a href="" class="nav-h-bottom ans-str"></a>
            <div class="col text-center sideb-mobile">
              <div class="sidebar-mobile">
                <h4 class="h-ans">Наши специалисты готовы ответить на Ваши вопросы.</h4>
                <svg class="strelka-mobile" xmlns="http://www.w3.org/2000/svg" width="17" height="45"
                  viewBox="0 0 17 45" fill="none">
                  <path
                    d="M0.576291 43.9688C0.559066 44.2444 0.768524 44.4818 1.04413 44.499L5.53536 44.7797C5.81097 44.797 6.04836 44.5875 6.06558 44.3119C6.08281 44.0363 5.87335 43.7989 5.59774 43.7817L1.60553 43.5322L1.85505 39.54C1.87227 39.2643 1.66281 39.027 1.38721 39.0097C1.1116 38.9925 0.874219 39.202 0.856993 39.4776L0.576291 43.9688ZM7.23008 1.36168C9.06747 3.11555 11.1399 5.06924 12.7654 7.93424C14.3858 10.7901 15.5753 14.5788 15.5753 20H16.5753C16.5753 14.4212 15.3482 10.4599 13.6352 7.44076C11.9274 4.43076 9.74983 2.38445 7.92056 0.638322L7.23008 1.36168ZM15.5753 20C15.5753 25.1066 12.6227 30.3691 9.24309 34.7157C5.87676 39.0452 2.15529 42.3803 0.744507 43.6251L1.40613 44.3749C2.82868 43.1197 6.6072 39.7349 10.0325 35.3295C13.4446 30.9413 16.5753 25.4537 16.5753 20H15.5753Z"
                    fill="black" />
                </svg>
                <button id="modal-btn-sidebar" type="button" class="btn btn-ans btn-outline-secondary ">
                  Задать вопрос
                </button>
                <img src="assets/img/sidebar_img.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div> <!-- main-answers end -->
      <div class="hr-e"></div>
      <div class="main-events"> <!--main events -->
        <div class="container card-g f">
          <div class="menu-family e">
            <ul class="nav e nav-tabs justify-content-end">
              <div class="col">
                <h4 class="nav-h e">События</h4>
              </div>
              <li class="nav-item">
                <a class="nav-link e active" aria-current="page" href="#">Всё</a>
              </li>
              <li class="nav-item">
                <a class="nav-link e" href="#">Важное</a>
              </li>
              <li class="nav-item">
                <a class="nav-link e" href="#">Новости</a>
              </li>
              <li class="nav-item">
                <a class="nav-link e">Полезное</a>
              </li>
              <li>
                <div class="btn-group f" role="group" aria-label="Простой пример">
                  <button type="button" class="btn btn-menu-f left e"><img src="assets/img/left_w.png" alt=""></button>
                  <button type="button" class="btn btn-menu-f right e"><img src="assets/img/right_w.png"
                      alt=""></button>
                </div>
              </li>
            </ul>
          </div>
          <div class="dropdown">
            <button class="btn btn-secondary drop dropdown-toggle" id="dropdownMenuButton2" type="button"
              data-bs-toggle="dropdown" aria-expanded="false">
              Всё
            </button>
            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="dropdownMenuButton2">
              <li><a class="dropdown-item active" href="#">Всё</a></li>
              <li><a class="dropdown-item" href="#">Новости</a></li>
              <li><a class="dropdown-item" href="#">Полезное</a></li>
              <li><a class="dropdown-item" href="#">Важное</a></li>
            </ul>
          </div>
          <div class="card-group f e"> <!--card-group-->
            <div class="card f e card-1">
              <img src="assets/img/city1.jpg" class="card-img-top e" alt="...">
              <h5 class="card-title e ms-4 me-5 position-absolute bottom-0 end-0">Известный инсайдер, в преддверии
                важного события, бодрит</h5>
              <div class="row f">
                <div class="col-2 f">
                  <p class="card-text e ms-4 position-absolute start-0">23.12.2019г.</small></p>
                </div>
                <div class="col-2 f">
                  <ul class="social-icons-mini e d-flex justify-content-center position-absolute end-0">
                    <li><a href="" class="social-link-mini e vk"></a></li>
                    <li><a href="" class="social-link-mini e twitter"></a></li>
                    <li><a href="" class="social-link-mini e facebook"></a></li>
                    <li><a href="" class="social-link-mini e instagram"></a></li>
                    <li><a href="" class="social-link-mini e ok"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card f e card-2">
              <img src="assets/img/city2.jpg" class="card-img-top e" alt="...">
              <h5 class="card-title e ms-4 me-5 position-absolute bottom-0 end-0">Британские ученые заявили, что объемы
                выросли</h5>
              <div class="row f">
                <div class="col-2 f">
                  <p class="card-text e ms-4 position-absolute start-0">23.12.2019г.</small></p>
                </div>
                <div class="col-2 f">
                  <ul class="social-icons-mini e d-flex justify-content-center position-absolute end-0">
                    <li><a href="" class="social-link-mini e vk"></a></li>
                    <li><a href="" class="social-link-mini e twitter"></a></li>
                    <li><a href="" class="social-link-mini e facebook"></a></li>
                    <li><a href="" class="social-link-mini e instagram"></a></li>
                    <li><a href="" class="social-link-mini e ok"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card f e card-3">
              <img src="assets/img/city3.jpg" class="card-img-top e" alt="...">
              <h5 class="card-title e ms-4 me-5 position-absolute bottom-0 end-0">Очевидцы сообщают, что слышали звон
                колоколов</h5>
              <div class="row f">
                <div class="col-2 f">
                  <p class="card-text e ms-4 position-absolute start-0">23.12.2019г.</small></p>
                </div>
                <div class="col-2 f">
                  <ul class="social-icons-mini e d-flex justify-content-center position-absolute end-0">
                    <li><a href="" class="social-link-mini e vk"></a></li>
                    <li><a href="" class="social-link-mini e twitter"></a></li>
                    <li><a href="" class="social-link-mini e facebook"></a></li>
                    <li><a href="" class="social-link-mini e instagram"></a></li>
                    <li><a href="" class="social-link-mini e ok"></a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="card f e card-4">
              <img src="assets/img/city4.jpg" class="card-img-top e" alt="...">
              <h5 class="card-title e ms-4 me-5 position-absolute bottom-0 end-0">Доблесть наших правозащитников
                оказалась чрезвычайно полезной!</h5>
              <div class="row f">
                <div class="col-2 f">
                  <p class="card-text e ms-4 position-absolute start-0">23.12.2019г.</small></p>
                </div>
                <div class="col-2 f">
                  <ul class="social-icons-mini e d-flex justify-content-center position-absolute end-0">
                    <li><a href="" class="social-link-mini e vk"></a></li>
                    <li><a href="" class="social-link-mini e twitter"></a></li>
                    <li><a href="" class="social-link-mini e facebook"></a></li>
                    <li><a href="" class="social-link-mini e instagram"></a></li>
                    <li><a href="" class="social-link-mini e ok"></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div> <!-- card-group end -->
          <div class="row ">
            <div class="col-12 text-center mt-5 mb-5">
              <button type="button" class="btn btn-f btn-events btn-outline-light ">
                Посмотреть всё
              </button>
            </div>
          </div>
        </div>
      </div><!-- main events -->
    </main> <!--main end -->

    <footer class="footer"> <!-- footer-->
      <p>© 2001-2023, Семейный портал Амурской области</p>
    </footer> <!-- footer end -->

  </div> <!-- wrapper end -->

  <!-- scripts -->
  <script src="assets/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/jquery-3.7.1.min.js"></script>
  <script src="assets/js/main.js"></script>
  <script src="assets/js/form.js"></script>
  <!-- scripts end -->

</body>

</html>