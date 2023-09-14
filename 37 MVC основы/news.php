<?php
// контроллер для вывода новостей списком

require 'models/News.php'; // подключаем модель News

$newsList = News::getNewsList();// получаем список новостей от модели

require 'views/news_view.php'; // подключаем вид
