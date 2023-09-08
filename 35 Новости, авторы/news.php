<?php
// вывод новостей списком

require 'DBConnect.php';
$pdo = DBConnect::getConnection();

$query = "SELECT news.id AS newsId, news.title, add_date, image,
            authors.id AS authorId, first_name, last_name,
            translation AS category, class_name AS category_class_name
            FROM news, authors, category
            WHERE author_id = authors.id AND
            category_id = category.id
            ORDER BY add_date DESC;";
$statement = $pdo->query($query);
$newsList = $statement->fetchAll();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список новостей</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Список новостей</h1>
        <a href="/">Главная</a>
        <a href="authors.php">Авторы</a>
        <div class="news-list">
            <?php foreach ($newsList as $newsItem):?>
                <div class="news-item">
                    <div class="news-img">
                        <a href="news_detail.php?newsId=<?=$newsItem['newsId']?>">
                            <img src="<?=trim($newsItem['image'], '/')?>" alt="<?=$newsItem['title']?>">
                        </a>
                    </div>
                    <div class="news-info">
                        <h2><?=$newsItem['title']?></h2>
                        <div>
                            <p>Дата публикации: <?=$newsItem['add_date']?></p>
                            <p>Автор:
                                <a href="author_detail.php?authorId=<?=$newsItem['authorId']?>">
                                    <?=$newsItem['first_name']?> <?=$newsItem['last_name']?>
                                </a>
                            </p>
                            <p class="<?=$newsItem['category_class_name']?>">Категория: <?=$newsItem['category']?></p>
                            <a href="news_detail.php?newsId=<?=$newsItem['newsId']?>">Подробнее...</a>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</body>
</html>
