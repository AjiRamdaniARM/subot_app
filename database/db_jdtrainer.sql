-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2024 at 07:41 AM
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
-- Database: `db_jdtrainer`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_sekolahs`
--

CREATE TABLE `data_sekolahs` (
  `id` int(11) NOT NULL,
  `id_sekolah` varchar(255) NOT NULL,
  `sekolah` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_sekolahs`
--

INSERT INTO `data_sekolahs` (`id`, `id_sekolah`, `sekolah`, `alamat`, `updated_at`, `created_at`) VALUES
(13, 'SMK-66988cb429740', 'SMK Terpadu Ibaadurrahman', NULL, '2024-07-17 20:32:04', '2024-07-17 20:32:04'),
(14, 'SMK-66989659473ca', 'SMKN 1 JAKARTA', NULL, '2024-07-17 21:13:13', '2024-07-17 21:13:13'),
(15, 'SMK-669897b094a1c', 'SMK Terpadu Ibaadurrahman', NULL, '2024-07-17 21:18:56', '2024-07-17 21:18:56'),
(16, 'SMK-6698a8e471777', 'SMK Terpadu Ibaadurrahman', NULL, '2024-07-17 22:32:20', '2024-07-17 22:32:20'),
(17, 'SMK-6698a95a6e92d', 'SMK Terpadu Ibaadurrahman', NULL, '2024-07-17 22:34:18', '2024-07-17 22:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `data_siswas`
--

CREATE TABLE `data_siswas` (
  `id` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `tl` text NOT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `id_sekolah` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `nama_ortu` varchar(255) NOT NULL,
  `work_ortu` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_siswas`
--

INSERT INTO `data_siswas` (`id`, `nama_lengkap`, `tl`, `tanggal_lahir`, `id_sekolah`, `kelas`, `nama_ortu`, `work_ortu`, `alamat`, `telephone`, `updated_at`, `created_at`) VALUES
(12, 'Aji Ramdani', 'Sukabumi', '2024-07-18', 'SMK-66988cb429740', '13', 'qwq', 'asa', 'Kp. Sampora', '089508742700', '2024-07-17 20:32:04', '2024-07-17 20:32:04'),
(13, 'Anisa Rahmah', 'Jakarta', '2024-07-18', 'SMK-66989659473ca', '10', 'solihin', 'PNS', 'Kp. Sampora', '089508742700', '2024-07-17 21:13:13', '2024-07-17 21:13:13'),
(14, 'Aziz', 'Sukabumi', '2024-07-09', 'SMK-669897b094a1c', '13', 'asasa', 'asasa', 'Kp. Sampora', '085216657237', '2024-07-17 21:18:56', '2024-07-17 21:18:56'),
(15, 'naruto', 'Sukabumi', '2004-11-19', 'SMK-6698a8e471777', '13', 'asasa', 'asasas', 'Kp. Sampora', '089508742700', '2024-07-17 22:32:20', '2024-07-17 22:32:20'),
(16, 'aboyy', 'Sukabumi', '2004-11-19', 'SMK-6698a95a6e92d', '13', 'asasa', 'asas', 'Kp. Sampora', '085216657237', '2024-07-17 22:34:18', '2024-07-17 22:34:18');

-- --------------------------------------------------------

--
-- Table structure for table `data_trainers`
--

CREATE TABLE `data_trainers` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `ktp_file` text NOT NULL,
  `alamat` text NOT NULL,
  `lulusan` varchar(255) NOT NULL,
  `telephone` varchar(15) NOT NULL,
  `profile` text NOT NULL,
  `ttd` text NOT NULL,
  `id_card` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `data_trainers`
--

INSERT INTO `data_trainers` (`id`, `nama`, `ktp_file`, `alamat`, `lulusan`, `telephone`, `profile`, `ttd`, `id_card`, `updated_at`, `created_at`) VALUES
(7, 'Asep Saeban', 'ktp_Aji Ramdani.webp', 'Jl. Pelabuhan II', 'SMK Ulul Albab Sukabumi', '089508742700', 'Profile_Asep Saeban.jpg', 'Ttd_Asep Saeban.png', 'AJI-668e5739277fc', '2024-07-16 00:26:57', '2024-07-10 02:41:13');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` enum('admin','trainer') NOT NULL DEFAULT 'trainer',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'admin', 'adminjd@gmail.com', 'admin', NULL, '$2y$10$4yevXQ.hNWDjaLLkxPWvtO0S13TzD5RY1V6Ntnnu6FHgv1DY3.Ytu', NULL, '2024-07-08 01:50:21', '2024-07-08 01:50:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_sekolahs`
--
ALTER TABLE `data_sekolahs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `data_siswas`
--
ALTER TABLE `data_siswas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_sekolah` (`id_sekolah`);

--
-- Indexes for table `data_trainers`
--
ALTER TABLE `data_trainers`
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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_sekolahs`
--
ALTER TABLE `data_sekolahs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `data_siswas`
--
ALTER TABLE `data_siswas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `data_trainers`
--
ALTER TABLE `data_trainers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
