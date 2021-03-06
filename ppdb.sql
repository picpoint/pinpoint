-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Янв 25 2021 г., 14:49
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
-- Структура таблицы `alexlook`
--

CREATE TABLE `alexlook` (
  `id_messages` bigint(20) NOT NULL,
  `id_frommsg` varchar(255) NOT NULL,
  `id_tomsg` varchar(255) NOT NULL,
  `messag` text NOT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `alexlook`
--

INSERT INTO `alexlook` (`id_messages`, `id_frommsg`, `id_tomsg`, `messag`, `dates`) VALUES
(1, 'AlexLOOK', 'den', 'трям!', '2021-01-18 13:50:02'),
(2, 'AlexLOOK', 'den', 'трям!', '2021-01-18 13:50:06');

-- --------------------------------------------------------

--
-- Структура таблицы `arcuc`
--

CREATE TABLE `arcuc` (
  `id_messages` bigint(20) NOT NULL,
  `id_frommsg` varchar(255) NOT NULL,
  `id_tomsg` varchar(255) NOT NULL,
  `messag` text NOT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `arcuc`
--

INSERT INTO `arcuc` (`id_messages`, `id_frommsg`, `id_tomsg`, `messag`, `dates`) VALUES
(1, 'den', 'arcUc', 'Дарова!', '2020-12-29 18:06:58'),
(2, 'den', 'arcUc', 'как ваши ничего?', '2020-12-29 18:09:02'),
(3, 'den', 'arcUc', 'я тут один фильмец смотрел, погляди, интересный', '2020-12-29 18:09:58'),
(4, 'den', 'arcUc', 'https://www.youtube.com/watch?v=L7pvGDmTRm4', '2020-12-29 18:12:08'),
(5, 'arcUc', 'den', 'Ответное сообщение дену', '2020-12-30 05:17:05'),
(6, 'arcUc', 'den', 'как дела? как сам?', '2020-12-30 05:28:42'),
(7, 'den', 'arcUc', 'всё нормально!', '2020-12-30 05:30:25'),
(8, 'den', 'arcUc', 'что нового, какие новости на фронте?', '2020-12-30 05:30:56'),
(9, 'den', 'arcUc', 'проверка на паралелизм', '2020-12-30 07:35:36'),
(10, 'freeAlex', 'arcUc', 'Аркаш СНГ!!!', '2020-12-30 12:08:15'),
(12, 'den', 'arcUc', 'С ПРЯЗДНИКОМ!!!!!!!!!!!!!', '2020-12-30 12:11:43'),
(13, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 05:21:26'),
(14, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 05:47:37'),
(15, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 05:47:56'),
(16, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 05:50:03'),
(17, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 05:50:21'),
(18, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 05:50:42'),
(19, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 05:51:02'),
(20, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 09:25:11'),
(21, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 09:31:44'),
(22, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 09:31:56'),
(23, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 09:32:02'),
(24, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 09:34:48'),
(25, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 09:37:37'),
(26, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 09:39:19'),
(27, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 09:40:28'),
(28, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 09:40:33'),
(29, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 09:40:45'),
(30, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 09:40:56'),
(31, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 09:41:41'),
(32, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 09:42:49'),
(33, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 11:30:49');

-- --------------------------------------------------------

--
-- Структура таблицы `den`
--

CREATE TABLE `den` (
  `id_messages` bigint(20) NOT NULL,
  `id_frommsg` varchar(255) NOT NULL,
  `id_tomsg` varchar(255) NOT NULL,
  `messag` text NOT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `den`
--

INSERT INTO `den` (`id_messages`, `id_frommsg`, `id_tomsg`, `messag`, `dates`) VALUES
(1, 'den', 'arcUc', 'Дарова!', '2020-12-29 18:06:58'),
(2, 'den', 'arcUc', 'как ваши ничего?', '2020-12-29 18:09:02'),
(3, 'den', 'arcUc', 'я тут один фильмец смотрел, погляди, интересный', '2020-12-29 18:09:58'),
(4, 'den', 'arcUc', 'https://www.youtube.com/watch?v=L7pvGDmTRm4', '2020-12-29 18:12:07'),
(5, 'arcUc', 'den', 'Ответное сообщение дену', '2020-12-30 05:17:05'),
(6, 'arcUc', 'den', 'как дела? как сам?', '2020-12-30 05:28:43'),
(7, 'den', 'arcUc', 'всё нормально!', '2020-12-30 05:30:25'),
(8, 'den', 'arcUc', 'что нового, какие новости на фронте?', '2020-12-30 05:30:55'),
(9, 'den', 'arcUc', 'проверка на паралелизм', '2020-12-30 07:35:36'),
(10, 'freeAlex', 'den', 'сообщение тебе )))', '2020-12-30 09:41:47'),
(11, 'freeAlex', 'den', 'и ещё одно!', '2020-12-30 09:42:44'),
(31, 'den', 'arcUc', 'С ПРЯЗДНИКОМ!!!!!!!!!!!!!', '2020-12-30 12:11:43'),
(51, 'den', 'arcUc', '!!!!!!!!!!!!!!!!!!!!!!!!!!', '2020-12-31 09:42:49'),
(53, 'den', 'freeAlex', 'Проба сообщения после правок удаления узлов', '2021-01-18 13:41:02'),
(54, 'den', 'denstar', 'Ден старовойтов это ты?', '2021-01-18 13:42:34'),
(55, 'AlexLOOK', 'den', 'трям!', '2021-01-18 13:50:02'),
(56, 'AlexLOOK', 'den', 'трям!', '2021-01-18 13:50:06');

-- --------------------------------------------------------

--
-- Структура таблицы `denstar`
--

CREATE TABLE `denstar` (
  `id_messages` bigint(20) NOT NULL,
  `id_frommsg` varchar(255) NOT NULL,
  `id_tomsg` varchar(255) NOT NULL,
  `messag` text NOT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `denstar`
--

INSERT INTO `denstar` (`id_messages`, `id_frommsg`, `id_tomsg`, `messag`, `dates`) VALUES
(1, 'den', 'denstar', 'Ден старовойтов это ты?', '2021-01-18 13:42:34');

-- --------------------------------------------------------

--
-- Структура таблицы `freealex`
--

CREATE TABLE `freealex` (
  `id_messages` bigint(20) NOT NULL,
  `id_frommsg` varchar(255) NOT NULL,
  `id_tomsg` varchar(255) NOT NULL,
  `messag` text NOT NULL,
  `dates` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `freealex`
--

INSERT INTO `freealex` (`id_messages`, `id_frommsg`, `id_tomsg`, `messag`, `dates`) VALUES
(1, 'freeAlex', 'den', 'сообщение тебе )))', '2020-12-30 09:41:47'),
(2, 'freeAlex', 'den', 'и ещё одно!', '2020-12-30 09:42:44'),
(3, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 09:43:13'),
(4, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 10:57:42'),
(5, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 10:58:30'),
(6, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 10:58:58'),
(7, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 10:59:13'),
(8, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 10:59:20'),
(9, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 11:05:20'),
(10, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 11:05:33'),
(11, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 11:10:01'),
(12, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 11:10:18'),
(13, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 11:11:13'),
(14, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 11:12:11'),
(15, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 11:12:40'),
(16, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 11:12:52'),
(17, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 11:13:07'),
(18, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 11:13:14'),
(19, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 11:13:30'),
(20, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 11:27:13'),
(21, 'den', 'freeAlex', 'ну и тебе в ответочку!', '2020-12-30 11:34:25'),
(22, 'freeAlex', 'arcUc', 'Аркаш СНГ!!!', '2020-12-30 12:08:15'),
(23, 'freeAlex', 'arcUc', 'Аркаш СНГ!!!', '2020-12-30 12:09:31'),
(24, 'den', 'freeAlex', 'Проба сообщения после правок удаления узлов', '2021-01-18 13:41:02');

-- --------------------------------------------------------

--
-- Структура таблицы `freinds`
--

CREATE TABLE `freinds` (
  `id_freinds` bigint(20) UNSIGNED NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `id_myfreind` varchar(255) NOT NULL,
  `freindship` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `freinds`
--

INSERT INTO `freinds` (`id_freinds`, `id_user`, `id_myfreind`, `freindship`) VALUES
(27, 'den', 'AlexLOOK', 1),
(28, 'den', 'freeAlex', 1),
(29, 'den', 'denden', 0),
(31, 'arcUc', 'den', 1),
(34, 'AlexLOOK', 'den', 1),
(35, 'freeAlex', 'den', 1),
(37, 'den', 'push', 1),
(41, 'den', 'denstar', 1),
(42, 'den', 'push', 1),
(43, 'push', 'den', 1),
(44, 'denstar', 'den', 1),
(46, 'AlexLOOK', 'arcUc', 1),
(47, 'AlexLOOK', 'freeAlex', 1),
(52, 'arcUc', 'den', 1),
(53, 'den', 'arcUc', 1);

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
(66, 'den', '../usersFolders/den/pict/szap1.jpg', '', 'завод нептун', '45.060361', '41.916327', '2020-11-25 18:59:24'),
(68, 'den', '../usersFolders/den/pict/15a90b68_resizedScaled_740to950.jpg', '', 'Коммент говорит сам за себя!!!', '45.043245', '41.967501', '2020-11-26 17:40:51'),
(69, 'den', '../usersFolders/den/pict/1564557629_0_0_3072_1728_600x0_80_0_0_9346434537c91fa434bf783acafb5b6e.jpg', '', 'Ботаника, вид с высоты птичьего поМёта!', '45.033614', '41.908470', '2020-11-26 17:42:12'),
(72, 'den', '../usersFolders/den/pict/Торт-с-днем-рождения.jpg', '', 'кафешка теотральное', '45.041993', '41.965102', '2020-11-26 17:48:40'),
(73, 'den', '../usersFolders/den/pict/18b0a4b31ad55084690a46198f88a671_XL.jpg', '', 'кафе лайнер', '45.024393', '41.923472', '2020-11-26 17:49:37'),
(74, 'den', '../usersFolders/den/pict/156005_original.jpg', '', 'солёное озеро!', '44.910364', '42.836199', '2020-11-26 17:57:25'),
(75, 'den', '../usersFolders/den/pict/41248483_303.jpg', '', 'мавзолей', '55.753819', '37.620138', '2020-11-26 17:59:53'),
(76, 'den', '../usersFolders/den/pict/unnamed.jpg', '', 'Город в котором живёт братан!', '48.064276', '8.4819139', '2020-11-26 18:01:31'),
(77, 'den', '../usersFolders/den/pict/15128429735_f88334983c_z.jpg', '', 'Сюдя я обязательно приеду', '53.360574', '-6.2561099', '2020-11-26 18:02:48'),
(78, 'den', '../usersFolders/den/pict/111.jpg', '', 'Здесь я гостил', '64.184234', '-21.065100', '2020-11-26 18:04:24'),
(79, 'den', '../usersFolders/den/pict/US_US-NY_NYC_1.jpg', '', 'нюёрк', '40.660748', '-73.969392', '2020-11-26 18:07:10'),
(80, 'den', '../usersFolders/den/pict/unnamed (1).jpg', '', 'тут жил димон', '39.110318', '-84.510737', '2020-11-26 18:08:42'),
(81, 'den', '../usersFolders/den/pict/71OGYC84RIS61581620665010.jpg', '', 'я обязательно посещу данный город!', '34.047827', '-118.28640', '2020-11-26 18:11:52'),
(82, 'den', '../usersFolders/den/pict/San_Francisc.jpg', '', 'это второй город куда я приеду ))))', '37.818472', '-122.47926', '2020-11-26 18:13:19'),
(83, 'den', '../usersFolders/den/pict/4f711553d3dd59ddc1604ffc2769efc0.jpg', '', 'токио', '35.712318', '139.75572', '2020-11-26 18:17:12'),
(84, 'den', '../usersFolders/den/pict/Без названия.jpg', '', 'это тоже я посещу', '39.903779', '116.38406', '2020-11-26 18:18:22'),
(85, 'den', '../usersFolders/den/pict/3myi.jpg', '', 'классный пляж', '13.086191', '80.298316', '2020-11-26 18:20:09'),
(86, 'freeAlex', '../usersFolders/freeAlex/pict/75d03b8485b589216d98fe6e2870236e.jpg', '', 'Гора лягушка в Александровском', '44.727929', '42.990781', '2020-11-26 18:24:00'),
(87, 'freeAlex', '../usersFolders/freeAlex/pict/969875_1000.jpg', '', 'Пятигорский Провал', '44.046483', '43.099207', '2020-11-26 18:38:51'),
(88, 'freeAlex', '../usersFolders/freeAlex/pict/melbourne-is-7957668.jpg', '', 'мельбурн', '-37.835828', '144.95281', '2020-11-26 18:41:21'),
(89, 'den', '../usersFolders/den/pict/000026_1569869403_363994_big.jpg', '', 'Здесь я плавал на корабле', '-83.480215', '-59.446877', '2020-11-26 18:44:18'),
(90, 'arcUc', '../usersFolders/arcUc/pict/3cd3a483ebe69c0fc91d2683989e2782.jpg', '', 'тут я живу', '55.720604', '37.599423', '2020-11-26 18:56:34'),
(91, 'arcUc', '../usersFolders/arcUc/pict/a7c70c24-1d32-4411-8f7f-0797bf501247_jpg_800x1000_q85.jpg', '', 'приглашаю на мой концерт', '52.272919', '104.25647', '2020-11-26 18:58:07'),
(92, 'den', '../usersFolders/den/pict/unnamed.jpg', '', 'светлоградское', '45.254439', '42.851840', '2020-12-26 18:33:34');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id_user` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `login` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `date_reg` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id_user`, `firstname`, `lastname`, `login`, `password`, `date_reg`) VALUES
(5, 'Аркадий', 'Укупник', 'arcUc', '$2y$10$hKQu1Jz60Fxd5eCb8i2w4e1PJTtMHf/I5X4yEFTER1EhhCRLcaVEi', '0000-00-00 00:00:00'),
(6, 'Александр', 'Лукашенко', 'AlexLOOK', '$2y$10$XukrP4iGzMT822Qn8F2qmuzABoiRFJ9eSvwjLKGA83xXJQnPM3m9m', '0000-00-00 00:00:00'),
(7, 'Денис', 'Белоцерковцев', 'den', '$2y$10$1BKt6lIfI/i8Jbpqt2tPsetey2DfrHFsjRnjVsdQF.zN1PBUnSGbO', '0000-00-00 00:00:00'),
(8, 'Alex', 'Freedman', 'freeAlex', '$2y$10$Lr0WynYjhY4Se0AANwneC.YJLqdAxvwveQeAg6.KkwBj6jE6nWw.W', '0000-00-00 00:00:00'),
(9, 'Александр', 'Пушной', 'push', '$2y$10$m2DuO.V7SVSvZqplS7isOOR.OdS7r8PnXzu1swZ5R2QbiCgRzMdWm', '0000-00-00 00:00:00'),
(10, 'Денис', 'Денисов', 'denden', '$2y$10$89ebdNApke03heD/Wwv69.f3CTkDowOa7HHLthkaoQNX7p6IN7vyC', '0000-00-00 00:00:00'),
(11, 'Денис', 'Старовойтов', 'denstar', '$2y$10$FqUOxF8bW8Rgg5DO4oWxzehTEO4ubXDCvKEr/5wpyT22y8taKSdIK', '0000-00-00 00:00:00'),
(26, 'sssssssssssssssssssssssssssssssss', 'sssssssssssssssssssssssssssssssss', 'nnn', '$2y$10$YQduD9RaP8qZlAAfkklQJ.mlkmXwckrFfHCumSuE0bF2LW0Lw9k7y', '2021-01-25 13:48:24');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `alexlook`
--
ALTER TABLE `alexlook`
  ADD PRIMARY KEY (`id_messages`);

--
-- Индексы таблицы `arcuc`
--
ALTER TABLE `arcuc`
  ADD PRIMARY KEY (`id_messages`);

--
-- Индексы таблицы `den`
--
ALTER TABLE `den`
  ADD PRIMARY KEY (`id_messages`);

--
-- Индексы таблицы `denstar`
--
ALTER TABLE `denstar`
  ADD PRIMARY KEY (`id_messages`);

--
-- Индексы таблицы `freealex`
--
ALTER TABLE `freealex`
  ADD PRIMARY KEY (`id_messages`);

--
-- Индексы таблицы `freinds`
--
ALTER TABLE `freinds`
  ADD PRIMARY KEY (`id_freinds`),
  ADD UNIQUE KEY `id_freinds` (`id_freinds`);

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
-- AUTO_INCREMENT для таблицы `alexlook`
--
ALTER TABLE `alexlook`
  MODIFY `id_messages` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `arcuc`
--
ALTER TABLE `arcuc`
  MODIFY `id_messages` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `den`
--
ALTER TABLE `den`
  MODIFY `id_messages` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT для таблицы `denstar`
--
ALTER TABLE `denstar`
  MODIFY `id_messages` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT для таблицы `freealex`
--
ALTER TABLE `freealex`
  MODIFY `id_messages` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `freinds`
--
ALTER TABLE `freinds`
  MODIFY `id_freinds` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT для таблицы `pins`
--
ALTER TABLE `pins`
  MODIFY `id_pin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
