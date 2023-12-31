<?php
// модель для работы с таблицей комментариев
require_once 'DBConnect.php';

class Comments
{
    /**
     * получение комментариев конкретной новости по ID новости
     */
    public static function getCommentsByNewsId($newsId){
        $pdo = DBConnect::getConnection();

        $query = "SELECT comment, comments.add_date, users.id AS user_id, first_name, last_name, image
                    FROM comments, users
                    WHERE user_id = users.id
                    AND news_id = ?
                    AND approved = 1
                    ORDER BY comments.add_date DESC;";
        $statement = $pdo->prepare($query);
        $statement->execute([$newsId]);
        return $statement->fetchAll();
    }

    /**
     * метод для добавление нового комментария к новости
     */
    public static function addNewCommentToNewsItem($comment, $newsId, $userId){
        $pdo = DBConnect::getConnection();

        $query = "INSERT INTO comments(comment, news_id, user_id)
                    VALUES(?,?,?);";
        $statement = $pdo->prepare($query);
        $statement->execute([$comment, $newsId, $userId]);
    }

    /**
     * метод для получения комментариев по ID пользователя
     */
    public static function getCommentsByUserId($userId){
        $pdo = DBConnect::getConnection();

        $query = "SELECT comment, news_id, comments.add_date, title AS newsTitle
                    FROM comments, news
                    WHERE news_id = news.id
                    AND user_id = ?";
        $statement = $pdo->prepare($query);
        $statement->execute([$userId]);
        return $statement->fetchAll();
    }
}