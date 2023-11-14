<?php
// получение данных с полей формы
$login = $_POST["login"];
$password = md5($_POST["password"]);

//сообщение о неправильном пароле
$wrongPassword = "";

//подключение к базе данных
$dbc = mysqli_connect('localhost', 'root', '', 'reg');


//проверка на пустые поля
if (!empty($login) && !empty($password)) {
    $query = "SELECT * FROM users_log WHERE log_name = '$login' and log_password = '$password'";
    $res = mysqli_query($dbc, $query); // отправляем запрос к базе данных
    $user = mysqli_fetch_array($res); // получаем данные

    // если данные верны
    if (!empty($user)) {
        $_SESSION['auth'] = true;
        $id = mysqli_insert_id($dbc);
        $_SESSION['id'] = $id;
        setcookie('login', $login, time() + 3600 * 24, '/');
        setcookie('authCookie', true, time() + 3600 * 24, '/');
        header("Location: /login.php");
    // если неверны
    } else {
        $_SESSION['auth'] = false;
        $wrongPassword = "Неправильный логин или пароль";
    }
// если поля пустые
} else {
    $wrongPassword = "Введите логин и пароль";
}