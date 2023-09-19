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
                    ORDER BY comments.add_date DESC;";
        $statement = $pdo->prepare($query);
        $statement->execute([$newsId]);
        return $statement->fetchAll();
    }
}