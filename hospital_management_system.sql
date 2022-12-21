-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2022 at 04:39 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital_management_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `user_id` varchar(255) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `name`, `email`, `date`, `time`, `doctor`, `phone`, `message`, `status`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Bappy', 'bappy@gmail.com', '2022-12-07', '15:33', 'Khadiza Akter', '0173551004', 'It is very urgent.', 'Approved', '0', '2022-12-10 00:33:56', '2022-12-10 06:19:54'),
(3, 'Bappy', 'bappy@gmail.com', '2022-12-19', '21:10', 'Mehedi Hassan', '0173551004', 'It\'s very urgent sir', 'Canceled', '1', '2022-12-10 06:10:57', '2022-12-10 06:20:01'),
(4, 'Bappy', 'bappy@gmail.com', '2022-12-20', '19:11', 'Priya Begum', '0173551004', 'Please, give me a serial. I am very ill', 'In progress', '1', '2022-12-10 06:12:11', '2022-12-10 06:12:11'),
(5, 'Hassan', 'hassan@gmai.com', '2022-12-26', '11:12', 'Sumiya Islam', '0173551004', 'He is my brother. He is very ill.', 'In progress', '1', '2022-12-10 06:13:12', '2022-12-10 06:13:12'),
(6, 'Sanjida Mun', 'sanjida@yahoo.com', '2022-12-31', '10:13', 'Priya Begum', '0173551004', 'She is my sister and our serial very urgent.', 'In progress', '1', '2022-12-10 06:14:37', '2022-12-10 06:14:37'),
(7, 'Kalid Khan', 'mdmehedi425@gmail.com', '2022-12-22', '14:59', 'Priya Begum', '+8801950305432', 'Please give me serial', 'In progress', '4', '2022-12-10 14:59:36', '2022-12-10 14:59:36');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `speciality` varchar(255) NOT NULL,
  `room` varchar(255) NOT NULL,
  `week` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `doctor_name`, `phone`, `email`, `speciality`, `room`, `week`, `time`, `address`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Mehedi Hassan', '+8801950305432', 'm@gmail.com', 'skin', '502', 'Sun, Tue, Wed', '10:00 AM to 8:00 PM', 'Masimpur, Dumrakanda, Kuliarchar, Kishoreganj', 'admin/upload_image/images/63361699.jpg', '2022-12-09 10:16:22', '2022-12-09 10:16:22'),
(3, 'Tamal Das', '01679565144', 'tamaldas@gmail.com', 'cardiology', '408', 'Sat, Mon, Thus', '12:30PM to 10:00PM', '72 Helena monjil, Moghbazar wireless, Dhaka', 'admin/upload_image/images/1409905583.jpg', '2022-12-09 11:08:24', '2022-12-09 11:08:24'),
(5, 'Khadiza Akter', '0173551004', 'khadiza@gmail.com', 'heart', '107', 'Sun, Mon, Wed', '9:30AM to 8:00PM', 'Barishal, Bangladesh', 'admin/upload_image/images/1880136061.jpg', '2022-12-09 11:17:31', '2022-12-09 11:17:31'),
(6, 'Sadiya Jahan', '01579128631', 'sadiya@gmail.com', 'heart', '209', 'Sat, Wed, Thus', '1:30PM to 11:00PM', 'Mirpur-10, Dhaka', 'admin/upload_image/images/2046257016.PNG', '2022-12-09 11:21:02', '2022-12-09 11:21:02'),
(7, 'Priya Begum', '01908630589', 'priya@gmail.com', 'cardiology', '114', 'Mon, Tue, Fri', '8:30AM to 5:00PM', 'Rampur, Dhaka', 'admin/upload_image/images/1031489111.png', '2022-12-09 11:37:06', '2022-12-09 11:37:06'),
(8, 'Sumon Kumar', '01593940185', 'sumon@gmail.com', 'heart', '208', 'Sat, Mon, Thus', '12:30PM to 10:00PM', 'Romna, Dhaka, Bangladesh', 'admin/upload_image/images/1536166112.PNG', '2022-12-09 11:41:52', '2022-12-09 22:14:25'),
(9, 'Sumiya Islam', '018769433', 'sumiya@gmail.com', 'skin', '412', 'Sun, Mon, Wed', '8:30AM to 5:00PM', 'Kolkata', 'admin/upload_image/images/1885386497.jpg', '2022-12-10 00:38:02', '2022-12-10 00:38:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_12_09_055351_create_sessions_table', 1),
(9, '2022_12_09_134345_create_doctors_table', 2),
(13, '2022_12_10_050137_create_appointments_table', 3),
(14, '2022_12_10_202200_create_notifications_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('2iRpxo192ncsdHzvz3mESFIbPpg0T7qNqaFltNW9', 4, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36 Edg/108.0.1462.46', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQ0MxUFRWU0Fqb0k0V0IxRDJrWVJ2OUNhSERWSENVYWh1YnFyampFTSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6OTU6Imh0dHA6Ly9sb2NhbGhvc3QvTGFyYXZlbC9Ib21lV29yay8zcmQlMjBwcm9qZWN0L0hvc3BpdGFsX01hbmFnZW1lbnRfU3lzdGVtL3B1YmxpYy9teUFwcG9pbnRtZW50Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NDt9', 1670729851);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) DEFAULT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT '0',
  `image` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `phone`, `email`, `address`, `user_type`, `image`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'user', '01950305432', 'user@gmail.com', 'Masimpur, Dumrakanda, Kuliarchar, Kishoreganj', '0', 'Passport Picture (old).jpg', '2022-12-09 18:03:55', '$2y$10$F.N054ZtSYZnrV/sZW.Dy.BFqzOQE0J2/6vNkHSwgXFtdkTpf8tEu', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-09 00:11:24', '2022-12-09 00:11:24'),
(2, 'admin', '01313739333', 'admin@gmail.com', '72 Helena monjil, Moghbazar wireless, Dhaka', '1', 'Passport Picture(new).jpg', '2022-12-09 18:03:27', '$2y$10$6o7w6JuCDbQlG/GOAMOvaesxUaxePkAkVhumGePW8zhIUJ226eqN.', NULL, NULL, NULL, NULL, NULL, NULL, '2022-12-09 00:12:29', '2022-12-09 00:12:29'),
(4, 'Mehedi Hassan', '+8801950305432', 'mdmehedi425@gmail.com', '72 Helena monjil, Moghbazar wireless, Dhaka', '0', 'Passport Picture(new).jpg', '2022-12-10 12:00:55', '$2y$10$lsgZd1p4BJwWKh7h32PEdOaMCC7S20RV8CGOQc9tzLOPDFSgcX3jO', NULL, NULL, NULL, 'pqvC6RSvNoQ6nVHkIB8ixk7d7T0DBGKmTADW0g12YHrxDLpoLGt0L3nT303G', NULL, NULL, '2022-12-10 11:58:53', '2022-12-10 12:06:52');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
