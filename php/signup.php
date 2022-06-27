<?php
session_start();
require_once 'connect.php';

$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$passwordconf = $_POST['passwordconf'];

if ($password === $passwordconf) {

    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `Users` (`id`, `login`, `password`, `email`) VALUES (NULL, '$login', '$password', '$email')");

    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: /views/login.php');

} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: /views/registration.php');
}
