<?php
session_start();

// удаляем данные сессии
//unset($_SESSION['firstName']);
//unset($_SESSION['lastName']);
session_unset();

// перенаправляем на главную
header('Location: /');