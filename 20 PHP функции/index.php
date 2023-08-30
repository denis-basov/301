<?php
// функции

$fruits = ["Киви", "Ананас", "Кокос", "Апельсин", "Банан", "Яблоко"];

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

function debug($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
}
// debug($fruits);
// print_r($users);
// debug($users);

$firstName = 'Анна';

// function sayHello($name)
// {
//     echo "Привет, $name";
// }

// sayHello($firstName);


//debug($GLOBALS);

// function sayHello()
// {
//     $firstName = $GLOBALS['firstName'];
//     echo "Привет, " . $firstName;
// }

// sayHello();

// function getSum($num1, $num2)
// {
//     return $num1 + $num2;
// }

// $res1 = getSum(4, 6);
// $res2 = getSum(5, 1);

// echo $res1;
// echo $res2;

// debug($_SERVER);
