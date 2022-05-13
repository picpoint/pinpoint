-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Май 13 2022 г., 16:46
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
(24, '26', '7', '2022-03-08 10:24:51', '2022-03-08 10:24:51'),
(25, '27', '21', '2022-04-02 15:51:40', '2022-04-02 15:51:40'),
(26, '21', '27', '2022-04-02 15:51:40', '2022-04-02 15:51:40'),
(27, '28', '27', '2022-04-08 10:13:10', '2022-04-08 10:13:10'),
(28, '27', '28', '2022-04-08 10:13:10', '2022-04-08 10:13:10'),
(29, '20', '27', '2022-05-11 13:17:41', '2022-05-11 13:17:41'),
(30, '27', '20', '2022-05-11 13:17:41', '2022-05-11 13:17:41');

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
(79, '20', '21', 'zzzzzzzzzzz', '0', '2022-03-06 15:39:27', '2022-03-06 15:39:27'),
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
(118, '20', '25', 'не а', '0', '2022-03-09 15:51:10', '2022-03-09 15:51:10'),
(119, '7', '20', 'тест мсг', '0', '2022-03-21 16:15:54', '2022-03-21 16:15:54'),
(120, '20', '7', 'ответ', '0', '2022-03-21 16:16:43', '2022-03-21 16:16:43'),
(163, '7', '20', 'драсте', '0', '2022-03-30 12:17:15', '2022-03-30 12:17:15'),
(164, '20', '7', 'привет', '0', '2022-03-30 12:17:36', '2022-03-30 12:17:36'),
(165, '7', '20', 'как сам?', '0', '2022-03-30 12:19:43', '2022-03-30 12:19:43'),
(168, '20', '7', 'да пойдет', '0', '2022-03-30 12:22:07', '2022-03-30 12:22:07'),
(169, '7', '20', 'чего нового?', '0', '2022-03-30 12:23:13', '2022-03-30 12:23:13'),
(170, '20', '7', 'ничего', '0', '2022-03-30 12:23:47', '2022-03-30 12:23:47'),
(171, '7', '20', 'как погода?', '0', '2022-03-30 12:24:35', '2022-03-30 12:24:35'),
(172, '20', '7', 'ветер', '0', '2022-03-30 12:24:50', '2022-03-30 12:24:50'),
(173, '7', '20', 'сильный?', '0', '2022-03-30 12:26:02', '2022-03-30 12:26:02'),
(174, '20', '7', 'хороший', '0', '2022-03-30 12:26:15', '2022-03-30 12:26:15'),
(175, '7', '20', 'как сделать чтоб страница не обновлялась?', '0', '2022-03-30 12:26:46', '2022-03-30 12:26:46'),
(176, '20', '7', 'пока не знаю', '0', '2022-03-30 12:28:43', '2022-03-30 12:28:43'),
(177, '7', '20', 'потом расскажешь, как узнаешь', '0', '2022-03-30 14:29:49', '2022-03-30 14:29:49'),
(178, '20', '7', 'хорошо', '0', '2022-03-30 14:31:04', '2022-03-30 14:31:04'),
(179, '7', '20', 'ну что?', '0', '2022-03-30 14:39:24', '2022-03-30 14:39:24'),
(180, '20', '7', 'пока нет', '0', '2022-03-30 14:39:36', '2022-03-30 14:39:36'),
(181, '7', '20', 'есть?', '0', '2022-03-30 14:42:51', '2022-03-30 14:42:51'),
(183, '20', '7', 'нет', '0', '2022-03-30 14:44:50', '2022-03-30 14:44:50'),
(184, '20', '7', 'надо пробовать на боевом', '0', '2022-03-30 14:46:08', '2022-03-30 14:46:08'),
(185, '20', '7', 'покупаешь вдс и пробуешь', '0', '2022-03-30 14:46:54', '2022-03-30 14:46:54'),
(186, '20', '7', 'а так конечно не понятно', '0', '2022-03-30 14:47:11', '2022-03-30 14:47:11'),
(187, '20', '7', 'всё время прыгает вверх', '0', '2022-03-30 14:47:33', '2022-03-30 14:47:33'),
(188, '20', '7', 'как ф5 нажал вроде', '0', '2022-03-30 14:47:51', '2022-03-30 14:47:51'),
(189, '7', '20', 'надо в консоль поглядеть', '0', '2022-03-30 14:48:35', '2022-03-30 14:48:35'),
(190, '20', '7', 'у меня ничего', '0', '2022-03-30 14:48:44', '2022-03-30 14:48:44'),
(191, '7', '20', 'и у меня тоже', '0', '2022-03-30 14:48:56', '2022-03-30 14:48:56'),
(192, '20', '7', 'у тебя фивикон ругается?', '0', '2022-03-30 14:49:22', '2022-03-30 14:49:22'),
(193, '7', '20', 'нет', '0', '2022-03-30 14:49:31', '2022-03-30 14:49:31'),
(194, '7', '20', 'а у меня да', '0', '2022-03-30 14:49:45', '2022-03-30 14:49:45'),
(195, '20', '7', 'у тебя твои сообщения справа?', '0', '2022-03-30 14:50:20', '2022-03-30 14:50:20'),
(196, '7', '20', 'мои да', '0', '2022-03-30 14:50:32', '2022-03-30 14:50:32'),
(197, '7', '20', 'как скролл?', '0', '2022-03-30 15:54:50', '2022-03-30 15:54:50'),
(198, '20', '7', 'у меня нет', '0', '2022-03-30 15:55:01', '2022-03-30 15:55:01'),
(199, '7', '20', 'и у меня тоже', '0', '2022-03-30 15:55:21', '2022-03-30 15:55:21'),
(200, '20', '7', 'драсте', '0', '2022-04-01 13:10:25', '2022-04-01 13:10:25'),
(201, '20', '7', 'сколько время?', '0', '2022-04-01 13:10:50', '2022-04-01 13:10:50'),
(202, '20', '7', 'и погода...', '0', '2022-04-01 14:05:00', '2022-04-01 14:05:00'),
(203, '27', '21', 'прювет!', '0', '2022-04-02 15:52:55', '2022-04-02 15:52:55'),
(204, '20', '27', 'hi', '0', '2022-04-02 16:00:26', '2022-04-02 16:00:26'),
(205, '27', '20', 'драсте', '0', '2022-04-02 16:04:47', '2022-04-02 16:04:47'),
(206, '27', '20', 'вы кто?', '0', '2022-04-02 16:05:00', '2022-04-02 16:05:00'),
(207, '20', '27', 'мне вас посоветовали как разраба', '0', '2022-04-02 16:09:06', '2022-04-02 16:09:06'),
(208, '20', '27', 'вы пишите сайты?', '0', '2022-04-02 16:09:20', '2022-04-02 16:09:20'),
(209, '27', '20', 'что конкретно вам нужно?', '0', '2022-04-02 16:09:35', '2022-04-02 16:09:35'),
(210, '20', '27', 'инет-магазин', '0', '2022-04-02 16:09:52', '2022-04-02 16:09:52'),
(211, '20', '27', 'с кассой', '0', '2022-04-02 16:10:05', '2022-04-02 16:10:05'),
(212, '27', '20', 'бюджет?', '0', '2022-04-02 16:10:25', '2022-04-02 16:10:25'),
(213, '20', '27', '200тыс', '0', '2022-04-02 16:10:37', '2022-04-02 16:10:37'),
(214, '27', '20', 'мало', '0', '2022-04-02 16:10:44', '2022-04-02 16:10:44'),
(215, '27', '20', 'нужно больше', '0', '2022-04-02 16:11:00', '2022-04-02 16:11:00'),
(216, '20', '27', 'сколько?', '0', '2022-04-02 16:19:19', '2022-04-02 16:19:19'),
(218, '27', '20', '250-300', '0', '2022-04-02 16:19:58', '2022-04-02 16:19:58'),
(219, '20', '27', 'много', '0', '2022-04-02 16:21:48', '2022-04-02 16:21:48'),
(239, '20', '7', '20-7', '0', '2022-04-05 10:31:37', '2022-04-05 10:31:37'),
(240, '7', '20', '7-20', '0', '2022-04-05 10:31:53', '2022-04-05 10:31:53'),
(245, '20', '7', 'драсте драсте!', '0', '2022-04-05 10:45:51', '2022-04-05 10:45:51'),
(246, '7', '20', 'хеллоу пипл!', '0', '2022-04-05 10:46:32', '2022-04-05 10:46:32'),
(247, '20', '7', 'как дела? а чего делаешь?', '0', '2022-04-05 10:47:04', '2022-04-05 10:47:04'),
(248, '7', '20', 'да вот тебе пишу )))', '0', '2022-04-05 10:47:21', '2022-04-05 10:47:21'),
(249, '20', '7', 'и как? получается?', '0', '2022-04-05 10:47:59', '2022-04-05 10:47:59'),
(250, '7', '20', 'ну как видишь!', '0', '2022-04-05 10:48:51', '2022-04-05 10:48:51'),
(251, '20', '7', '))', '0', '2022-04-05 10:49:08', '2022-04-05 10:49:08'),
(252, '7', '20', 'а давай ещё на пробу', '0', '2022-04-05 10:50:09', '2022-04-05 10:50:09'),
(253, '20', '7', 'давай', '0', '2022-04-05 10:50:27', '2022-04-05 10:50:27'),
(254, '20', '7', 'post msg', '0', '2022-04-07 02:35:37', '2022-04-07 02:35:37'),
(255, '20', '7', 'ну что, тестовая проверка?', '0', '2022-04-08 08:54:14', '2022-04-08 08:54:14'),
(256, '7', '20', 'давай )))', '0', '2022-04-08 08:54:24', '2022-04-08 08:54:24'),
(257, '20', '7', 'вроде всё хорошо!', '0', '2022-04-08 08:54:44', '2022-04-08 08:54:44'),
(258, '7', '20', 'ну да, сообщения где надо и вроде всё как надо!', '0', '2022-04-08 08:55:01', '2022-04-08 08:55:01'),
(259, '7', '20', 'я думаю можно делать комит и альфа версию уже выкатывать)', '0', '2022-04-08 08:55:52', '2022-04-08 08:55:52'),
(260, '20', '7', 'поддерживаю!', '0', '2022-04-08 08:56:09', '2022-04-08 08:56:09'),
(261, '20', '27', 'очень много много много какогото текста, просто шаблонный текст', '0', '2022-04-21 10:22:40', '2022-04-21 10:22:40');

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
(16, '0000_00_00_000000_create_websockets_statistics_entries_table', 8),
(17, '2022_05_12_084831_create_news_table', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `news`
--

CREATE TABLE `news` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `source_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_user` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pin_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `news`
--

INSERT INTO `news` (`id`, `source_user`, `receiver_user`, `pin_id`, `created_at`, `updated_at`) VALUES
(1, '20', '7', '17', '2022-05-12 13:24:35', '2022-05-12 13:24:35'),
(2, '20', '21', '34', '2022-05-12 13:40:05', '2022-05-12 13:40:05'),
(4, '20', '27', '16', '2022-05-12 13:41:15', '2022-05-12 13:41:15'),
(5, '7', '20', '38', '2022-05-13 13:35:50', '2022-05-13 13:35:50'),
(6, '7', '20', '39', '2022-05-13 13:45:53', '2022-05-13 13:45:53');

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
(17, '20', '45.049729', '41.955118', 'Классное озеро камсак!', 'img/20/zIW7pL5NzaOAhOr5RQkaz4O42X4FRIsXPNN7JLK8.jpg', '2021-11-11 08:41:47', '2022-05-06 13:42:03'),
(19, '21', '45.080417', '41.938541', '34-ка памятник', 'img/21/2iAHv92LChv3iHXtTk1g3BpvvOaXn98gxfxhniXC.jpg', '2021-11-11 08:53:35', '2021-11-11 08:53:35'),
(20, '21', '45.059251', '41.917926', 'автоприцеп', 'img/21/2jefmLkphH3CvTwHp0pRg96GQ1yUsaORdUcRaV7g.jpg', '2021-11-11 08:56:10', '2021-11-11 08:56:10'),
(21, '21', '45.056782', '41.925612', 'тропа здоровья', 'img/21/DQ2XCU01K8iUM1Zwhwmnz50FMcVZLgqZngh0SQI0.jpg', '2021-11-11 08:59:02', '2021-11-11 08:59:02'),
(31, '25', '45.040180', '41.907168', 'подсолнухи', 'img/25/tqT1lvUCql4Wfevs6P7zNrqP1BMsfIGIqIifEA1k.jpg', '2021-12-04 16:43:34', '2021-12-04 16:43:34'),
(32, '25', '45.091705', '42.049941', 'show', 'img/25/LMl7NnIs2h3YUKy2lMxEwSSfGwPipIbnfEVBqR0h.jpg', '2021-12-04 16:45:26', '2021-12-04 16:45:26'),
(33, '21', '45.083712', '41.994566', 'mnbmnbmnb', 'img/21/tYaowTCRm8UxU78IMOd1HctRsvlNx6PTq0vOFq5L.jpg', '2021-12-04 16:55:12', '2021-12-04 16:55:12'),
(34, '20', '45.043631', '41.969702', 'Краевая библиотека им. Лермонтова.\r\nАдрес: Россия, Ставропольский край, г. Ставрополь ул. Маршала Жукова, дом 17, корпус 5, литер 25.', 'img/20/5qGW1c5TtcYoO5AZtJ1zYZiowBirj6SAm9txB1Zp.jpg', '2022-03-31 12:04:17', '2022-05-06 13:28:45'),
(35, '28', '45.006115', '41.957895', 'Россия, Ставрополь, урочище Мамайская Лесная Дача', 'img/28/egX7gIKB1dp2rBS900rZLeekriVMY7YYDUqmPXWM.jpg', '2022-04-08 10:12:00', '2022-04-08 10:12:00'),
(38, '7', '45.007654', '41.954470', 'лес', 'img/7/wtPhEGX2UBFMN72Rp5p8WK7xfpk5pelk8UQoHgXz.png', '2022-05-11 13:13:52', '2022-05-11 13:13:52'),
(39, '7', '45.019049', '41.729628', 'сенгилей', 'img/7/ZVGg7eREwIQ3H0mbSsSr0mm1L8WYCqNDA2t5SUa8.png', '2022-05-13 13:45:45', '2022-05-13 13:45:45');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `messenger_color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '#2180f3',
  `dark_mode` tinyint(1) NOT NULL DEFAULT 0,
  `active_status` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `surname`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `avatar`, `messenger_color`, `dark_mode`, `active_status`) VALUES
(7, 'den', '', 'den@mail.ru', NULL, '$2y$10$zYcbUvP5HpEyqo00lO4mf.nFuEQsqdkeGdAssebJvXSF5P3Q9QFem', NULL, '2021-11-04 15:50:42', '2021-11-04 15:50:42', NULL, '#2180f3', 0, 0),
(20, 'qqq', '', 'qqq@mail.ru', NULL, '$2y$10$.RfGEAYldmrKYsDvMBKH.Odoj01fxgDmlWErHgO1pGRM.ZpBNZe9K', NULL, '2021-11-08 02:12:49', '2021-11-08 02:12:49', 'img/20/avatar.jpg', '#2180f3', 0, 0),
(21, 'user1', '', 'user1@mail.com', NULL, '$2y$10$XbHJq35IBi9PFkDko0WbGOXCHicrwtaMK6uZ.cKuVEDadUyP7AYLC', NULL, '2021-11-09 08:39:52', '2021-11-09 08:39:52', '', '#2180f3', 0, 0),
(22, 'user2', '', 'user2@mail.com', NULL, '$2y$10$i8ZAPYqQA9FnoO1VxYVWouTxCmIvLgF3pp7ogt.5yrnXiTY43rPBi', NULL, '2021-11-15 14:41:57', '2021-11-15 14:41:57', '', '#2180f3', 0, 0),
(23, 'user3', '', 'user3@mail.com', NULL, '$2y$10$ScEdM6B3oywapN2ApNlF..heWt2dkdbFNBkBS3oQn6ROY7dbN1x4W', NULL, '2021-11-15 14:42:39', '2021-11-15 14:42:39', '', '#2180f3', 0, 0),
(25, 'test', '', 'test@mail.ru', NULL, '$2y$10$syg0qAGMRHlzspkzGJN5p.896BVGPud4Qaw456y1wGneyqkD2ftWO', NULL, '2021-12-03 14:10:21', '2021-12-03 14:10:21', '', '#2180f3', 0, 0),
(26, 'user4', '', 'user4@mail.com', NULL, '$2y$10$TZ.DQ2Vn7S3HRXnfNxga8eARWgTP5OFm7kQ9FbTHUxoWbvJQdbr42', NULL, '2022-02-28 16:25:47', '2022-02-28 16:25:47', '', '#2180f3', 0, 0),
(27, 'Иванов', 'Иван', 'ivan@mail.ru', NULL, '$2y$10$K5HaYxPaYldCvHquYhLU8.MTzMNeMD32auj2JUnre2wFykMdVu5mi', NULL, '2022-04-02 15:42:33', '2022-04-02 15:42:33', '', '#2180f3', 0, 0),
(28, 'Петров', 'Пётр', 'petr@mail.ru', NULL, '$2y$10$QzGNTEjXLYRcwy11XTKZFOxKk8daeixwAPJF.AlJdaBLTHGNPnzZ2', NULL, '2022-04-08 10:09:39', '2022-04-08 10:09:39', '', '#2180f3', 0, 0),
(29, 'Петренко', 'Пётр', 'petrenko@mail.ru', NULL, '$2y$10$A2RXYCT0QjZvnHZIKf3Q3.2.nWNX7T7oHYG8am7dAKNAIog4hpY1W', NULL, '2022-04-14 06:07:09', '2022-04-14 06:07:09', NULL, '#2180f3', 0, 0);

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
-- Индексы таблицы `news`
--
ALTER TABLE `news`
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
  ADD KEY `users_name_index` (`surname`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT для таблицы `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=262;

--
-- AUTO_INCREMENT для таблицы `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT для таблицы `news`
--
ALTER TABLE `news`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `pins`
--
ALTER TABLE `pins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT для таблицы `websockets_statistics_entries`
--
ALTER TABLE `websockets_statistics_entries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
