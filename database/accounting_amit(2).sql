-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2024 at 08:05 AM
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
  `branch_code` varchar(255) DEFAULT NULL,
  `parent_branch` varchar(255) DEFAULT NULL,
  `opening_time` time DEFAULT NULL,
  `closing_time` time DEFAULT NULL,
  `branch_address` varchar(500) NOT NULL,
  `branch_district` varchar(255) DEFAULT NULL,
  `branch_zipcode` varchar(10) DEFAULT NULL,
  `contact_person_name` varchar(15) DEFAULT NULL,
  `branch_contact_number` varchar(15) DEFAULT NULL,
  `branch_land_line` varchar(15) DEFAULT NULL,
  `branch_whatsapp` varchar(15) DEFAULT NULL,
  `branch_email` varchar(255) DEFAULT NULL,
  `branch_logo` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`id`, `branch_name`, `branch_code`, `parent_branch`, `opening_time`, `closing_time`, `branch_address`, `branch_district`, `branch_zipcode`, `contact_person_name`, `branch_contact_number`, `branch_land_line`, `branch_whatsapp`, `branch_email`, `branch_logo`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Afrin Qbit', 'AFR-24841', '7', NULL, NULL, 'Bashaboo', 'Dhaka', '1000', NULL, NULL, NULL, NULL, NULL, 'uploads/branch_logos/9RIkLD8el2xluPpCF3mPQFrUjxU4AzLamafhuoDb.jpg', 1, '2024-12-09 00:18:11', '2024-12-09 00:51:42'),
(7, 'Qbit Tech Shahjahanpur', 'QBI-24655', NULL, NULL, NULL, 'Shsahjahanpur', 'Dhaka', '1204', NULL, NULL, NULL, NULL, NULL, 'uploads/branch_logos/oo95ZaRBpEZLslC9HpYOWG1mFnRywfAYXEsv1J5u.png', 1, '2024-12-09 00:19:02', '2024-12-09 00:43:11'),
(8, 'Coop Shonirakhra', 'COO-24803', NULL, NULL, NULL, 'Shoniar Akhra', 'Dhaka', '1000', NULL, NULL, NULL, NULL, NULL, 'uploads/branch_logos/fPJA9KdaiYfK7bV72cKfelbuZRlPZWMQrf7inBxU.png', 0, '2024-12-09 00:20:45', '2024-12-09 00:53:12');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_short_name` varchar(255) DEFAULT NULL,
  `company_address` text NOT NULL,
  `company_district` varchar(255) DEFAULT NULL,
  `company_zip_code` varchar(255) DEFAULT NULL,
  `company_code` varchar(255) DEFAULT NULL,
  `company_registration_number` varchar(255) DEFAULT NULL,
  `company_logo` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `company_contact_number` varchar(255) DEFAULT NULL,
  `company_land_line` varchar(255) DEFAULT NULL,
  `company_whatsapp_number` varchar(255) DEFAULT NULL,
  `company_email` varchar(255) DEFAULT NULL,
  `company_website` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `company_name`, `company_short_name`, `company_address`, `company_district`, `company_zip_code`, `company_code`, `company_registration_number`, `company_logo`, `status`, `company_contact_number`, `company_land_line`, `company_whatsapp_number`, `company_email`, `company_website`, `created_at`, `updated_at`) VALUES
(13, 'Qbit Tech', 'Qbit', 'Shahjahanpur', 'Dhaka', '1205', NULL, '55555', 'uploads/company_logos/ld2OS63wFmzyTy3He5fb6ROKPtAF3jcs660NYqcp.png', 1, NULL, NULL, NULL, NULL, NULL, '2024-12-09 00:13:13', '2024-12-09 00:13:28'),
(14, 'Coop Technology', 'Coop', 'Motijheel', 'Dhaka', '1000', 'COO-24626', NULL, 'uploads/company_logos/vHosJueDe3KTd4OcZqWdARlWcUJ1hHwTaAx2zfD9.png', 0, NULL, NULL, NULL, NULL, NULL, '2024-12-09 00:14:12', '2024-12-09 00:14:12');

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
(6, 'Check Mate', 'CHE-24371', 0, '2024-12-09 00:58:16', '2024-12-09 00:58:51'),
(7, 'Book Management', 'BOO-24505', 1, '2024-12-09 00:58:24', '2024-12-09 00:58:24'),
(8, 'Hotel Management', 'HOT-24766', 0, '2024-12-09 00:58:34', '2024-12-09 00:59:06'),
(9, 'Car Parking', 'CAR-24451', 1, '2024-12-09 00:58:40', '2024-12-09 00:58:40'),
(10, 'Rental Management', 'REN-24538', 1, '2024-12-09 00:58:48', '2024-12-09 00:58:48');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
