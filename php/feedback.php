<?

$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];


$dbc = mysqli_connect('localhost', 'root', '', 'form');

$query = "INSERT INTO feedback (user_name, user_email, user_message)
            VALUES ('$name', '$email', '$message')";

$result = mysqli_query($dbc, $query);

mysqli_close($dbc);

?>