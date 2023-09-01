<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Личный кабинет</title>
</head>
<body>
    <!-- если пользователь вошел, показываем приветствие  -->
    <?php if(isset($_COOKIE['firstName'])):?>
        <h2>Привет, <?=$_COOKIE['firstName']?> <?=$_COOKIE['lastName']?></h2>
        <a href="exit.php">Выйти</a>
    <?php else:?>
        <h2>Страница только для зарегистрированых пользователей</h2>
    <?php endif;?>
    <a href="/">На главную</a>
</body>
</html>