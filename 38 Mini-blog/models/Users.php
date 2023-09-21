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
}