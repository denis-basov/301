<?php

//print_r($_POST);

// получаем данные из массива $_POST, обрезаем пробелы и экранируем
$firstName = htmlspecialchars(trim($_POST['firstName']));
$login = htmlspecialchars(trim($_POST['login']));
$email = htmlspecialchars(trim($_POST['email']));
$password = htmlspecialchars(trim($_POST['password']));

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Привет, <?=$firstName?></title>
</head>
<body>
    <h2>Привет, <?=$firstName?></h2>
    <p>Логин: <?=$login?></p>
    <p>Емейл: <?=$email?></p>
    <p>Пароль: <?=$password?></p>
    <a href="lk.php?firstName=<?=$firstName?>">Перейти в лк</a>
</body>
</html>