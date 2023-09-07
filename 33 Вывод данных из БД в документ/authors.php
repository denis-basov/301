<?php
require 'DBConnect.php';
$pdo = DBConnect::getConnection(); // подключаемся к бд

// пишем текст запроса к БД
$query = "SELECT id, firstName, lastName
          FROM authors;";

// отправляем запрос к БД
$statement = $pdo->query($query); // получаем объект класса PDOStatement

// получение по одной строк из набора
//print_r($statement->fetch());
//while($author = $statement->fetch()){
//    echo "<p>$author[firstName] $author[lastName]</p>";
//}

// получение всех строк из набора разом
// print_r($statement->fetchAll());

// забираем авторов из объекта класса PDOStatement и кладем в переменную
$authors = $statement->fetchAll();
// print_r($authors);

// в одну строку
//$newAuthors = $pdo->query("SELECT id, firstName, lastName FROM authors;")->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Авторы</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Авторы</h1>
    <a href="/">На главную</a>
    <div class="authors">
        <?php foreach($authors as $author):?>
            <div class="author">
                <p>Имя: <?=$author['firstName']?></p>
                <p>Фамилия: <?=$author['lastName']?></p>
                <p>Идентификатор: <?=$author['id']?></p>
            </div>
        <?php endforeach;?>
    </div>
</body>
</html>
