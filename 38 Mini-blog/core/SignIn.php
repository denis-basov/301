<?php
// вспомогательный класс для проверки данных при входе на сайт

class SignIn
{
    /**
     * метод для проверки логина
     */
    private static function validateLogin($login){
        if(empty($login)){
            return 'Введите логин';
        }

        // проверка по БД
        $rowCount = Users::checkLoginUnique($login);
        if($rowCount === 0){// если совпадений логинов нет
            return 'Указанный логин не зарегистрирован';
        }
    }

    /**
     * метод для проверки пароля
     */
    private static function validatePassword($password, $login){
        if(empty($password)){
            return 'Введите пароль';
        }

        // получаем пароль текущего пользователя
        $passwordDB = Users::getPasswordByLogin($login);

        // сравниваем пароли
        if( !password_verify($password, $passwordDB) ){// если пароли НЕ совпадают
            return 'Пароль неверен';
        }
    }



    /**
     * метод для проверкаи данных формы
     */
    public static function validateForm(){
        $errors = [];
        $input = [];

        $input['login'] = htmlspecialchars(trim($_POST['login']));
        $input['password'] = htmlspecialchars(trim($_POST['password']));

        /**
         * проверка логина и пароля
         */
        $loginError = self::validateLogin($input['login']);
        if($loginError){// если логин введен неверно
            $errors['login'] = $loginError;// записываем в массив с ошибками ошибку
        }else{// если логин введен верно, проверяем пароль
            $passwordError = self::validatePassword($input['password'], $input['login']);
            if($passwordError){
                $errors['password'] = $passwordError;
            }
        }

        return [$errors, $input];
    }


    /**
     * метод обработки данных при успешной проверке
     */
    public static function processForm($input){
        // получаем необходимые для сессии данные о пользователе
        $userInfo = Users::getUserInfoSession($input['login']);

        // записываем данные в сессию
        session_start();
        $_SESSION['userId'] = $userInfo['id'];
        $_SESSION['validUser'] = $input['login'];
        $_SESSION['firstName'] = $userInfo['first_name'];

        // перенаправляю на главную
        header('Location: /');
    }

}