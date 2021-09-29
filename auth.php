<?php
$mail = trim($_POST['mail']);
$password = trim($_POST['password']);

//Кэшируем пароль, чтобы не было его видно
$password = md5($password);

/** База данных **/
//Вход в скл
$mysql = mysqli_connect('localhost', 'root', '', 'regbg');

//Выбрать из всех (*) из таблицы "название"
$result = $mysql->query("SELECT * FROM `regusers` WHERE `mail`='$mail' AND `password`='$password'");

//Переводим данные в массив
$user = $result->fetch_assoc();

//If massive lenght = 0, get error
if (count((array)$user) == 0) {
    echo "Пользователь не найден";
    exit();
}

//Название куки, что будет туда записано, сколько часов действует (в минутах) и где действует (в данном случае - на всех страницах)
setcookie('userlog', $user['login'], time() + 3600, '/');

header('location: index.php');