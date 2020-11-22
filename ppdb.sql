-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Ноя 22 2020 г., 14:51
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
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `pins`
--

INSERT INTO `pins` (`id_pin`, `id_user`, `photo`, `video`, `commentaries`, `latitude`, `longitude`, `date`) VALUES
(8, 'den', 'C:xampphtdocspinpointcontroller/../usersFolders/den/pict/1564557629_0_0_3072_1728_600x0_80_0_0_9346434537c91fa434bf783acafb5b6e.jpg', '', 'Красивый лес тут', 45.0436, 41.9353, '2020-11-18 18:18:26'),
(10, 'den', 'C:xampphtdocspinpointcontroller/../usersFolders/den/pict/IMG_9238.jpg', '', 'Тут постоянно заправляюсь', 45.0318, 41.9284, '2020-11-18 18:21:21'),
(13, 'den', 'C:xampphtdocspinpointcontroller/../usersFolders/den/pict/11864631.jpg', '', 'Красивый памятник!!!', 45.0804, 41.9386, '2020-11-18 18:35:35'),
(14, 'den', 'C:xampphtdocspinpointcontroller/../usersFolders/den/pict/szap1.jpg', '', 'Некогда в советское время был огромным заводом, выпускавшим сотни прицепов, сейчас на 90% это развалины.\r\n', 45.0641, 41.9206, '2020-11-21 17:24:36'),
(15, 'den', 'C:xampphtdocspinpointcontroller/../usersFolders/den/pict/szap1.jpg', '', 'Некогда в советское время был огромным заводом, выпускавшим сотни прицепов, сейчас на 90% это развалины.\r\n', 45.0641, 41.9206, '2020-11-21 17:26:37'),
(16, 'den', 'C:xampphtdocspinpointcontroller/../usersFolders/den/pict/тропа здоровья.jpg', '', 'Тропа здоровья, классно и красиво!', 45.0487, 41.9255, '2020-11-21 17:34:02'),
(17, 'den', 'C:xampphtdocspinpointcontroller/../usersFolders/den/pict/XXL.jpg', '', 'АРХИЕРЕЙСКАЯ ДАЧА С 2Х-ЕНТЕРОМ В КОНЦЕ СТРОКИ\r\n\r\n', 45.0523, 41.944, '2020-11-21 17:36:45'),
(18, 'den', 'C:xampphtdocspinpointcontroller/../usersFolders/den/pict/XXL (1).jpg', '', 'комменты с 3мя ентерами в конце', 45.0609, 41.9281, '2020-11-21 17:41:19');

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
  MODIFY `id_pin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
