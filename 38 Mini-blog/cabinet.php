<?php
// контроллер лк пользователя
session_start();

require 'models/Users.php'; // класс для работы с табл users
require 'models/Comments.php'; // класс для работы с табл Comments

if(!isset($_SESSION['validUser'])){// если не авторизован, переносим на главную
    header('Location: /');
}

// получаем данные о пользователе
$userInfo = Users::getUserInfo((int)$_SESSION['userId']);

// получаем данные о комментариях пользователя
$userComments = Comments::getCommentsByUserId((int)$_SESSION['userId']);
print_r($userComments);
$countUserComments = count($userComments);

require 'views/cabinet_view.php';

