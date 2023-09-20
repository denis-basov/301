<?php
// вспомогательный класс для проверки данных при регистрации

class SignUp
{
    /**
     * метод для проверки имени
     */
    private static function validateFirstName($firstName){
        $regExp = '/^[а-яё]{2,}$/ui';
    }


    /**
     * метод для проверки всех данных формы регистрации
     */
    public static function validateForm(){
        // объявляем массивы для ошибок и введенных данных
        $errors = [];
        $input = [];

        // экранируем данные и обрезаем конечные пробелы
        $input['firstName'] = htmlspecialchars(trim($_POST['firstName']));
        $input['lastName'] = htmlspecialchars(trim($_POST['lastName']));
        $input['login'] = htmlspecialchars(trim($_POST['login']));
        $input['email'] = htmlspecialchars(trim($_POST['email']));
        $input['password'] = htmlspecialchars(trim($_POST['password']));
        $input['image'] = $_FILES['image'];
        print_r($input);

        /**
         * проверка имени
         */
        $firstNameError = self::validateFirstName($input['firstName']);



        return [$errors, $input];
    }
}