<?php
$login = $_POST["login"];
$password = md5($_POST["password"]);

$dbc = mysqli_connect('localhost', 'root', '', 'reg');

if (!empty($login) && !empty($password)) {
    $query = "SELECT * FROM users_log WHERE log_name = '$login' and log_password = '$password'";
    $res = mysqli_query($dbc, $query);
    $user = mysqli_fetch_array($res);

    if (!empty($user)) {
        $_SESSION['auth'] = true;
        $id = mysqli_insert_id($dbc);
        $_SESSION['id'] = $id;
        setcookie('login', $login, time() + 3600 * 24, '/');
        setcookie('authCookie', true, time() + 3600 * 24, '/');
        header("Location: /login.php");
        
    } else {
        $_SESSION['auth'] = false;
        session_destroy();
        session_regenerate_id();
        header("Location: /index.php");
        die();
    }
}