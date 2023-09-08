<?php

require 'DBConnect.php';
$pdo = DBConnect::getConnection();

$query = "SELECT books.id AS bookId, title, description, authors.id AS authorId, firstName, lastName
            FROM books, authors
            WHERE authorId = authors.id;";

$statement = $pdo->query($query);
$books = $statement->fetchAll();

/*
$book = ['bookId' => 11, 'title' => 'Кавказский пленник'];
array_push($data, $book);
print_r($data);
*/

// кодируем в JSON и отдаем в ответ
echo json_encode($books);

