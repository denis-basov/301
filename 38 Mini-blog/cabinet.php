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
$countUserComments = count($userComments);

// обработка формы изменения логина
// name="action" value="Обновить логин"
if(isset($_POST['action']) && $_POST['action'] === 'Обновить логин'){
    print_r($_POST);
    $login = htmlspecialchars(trim($_POST['newLogin']));

    Users::updateLogin($login, (int)$_SESSION['userId']);

    header('Location: cabinet.php');
}

require 'views/cabinet_view.php';

