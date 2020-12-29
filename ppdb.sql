-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 29 2020 г., 06:48
-- Версия сервера: 10.4.11-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `ppdb`
--

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id_messages` bigint(20) UNSIGNED NOT NULL,
  `id_frommsg` varchar(255) NOT NULL,
  `id_tomsg` varchar(255) NOT NULL,
  `messag` text NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id_messages`, `id_frommsg`, `id_tomsg`, `messag`, `date`) VALUES
(3, 'den', 'arcUc', 'привет', '2020-12-26 19:09:24'),
(4, 'den', 'push', 'даровте, как ваши ничего????', '2020-12-26 19:11:02'),
(5, 'den', 'freeAlex', 'алекс, проверка даты', '2020-12-26 19:11:56'),
(6, 'den', 'AlexLOOK', 'фывфыв', '2020-12-27 06:27:49'),
(7, 'den', 'freeAlex', 'ghjgh', '2020-12-27 06:28:11'),
(8, 'den', 'freeAlex', 'ghjgh', '2020-12-27 06:38:51'),
(9, 'push', 'den', 'fgfgh', '2020-12-27 06:48:48'),
(10, 'freeAlex', 'den', 'привет', '2020-12-27 06:49:18'),
(11, 'freeAlex', 'arcUc', 'фывфыв', '2020-12-27 06:49:24'),
(12, 'arcUc', 'AlexLOOK', 'фывфывфвыфвы', '2020-12-27 06:51:16'),
(13, 'AlexLOOK', 'den', 'asdasd', '2020-12-27 06:51:40'),
(14, 'freeAlex', 'arcUc', 'fgfgh', '2020-12-27 06:51:59'),
(15, 'freeAlex', 'AlexLOOK', 'asdasd', '2020-12-27 06:52:06'),
(16, 'freeAlex', 'arcUc', 'фывфыв', '2020-12-27 06:52:14'),
(17, 'push', 'den', 'фывфывфвыфвы', '2020-12-27 06:52:34'),
(18, 'den', 'arcUc', 'привет', '2020-12-28 05:38:27'),
(19, 'den', 'arcUc', 'ghjgh', '2020-12-28 13:50:43'),
(20, 'den', 'push', 'gei vb', '2020-12-28 13:51:27'),
(21, 'den', 'push', 'пушпуш !', '2020-12-29 05:47:47');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id_messages`),
  ADD UNIQUE KEY `id_messages` (`id_messages`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id_messages` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
