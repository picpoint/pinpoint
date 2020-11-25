-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 25 2020 г., 18:22
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
(34, 'den', 'C:xampphtdocspinpointcontroller/../usersFolders/den/pict/81_big.jpg', '', 'памятник танку т 34-85!', '45.080324', '41.938543', '2020-11-25 17:09:42'),
(35, 'den', 'C:xampphtdocspinpointcontroller/../usersFolders/den/pict/13251253.jpg', '', 'наш жд', '45.055228', '41.999393', '2020-11-25 17:10:13'),
(36, 'den', 'C:xampphtdocspinpointcontroller/../usersFolders/den/pict/98e3ff1e09f4804f78da2596d2cfd407.jpg', '', 'камсак', '45.050169', '41.957564', '2020-11-25 17:15:46'),
(37, 'freeAlex', 'C:xampphtdocspinpointcontroller/../usersFolders/freeAlex/pict/07.jpg', '', 'свинные отбивные', '45.049480', '41.913962', '2020-11-25 17:17:16'),
(38, 'freeAlex', 'C:xampphtdocspinpointcontroller/../usersFolders/freeAlex/pict/18b0a4b31ad55084690a46198f88a671_XL.jpg', '', 'кафе лайнер', '45.024474', '41.923579', '2020-11-25 17:18:39'),
(39, 'freeAlex', 'C:xampphtdocspinpointcontroller/../usersFolders/freeAlex/pict/15a90b68_resizedScaled_740to950.jpg', '', 'Фотка говорит сама за себя', '45.043241', '41.967502', '2020-11-25 17:21:32');

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
  MODIFY `id_pin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
