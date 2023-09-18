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
        // получаем список новостей
        $newsList = $pdo->query($query)->fetchAll();

        // получаем количество новостей в таблице
        $query = "SELECT COUNT(*) AS count
                  FROM news;";
        $count = $pdo->query($query)->fetch()["count"];

        // возвращаем массив с новостями и количеством
        return ["newsList" => $newsList, "newsCount" => $count];
    }

    /**
     * метод для получения данных об одной новости по ID
     */
    public static function getNewsItemById($newsId){
        $pdo = DBConnect::getConnection();

        $query = "SELECT news.id AS newsId, news.title AS newsTitle, text, add_date, image,
                    authors.id AS authorId, first_name, last_name, avatar, short_info,
                    category.id AS categoryId,  translation AS category, class_name AS category_class_name
                  FROM news, authors, category
                  WHERE author_id = authors.id AND 
                  category_id = category.id AND
                  news.id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$newsId]);
        return $statement->fetch();
    }

    /**
     * получение нескольких новостей по ID категории
     */
    public static function getLimitNewsListByCategoryId($categoryId, $limit){
        $pdo = DBConnect::getConnection();

        $query = "SELECT id, title, add_date, image
                  FROM news
                  WHERE category_id = :category_id AND 
                        id != 'id текущей новости'
                  ORDER BY rand()
                  LIMIT :limit;";

        $statement = $pdo->prepare($query);
        $statement->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
        $statement->bindParam(':limit', $limit, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll();
    }
}
