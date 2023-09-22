<?php
// вспомогательный класс для проверки данных при регистрации

class SignUp
{
    /**
     * метод для проверки имени
     */
    private static function validateFirstName($firstName){
        $regExp = '/^[А-ЯЁ][а-яё]+$/u';

        if( strlen($firstName) === 0 ){// проверка на пустую строку
            return 'Введите имя';
        }elseif(!preg_match($regExp, $firstName)){// если имя НЕ соответствует
            return 'Только русские буквы от 2 букв. Первая буква заглавная.';
        }
    }

    /**
     * метод для проверки фамилии
     */
    private static function validateLastName($lastName){
        $regExp = '/^[А-ЯЁ][а-яё]+$/u';

        if( strlen($lastName) === 0 ){// проверка на пустую строку
            return 'Введите фамилию';
        }elseif(!preg_match($regExp, $lastName)){// если имя НЕ соответствует
            return 'Только русские буквы от 2 букв. Первая буква заглавная.';
        }
    }

    /**
     * метод для проверки логина
     */
    private static function validateLogin($login){
        $regExp = '/^[a-z][a-z0-9]{2,}$/i';

        if(empty($login)){ // если пусто
            return 'Введите логин';
        }elseif(!preg_match($regExp, $login)){
            return 'Только латинские буквы и цифры от 3 знаков, без спецсимволов. И первая буква';
        }

        // проверка логина по БД на уникальность
        $rowCount = Users::checkLoginUnique($login);

        if($rowCount){// если есть хоть одна строка в БД
            return 'Такой логин уже занят';
        }
    }

    /**
     * метод для проверки емейла
     */
    private static function validateEmail($email){
        $regExp = '/^.+@.+\..+$/';

        if(empty($email)){
            return 'Введите адес электронной почты';
        }elseif(!preg_match($regExp, $email)){
            return 'Адрес электронной почты введен в неверном формате';
        }

        // проверка емейла по БД
        $rowCount = Users::checkEmailUnique($email);

        if($rowCount){// если есть хоть одна строка в БД
            return 'Такой адрес электронной почты уже зарегистрирован';
        }
    }

    /**
     * метод для проверки пароля
     */
    private static function validatePassword($password){
        $regExp = '/^.{6,}$/';

        if(empty($password)){
            return 'Введите пароль';
        }elseif(!preg_match($regExp, $password)){
            return 'Не менее шести произвольных символов';
        }
    }

    /**
     * метод для проверки картинки
     */
    private static function validateImage($image){
        $allowedSize = 2097152;// максимально допустимый вес картинки - 2 Мегабайта
        $allowedExtensions = ['image/jpeg', 'image/png', 'image/gif'];// массив разрешенных форматов картинок

        if($image['size'] === 0){// если размер 0, то картинку не приложили
            return 'Выберите фотографию профиля';
        }elseif ($image['size'] > $allowedSize){ // если картинка более 2Мб
            return 'Размер фото не должен быть более 2 Мегабайт';
        }elseif( !in_array($image['type'], $allowedExtensions) ){ // если в массиве нет полученного типа файла
            return 'Только картинки в форматах jpeg, png, gif';
        }
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


        /**
         * проверка имени
         */
        $firstNameError = self::validateFirstName($input['firstName']);
        if($firstNameError){// если обнаружена ошибка при вводе
            $errors['firstName'] = $firstNameError;
        }

        /**
         * проверка фамилии
         */
        $lastNameError = self::validateLastName($input['lastName']);
        if($lastNameError){
            $errors['lastName'] = $lastNameError;
        }

        /**
         * проверка логина
         */
        $loginError = self::validateLogin($input['login']);
        if($loginError){
            $errors['login'] = $loginError;
        }

        /**
         * проверка емейла
         */
        $emailError = self::validateEmail($input['email']);
        if($emailError){
            $errors['email'] = $emailError;
        }

        /**
         * проверка пароля
         */
        $passwordError = self::validatePassword($input['password']);
        if($passwordError){
            $errors['password'] = $passwordError;
        }

        /**
         * проверка картинки
         */
        $imageError = self::validateImage($input['image']);
        if($imageError){
            $errors['image'] = $imageError;
        }

        return [$errors, $input];
    }

    /**
     * метод для сохранения картинки при успешной проверке
     */
    private static function saveImage($image){
        // создаем путь, куда будем сохранять картинку
        $imagePath = 'template/images/users/'.time().'_'.$image['name'];

        move_uploaded_file($image['tmp_name'], $imagePath);// перемещаем картинку

        return $imagePath;
    }

    /**
     * метод для сохранения данных
     */
    public static function processForm($input){
        $input['image'] = self::saveImage($input['image']); // перемещаем картинку

        $input['password'] = password_hash($input['password'], PASSWORD_DEFAULT);// шифруем пароль

        // сохранение данных о новом пользователе в БД и получаем его ID
        $input['userId'] = Users::addNewUser($input);

        // начинаем сессию и записываем в нее данные пользователя
        session_start();
        $_SESSION['userId'] = $input['userId'];
        $_SESSION['validUser'] = $input['login'];
        $_SESSION['firstName'] = $input['firstName'];

        // перенаправляю на главную
        header('Location: /');

    }



}