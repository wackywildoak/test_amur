<?php
session_start();

$login = $_POST["login"];
$password = $_POST["password"];

$dbc = mysqli_connect('localhost', 'root', '', 'reg');

if (!empty ($login) && !empty($password)) {
    $query = "SELECT * FROM users_log WHERE log_name = '$login' and log_password = '$password'";
    $res = mysqli_query($dbc, $query);
    $user = mysqli_fetch_array($res);

    if(!empty($user)) {
        $_SESSION['auth'] = true;
    } else {
        die();
    }


}

?>