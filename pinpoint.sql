-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 07 2022 г., 12:30
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
(1, '20', '21', '2021-12-09 02:17:50', '2021-12-09 02:17:50'),
(2, '21', '20', '2021-12-09 02:17:50', '2021-12-09 02:17:50'),
(3, '20', '22', '2021-12-09 02:18:37', '2021-12-09 02:18:37'),
(4, '22', '20', '2021-12-09 02:18:37', '2021-12-09 02:18:37'),
(7, '20', '23', '2022-03-05 05:45:55', '2022-03-05 05:45:55'),
(8, '23', '20', '2022-03-05 05:45:55', '2022-03-05 05:45:55');

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
(86, '20', '21', 'дарова! как жизнь?', '0', '2022-03-07 05:57:46', '2022-03-07 05:57:46'),
(87, '20', '21', 'что нового у тебя?', '0', '2022-03-07 05:57:52', '2022-03-07 05:57:52'),
(88, '20', '21', 'как погода у вас там?', '0', '2022-03-07 05:57:58', '2022-03-07 05:57:58'),
(89, '20', '23', 'я тебе там скинул файл, погляди как сможешь, хорошо?', '0', '2022-03-07 05:58:36', '2022-03-07 05:58:36'),
(90, '20', '22', 'какие новости на работе?', '0', '2022-03-07 05:58:58', '2022-03-07 05:58:58'),
(91, '20', '22', 'что нового пишешь?', '0', '2022-03-07 05:59:07', '2022-03-07 05:59:07'),
(92, '22', '20', 'дарова', '0', '2022-03-07 06:00:22', '2022-03-07 06:00:22'),
(93, '22', '20', 'новостей нет, всё по старому', '0', '2022-03-07 06:00:33', '2022-03-07 06:00:33'),
(94, '21', '20', 'погода норм', '0', '2022-03-07 06:01:55', '2022-03-07 06:01:55'),
(95, '21', '20', 'снег идёт', '0', '2022-03-07 06:02:01', '2022-03-07 06:02:01');

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
(8, '2021_12_08_190737_create_freinds_table', 5),
(9, '2021_12_13_184221_create_messages_table', 6);

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
(22, '20', '45.011987', '41.951647', 'Ёлки палки', 'img/20/0tG68co9fq89uNrmFExbqpRDZDEGV2kqLZ5f8gd8.jpg', '2021-12-06 09:16:03', '2021-12-06 09:16:03'),
(23, '20', '44.971315', '42.070203', 'озерцо!', 'img/20/W8wPRQ9FHNGj9FnNZY3OG3rdrCHOg0qZMUhRbk0z.jpg', '2021-12-07 02:35:34', '2021-12-07 02:35:34'),
(24, '24', '45.043333', '41.980829', '321354654', 'img/24/Bj5KuxTm1ZVtTST8O6SEhjgs6vhgoP6wRuczXOh6.jpg', '2021-12-07 08:16:21', '2021-12-07 08:16:21');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(7, 'den', 'den@mail.ru', NULL, '$2y$10$zYcbUvP5HpEyqo00lO4mf.nFuEQsqdkeGdAssebJvXSF5P3Q9QFem', NULL, '2021-11-04 15:50:42', '2021-11-04 15:50:42'),
(20, 'qqq', 'qqq@mail.ru', NULL, '$2y$10$.RfGEAYldmrKYsDvMBKH.Odoj01fxgDmlWErHgO1pGRM.ZpBNZe9K', NULL, '2021-11-08 02:12:49', '2021-11-08 02:12:49'),
(21, 'user1', 'user1@mail.com', NULL, '$2y$10$XbHJq35IBi9PFkDko0WbGOXCHicrwtaMK6uZ.cKuVEDadUyP7AYLC', NULL, '2021-11-09 08:39:52', '2021-11-09 08:39:52'),
(22, 'user2', 'user2@mail.com', NULL, '$2y$10$i8ZAPYqQA9FnoO1VxYVWouTxCmIvLgF3pp7ogt.5yrnXiTY43rPBi', NULL, '2021-11-15 14:41:57', '2021-11-15 14:41:57'),
(23, 'user3', 'user3@mail.com', NULL, '$2y$10$ScEdM6B3oywapN2ApNlF..heWt2dkdbFNBkBS3oQn6ROY7dbN1x4W', NULL, '2021-11-15 14:42:39', '2021-11-15 14:42:39'),
(24, '123', '123@mail.ru', NULL, '$2y$10$EIhGPeVt6i2lb322qC734ObPiOVKP/UnRkcZbQxOuKn9wfnSo3XNi', NULL, '2021-12-07 08:15:33', '2021-12-07 08:15:33');

--
-- Индексы сохранённых таблиц
--

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pins`
--
ALTER TABLE `pins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
