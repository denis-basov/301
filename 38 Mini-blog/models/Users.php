<?php
// модель для работы с пользователями
require_once 'DBConnect.php';

class Users
{
    /**
     * проверка логина по БД на уникальность при регистрации
     */
    public static function checkLoginUnique($login){
        $pdo = DBConnect::getConnection();

        $query = "SELECT login 
                    FROM users 
                    WHERE login = ?;";
        $statement = $pdo->prepare($query);
        $statement->execute([$login]);

        return $statement->rowCount();// возвращаем кол-во строк при выборке
    }

    /**
     * проверка по бд емейла на уникальность
     */
    public static function checkEmailUnique($email){
        $pdo = DBConnect::getConnection();

        $query = "SELECT email
                    FROM users
                    WHERE email = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$email]);

        return $statement->rowCount();// возвращаем кол-во строк при выборке
    }

    /**
     * добавление нового юзера в бд
     */
    public static function addNewUser($user){
        $pdo = DBConnect::getConnection();

        $query = "INSERT INTO users(login, first_name, last_name, email, password, image)
                    VALUES(?,?,?,?,?,?);";
        $statement = $pdo->prepare($query);
        $statement->execute([$user['login'], $user['firstName'], $user['lastName'],
            $user['email'], $user['password'], $user['image']]);

        return $pdo->lastInsertId(); // получаем ID добавленного в БД пользователя
    }

    /**
     * получение пароля по логину
     */
    public static function getPasswordByLogin($login){
        $pdo = DBConnect::getConnection();

        $query = "SELECT password
                    FROM users
                    WHERE login = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$login]);

        return $statement->fetch()['password'];// возвращаем строку с хешем пароля
    }

    /**
     * получение данных о пользовател для сессии (id, firstName)
     */
    public static function getUserInfoSession($login){
        $pdo = DBConnect::getConnection();

        $query = "SELECT id, first_name
                    FROM users
                    WHERE login = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$login]);

        return $statement->fetch();
    }

    /**
     * метод для получения данных о пользователе для отображения в лк
     */
    public static function getUserInfo($userId){
        $pdo = DBConnect::getConnection();

        $query  = "SELECT id, login, first_name, last_name, email, password, image, add_date, update_date
                    FROM users
                    WHERE id = ?;";
        $statement = $pdo->prepare($query);
        $statement->execute([$userId]);
        return $statement->fetch();
    }

    /**
     * метод для обновления логина
     */
    public static function updateLogin($login, $userId){
        $pdo = DBConnect::getConnection();

        $query = "UPDATE users
                    SET login = ?
                    WHERE id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$login, $userId]);
        $_SESSION['validUser'] = $login;
    }
}