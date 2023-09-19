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

require 'views/news-detail_view.php';