-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 25 2020 г., 20:25
-- Версия сервера: 10.4.14-MariaDB
-- Версия PHP: 7.4.9

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
  `latitude` varchar(10) NOT NULL,
  `longitude` varchar(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `pins`
--

INSERT INTO `pins` (`id_pin`, `id_user`, `photo`, `video`, `commentaries`, `latitude`, `longitude`, `date`) VALUES
(61, 'freeAlex', '../usersFolders/freeAlex/pict/11864631.jpg', '', 'памятник', '45.080191', '41.938526', '2020-11-25 18:48:32'),
(62, 'freeAlex', '../usersFolders/freeAlex/pict/IMG_9238.jpg', '', 'заправка на объездной', '45.031678', '41.928281', '2020-11-25 18:52:12'),
(63, 'freeAlex', '../usersFolders/freeAlex/pict/13251253.jpg', '', 'жд', '45.055231', '41.999396', '2020-11-25 18:53:00'),
(64, 'freeAlex', '../usersFolders/freeAlex/pict/3681443_800.jpg', '', 'камсак', '45.050167', '41.957376', '2020-11-25 18:54:32'),
(65, 'den', '../usersFolders/den/pict/тропа здоровья.jpg', '', 'наша тропа', '45.056777', '41.925567', '2020-11-25 18:57:44'),
(66, 'den', '../usersFolders/den/pict/szap1.jpg', '', 'завод нептун', '45.060361', '41.916327', '2020-11-25 18:59:24');

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
  MODIFY `id_pin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
