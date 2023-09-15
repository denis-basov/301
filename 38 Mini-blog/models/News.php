<?php
// модель для работы с новостями
require 'DBConnect.php';

class News
{

    /**
     * метод для получения новостей для главной страницы
     */
    public static function getLimitNewsList($limit){
        $pdo = DBConnect::getConnection();

        // картинка новости, категория, цвет категории, заголовок, картинка автора
        // имя, фамилия автора, дата публикации, текст новости
        $query = "SELECT news.id AS newsId, news.title AS newsTitle, text, add_date, image,
                    authors.id AS authorId, first_name, last_name, avatar,
                    translation AS category, class_name AS category_class_name
                  FROM news, authors, category
                  WHERE author_id = authors.id AND 
                  category_id = category.id
                  ORDER BY rand()
                  LIMIT :limit;";
        $statement = $pdo->prepare($query);
        $statement->bindParam(':limit', $limit, PDO::PARAM_INT);// задаем явно, что наш параметр это ЧИСЛО
        $statement->execute();
        return $statement->fetchAll();
    }

    /**
     * метод для получения полного списка новостей
     */
    public static function getNewsList(){
        $pdo = DBConnect::getConnection();

        $query = "SELECT news.id AS newsId, news.title AS newsTitle, text, add_date, image,
                    authors.id AS authorId, first_name, last_name, avatar,
                    translation AS category, class_name AS category_class_name
                  FROM news, authors, category
                  WHERE author_id = authors.id AND 
                  category_id = category.id
                  ORDER BY add_date DESC";
        return $pdo->query($query)->fetchAll();
    }

    /**
     * метод для получения новостей для подгрузки
     */
    public static function getMoreNews($start, $limit){
        $pdo = DBConnect::getConnection();

        $query = "SELECT news.id AS newsId, news.title AS newsTitle, text, add_date, image,
                    authors.id AS authorId, first_name, last_name, avatar,
                    translation AS category, class_name AS category_class_name
                  FROM news, authors, category
                  WHERE author_id = authors.id AND 
                  category_id = category.id
                  ORDER BY add_date DESC 
                  LIMIT $start, $limit;";
        return $pdo->query($query)->fetchAll();
    }
}