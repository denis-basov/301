<?php
require 'DBConnect.php';
$pdo = DBConnect::getConnection();
print_r($pdo);

// CRUD
// CREATE, READ, UPDATE, DELETE

// CREATE - создание БД, таблицы
// SELECT - получение данных из таблиц(ы)
// UPDATE - обновление существующих данных в таблице
// INSERT - вставка новых данных в таблицу
// ALTER - изменение таблицы
// DELETE - удаление данных из таблицы
// DROP - удаление таблицы, бд

/**
CREATE TABLE books(
    id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
    title VARCHAR(255) NOT NULL,
    description VARCHAR(255) NOT NULL,
    authorId INT NOT NULL,
    categoryId INT NOT NULL,
    FOREIGN KEY(authorId) REFERENCES authors(id),
    FOREIGN KEY(categoryId) REFERENCES categories(id)
);
 */
// xMind
