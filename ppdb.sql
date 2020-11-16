-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 16 2020 г., 10:47
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
-- Структура таблицы `pins`
--

CREATE TABLE `pins` (
  `id_pin` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(50) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL,
  `commentaries` text NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `pins`
--

INSERT INTO `pins` (`id_pin`, `id_user`, `photo`, `video`, `commentaries`, `latitude`, `longitude`, `date`) VALUES
(1, 'den', '/den/photo/000.jpg', '', 'test comments', 45.0732, 41.8971, '2020-11-16 09:30:57'),
(2, 'den', 'C:xampphtdocswwwpinpointcontroller/../usersFolders/den/pict/20122705172238.jpeg', '', '', 45.0718, 41.8954, '2020-11-16 09:36:47'),
(3, 'den', 'C:xampphtdocswwwpinpointcontroller/../usersFolders/den/pict/20122705172238.jpeg', '', '', 45.0378, 41.9515, '2020-11-16 09:36:59'),
(4, 'den', 'C:xampphtdocswwwpinpointcontroller/../usersFolders/den/pict/04.jpg', '', 'тестовое добавление данных в БД', 45.0401, 41.9073, '2020-11-16 09:41:33'),
(5, 'freeAlex', 'C:xampphtdocswwwpinpointcontroller/../usersFolders/freeAlex/pict/06.jpg', '', 'комменты к первой фото от фриалекс', 45.0504, 41.9017, '2020-11-16 09:43:24'),
(6, 'freeAlex', 'C:xampphtdocswwwpinpointcontroller/../usersFolders/freeAlex/pict/07.jpg', '', 'Здесь классную свинину делают!\r\nВсем рекомендую )))', 45.0396, 41.9457, '2020-11-16 09:45:05'),
(7, 'arcUc', 'C:xampphtdocswwwpinpointcontroller/../usersFolders/arcUc/pict/05.jpg', '', 'Я аркадий укупник, приглашаю всех на свой концерт!!!!', 45.0431, 41.9657, '2020-11-16 09:46:38');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `firstname`, `lastname`, `login`, `password`) VALUES
(5, 'Аркадий', 'Укупник', 'arcUc', '$2y$10$hKQu1Jz60Fxd5eCb8i2w4e1PJTtMHf/I5X4yEFTER1EhhCRLcaVEi'),
(6, 'Александр', 'Лукашенко', 'AlexLOOK', '$2y$10$XukrP4iGzMT822Qn8F2qmuzABoiRFJ9eSvwjLKGA83xXJQnPM3m9m'),
(7, 'Денис', 'Белоцерковцев', 'den', '$2y$10$1BKt6lIfI/i8Jbpqt2tPsetey2DfrHFsjRnjVsdQF.zN1PBUnSGbO'),
(8, 'Alex', 'Freedman', 'freeAlex', '$2y$10$Lr0WynYjhY4Se0AANwneC.YJLqdAxvwveQeAg6.KkwBj6jE6nWw.W');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `pins`
--
ALTER TABLE `pins`
  ADD PRIMARY KEY (`id_pin`),
  ADD UNIQUE KEY `id_pin` (`id_pin`),
  ADD KEY `id_user` (`id_user`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`),
  ADD UNIQUE KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `pins`
--
ALTER TABLE `pins`
  MODIFY `id_pin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
