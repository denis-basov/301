<?php
// контроллер лк пользователя
session_start();
print_r($_SESSION);

if(!isset($_SESSION['validUser'])){
    header('Location: /');
}
// получаем данные о пользователе
// получаем данные о комментариях пользователя
// отображаем данные

require 'views/cabinet_view.php';

