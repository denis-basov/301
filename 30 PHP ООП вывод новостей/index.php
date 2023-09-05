<?php
require 'Classes.php';
$publications = require 'news_data.php';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Новости</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="news-list">
        <?php
            // перебираем массив, создаем из каждого массива с новостью объект
            // вызываем метод для отображения новости
            foreach($publications as $newsItem){
                $publication = new $newsItem['category']($newsItem);
                $publication->printItem();
            }
        ?>
    </div>
</body>
</html>
