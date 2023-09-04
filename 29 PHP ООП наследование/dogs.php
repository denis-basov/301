<?php

require 'index.php';

$dogs = [$bobik, $belka, $vasilek];
//var_dump($dogs);
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Собаки</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Мои питомцы:</h2>

    <div class="dogs">
        <?php foreach ($dogs as $dog):?>
            <?php $dog->getSummary() ?>
        <?php endforeach;?>
    </div>
</body>
</html>
