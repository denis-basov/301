<?php
// контроллер страницы детального просмотра новости

require 'models/News.php';
require 'models/Comments.php';

$newsId = (int)$_GET['newsId'];// получаем ID из массива GET
$limit = 3; // количество новостей в боковой панели

/**
 * новость
 */
$newsItem = News::getNewsItemById($newsId); // получаем одну новость по ID
$newsItem['text'] = str_replace("\r\n\r\n", "</p><p>", $newsItem['text']);// добавляем переносы в текст

$title = $newsItem['newsTitle'];

// получаем несколько новостей категории текущей новости и исключаем из списка текущую новость
$limitNewsListByCategoryId = News::getLimitNewsListByCategoryId($newsItem['categoryId'], $limit, $newsId);
$newsCountByCategories = News::getNewsCountByCategories();// получаем количество новостей по категориям
$newsCountByAuthors = News::getNewsCountByAuthors();// получаем количество новостей по авторам

/**
 * комментарии
 */
// получаем комментарии к текущей новости по ID новости
$comments = Comments::getCommentsByNewsId($newsId);
$commentsCount = count($comments);// получаем количество комментариев


if($_SERVER['REQUEST_METHOD'] === "POST"){// если отправлена форма с комментарием
    session_start();
    $autofocus = true;
    $comment = htmlspecialchars(trim($_POST['comment']));

    if(empty($comment)){
        // выводим ошибку
        $commentError = 'Введите текст комментария';
    }else{
        // добавляем комментарий в таблицу
        Comments::addNewCommentToNewsItem($comment, $newsId, $_SESSION['userId']);
        header("Location: news_detail.php?newsId=$newsId");
    }
}

require 'views/news-detail_view.php';

