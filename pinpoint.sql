-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 18 2022 г., 16:51
-- Версия сервера: 10.3.22-MariaDB
-- Версия PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `pinpoint`
--

-- --------------------------------------------------------

--
-- Структура таблицы `ch_favorites`
--

CREATE TABLE `ch_favorites` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `favorite_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `ch_messages`
--

CREATE TABLE `ch_messages` (
  `id` bigint(20) NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `from_id` bigint(20) NOT NULL,
  `to_id` bigint(20) NOT NULL,
  `body` varchar(5000) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seen` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `freinds`
--

CREATE TABLE `freinds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currentuser_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `freinds`
--

INSERT INTO `freinds` (`id`, `currentuser_id`, `user_id`, `created_at`, `updated_at`) VALUES
(13, '20', '26', '2022-03-04 16:04:43', '2022-03-04 16:04:43'),
(14, '26', '20', '2022-03-04 16:04:43', '2022-03-04 16:04:43'),
(15, '20', '21', '2022-03-04 16:04:53', '2022-03-04 16:04:53'),
(16, '21', '20', '2022-03-04 16:04:53', '2022-03-04 16:04:53'),
(17, '7', '20', '2022-03-06 15:45:39', '2022-03-06 15:45:39'),
(18, '20', '7', '2022-03-06 15:45:39', '2022-03-06 15:45:39'),
(19, '25', '20', '2022-03-08 08:23:03', '2022-03-08 08:23:03'),
(20, '20', '25', '2022-03-08 08:23:03', '2022-03-08 08:23:03'),
(21, '23', '26', '2022-03-08 10:20:28', '2022-03-08 10:20:28'),
(22, '26', '23', '2022-03-08 10:20:28', '2022-03-08 10:20:28'),
(23, '7', '26', '2022-03-08 10:24:51', '2022-03-08 10:24:51'),
(24, '26', '7', '2022-03-08 10:24:51', '2022-03-08 10:24:51');

-- --------------------------------------------------------

--
-- Структура таблицы `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currentuser_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `reading` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `messages`
--

