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
print_r($newsList);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Список новостей</title>
</head>
<body>
    <div class="container">
        <h1>Список новостей</h1>
        <div class="news-list">
            <?php foreach ($newsList as $newsItem):?>
                <div class="news-item">
                    <div class="news-img">
                        <img src="image" alt="title">
                    </div>
                    <div class="news-info">
                        <h2>title</h2>
                        <div>
                            <span>add_date</span>
                            <span>first_name</span>
                            <span>last_name</span>
                            <span>category</span>
                        </div>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>
</body>
</html>
