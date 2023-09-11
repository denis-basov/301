<?php


class DBConnect
{
    // статические свойства
    private static $dbName = '301_books';
    private static $dbHost = 'localhost';
    private static $dbLogin = 'root';
    private static $dbPassword = '';

    // метод для формирования DSN
    private static function getDSN(){
        return 'mysql:dbname='.self::$dbName.';host='.self::$dbHost.';port=3306';
    }

    // метод для получения объекта соединения с БД
    public static function getConnection(){
        return new PDO(self::getDSN(), self::$dbLogin, self::$dbPassword, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        ]);
    }
}