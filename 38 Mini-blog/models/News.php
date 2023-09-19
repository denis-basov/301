<?php
// модель для работы с новостями
require_once 'DBConnect.php';

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
     * получение нескольких новостей по ID категории исключая новость по ID
     */
    public static function getLimitNewsListByCategoryId($categoryId, $limit, $newsId){
        $pdo = DBConnect::getConnection();

        $query = "SELECT id, title, add_date, image
                  FROM news
                  WHERE category_id = :category_id 
                    AND id != :newsId
                  ORDER BY rand()
                  LIMIT :limit;";

        $statement = $pdo->prepare($query);
        $statement->bindParam(':category_id', $categoryId, PDO::PARAM_INT);
        $statement->bindParam(':newsId', $newsId, PDO::PARAM_INT);
        $statement->bindParam(':limit', $limit, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll();
    }

    /**
     * Метод для получения количества новостей по каждой категории
     */
    public static function getNewsCountByCategories(){
        $pdo = DBConnect::getConnection();

        $query = "SELECT category_id, translation AS category, COUNT(news.id) AS count
                    FROM news, category
                    WHERE category_id = category.id
                    GROUP BY category_id;";
        return $pdo->query($query)->fetchAll();
    }

    /**
     * метод для получения количества новостей по авторам
     */
    public static function getNewsCountByAuthors(){
        $pdo = DBConnect::getConnection();

        $query = "SELECT author_id, first_name, last_name, COUNT(news.id) AS count
                    FROM news, authors
                    WHERE author_id = authors.id
                    GROUP BY author_id;";
        return $pdo->query($query)->fetchAll();
    }

}
