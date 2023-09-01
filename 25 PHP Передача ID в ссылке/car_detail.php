<?php
// страница детального просмотра одного авто
$cars = require 'data.php';

//echo "<h1>Страница детального просмотра авто ID: $_GET[carId]</h1>";

// получаем ID из массива гет и приводим к целому числу
$id = (int)$_GET['carId'];

// если значение поменяли на некорректное (строка)
if(!$id){
    //die('Неправильное значение ID');
    // перенаправляем клиента на страницу с ошибкой
    header('Location: error.html');
}
//var_dump($id);

// получаем по ID массив с авто
//$car = $cars[$id-1];

$car = null; // объявляем переменную для авто
foreach($cars as $value){
    // если ID текущего элемента массива равно полученному ID из массива GET
    if($value['id'] === $id){
        // кладем в переменную с авто текущий элемент массива
        $car = $value;
        break;
    }
}
// если авто не найден
if(!$car){
    header('Location: error.html');
}
//print_r($car);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=$car['maker'].' '.$car['model']?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="car-item">
        <img src="<?=$car['image']?>" alt="<?=$car['maker'].' '.$car['model']?>">
        <div class="car-info">
            <h2><?=$car['maker'].' '.$car['model']?></h2>
            <p>Год выпуска: <span><?=$car['made_year']?></span></p>
            <p>Максимальная скорость: <span><?=$car['top_speed']?> км/ч</span></p>
            <p>Разгон до 100 км/ч: <span><?=$car['acceleration_to_100']?> с</span></p>
            <p>Мощность: <span><?=$car['power']?> л/с</span></p>
            <p>Масса: <span><?=$car['weight']?> кг</span></p>
            <a href="/">К списку авто</a>
        </div>
    </div>
</body>
</html>
