<?php
	session_start();
	unset($_SESSION['auth']);
	setcookie('login', $login, time() - 3600 * 24, '/');
	setcookie('authCookie', false, time() - 3600 * 24, '/');
	session_destroy();
    header("Location: /index.php");

