<?php
require 'DBConnect.php';
$pdo = DBConnect::getConnection(); // подключаемся к бд

$query = "SELECT books.id AS bookId, title, description, authors.id AS authorId, firstName, lastName
            FROM books, authors
            WHERE authorId = authors.id;";
$statement = $pdo->query($query);
$books = $statement->fetchAll();
// print_r($books);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Книги</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Книги</h1>
    <a href="/">На главную</a>
    <div class="books">
        <?php foreach($books as $book):?>
            <div class="book">
                <div class="book-info">
                    <h3><?=$book['title']?></h3>
                    <p><?=$book['description']?></p>
                    <a href="book_detail.php?bookId=<?=$book['bookId']?>">Подробнее...</a>
                </div>
                <div class="author-info">
                    <a href="author_detail.php?authorId=<?=$book['authorId']?>">
                        <p>Автор: <?=$book['firstName'].' '.$book['lastName']?></p>
                    </a>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</body>
</html>
