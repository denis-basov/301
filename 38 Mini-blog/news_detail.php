<?php
// контроллер страницы детального просмотра новости

require 'models/News.php';

$newsId = (int)$_GET['newsId'];// получаем ID из массива GET
$limit = 3; // количество новостей в боковой панели

$newsItem = News::getNewsItemById($newsId); // получаем одну новость по ID
// добавляем переносы в текст
$newsItem['text'] = str_replace("\r\n\r\n", "</p><p>", $newsItem['text']);

//print_r($newsItem);
// получаем несколько новостей категории текущей новости
$limitNewsListByCategoryId = News::getLimitNewsListByCategoryId($newsItem['categoryId'], $limit);
print_r($limitNewsListByCategoryId);

require 'views/news-detail_view.php';