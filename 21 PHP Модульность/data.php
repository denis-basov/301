<?php

$cars = [
    [
        'id' => 1, 'maker' => 'Ferrari', 'model' => 'F50', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
        'power' => 517, 'weight' => 1350, 'image' => 'img/ferrarif50.jpg'
    ],
    [
        'id' => 2, 'maker' => 'Lamborghini', 'model' => 'Countach', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
        'power' => 517, 'weight' => 1350, 'image' => 'img/lamborghinicountach.jpg'
    ],
    [
        'id' => 3, 'maker' => 'Koenigsegg', 'model' => 'Agera R', 'made_year' => '1995', 'top_speed' => 325, 'acceleration_to_100' => 4,
        'power' => 517, 'weight' => 1350, 'image' => 'img/koenigsegg.jpg'
    ]
];

function debug($value)
{
    echo '<pre>';
    print_r($value);
    echo '</pre>';
    // die('Вывод дальнейшего кода прекращен!!!');
}
