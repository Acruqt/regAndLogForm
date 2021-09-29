<?php
$login = trim($_POST['login']);
$mail = trim($_POST['mail']);
$password = trim($_POST['password']);

//Проверка длины значений
if (strlen($login) < 5 || strlen($login) > 90) {
    echo "Недопустимая длина логина!";
    exit();
} elseif (strlen($mail) < 5 || strlen($mail) > 90) {
    echo "Недопустимая длина mail!";
    exit();
} elseif (strlen($password) < 5 || strlen($password) < 8) {
    echo "Недопустимая длина пароля (от 2 до 8)!";
    exit();
} 
//Кэшируем пароль, чтобы не было его видно
$password = md5($password);

                        //База данных
//Вход в скл
$mysql = new mysqli('localhost', 'root', '', 'regbg');

//Вставляем данные в ячейки базы данных
$mysql->query("INSERT INTO `regusers` (`login`, `mail`, `password`)
VALUES('$login', '$mail', '$password')");

header('location: index.php');