INSERT INTO `messages` (`id`, `currentuser_id`, `user_id`, `message`, `reading`, `created_at`, `updated_at`) VALUES
(77, '20', '21', 'aaaaaaa', '0', '2022-03-06 15:37:20', '2022-03-06 15:37:20'),
(78, '20', '21', 'aaaaaaa', '0', '2022-03-06 15:37:32', '2022-03-06 15:37:32'),
(79, '20', '21', 'zzzzzzzzzzz', '0', '2022-03-06 15:39:27', '2022-03-06 15:39:27'),
(80, '20', '21', 'zzzzzzzzzzz', '0', '2022-03-06 15:42:26', '2022-03-06 15:42:26'),
(81, '20', '21', '44444444', '0', '2022-03-06 15:42:33', '2022-03-06 15:42:33'),
(82, '20', '21', 'дарова', '0', '2022-03-06 15:43:10', '2022-03-06 15:43:10'),
(83, '20', '26', 'как дела?', '0', '2022-03-06 15:43:51', '2022-03-06 15:43:51'),
(84, '7', '20', 'хай! как сам?', '0', '2022-03-06 15:46:02', '2022-03-06 15:46:02'),
(85, '7', '20', 'как твои дела?', '0', '2022-03-06 15:46:29', '2022-03-06 15:46:29'),
(86, '7', '20', 'чего нового?', '0', '2022-03-06 15:46:35', '2022-03-06 15:46:35'),
(87, '20', '7', 'да ничего! всё нормуль!', '0', '2022-03-06 15:47:11', '2022-03-06 15:47:11'),
(88, '20', '7', 'у тебя чего нового то?', '0', '2022-03-06 15:47:21', '2022-03-06 15:47:21'),
(89, '25', '20', 'привет, есть один проект', '0', '2022-03-08 08:23:27', '2022-03-08 08:23:27'),
(90, '25', '20', 'возьмешься за него?', '0', '2022-03-08 08:23:36', '2022-03-08 08:23:36'),
(91, '25', '20', 'проект на 2 недели', '0', '2022-03-08 08:24:30', '2022-03-08 08:24:30'),
(92, '23', '26', 'привет, добавил тебя в друзья', '0', '2022-03-08 10:20:50', '2022-03-08 10:20:50'),
(93, '23', '26', 'новости с хабра', '0', '2022-03-08 10:21:29', '2022-03-08 10:21:29'),
(95, '26', '23', 'дарова', '0', '2022-03-08 10:22:31', '2022-03-08 10:22:31'),
(97, '26', '23', 'спасибо', '0', '2022-03-08 10:22:38', '2022-03-08 10:22:38'),
(99, '7', '26', 'отправил файл на почту', '0', '2022-03-08 10:25:17', '2022-03-08 10:25:17'),
(100, '20', '7', 'как погода у вас?', '0', '2022-03-09 15:10:40', '2022-03-09 15:10:40'),
(101, '7', '20', 'погода, да снег', '0', '2022-03-09 15:40:20', '2022-03-09 15:40:20'),
(102, '7', '20', 'холодно...', '0', '2022-03-09 15:40:37', '2022-03-09 15:40:37'),
(103, '20', '7', 'у нас солнце, дождик и ветер', '0', '2022-03-09 15:41:11', '2022-03-09 15:41:11'),
(104, '7', '20', 'ветер большой?', '0', '2022-03-09 15:41:26', '2022-03-09 15:41:26'),
(105, '20', '7', 'да нет, ветерок', '0', '2022-03-09 15:41:59', '2022-03-09 15:41:59'),
(106, '7', '20', 'ветер ветер ветерок ))) ???', '0', '2022-03-09 15:42:31', '2022-03-09 15:42:31'),
(107, '20', '7', 'как там на работе?', '0', '2022-03-09 15:43:16', '2022-03-09 15:43:16'),
(108, '7', '20', 'да всё хорошо, работаем!', '0', '2022-03-09 15:43:31', '2022-03-09 15:43:31'),
(109, '7', '20', 'что там у тебя с апворком? как продвижение?', '0', '2022-03-09 15:44:24', '2022-03-09 15:44:24'),
(110, '20', '7', 'да как, закрыли биржу, всех выгнали с неё', '0', '2022-03-09 15:45:03', '2022-03-09 15:45:03'),
(111, '7', '20', 'что дальше будешь делать?', '0', '2022-03-09 15:45:29', '2022-03-09 15:45:29'),
(112, '20', '7', 'буду в вк всем письма рассылать, спрашивать про работу', '0', '2022-03-09 15:46:06', '2022-03-09 15:46:06'),
(113, '7', '20', 'к диме не хочешь опять?', '0', '2022-03-09 15:46:32', '2022-03-09 15:46:32'),
(114, '20', '7', 'ты чего, смеёшся? ))))', '0', '2022-03-09 15:47:01', '2022-03-09 15:47:01'),
(115, '7', '20', 'нафиг нафиг?', '0', '2022-03-09 15:47:36', '2022-03-09 15:47:36'),
(116, '20', '7', 'ага ))))', '0', '2022-03-09 15:47:49', '2022-03-09 15:47:49'),
(117, '20', '7', 'ну как знаешь...', '0', '2022-03-09 15:50:02', '2022-03-09 15:50:02'),
(118, '20', '25', 'не а', '0', '2022-03-09 15:51:10', '2022-03-09 15:51:10');

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_08_190130_create_pins_table', 2),
(6, '2021_11_11_133227_create_freinds_table', 3),
(7, '2021_11_12_112836_alter_table_users_add_index_name', 4),
(8, '2019_09_22_192348_create_messages_table', 5),
(9, '2019_10_16_211433_create_favorites_table', 5),
(10, '2019_10_18_223259_add_avatar_to_users', 5),
(11, '2019_10_20_211056_add_messenger_color_to_users', 5),
(12, '2019_10_22_000539_add_dark_mode_to_users', 5),
(13, '2019_10_25_214038_add_active_status_to_users', 5),
(14, '2021_12_08_190737_create_freinds_table', 6),
(15, '2021_12_13_184221_create_messages_table', 7),
(16, '0000_00_00_000000_create_websockets_statistics_entries_table', 8);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `pins`
--

CREATE TABLE `pins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `latitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `longitude` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `commentaries` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `pins`
--

