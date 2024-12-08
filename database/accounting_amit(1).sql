-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2024 at 01:43 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `accounting_amit`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_name` varchar(255) NOT NULL,
  `branch_code` varchar(255) NOT NULL,
  `parent_branch` varchar(255) DEFAULT NULL,
  `opening_time` time NOT NULL,
  `closing_time` time NOT NULL,
  `branch_address` varchar(500) DEFAULT NULL,
  `branch_district` varchar(255) DEFAULT NULL,
  `branch_zipcode` varchar(10) DEFAULT NULL,
  `contact_person_name` varchar(15) NOT NULL,
  `branch_contact_number` varchar(15) NOT NULL,
  `branch_land_line` varchar(15) DEFAULT NULL,
  `branch_whatsapp` varchar(15) NOT NULL,
  `branch_email` varchar(255) NOT NULL,
  `branch_logo` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_name`, `branch_code`, `parent_branch`, `opening_time`, `closing_time`, `branch_address`, `branch_district`, `branch_zipcode`, `contact_person_name`, `branch_contact_number`, `branch_land_line`, `branch_whatsapp`, `branch_email`, `branch_logo`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Judah Bennett', 'Officiis sequi facil', NULL, '22:50:00', '01:28:00', 'Recusandae Temporib', 'Minim in dolorem', '30755', 'Elmo Fischer', '6778272', '486758', '1785785', 'walu@mailinator.com', 'uploads/branch_logos/5TCMvGdUvUOorQfi6L5F1h0rErUrqo238WTFv5XO.png', 1, '2024-12-08 01:09:25', '2024-12-08 04:43:08'),
(2, 'Dhak qbi tech', '24657', NULL, '10:00:00', '18:00:00', 'gopibagh', 'Dhaka', '1000', '123698547', '14523698701', NULL, '259655999555', 'beamil@gmail.com', 'uploads/branch_logos/FMYUCQGlNpdMG2MbgsfwoMWUoYyqvvMmlzI3BIcz.png', 1, '2024-12-08 03:32:39', '2024-12-08 04:44:46'),
(3, 'AMit', '678421', '2', '07:00:00', '16:00:00', 'gopibagh', 'dhaka', '1000', '01236547890', '01236547890', NULL, '01236547890', 'beamail@gmail.com', 'uploads/branch_logos/HCWhXpdx6PXZhIosxQL53MvjBOUmWmo6wyWQzHTb.png', 1, '2024-12-08 03:56:03', '2024-12-08 03:56:03'),
(4, 'Afrin', '120424', '1', '07:00:00', '17:00:00', 'basaboo', 'dhaka', '1500', '45461212154545', '45656565669636', '12', '456565895555', 'afrin@gmail.com', 'uploads/branch_logos/bB37VhNfl5Y4ckRNORSRlwkioe090rJa2bgOaXUv.jpg', 0, '2024-12-08 04:38:30', '2024-12-08 05:23:40');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_short_name` varchar(255) DEFAULT NULL,
  `company_address` text DEFAULT NULL,
  `company_district` varchar(255) DEFAULT NULL,
  `company_zip_code` varchar(255) DEFAULT NULL,
  `company_code` varchar(255) NOT NULL,
  `company_registration_number` varchar(255) NOT NULL,
  `company_logo` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `company_contact_number` varchar(255) NOT NULL,
  `company_land_line` varchar(255) DEFAULT NULL,
  `company_whatsapp_number` varchar(255) NOT NULL,
  `company_email` varchar(255) NOT NULL,
  `company_website` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `company_short_name`, `company_address`, `company_district`, `company_zip_code`, `company_code`, `company_registration_number`, `company_logo`, `status`, `company_contact_number`, `company_land_line`, `company_whatsapp_number`, `company_email`, `company_website`, `created_at`, `updated_at`) VALUES
(10, 'Newton Chavez Inc', 'Moon and Rios Inc', 'Ortiz Oneill Co', 'Herrera', '123', '7582752', '78575758', 'uploads/company_logos/cR2BRlrtPKFC9mLgxYQpvWqWk36aAQnDacy3a8u7.png', 1, '75757587', '4254', '5875758875', 'zuqulunyn@mailinator.com', NULL, '2024-12-08 03:30:40', '2024-12-08 04:35:30'),
(11, 'Coop Company', 'Coop', 'coopbd', 'dhaka', '1000', '113753', '895632147', 'uploads/company_logos/nAFY1Kv6pAyTFVV2GJzPtuKYV4vIacEV0atMeQR9.png', 0, '5646516', NULL, '682464', 'coop@gmail.com', NULL, '2024-12-08 04:32:12', '2024-12-08 04:32:12');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2024_12_05_062213_create_companies_table', 2),
(9, '2024_12_08_070509_create_branches_table', 3),
(10, '2024_12_08_114343_create_project_categories_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
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
-- Table structure for table `project_categories`
--

CREATE TABLE `project_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_category_name` varchar(255) NOT NULL,
  `project_category_code` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_categories`
--

INSERT INTO `project_categories` (`id`, `project_category_name`, `project_category_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Amit Roy', '157452', 0, '2024-12-08 05:49:04', '2024-12-08 06:37:58'),
(4, 'Afrin', '789825', 1, '2024-12-08 06:11:30', '2024-12-08 06:11:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `userId`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'superadmin', 'superadmin@mail.com', NULL, '$2y$12$Y8nYVu6JXJG.fQArl2jWcO1ucKxtPeEOprZGXb6mMqYtU2hsjNjpW', NULL, '2024-12-04 03:52:22', '2024-12-04 03:52:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
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
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
