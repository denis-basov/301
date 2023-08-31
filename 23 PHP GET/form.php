<?php
// form.php
// ?
// firstName=ivan
// & login=ivan222
// & email=ivan222%40test.t
// & password=swefwefsdghrryt5

//print_r($_GET);

// получаем данные из массива $_GET, обрезаем пробелы и экранируем
$firstName = htmlspecialchars(trim($_GET['firstName']));
$login = htmlspecialchars(trim($_GET['login']));
$email = htmlspecialchars(trim($_GET['email']));
$password = htmlspecialchars(trim($_GET['password']));

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
</body>
</html>

