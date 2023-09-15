<?php

// получаем параметры выборки новостей от клиента
$start = (int)$_GET['start'];
$limit = (int)$_GET['limit'];

require '../models/News.php'; // подключаем модель

$data = News::getMoreNews($start, $limit); // вызываем метод модели для получения новостей

echo json_encode($data);// формируем строку в формате JSON и отдаем обратно JS



