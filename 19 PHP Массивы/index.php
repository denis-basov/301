<?php
// массивы

//$numbers = array(4,5,8,4,2,5,7,9);
$numbers = [4, 5, 8, 4, 2, 5, 7, 9];
$fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];
$pets = ["cat", "dog", "bat", "mouse", "pig", "goat", "sheep", "cow", "chicken"];
$animals = ["ant", "bison", "camel", "duck", "elephant", "cat", "dog"];
//print_r($numbers);


//$animals[] = 'tiger'; // добавление элемента в массив
// print_r($animals);
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

$user = [
    'firstName' => 'Ivan',
    'lastName' => 'Ivanov',
    'age' => 33,
    'avatar' => 'user.jpg',
    'phones' => ['01', '02', '03', '04']
];

//echo $user['age'] . ' ' . $user['firstName'] . ' ' . $user['lastName'] ;
//echo '<h2>Имя: ' . $user['firstName'] . ' Фамилия: ' . $user['lastName'] . ' возраст: ' . $user['age'] . '</h2>';
//echo "<h2>Имя: $user[firstName] Фамилия: $user[lastName] возраст: $user[age]</h2>";

$student = [
    'firstName' => "Igor",
    'lastName' => "Pronkin",
    'age' => 34,
    'phones' => ['01', '02', '03', '04'],
    'address' => [
        'city' => "Moscow",
        'houseNumber' => 33,
        'street' => "Chertanovskaya",
    ]
];

// $numbers = [1 => 4, 6, 9, 4, 2];
// $numbers['num1'] = 10;
// $numbers['num2'] = 20;

// print_r($numbers);

// $user = [
//     0 => 'Ivan',
//     'firstName' => 'Ivan',
//     1 => 'Ivanov',
//     'lastName' => 'Ivanov',
//     2 => 33,
//     'age' => 33,
// ];
//print_r($user);

// массив массивов
$users = [
    [
        'fName' => "Иван",
        'lName' => "Иванов",
        'hobbies' => ["Спать", "Гулять", "Читать"],
    ],
    [
        'fName' => "Анна",
        'lName' => "Иванова",
        'hobbies' => ["Спать", "Читать"],
    ],
    [
        'fName' => "Ирина",
        'lName' => "Сидорова",
        'hobbies' => ["Гулять", "Читать"],
    ],
];
//print_r($users);
// users.forEach((user) => console.log(`Имя: ${user.fName}. Фамилия: ${user.lName}`));

// for
// for ($i = 0; $i < 10; $i++) {
//     echo "<p>$i</p>";
// }
// while
// $i = 0;
// while ($i < 10) {
//     echo "<p>$i</p>";
//     $i++;
// }
// foreach
// foreach ($fruits as $fruit) {
//     echo "<p>$fruit</p>";
// }

// foreach ($user as $el) {
//     echo "<h2>$el</h2>";
// };

// foreach ($user as $userEl) {
//     echo "<p>$userEl</p>";
// };

// foreach ($user as $key => $value) {
//     echo "<h3>$key: $value</h3>";
// }

// Выводим массив с помощью цикла foreach
// foreach ($user as $key => $value) {
//     if (is_array($value)) {
//         echo "<h3>" . $key . "</h3>";
//         foreach ($value as $subKey => $subValue) {
//             echo "<p>" . $subKey . ": " . $subValue . "</p>";
//         }
//     } else {
//         echo "<h3>" . $key . ": " . $value . "</h3>";
//     }
// }

// foreach ($user as $key => $value) {
//     if ($key === 'phones') {
//         echo "<h3>$key: " . implode(', ', $value) . "</h3>";
//     } else {
//         echo "<h3>$key: $value</h3>";
//     }
// }
// $age = 11;
// if ($age >= 21) {
//     echo 'Входи';
// } elseif ($age >= 18) {
//     echo 'Входи, но ничего не трогай';
// } else {
//     echo 'Доступ запрещен';
// }

$title = 'Массивы';

require 'index_tpl.php';
