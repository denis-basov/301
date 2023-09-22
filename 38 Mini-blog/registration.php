<?php
// контроллер страницы регистрации клиентов

require 'models/Users.php'; // класс для работы с табл users
require 'core/SignUp.php'; // класс для проверки данных

$title = "Регистрация";


if($_SERVER['REQUEST_METHOD'] === 'POST'){// если форма отправлена
    // проверяем данные
    list($errors, $input) = SignUp::validateForm();
//    print_r($errors); print_r($input);

    if($errors){ // если ошибки есть
        // показываем форму снова
        require 'views/registration_view.php';
    }else{ // если ошибок нет
        // сохраняем данные
        SignUp::processForm($input);
    }

}else{// если страница загружена впервые
    // отображаем форму
    require 'views/registration_view.php';
}



