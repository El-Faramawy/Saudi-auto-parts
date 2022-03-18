-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 18, 2022 at 09:45 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `saudi_auto_parts`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password_reset` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `image`, `phone`, `email_verified_at`, `password_reset`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@admin.com', '/storage/uploads/admins/YmcxLmpwZw==_1647508397.jpg', '01026638997', NULL, NULL, '$2y$10$neoTdqm9PymMH6g8wV9Q6e0L96WNwbu0W9QYNZCV2vkXToYKeQGiK', NULL, NULL, '2022-03-17 07:13:17'),
(7, 'Ahmed Samir', 'admin3@admin.com', 'storage/uploads/admins/1647507618--MTY0NzUwNzYxOC1RV2h0WldRZ1UyRnRhWEk9.png', '201004834728', NULL, NULL, '$2y$10$3AUh2fhGulJ4NrxoWI73CeUep7Un8of4XVUC1GwdgoSO6pMIIN/da', NULL, '2022-03-17 06:59:55', '2022-03-17 07:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `chatgroubs`
--

CREATE TABLE `chatgroubs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `offer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `lastmessage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timeoflastmessage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `text` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deletorno` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `kindofsender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `text`, `image`, `deletorno`, `offer_id`, `kindofsender`, `product_id`, `user_id`, `company_id`, `state`, `created_at`, `updated_at`) VALUES
(1, '', 'storage/uploads/users/1647453168--MTY0NzQ1MzE2OC1RV2h0WldRZ1UyRnRhWEk9.png', NULL, 1, 'user', 1, 4, 14, '', '2022-02-10 17:15:21', NULL),
(2, 'b', '/storage/uploads/users/U2NyZWVuc2hvdCAyMDIyLTAzLTEwIDE1MzgxOC5wbmc=_1647455608.png', NULL, 1, 'company', 1, 4, 14, '', '2022-02-10 17:12:10', NULL),
(3, 'c', '/storage/uploads/users/U2NyZWVuc2hvdCAyMDIyLTAzLTEwIDE1MzgxOC5wbmc=_1647455608.png', NULL, 1, 'user', 1, 4, 14, '', '2022-03-18 19:30:58', NULL),
(4, 'd', '/storage/uploads/users/U2NyZWVuc2hvdCAyMDIyLTAzLTEwIDE1MzgxOC5wbmc=_1647455608.png', NULL, 1, 'user', 1, 4, 14, '', '2022-03-18 19:41:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_02_18_120145_create_users_apps_table', 1),
(6, '2022_02_18_133927_create_products_table', 1),
(7, '2022_02_18_141553_create_offers_table', 1),
(8, '2022_02_20_194902_create_messages_table', 1),
(9, '2022_03_02_224119_create_ratings_table', 1),
(10, '2022_03_03_002951_create_chatgroubs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `offer` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `company_id` bigint(20) UNSIGNED DEFAULT NULL,
  `State` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastmessage` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numofmessage` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `offer`, `product_id`, `user_id`, `company_id`, `State`, `lastmessage`, `numofmessage`, `created_at`, `updated_at`) VALUES
