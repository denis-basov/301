<?php
// страница просмотра списка авто

$cars = require 'data.php';

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Мой автопарк</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="cars">
        <?php foreach ($cars as $key => $car):?>
            <div class="car car-<?=$key+1?>">
                <a href="car_detail.php?carId=<?=$car['id']?>">
                    <img src="<?=$car['image']?>" alt="<?=$car['maker'].' '.$car['model']?>">
                </a>
                <h2>Производитель: <?=$car['maker']?>, Модель: <?=$car['model']?></h2>
                <h3>ID: <?=$car['id']?></h3>
                <a href="car_detail.php?carId=<?=$car['id']?>">Подробнее...</a>
            </div>
        <?php endforeach;?>
    </div>
</body>
</html>
