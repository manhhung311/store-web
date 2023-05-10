-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th1 11, 2023 lúc 01:41 PM
-- Phiên bản máy phục vụ: 10.4.22-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `store_web`
--
CREATE DATABASE IF NOT EXISTS `store_web` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `store_web`;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `activations`
--

DROP TABLE IF EXISTS `activations`;
CREATE TABLE IF NOT EXISTS `activations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `activations`
--

INSERT INTO `activations` (`id`, `user_id`, `code`, `completed`, `completed_at`, `created_at`, `updated_at`) VALUES
(1, 1, 'OkBAMkzextZnlqqAdQI71neCAkBw39fQ', 1, '2023-01-10 04:23:29', '2023-01-10 04:23:29', '2023-01-10 04:23:29'),
(2, 2, 'etNeAaTrgCWqHZerB1Ner1lflzejd3Tz', 1, '2023-01-10 05:01:47', '2023-01-10 05:01:47', '2023-01-10 05:01:47'),
(3, 3, 'IT9ggdGdqdpoucWM10ZUrJGnwPRlLLtL', 1, '2023-01-11 00:21:33', '2023-01-11 00:21:33', '2023-01-11 00:21:33'),
(4, 5, 'luCGoiK33TwO1wyZdUcVArYNYh81iThd', 1, '2023-01-11 00:23:14', '2023-01-11 00:23:14', '2023-01-11 00:23:14'),
(5, 6, 'HKnOcZKIbXSUe6hV5gBzRLOBO33VhPnd', 1, '2023-01-11 00:30:37', '2023-01-11 00:30:37', '2023-01-11 00:30:37'),
(6, 7, 'xQvaGfAlnHPk0FTkFOoyEntYJHewCmEd', 1, '2023-01-11 02:49:36', '2023-01-11 02:49:36', '2023-01-11 02:49:36'),
(7, 8, 'bvDQXXnyJVPzgo6xM7LMBlJYp77mMMLS', 1, '2023-01-11 04:14:46', '2023-01-11 04:14:46', '2023-01-11 04:14:46'),
(8, 10, 'jOevPYkntO90EK9iWv4Fqf9AQ1yNqyH3', 1, '2023-01-11 04:16:48', '2023-01-11 04:16:48', '2023-01-11 04:16:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `category`
--

INSERT INTO `category` (`id`, `name`, `updated_at`, `created_at`) VALUES
(1, 'Điện Thoại', NULL, NULL),
(6, 'dImfxHYLQP', NULL, NULL),
(7, 'HkhfFpI2JE', NULL, NULL),
(8, 'Ffb63eFecW', NULL, NULL),
(9, 'GbDepRFYsL', NULL, NULL),
(10, 'Za1lIMbdpU', NULL, NULL),
(11, '6yTMKN973z', NULL, NULL),
(14, 'cBz92RdUqa', NULL, NULL),
(15, 'bjGHASGk0W', NULL, NULL),
(16, '6pYExVaJv6', NULL, NULL),
(17, 'ceLYbciJn9', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `company`
--

DROP TABLE IF EXISTS `company`;
CREATE TABLE IF NOT EXISTS `company` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `company`
--

INSERT INTO `company` (`id`, `name`, `address`, `created_at`, `updated_at`) VALUES
(1, 'công ty TNHH MMT', 'HN', NULL, '2023-01-11 02:49:12'),
(4, 'TTAL3vDs3V', 'cuOgDwayrB', NULL, NULL),
(5, 'C6D4FFusyb', 'CjtxTzSaxM', NULL, NULL),
(6, '4FWDvEEtH6', '1wN04LnrxP', NULL, NULL),
(7, 'yRUBbim2eK', 'fHaLCayaxt', NULL, NULL),
(8, 'TrGyNzfXdV', '7AG3S7yrzt', NULL, NULL),
(9, 'O5e494eQoA', 'EW2MTEtJZ8', NULL, NULL),
(10, 'VV0HW226Ua', '7sJrkCBSzY', NULL, NULL),
(11, '0Ly8Htt0iI', 'U8yJFuk8JM', NULL, NULL),
(12, 'XgJ9E1cuHD', 'X061Uyq49f', NULL, NULL),
(13, 'CBWwpzXpam', 'iWfS3DVcma', NULL, NULL),
(14, 'rpOBJt57DI', 'JvpP3NG2Bg', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `export_bill`
--

DROP TABLE IF EXISTS `export_bill`;
CREATE TABLE IF NOT EXISTS `export_bill` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `price` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `quantity` int(11) NOT NULL,
  `idProduct` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `export_bill_idproduct_foreign` (`idProduct`),
  KEY `export_bill_iduser_foreign` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `export_bill`
--

INSERT INTO `export_bill` (`id`, `price`, `date`, `quantity`, `idProduct`, `idUser`, `created_at`, `updated_at`) VALUES
(1, 14916, '2023-01-11 02:01:25', 12, 4, 2, NULL, '2023-01-11 02:40:25'),
(2, 12430, '2023-01-11 02:01:30', 10, 4, 2, NULL, '2023-01-11 02:39:30'),
(5, 3840000, '2023-01-11 02:01:19', 32, 1, 2, '2023-01-11 02:34:33', '2023-01-11 02:46:19');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `import_bill`
--

DROP TABLE IF EXISTS `import_bill`;
CREATE TABLE IF NOT EXISTS `import_bill` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `idProduct` int(10) UNSIGNED NOT NULL,
  `idUser` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `import_bill_idproduct_foreign` (`idProduct`),
  KEY `import_bill_iduser_foreign` (`idUser`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `import_bill`
--

INSERT INTO `import_bill` (`id`, `date`, `price`, `quantity`, `idProduct`, `idUser`, `created_at`, `updated_at`) VALUES
(1, '2023-01-11 09:01:51', 1440000, 12, 1, 2, NULL, '2023-01-11 02:40:51');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_07_02_230147_migration_cartalyst_sentinel', 1),
(2, '2014_10_12_100000_create_password_resets_table', 2),
(3, '2019_08_19_000000_create_failed_jobs_table', 2),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(5, '2023_01_09_174904_category', 2),
(6, '2023_01_09_174939_company', 2),
(7, '2023_01_09_174940_product', 2),
(8, '2023_01_09_174959_export_bill', 2),
(9, '2023_01_09_175021_import_bill', 2),
(10, '2023_01_10_043923_create_projects_table', 3);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `persistences`
--

DROP TABLE IF EXISTS `persistences`;
CREATE TABLE IF NOT EXISTS `persistences` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `persistences_code_unique` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `persistences`
--

INSERT INTO `persistences` (`id`, `user_id`, `code`, `created_at`, `updated_at`) VALUES
(1, 2, 'L2JqcgkAuYVX4TWVqKyg44LsLd2A3vC7', '2023-01-10 05:10:59', '2023-01-10 05:10:59'),
(2, 2, 'qaeu4AGqSK4ByA6Qoo2dglne3hy60DCP', '2023-01-10 06:20:11', '2023-01-10 06:20:11'),
(3, 2, '45L9gSGvALG0tTtCcUksV7Or81znwDJX', '2023-01-10 06:31:39', '2023-01-10 06:31:39'),
(5, 2, 'MAumWJh7xGIv7x0xsoiLuEGVLLCWngQK', '2023-01-10 11:25:51', '2023-01-10 11:25:51'),
(6, 2, 'qqemoNsPdU5HSAuRXbqhITxBRQTWC7Us', '2023-01-10 19:04:44', '2023-01-10 19:04:44'),
(7, 5, 'Ox9AwnpvFRkG4AAIKaJYSv2VzJOxIyAz', '2023-01-11 00:26:04', '2023-01-11 00:26:04'),
(8, 2, 'Ph1rC8oBn0uXfpT99ODuSPxIE6ePuvOM', '2023-01-11 00:30:02', '2023-01-11 00:30:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `idCompany` int(10) UNSIGNED NOT NULL,
  `idCategory` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_idcompany_foreign` (`idCompany`),
  KEY `product_idcategory_foreign` (`idCategory`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `quantity`, `idCompany`, `idCategory`, `created_at`, `updated_at`) VALUES
