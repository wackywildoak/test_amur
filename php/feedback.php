<?
// присваиваем значения инпутов к переменным
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$gender = $_POST['gender'];
$professions = $_POST['professions'];
(int)$phone = $_POST['phone'];

//подключаемся к базе данных
$dbc = mysqli_connect('localhost', 'root', '', 'form');


//валидация электронной почты
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    //отправляем sql запрос, данные из форм записываются в таблицу feedback в базе данных form
    $query = "INSERT INTO feedback (user_name, user_email, user_message, gender, professions, phone)
            VALUES ('$name', '$email', '$message', '$gender', '$professions', '$phone')";    
}

$result = mysqli_query($dbc, $query);
//отключаемся от базы данных
mysqli_close($dbc);

?>