<?php
// контроллер главной страницы

$title = 'Главная страница';
$limit = 9; // кол-во выбираемых новостей из БД для отображения на главной

require 'models/News.php';
$newsList = News::getLimitNewsList($limit);// получаем новости из бд в количестве 9 шт

require 'views/index_view.php';