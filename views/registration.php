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
    <link rel="shortcut icon" href="../assets/icons/faviconRegistration.ico" type="image/x-icon">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <title>Зарегистрироваться</title>
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
