-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 29, 2019 at 06:32 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_hub`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `api_token`, `first_name`, `last_name`, `phone`, `gender`, `dob`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'pavan', 'pavan@gmail.com', NULL, '$2y$10$xGGdjwCi9SpoBavlLwu/JupY0xIHCgJWGGEBjdAH6EtPrev1y6vse', '', NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-28 03:01:22', '2019-11-28 03:01:22'),
(5, 'pavan', 'pavan123@gmail.com', NULL, '$2y$10$798tqIz7/z77MYZyaQGCp.man8irsnO9T8gorF9TjjVHeP1qzwtji', '', NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-28 04:15:28', '2019-11-28 04:15:28'),
(6, 'rttrtr sdfsdf', 'dsdsd@gmail.com', NULL, '$2y$10$wfcqnPIaO63I.tPQ4g4loOKhV4hTp/vh0/biMneYdc/ZLbTfMFeO.', '', NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-28 04:54:41', '2019-11-28 04:54:41'),
(8, 'rttrtr sdfsdf', '123@gmail.com', NULL, '$2y$10$lY/R3KCn4Ap1i/P.JdZQ..t4U6T9EKSEp0rZEWE684YIQI9B.QxrG', '', NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-28 04:55:29', '2019-11-28 04:55:29'),
(9, 'rttrtr sdfsdf', 'qw2@gmail.com', NULL, '$2y$10$eeePjRB/4./Gm7EmydWGb.OwoW05KgFOJP2wCWeWidpuQ0ABGkw1q', '', NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-28 04:56:21', '2019-11-28 04:56:21'),
(10, 'rttrtr sdfsdf', 'qw112@gmail.com', NULL, '$2y$10$5OflGd1DeKMYSxfm5EqJiOU0T6NZw/5ZyY0NpkS7934cfH1OtWOCa', '', NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-28 04:59:47', '2019-11-28 04:59:47'),
(11, 'rttrtr sdfsdf', 'qwasda112@gmail.com', NULL, '$2y$10$n06bn2v/PjgBArfXaB5f8uMvyqAHedzac4lPLZkNR0F6PVXwubh3O', '', NULL, NULL, NULL, NULL, NULL, NULL, '2019-11-28 05:04:01', '2019-11-28 05:04:01'),
(12, 'rttrtr sdfsdf', '78@gmail.com', NULL, '$2y$10$96yUqw7z.iSbeNhsC94DOu1hrTYQv8QjRq4QbEmIdpObPbvvMzUrW', '', 'rttrtr', 'sdfsdf', '1123456', 'male', '10/20/2019', NULL, '2019-11-28 05:06:53', '2019-11-28 05:06:53'),
(13, 'rttrtr sdfsdf', 'qwe1@gmail.com', NULL, '$2y$10$uCxxKZQxLLimkOnq087yU.19g0MvqzNz0msLqiYKr7lCkYxsQ2PBS', NULL, 'rttrtr', 'sdfsdf', '1123456', 'male', '10/20/2019', NULL, '2019-11-28 23:50:26', '2019-11-28 23:50:26'),
(14, 'rttrtr sdfsdf', 'opiu@gmail.com', NULL, '$2y$10$eyf2HIDYcQDNJKdnfNcrD.Guib7BojVY/mt8Su96fQcaPEpxW7nsu', NULL, 'rttrtr', 'sdfsdf', '1123456', 'male', '10/20/2019', NULL, '2019-11-28 23:51:27', '2019-11-28 23:51:27'),
(15, 'rttrtr sdfsdf', 'loyu@gmail.com', NULL, '$2y$10$gGTjIBu6Ng9zEi.Lq0w3du6xN3O/GgAz3cy/bbJ/Kw0B/roh0g3za', NULL, 'rttrtr', 'sdfsdf', '1123456', 'male', '10/20/2019', NULL, '2019-11-28 23:53:33', '2019-11-28 23:53:33'),
(16, 'rttrtr sdfsdf', '1222@gmail.com', NULL, '$2y$10$4aF8mCuskvcpMi.knSQ3LOVhXT0Zb0vKAKNigU35VoVZACRqAuTNe', NULL, 'rttrtr', 'sdfsdf', '1123456', 'male', '10/20/2019', NULL, '2019-11-28 23:54:28', '2019-11-28 23:54:28'),
(17, 'rttrtr sdfsdf', 'dfdfdf@gmail.com', NULL, '$2y$10$9sdVbEPDJWAFyKf1m7ZL4OjNHfcaoTe2ozefo2RrzEaA1a8iEry7G', NULL, 'rttrtr', 'sdfsdf', '1123456', 'male', '10/20/2019', NULL, '2019-11-28 23:58:10', '2019-11-28 23:58:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
