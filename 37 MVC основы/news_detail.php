<?php
// контроллер для отображение одной новости детально

require 'models/News.php'; // подключаем модель News

$newsId = (int)$_GET['newsId'];// забираем ID новости из массива $_GET

$newsItem = News::getNewsItemById($newsId);// получаем массив с новостью

// заменяем \r\n\r\n на параграфы
$newsItem['text'] = str_replace("\r\n\r\n", '</p><p>', $newsItem['text']);

require 'views/news_detail_view.php'; // подключаем нужный вид
