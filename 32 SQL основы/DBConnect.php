<?php
// имя БД - 208_users
// адрес сервера БД
// логин пользователя
// пароль пользоват
// статические свойства и методы - обращенение без создания объекта
// self:: - обращение в контексте класса (ссылка на текущий класс)

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
        return new PDO(self::getDSN(), self::$dbLogin, self::$dbPassword);
    }
}


//echo DBConnect::$dbName;
//echo DBConnect::getDSN();

//
//class DSN_add
//{
//    private static $dbHost = 'localhost';
//    private static $dbPort = 3535;
//    private static $dbLogin = 'pupkin';
//    private static $dbPass = '********';
//    private static $dbName = 'kurses';
//
//    public static function getDNS(){
//        return 'mysql:dbName='.self::$dbName.';host='.self::$dbHost.';port='.self::$dbPort;
//    }
//
//    public static function getConnection(){
//        return new PDO(self::getDNS(), self::$dbLogin, self::$dbPass);
//    }
//}
