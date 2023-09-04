<?php
// ООП

// Класс - шаблон, каркас для создания объектов
// Объект - экземпляр класса
// Свойство - переменная, объявленная в классе
// Методы - функции, объявленные в классе

// модификаторы доступа: public, private, protected

// создание класса
class Cars{
    // свойства
    public $maker;
    public $model;
    public $color;
    public $weight;

    // методы
    public function sayHello(){
        echo "<h2>Hello, user</h2>";
    }

    public function getInfo(){
        echo "<h2>Производитель: " . $this->maker . ". Модель: " . $this->model . "</h2>";
    }

    // метод, который вызывается при создании объекта
    public function __construct($makerPar, $modelPar, $colorPar, $weightPar){
        $this->maker = $makerPar;
        $this->model = $modelPar;
        $this->color = $colorPar;
        $this->weight = $weightPar;
    }

}

// создаем объект (экземпляр) класса Cars
$car1 = new Cars('Honda', 'Accord', 'Blue', 1500);
$car2 = new Cars('Vaz', '2101', 'Red', 1200);

// задаем значения свойствам
//$car1->maker = 'Honda';
//$car1->model = 'Accord';
//$car1->color = 'Blue';
//$car1->weight = 1500;
//
//$car2->maker = 'Vaz';
//$car2->model = '2101';

print_r($car1);
print_r($car2);

// вызываем методы
//$car1->sayHello();
//$car2->sayHello();
$car1->getInfo();
$car2->getInfo();
