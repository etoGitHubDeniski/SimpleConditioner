<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: /views/login.php');
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
    <title>Профиль</title>
</head>

<body>
    <form>
        <h2 style="margin: 10px 0;"><?= $_SESSION['user']['login'] ?></h2>
        <a href="#"><?= $_SESSION['user']['email'] ?></a>
        <a href="/php/logout.php" class="logout">Выход</a>
    </form>
</body>

</html>