(1, 'Sam Sung A12', 120000, 123333, 1, 1, NULL, NULL),
(4, 'hallo', 1243, 1231, 1, 1, '2023-01-11 01:17:12', '2023-01-11 02:48:58');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE IF NOT EXISTS `projects` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `reminders`
--

DROP TABLE IF EXISTS `reminders`;
CREATE TABLE IF NOT EXISTS `reminders` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `completed` tinyint(1) NOT NULL DEFAULT 0,
  `completed_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `roles_slug_unique` (`slug`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `slug`, `name`, `permissions`, `created_at`, `updated_at`) VALUES
(4, 'admin', 'admin', NULL, NULL, NULL),
(5, 'admin1', 'admin1', NULL, NULL, NULL),
(7, 'admin11', 'admin12', NULL, '2023-01-11 04:01:19', '2023-01-11 04:01:19'),
(13, 'admintest', 'admintest', NULL, '2023-01-11 04:01:48', '2023-01-11 04:01:48');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_users`
--

DROP TABLE IF EXISTS `role_users`;
CREATE TABLE IF NOT EXISTS `role_users` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `role_users`
--

INSERT INTO `role_users` (`user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(2, 4, NULL, NULL),
(6, 4, '2023-01-11 00:30:37', '2023-01-11 00:30:37'),
(7, 4, '2023-01-11 02:49:36', '2023-01-11 02:49:36'),
(10, 13, '2023-01-11 04:16:49', '2023-01-11 04:16:49');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `throttle`
--

DROP TABLE IF EXISTS `throttle`;
CREATE TABLE IF NOT EXISTS `throttle` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `throttle_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `permissions`, `last_login`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(2, 'manhhung311@gmail.com', '$2y$10$m//LvIRojNMJTKMFB9S4qesGlQBTPrtRfpHSkKaOTv2egkLJvda.C', NULL, '2023-01-11 00:30:02', 'mạnh', 'hùng', '2023-01-10 05:01:46', '2023-01-11 00:30:02'),
(7, 'hello@admin.com', '$2y$10$3lBw7hITEEegG3aEQw8OPupvHQ2l4IsqfgY9hzOX.hkOEj7hTH1fS', NULL, NULL, NULL, NULL, '2023-01-11 02:49:36', '2023-01-11 02:49:36'),
(10, 'admin@admin.com', '$2y$10$iStnj6ncFmU72OOlCHOOfuIAvLSKaXQ3g6x8pR41FZo27fUFCJDd2', NULL, NULL, 'Admin', ' ', '2023-01-11 04:16:48', '2023-01-11 04:16:48');

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `export_bill`
--
ALTER TABLE `export_bill`
  ADD CONSTRAINT `export_bill_idproduct_foreign` FOREIGN KEY (`idProduct`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `export_bill_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `import_bill`
--
ALTER TABLE `import_bill`
  ADD CONSTRAINT `import_bill_idproduct_foreign` FOREIGN KEY (`idProduct`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `import_bill_iduser_foreign` FOREIGN KEY (`idUser`) REFERENCES `users` (`id`);

--
-- Các ràng buộc cho bảng `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_idcategory_foreign` FOREIGN KEY (`idCategory`) REFERENCES `category` (`id`),
  ADD CONSTRAINT `product_idcompany_foreign` FOREIGN KEY (`idCompany`) REFERENCES `company` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
