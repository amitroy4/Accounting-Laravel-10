-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2024 at 08:46 AM
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
-- Table structure for table `currency_types`
--

CREATE TABLE `currency_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `currency_name` varchar(255) NOT NULL,
  `currency_short_name` varchar(255) DEFAULT NULL,
  `currency_code` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currency_types`
--

INSERT INTO `currency_types` (`id`, `currency_name`, `currency_short_name`, `currency_code`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Taka', 'BDT', 'TAK-24599', 1, '2024-12-09 01:30:14', '2024-12-10 02:00:28'),
(3, 'Dollar', 'USD', 'DOL-24309', 1, '2024-12-09 01:50:21', '2024-12-09 02:03:19'),
(4, 'Rupee', 'RS', 'RUP-24769', 1, '2024-12-11 00:21:10', '2024-12-11 00:21:10'),
(5, 'EURO', 'STR', 'EUR-24611', 1, '2024-12-11 00:22:38', '2024-12-11 00:22:38');

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
-- Table structure for table `funding_organizations`
--

CREATE TABLE `funding_organizations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `funding_organization_name` varchar(255) NOT NULL,
  `organization_address` varchar(255) NOT NULL,
  `organization_code` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `donor_type` int(11) DEFAULT NULL,
  `organization_contact_number` varchar(255) DEFAULT NULL,
  `organization_email` varchar(255) DEFAULT NULL,
  `organization_website` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `contact_person_name` varchar(255) DEFAULT NULL,
  `contact_person_designation` varchar(255) DEFAULT NULL,
  `contact_person_number` varchar(255) DEFAULT NULL,
  `contact_person_whatsapp_number` varchar(255) DEFAULT NULL,
  `contact_person_email` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `funding_organizations`
--

INSERT INTO `funding_organizations` (`id`, `funding_organization_name`, `organization_address`, `organization_code`, `country`, `donor_type`, `organization_contact_number`, `organization_email`, `organization_website`, `status`, `contact_person_name`, `contact_person_designation`, `contact_person_number`, `contact_person_whatsapp_number`, `contact_person_email`, `created_at`, `updated_at`) VALUES
(15, 'BONDHAOn', 'jhvbguylkb', 'BON-24419', 'AF', 1, '561465', 'bondhon@gmail.com', 'bondhon.org', 1, 'Amit', 'CEO', '65849849', '496469', 'amit@gmail.com', '2024-12-11 00:11:59', '2024-12-11 00:14:41'),
(16, 'Preston and Sweet Plc', 'Leach Gordon Associates', NULL, 'SJ', 2, '52742', 'rege@mailinator.com', 'Herring Cleveland Trading', 1, 'August Barr', 'Deserunt pariatur S', '564', '245', 'kipuj@mailinator.com', '2024-12-11 00:17:59', '2024-12-11 00:17:59'),
(17, 'Kirby and Newton Associ', 'Marsh and Albert Co', 'KIR-24720', 'AT', 2, '654654', 'totil@mailinator.com', 'Coleman Kirby Associates', 1, 'Donna Chambers', 'Nisi quo voluptas un', '730', '506', 'lilycyj@mailinator.com', '2024-12-11 00:19:10', '2024-12-11 00:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `funding_organization_documents`
--

CREATE TABLE `funding_organization_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `funding_organization_id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `funding_organization_documents`
--

INSERT INTO `funding_organization_documents` (`id`, `funding_organization_id`, `file_name`, `file_path`, `created_at`, `updated_at`) VALUES
(44, 15, '1733897743_primiyam-harivangoa-am_0.jpg', 'uploads/fundingorganizationdocuments/1733897743_primiyam-harivangoa-am_0.jpg', '2024-12-11 00:15:43', '2024-12-11 00:15:43'),
(45, 16, '1733897879_label.pdf', 'uploads/fundingorganizationdocuments/1733897879_label.pdf', '2024-12-11 00:17:59', '2024-12-11 00:17:59'),
(46, 16, '1733897879_Pen1003Acopy.jpg', 'uploads/fundingorganizationdocuments/1733897879_Pen1003Acopy.jpg', '2024-12-11 00:17:59', '2024-12-11 00:17:59'),
(47, 17, '1733897950_label.pdf', 'uploads/fundingorganizationdocuments/1733897950_label.pdf', '2024-12-11 00:19:10', '2024-12-11 00:19:10'),
(48, 17, '1733897950_Pen1003Acopy.jpg', 'uploads/fundingorganizationdocuments/1733897950_Pen1003Acopy.jpg', '2024-12-11 00:19:10', '2024-12-11 00:19:10');

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
(10, '2024_12_08_114343_create_project_categories_table', 4),
(11, '2024_12_09_072732_create_currency_types_table', 5),
(12, '2024_12_09_092900_create_funding_organizations_table', 6),
(13, '2024_12_09_092927_create_funding_organization_documents_table', 6),
(21, '2024_12_10_095657_create_projects_table', 7),
(22, '2024_12_10_100315_create_project_fundings_table', 8),
(23, '2024_12_10_100115_create_project_approval_documents_table', 9);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_short_name` varchar(255) DEFAULT NULL,
  `project_code` varchar(255) DEFAULT NULL,
  `parent_project_id` bigint(20) UNSIGNED DEFAULT NULL,
  `project_area` varchar(255) DEFAULT NULL,
  `project_category` varchar(255) DEFAULT NULL,
  `project_budget` decimal(10,2) DEFAULT NULL,
  `currency_type` varchar(255) DEFAULT NULL,
  `is_core` tinyint(1) NOT NULL DEFAULT 1,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `project_start_date` date DEFAULT NULL,
  `project_end_date` date DEFAULT NULL,
  `approval_type` varchar(255) DEFAULT NULL,
  `project_approval_authority` varchar(255) DEFAULT NULL,
  `approval_reference_number` varchar(255) DEFAULT NULL,
  `approval_date` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_name`, `project_short_name`, `project_code`, `parent_project_id`, `project_area`, `project_category`, `project_budget`, `currency_type`, `is_core`, `status`, `project_start_date`, `project_end_date`, `approval_type`, `project_approval_authority`, `approval_reference_number`, `approval_date`, `created_at`, `updated_at`) VALUES
(8, 'Building Making', 'MKD', 'BUI-24554', NULL, 'Dhaka, Bangladesh', '8', 200000.00, '1', 0, 1, '2024-12-11', '2025-02-21', NULL, 'Amit Roy', '1235465', '2024-12-11', '2024-12-11 00:24:33', '2024-12-11 01:25:34'),
(9, 'Room Making', 'RMD', 'ROO-24341', 8, 'Dhaka', '8', 20000.00, '1', 1, 1, '2024-12-11', NULL, NULL, NULL, NULL, NULL, '2024-12-11 00:26:20', '2024-12-11 00:26:20'),
(10, 'Kitchen Making', 'KMD', 'KIT-24731', 9, 'Dhaka', '8', 10000.00, '1', 1, 1, '2024-12-13', NULL, NULL, NULL, NULL, NULL, '2024-12-11 00:27:10', '2024-12-11 01:25:37'),
(11, 'UNCHUNG BUNG', 'UCB', 'UNC-24450', NULL, 'China', '10', 200000.00, '5', 0, 0, '2024-12-26', '2025-02-14', NULL, 'menf', '852631', '2024-12-11', '2024-12-11 00:30:20', '2024-12-11 01:35:55');

-- --------------------------------------------------------

--
-- Table structure for table `project_approval_documents`
--

CREATE TABLE `project_approval_documents` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) NOT NULL,
  `file_path` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_approval_documents`
--

INSERT INTO `project_approval_documents` (`id`, `project_id`, `file_name`, `file_path`, `created_at`, `updated_at`) VALUES
(11, 11, '1733898620_logo.png', 'uploads/projectapprovaldocuments/1733898620_logo.png', '2024-12-11 00:30:20', '2024-12-11 00:30:20'),
(12, 11, '1733898620_measurement-men.jpg', 'uploads/projectapprovaldocuments/1733898620_measurement-men.jpg', '2024-12-11 00:30:20', '2024-12-11 00:30:20'),
(13, 11, '1733902444_label.pdf', 'uploads/projectapprovaldocuments/1733902444_label.pdf', '2024-12-11 01:34:04', '2024-12-11 01:34:04'),
(15, 8, '1733902627_collection_71.pdf', 'uploads/projectapprovaldocuments/1733902627_collection_71.pdf', '2024-12-11 01:37:07', '2024-12-11 01:37:07');

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
(6, 'Check Mate', 'CHE-24371', 1, '2024-12-09 00:58:16', '2024-12-10 01:04:13'),
(7, 'Book Management', 'BOO-24505', 0, '2024-12-09 00:58:24', '2024-12-10 01:04:24'),
(8, 'Hotel Management', 'HOT-24766', 1, '2024-12-09 00:58:34', '2024-12-10 01:04:16'),
(9, 'Car Parking', 'CAR-24451', 0, '2024-12-09 00:58:40', '2024-12-10 01:04:28'),
(10, 'Rental Management', 'REN-24538', 1, '2024-12-09 00:58:48', '2024-12-09 00:58:48');

-- --------------------------------------------------------

--
-- Table structure for table `project_fundings`
--

CREATE TABLE `project_fundings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `funding_organization_id` bigint(20) UNSIGNED DEFAULT NULL,
  `funded_percentage` decimal(5,2) DEFAULT NULL,
  `funded_amount` decimal(15,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_fundings`
--

INSERT INTO `project_fundings` (`id`, `project_id`, `funding_organization_id`, `funded_percentage`, `funded_amount`, `created_at`, `updated_at`) VALUES
(11, 8, 15, 60.00, 120000.00, '2024-12-11 00:24:33', '2024-12-11 00:24:33'),
(12, 8, 16, 20.00, 40000.00, '2024-12-11 00:24:33', '2024-12-11 00:24:33'),
(13, 8, 17, 20.00, 40000.00, '2024-12-11 00:24:33', '2024-12-11 00:24:33'),
(14, 9, 17, 100.00, 20000.00, '2024-12-11 00:26:20', '2024-12-11 00:26:20'),
(15, 10, 16, 100.00, 10000.00, '2024-12-11 00:27:10', '2024-12-11 00:27:10'),
(16, 11, 15, 100.00, 200000.00, '2024-12-11 00:30:20', '2024-12-11 00:30:20');

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
-- Indexes for table `currency_types`
--
ALTER TABLE `currency_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `funding_organizations`
--
ALTER TABLE `funding_organizations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `funding_organization_documents`
--
ALTER TABLE `funding_organization_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `funding_organization_documents_funding_organization_id_foreign` (`funding_organization_id`);

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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_approval_documents`
--
ALTER TABLE `project_approval_documents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_approval_documents_project_id_foreign` (`project_id`);

--
-- Indexes for table `project_categories`
--
ALTER TABLE `project_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_fundings`
--
ALTER TABLE `project_fundings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `project_fundings_project_id_foreign` (`project_id`),
  ADD KEY `project_fundings_funding_organization_id_foreign` (`funding_organization_id`);

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
-- AUTO_INCREMENT for table `currency_types`
--
ALTER TABLE `currency_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `funding_organizations`
--
ALTER TABLE `funding_organizations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `funding_organization_documents`
--
ALTER TABLE `funding_organization_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `project_approval_documents`
--
ALTER TABLE `project_approval_documents`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `project_categories`
--
ALTER TABLE `project_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `project_fundings`
--
ALTER TABLE `project_fundings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `funding_organization_documents`
--
ALTER TABLE `funding_organization_documents`
  ADD CONSTRAINT `funding_organization_documents_funding_organization_id_foreign` FOREIGN KEY (`funding_organization_id`) REFERENCES `funding_organizations` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_approval_documents`
--
ALTER TABLE `project_approval_documents`
  ADD CONSTRAINT `project_approval_documents_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_fundings`
--
ALTER TABLE `project_fundings`
  ADD CONSTRAINT `project_fundings_funding_organization_id_foreign` FOREIGN KEY (`funding_organization_id`) REFERENCES `funding_organizations` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_fundings_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
