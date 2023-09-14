<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $newsItem['title'] ?></title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<div class="container">
    <div class="news-item">
        <div class="news-info">
            <h1><?= $newsItem['title'] ?></h1>
            <img src="<?= $newsItem['image'] ?>" alt="<?= $newsItem['title'] ?>">
            <p><?= $newsItem['text'] ?></p>
            <p>Дата публикации: <?= $newsItem['add_date'] ?></p>
            <p class="<?= $newsItem['category_class_name'] ?>">Категория: <?= $newsItem['category'] ?></p>
        </div>
        <div class="author-info">
            <img src="<?= $newsItem['avatar'] ?>" alt="<?= $newsItem['first_name'] ?> <?= $newsItem['last_name'] ?>">
            <p><a href="author_detail.php?authorId=<?= $newsItem['authorId'] ?>"><?= $newsItem['first_name'] ?> <?= $newsItem['last_name'] ?></a></p>
            <p><?= $newsItem['short_info'] ?></p>
        </div>
    </div>
    <a href="news.php">К списку новостей</a>
</div>
</body>

</html>
