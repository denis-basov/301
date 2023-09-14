<?php
// модель для работы с таблицей новостей

require 'DBConnect.php';

class News
{
    /**
     * метод для получения списка новостей
     */
     public static function getNewsList(){
         $pdo = DBConnect::getConnection();

         $query = "SELECT news.id AS newsId, news.title, add_date, image,
            authors.id AS authorId, first_name, last_name,
            translation AS category, class_name AS category_class_name
            FROM news, authors, category
            WHERE author_id = authors.id AND
            category_id = category.id
            ORDER BY add_date DESC;";
         $statement = $pdo->query($query);
         return $statement->fetchAll();
     }

     /**
      * метод получения одной новости по ID
      */
     public static function getNewsItemById($id){
         $pdo = DBConnect::getConnection();

         $query = "SELECT news.title, text, add_date, image,
            authors.id AS authorId, first_name, last_name, short_info, avatar,
            translation AS category, class_name AS category_class_name
            FROM news, authors, category
            WHERE author_id = authors.id AND
            category_id = category.id AND
            news.id = $id;";
         $statement = $pdo->query($query);
         return $statement->fetch();
     }

}