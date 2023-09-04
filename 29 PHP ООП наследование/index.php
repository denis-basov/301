<?php
// ООП

// Класс - шаблон, каркас для создания объектов
// Объект - экземпляр класса
// Свойство - переменная, объявленная в классе
// Методы - функции, объявленные в классе
// модификаторы доступа: public, private, protected
// $this - указатель на текущий объект
// parent::__construct - вызов конструктора родительского класса

/**
 * Class Dogs - родительский класс
 */
class Dogs{
    // свойства
    protected $name;
    public $age;
    public $weight;
    public $color;

    // конструктор
    public function __construct($name, $age, $weight, $color){
        $this->name = $name;
        $this->age = $age;
        $this->weight = $weight;
        $this->color = $color;
    }

    public function getName(){
        echo "<h2>Кличка: $this->name</h2>";
    }

    // отображение информации о собаке
    public function getSummary(){
        echo <<<HTML
            <div class="dog">
                <h2>Кличка: $this->name</h2>
                <p>Возраст: $this->age</p>
                <p>Вес: $this->weight</p>
                <p>Цвет шерсти: $this->color</p>
            </div>
HTML;
    }
}
$bobik = new Dogs('Бобик', 2, 8, 'Рыжий');
//$bobik->getSummary();

//$bobik->name = 'Шарик';
//echo $bobik->name;


/**
 * Class RaceDogs - дочерний класс гончих собак, наследник класса Dogs
 */
class RaceDogs extends Dogs{
    // свойства
    public $speed; // уникальное свойство, доступное только классу гончих собак

    // конструктор
    public function __construct($name, $age, $weight, $color, $speed){
        // вызываем конструктор родителького КЛАССА
        parent::__construct($name, $age, $weight, $color);
        $this->speed = $speed;
    }

    // отображение информации о собаке
    public function getSummary(){
        echo <<<HTML
            <div class="dog race-dog">
                <h2>Кличка: $this->name</h2>
                <p>Возраст: $this->age</p>
                <p>Цвет шерсти: $this->color</p>
                <p>Скорость преследования: $this->speed</p>
            </div>
HTML;
    }
}
$belka = new RaceDogs('Белка', 5, 4, 'Черный', 200);
//$belka->getSummary();


/**
 * Class ExDogs - дочерний класс выставочных собак, наследник класса Dogs
 */
class ExDogs extends Dogs{
    public $breed;

    // конструктор
    public function __construct($name, $age, $weight, $color, $breed){
        // вызываем конструктор родителького КЛАССА
        parent::__construct($name, $age, $weight, $color);
        $this->breed = $breed;
    }

    // отображение информации о собаке
    public function getSummary(){
        echo <<<HTML
            <div class="dog ex-dog">
                <h2>Кличка: $this->name</h2>
                <p>Вес: $this->weight</p>
                <p>Цвет шерсти: $this->color</p>
                <p>Порода: $this->breed</p>
            </div>
HTML;
    }
}
$vasilek = new ExDogs('Василек', 7, 15, 'Коричневый', 'Пудель');
//$vasilek->getSummary();
