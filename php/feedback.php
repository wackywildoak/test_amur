<?
$dbc = mysqli_connect('localhost', 'root', '', 'form');

$query = "INSERT INTO feedback (user_name, user_email, user_message)
            VALUES ('wackywildoak', 'wackywildoak@gmail.com', 'hello, how are u?')";

$result = mysqli_query($dbc, $query);

mysqli_close($dbc);

?>