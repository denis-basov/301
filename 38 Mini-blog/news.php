<?php
// контроллер страницы списка новостей

$title = 'Новости';

require 'models/News.php';
$newsList = News::getNewsList();// получаем все новости

require 'views/news-list_view.php';