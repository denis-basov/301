-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Сен 12 2023 г., 12:28
-- Версия сервера: 10.4.28-MariaDB
-- Версия PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `301_books`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `avatar` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `login`, `email`, `password`, `avatar`) VALUES
(2, 'Петр', 'Сидоров', 'sidorov999', 'sidorov222@test.com', 'asdqawr4534t', 'images/dafault.jpg'),
(3, 'Анна', 'Иванова', 'anna333', 'anna333@test.ru', '$2y$10$BpcjDumRM5uknFzszf3e0ukhIs5.5pTr4Ohl6aYmo6A0e89YmUx0i', 'images/1694500656_christopher-campbell-rDEOVtE7vOs-unsplash (1).jpg'),
(12, 'Ирина', 'Петрова', 'petrovaIrana111', 'petrovaIrana111@test.ru', '$2y$10$9gEKhtqP/ayT7LzbNjiOkelchPHo4XekCnJSUIR9HG0APIHp2415a', 'images/1694503667_kelly-sikkema-JN0SUcTOig0-unsplash (2).jpg'),
(13, 'Сергей', 'Петров', 'petrov333', 'petrov333@test.yy', '$2y$10$Jlw1K14Kr7C8mdr7SrMlEei1d9/F9qu4cXi6jan3vEwA1PKkD0DMS', 'images/1694506260_ethan-hoover-0YHIlxeCuhg-unsplash.jpg');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
