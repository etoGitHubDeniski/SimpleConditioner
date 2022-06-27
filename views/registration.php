<?php
session_start();
if ($_SESSION['user']) {
    header('Location: /views/profile.php');
}
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- title -->
    <title>Регистрация</title>

    <!-- icon -->
    <link rel="shortcut icon" href="/img/icons/Simple.ico">

    <!-- fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/fonts/font-awesome/css/font-awesome.css">

    <!-- css -->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/bootstrap.css">
    <link rel="stylesheet" href="/css/main.css">
</head>

<body>
    <form action="/php/signup.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите имя">
        <label>Почта</label>
        <input type="text" name="email" placeholder="Введите почту">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите пароль">
        <label>Подтверждение пароля</label>
        <input type="password" name="passwordconf" placeholder="Введите пароль еще раз">
        <button type="submit">Зарегестрироваться</button>
        <p>Уже есть аккаунт? <a href="/views/login.php">Войти</a></p>
        <?php
        if ($_SESSION['message']) {
            echo '<p class="msg"> ' . $_SESSION['message'] . ' </p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</body>

</html>
