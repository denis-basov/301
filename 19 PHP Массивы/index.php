<?php
// массивы

//$numbers = array(4,5,8,4,2,5,7,9);
$numbers = [4,5,8,4,2,5,7,9];
$fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
$pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
$animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
//print_r($numbers);

//echo count($animals);

//echo '<h2>' . $animals[0] . ' ' . $animals[4] . '</h2>';
//echo "<h2>$animals[0] $animals[4]</h2>";

// $output = "<h2>$animals[0] $animals[4]</h2>";

// копирование массива
//$newFruits = $fruits;
//array_push($newFruits, 'Гранат');
//print_r($fruits);
//print_r($newFruits);

// ссылка
//$newFruits = &$fruits;
//array_push($newFruits, 'Гранат');
//print_r($fruits);
//print_r($newFruits);

// ассоциативные массивы
//$user = ['firstName' => 'Ivan', 'lastName' => 'Ivanov'];// ассоциативный массив
// let user = {firstName: 'Ivan', lastName: 'Ivanov'}; // JS объект

$user = ['firstName' => 'Ivan', 'lastName' => 'Ivanov', 'age' => 33, 'avatar' => 'user.jpg'];

//echo $user['age'] . ' ' . $user['firstName'] . ' ' . $user['lastName'] ;
//echo '<h2>Имя: ' . $user['firstName'] . ' Фамилия: ' . $user['lastName'] . ' возраст: ' . $user['age'] . '</h2>';
//echo "<h2>Имя: $user[firstName] Фамилия: $user[lastName] возраст: $user[age]</h2>";
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="user">
        <img src="<?= $user['avatar']?>" alt="<?= $user['firstName']?> <?= $user['lastName']?>">
        <h2><?= $user['firstName']?> <?= $user['lastName']?></h2>
        <p>Возраст: <?= $user['age']?></p>
    </div>

    <p><?= date('Y')?></p>
</body>
</html>