INSERT INTO `pins` (`id`, `user_id`, `latitude`, `longitude`, `commentaries`, `image`, `created_at`, `updated_at`) VALUES
(16, '20', '45.047229', '41.928193', 'таманский лес', 'img/20/xOrZZ9AS00x5z1E8CJ2cnII1yfNZvYaHUYS5WQ05.jpg', '2021-11-11 08:40:54', '2021-11-11 08:40:54'),
(17, '20', '45.049729', '41.955118', 'камсак', 'img/20/zIW7pL5NzaOAhOr5RQkaz4O42X4FRIsXPNN7JLK8.jpg', '2021-11-11 08:41:47', '2021-11-11 08:41:47'),
(18, '20', '45.002279', '42.167652', 'гора острая', 'img/20/pWdz8yuJewLnouEHlEf2hxSZkwCJDODpBGkdPSar.jpg', '2021-11-11 08:43:13', '2021-11-11 08:43:13'),
(19, '21', '45.080417', '41.938541', '34-ка памятник', 'img/21/2iAHv92LChv3iHXtTk1g3BpvvOaXn98gxfxhniXC.jpg', '2021-11-11 08:53:35', '2021-11-11 08:53:35'),
(20, '21', '45.059251', '41.917926', 'автоприцеп', 'img/21/2jefmLkphH3CvTwHp0pRg96GQ1yUsaORdUcRaV7g.jpg', '2021-11-11 08:56:10', '2021-11-11 08:56:10'),
(21, '21', '45.056782', '41.925612', 'тропа здоровья', 'img/21/DQ2XCU01K8iUM1Zwhwmnz50FMcVZLgqZngh0SQI0.jpg', '2021-11-11 08:59:02', '2021-11-11 08:59:02'),
(31, '25', '45.040180', '41.907168', 'подсолнухи', 'img/25/tqT1lvUCql4Wfevs6P7zNrqP1BMsfIGIqIifEA1k.jpg', '2021-12-04 16:43:34', '2021-12-04 16:43:34'),
(32, '25', '45.091705', '42.049941', 'show', 'img/25/LMl7NnIs2h3YUKy2lMxEwSSfGwPipIbnfEVBqR0h.jpg', '2021-12-04 16:45:26', '2021-12-04 16:45:26'),
(33, '21', '45.083712', '41.994566', 'mnbmnbmnb', 'img/21/tYaowTCRm8UxU78IMOd1HctRsvlNx6PTq0vOFq5L.jpg', '2021-12-04 16:55:12', '2021-12-04 16:55:12');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `messenger_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#2180f3',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `active_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`, `messenger_color`, `dark_mode`, `active_status`) VALUES
(7, 'den', 'den@mail.ru', NULL, '$2y$10$zYcbUvP5HpEyqo00lO4mf.nFuEQsqdkeGdAssebJvXSF5P3Q9QFem', NULL, '2021-11-04 15:50:42', '2021-11-04 15:50:42', 'avatar.png', '#2180f3', 0, 0),
(20, 'qqq', 'qqq@mail.ru', NULL, '$2y$10$.RfGEAYldmrKYsDvMBKH.Odoj01fxgDmlWErHgO1pGRM.ZpBNZe9K', NULL, '2021-11-08 02:12:49', '2021-11-08 02:12:49', 'avatar.png', '#2180f3', 0, 0),
(21, 'user1', 'user1@mail.com', NULL, '$2y$10$XbHJq35IBi9PFkDko0WbGOXCHicrwtaMK6uZ.cKuVEDadUyP7AYLC', NULL, '2021-11-09 08:39:52', '2021-11-09 08:39:52', 'avatar.png', '#2180f3', 0, 0),
(22, 'user2', 'user2@mail.com', NULL, '$2y$10$i8ZAPYqQA9FnoO1VxYVWouTxCmIvLgF3pp7ogt.5yrnXiTY43rPBi', NULL, '2021-11-15 14:41:57', '2021-11-15 14:41:57', 'avatar.png', '#2180f3', 0, 0),
(23, 'user3', 'user3@mail.com', NULL, '$2y$10$ScEdM6B3oywapN2ApNlF..heWt2dkdbFNBkBS3oQn6ROY7dbN1x4W', NULL, '2021-11-15 14:42:39', '2021-11-15 14:42:39', 'avatar.png', '#2180f3', 0, 0),
(25, 'test', 'test@mail.ru', NULL, '$2y$10$syg0qAGMRHlzspkzGJN5p.896BVGPud4Qaw456y1wGneyqkD2ftWO', NULL, '2021-12-03 14:10:21', '2021-12-03 14:10:21', 'avatar.png', '#2180f3', 0, 0),
(26, 'user4', 'user4@mail.com', NULL, '$2y$10$TZ.DQ2Vn7S3HRXnfNxga8eARWgTP5OFm7kQ9FbTHUxoWbvJQdbr42', NULL, '2022-02-28 16:25:47', '2022-02-28 16:25:47', 'avatar.png', '#2180f3', 0, 0);

-- --------------------------------------------------------

--
-- Структура таблицы `websockets_statistics_entries`
--

CREATE TABLE `websockets_statistics_entries` (
  `id` int(10) UNSIGNED NOT NULL,
  `app_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peak_connection_count` int(11) NOT NULL,
  `websocket_message_count` int(11) NOT NULL,
  `api_message_count` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `ch_favorites`
--
ALTER TABLE `ch_favorites`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `ch_messages`
--
ALTER TABLE `ch_messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Индексы таблицы `freinds`
--
ALTER TABLE `freinds`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Индексы таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Индексы таблицы `pins`
--
ALTER TABLE `pins`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_name_index` (`name`);

--
-- Индексы таблицы `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `freinds`
--
ALTER TABLE `freinds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pins`
--
ALTER TABLE `pins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT для таблицы `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
