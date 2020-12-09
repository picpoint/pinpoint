-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Дек 09 2020 г., 06:35
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
(1, 'den', '5', 0),
(2, 'den', '4', 0),
(3, 'den', '6', 0);

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
(91, 'arcUc', '../usersFolders/arcUc/pict/a7c70c24-1d32-4411-8f7f-0797bf501247_jpg_800x1000_q85.jpg', '', 'приглашаю на мой концерт', '52.272919', '104.25647', '2020-11-26 18:58:07');

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
(8, 'Alex', 'Freedman', 'freeAlex', '$2y$10$Lr0WynYjhY4Se0AANwneC.YJLqdAxvwveQeAg6.KkwBj6jE6nWw.W'),
(9, 'Александр', 'Пушной', 'push', '$2y$10$m2DuO.V7SVSvZqplS7isOOR.OdS7r8PnXzu1swZ5R2QbiCgRzMdWm'),
(10, 'Денис', 'Денисов', 'denden', '$2y$10$89ebdNApke03heD/Wwv69.f3CTkDowOa7HHLthkaoQNX7p6IN7vyC'),
(11, 'Денис', 'Старовойтов', 'denstar', '$2y$10$FqUOxF8bW8Rgg5DO4oWxzehTEO4ubXDCvKEr/5wpyT22y8taKSdIK');

--
-- Индексы сохранённых таблиц
--

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
-- AUTO_INCREMENT для таблицы `freinds`
--
ALTER TABLE `freinds`
  MODIFY `id_freinds` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT для таблицы `pins`
--
ALTER TABLE `pins`
  MODIFY `id_pin` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id_user` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