(1, '300 le off', 1, 5, 15, 'new', NULL, '', NULL, NULL),
(2, '400 le off', 1, 5, 15, 'accepted', NULL, '', NULL, NULL),
(3, '500 le off', 1, 5, 15, 'done', NULL, '', NULL, NULL),
(4, '600 le off', 1, 5, 15, 'new', NULL, '', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `images` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vedio` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vedio2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kind` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `model` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `describtion` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `images`, `vedio`, `vedio2`, `user_id`, `name`, `kind`, `model`, `color`, `describtion`, `created_at`, `updated_at`) VALUES
(1, 'storage/uploads/users/1647453168--MTY0NzQ1MzE2OC1RV2h0WldRZ1UyRnRhWEk9.png,/storage/uploads/users/U2NyZWVuc2hvdCAyMDIyLTAzLTEwIDE1MzgxOC5wbmc=_1647455608.png,storage/uploads/users/1647453168--MTY0NzQ1MzE2OC1RV2h0WldRZ1UyRnRhWEk9.png,/storage/uploads/users/U2NyZWVuc2hvdCAyMDIyLTAzLTEwIDE1MzgxOC5wbmc=_1647455608.png', 'v1.mp4', 'v1.mp4', 5, 'p1', NULL, '123', 'red', 'aaaaa', NULL, NULL),
(3, NULL, 'v1', 'v2', 5, 'p3', NULL, '123', 'red', 'aaaaa', NULL, NULL),
(4, NULL, 'v1', 'v2', 5, 'p4', NULL, '123', 'red', 'aaaaa', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `des` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `userproduct` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users_apps`
--

CREATE TABLE `users_apps` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `Token` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Active` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Kind` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `numofrating` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Commercial_Register` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagecommercial` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `imagebank` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users_apps`
--

INSERT INTO `users_apps` (`id`, `Token`, `Active`, `Kind`, `image`, `name`, `rate`, `numofrating`, `phone`, `city`, `Commercial_Register`, `imagecommercial`, `imagebank`, `Password`, `created_at`, `updated_at`) VALUES
(4, NULL, 'true', 'user', 'storage/uploads/users/1647453168--MTY0NzQ1MzE2OC1RV2h0WldRZ1UyRnRhWEk9.png', 'Ahmed Samir', NULL, NULL, '6464', 'المنوفية', NULL, NULL, NULL, '123456', '2022-03-16 15:52:48', '2022-03-16 15:52:48'),
(5, NULL, 'true', 'user', 'storage/uploads/users/1647454053--MTY0NzQ1NDA1My1RV2h0WldRZ1UyRnRhWEk9.png', 'Ahmed Samir', NULL, NULL, '01004834728', 'الاسكندرية', NULL, NULL, NULL, '123456', '2022-03-16 16:07:33', '2022-03-16 16:07:33'),
(6, NULL, 'true', 'user', 'storage/uploads/users/1647454176--MTY0NzQ1NDE3Ni1RV2h0WldRZ1UyRnRhWEk9.png', 'Ahmed Samir', NULL, NULL, '1', 'المنوفية', NULL, NULL, NULL, '123456', '2022-03-16 16:09:36', '2022-03-16 16:09:36'),
(7, NULL, 'true', 'user', 'storage/uploads/users/1647454570--MTY0NzQ1NDU3MC1RV2h0WldRZ1UyRnRhWEk9.png', 'Ahmed Samir', NULL, NULL, '123', 'menofia', NULL, NULL, NULL, '123456', '2022-03-16 16:16:10', '2022-03-16 16:16:10'),
(8, NULL, 'true', 'user', '/storage/uploads/users/U2NyZWVuc2hvdCAyMDIyLTAzLTEwIDE1MzgxOC5wbmc=_1647455608.png', 'Ahmed Samir', NULL, NULL, '123', 'menofia', NULL, NULL, NULL, '123456', '2022-03-16 16:33:28', '2022-03-16 16:33:28'),
(9, NULL, 'true', 'user', '/storage/uploads/users/YmcxLmpwZw==_1647508269.jpg', 'Ahmed Samir salah', NULL, NULL, '1111111111', 'menofia', NULL, NULL, NULL, 'dev', '2022-03-16 16:39:57', '2022-03-17 07:11:09'),
(11, NULL, 'true', 'company', '/storage/uploads/users/YmcxLmpwZw==_1647510561.jpg', 'تاجر 1', NULL, NULL, '1235449489', 'menofia egypt', NULL, NULL, NULL, '123456', '2022-03-17 07:48:43', '2022-03-17 07:49:21'),
(13, NULL, 'true', 'company', '/storage/uploads/users/YmcxLmpwZw==_1647510561.jpg', 'شركة 1', NULL, NULL, '1235449489', 'menofia egypt', '123456789', '/storage/uploads/users/YmcxLmpwZw==_1647510561.jpg', '/storage/uploads/users/YmcxLmpwZw==_1647510561.jpg', '123456', '2022-03-17 07:48:43', '2022-03-17 07:49:21'),
(14, NULL, 'true', 'company', '/storage/uploads/users/YmcxLmpwZw==_1647510561.jpg', 'شركة 2', NULL, NULL, '1235449489', 'menofia egypt', '123456789', '/storage/uploads/users/YmcxLmpwZw==_1647510561.jpg', '/storage/uploads/users/YmcxLmpwZw==_1647510561.jpg', '123456', '2022-03-17 07:48:43', '2022-03-17 07:49:21'),
(15, NULL, 'true', 'company', '/storage/uploads/users/YmcxLmpwZw==_1647510561.jpg', 'تاجر 2', NULL, NULL, '1235449489', 'menofia egypt', NULL, NULL, NULL, '123456', '2022-03-17 07:48:43', '2022-03-17 07:49:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `chatgroubs`
--
ALTER TABLE `chatgroubs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `chatgroubs_user_id_foreign` (`user_id`),
  ADD KEY `chatgroubs_company_id_foreign` (`company_id`),
  ADD KEY `chatgroubs_offer_id_foreign` (`offer_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `messages_product_id_foreign` (`product_id`),
  ADD KEY `messages_company_id_foreign` (`company_id`),
  ADD KEY `messages_offer_id_foreign` (`offer_id`),
  ADD KEY `messages_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `offers_product_id_foreign` (`product_id`),
  ADD KEY `offers_company_id_foreign` (`company_id`),
  ADD KEY `offers_user_id_foreign` (`user_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `products_user_id_foreign` (`user_id`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_product_id_foreign` (`product_id`),
  ADD KEY `ratings_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_apps`
--
ALTER TABLE `users_apps`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `chatgroubs`
--
ALTER TABLE `chatgroubs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users_apps`
--
ALTER TABLE `users_apps`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chatgroubs`
--
ALTER TABLE `chatgroubs`
  ADD CONSTRAINT `chatgroubs_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chatgroubs_offer_id_foreign` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `chatgroubs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `users_apps` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_offer_id_foreign` FOREIGN KEY (`offer_id`) REFERENCES `offers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `messages_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users_apps` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `offers`
--
ALTER TABLE `offers`
  ADD CONSTRAINT `offers_company_id_foreign` FOREIGN KEY (`company_id`) REFERENCES `users_apps` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `offers_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `offers_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users_apps` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users_apps` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
