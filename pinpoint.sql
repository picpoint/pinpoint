-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Ноя 16 2021 г., 22:51
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
(14, '20', '21', '2021-11-15 15:37:33', '2021-11-15 15:37:33'),
(15, '21', '20', '2021-11-15 15:37:33', '2021-11-15 15:37:33'),
(16, '20', '23', '2021-11-15 15:38:30', '2021-11-15 15:38:30'),
(17, '23', '20', '2021-11-15 15:38:30', '2021-11-15 15:38:30'),
(18, '23', '7', '2021-11-16 14:16:18', '2021-11-16 14:16:18'),
(19, '7', '23', '2021-11-16 14:16:18', '2021-11-16 14:16:18'),
(20, '20', '22', '2021-11-16 15:04:59', '2021-11-16 15:04:59'),
(21, '22', '20', '2021-11-16 15:04:59', '2021-11-16 15:04:59'),
(22, '20', '7', '2021-11-16 16:50:17', '2021-11-16 16:50:17'),
(23, '7', '20', '2021-11-16 16:50:17', '2021-11-16 16:50:17');

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
(7, '2021_11_12_112836_alter_table_users_add_index_name', 4);

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
(21, '21', '45.056782', '41.925612', 'тропа здоровья', 'img/21/DQ2XCU01K8iUM1Zwhwmnz50FMcVZLgqZngh0SQI0.jpg', '2021-11-11 08:59:02', '2021-11-11 08:59:02');

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
(23, 'user3', 'user3@mail.com', NULL, '$2y$10$ScEdM6B3oywapN2ApNlF..heWt2dkdbFNBkBS3oQn6ROY7dbN1x4W', NULL, '2021-11-15 14:42:39', '2021-11-15 14:42:39');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pins`
--
ALTER TABLE `pins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
