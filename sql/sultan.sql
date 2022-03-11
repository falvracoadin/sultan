-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2022 at 09:54 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sultan`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_terbit` date NOT NULL,
  `id_staff` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hapus` tinyint(1) NOT NULL DEFAULT 0,
  `pdf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`id`, `nama_artikel`, `deskripsi`, `tanggal_terbit`, `id_staff`, `kategori`, `gambar`, `hapus`, `pdf`, `created_at`, `updated_at`) VALUES
(2, 'artikel 2', '<p>deskripsi artikel 2</p>', '2022-02-01', 1, 'research', 'artikel/oWTDBTiU9eMkBdqgGzuKL5jCapU1bs-metaaGFvLXdhbmctcFZxNllobURQdGstdW5zcGxhc2guanBn-.jpg', 1, NULL, NULL, '2022-03-03 04:58:34'),
(7, 'artikel 3', '<div style=\"text-align: center;\"><strong>ini adalah artikel 3</strong></div>\n<br /><br /><span style=\"font-family: \'comic sans ms\', sans-serif;\">deskripsi artikel 3...</span> kunjungi <a href=\"www.google.com\">google.&trade;</a>', '2022-03-16', 1, 'research', 'artikel/tET8yuLHYHgy0WWYW2iAW60G5aNbLj-metabmF0dXJlLWc4NDhjODU2YjJfMTkyMC5qcGc=-.jpg', 0, NULL, '2022-03-03 04:45:35', '2022-03-03 04:45:35'),
(8, 'artikel 4 terbaru', '<div style=\"text-align: center;\"><strong>artikel 4</strong></div>\n<p><br /><br /><span style=\"font-family: \'comic sans ms\', sans-serif;\">deskripsi artikel 4</span>.... kunjungi <a href=\"www.google.com\">google</a></p>', '2022-03-09', 1, 'research', 'artikel/rCRGWwfeNyVqLmJ1dXkNdipmeQP9eq-metaaGFvLXdhbmctcFZxNllobURQdGstdW5zcGxhc2guanBn-.jpg', 1, NULL, '2022-03-03 04:53:00', '2022-03-07 04:57:18'),
(9, 'artikel 5', '<div style=\"text-align: center;\"><strong>artikel 5</strong></div>\n<br /><br />deskripsi artikel 5..... kunjungi <a href=\"www.google.com\">google.&trade;</a>', '2022-03-23', 1, 'research', 'artikel/qFC6jpcZ3j3D3S6qaBUTIUPNs2XJc9-metaaGFvLXdhbmctcFZxNllobURQdGstdW5zcGxhc2guanBn-.jpg', 0, NULL, '2022-03-03 04:57:16', '2022-03-03 04:57:16'),
(10, 'artikel terbaru', '<div style=\"text-align: center;\"><span style=\"text-decoration: underline; font-family: \'arial black\', sans-serif; font-size: 36pt;\"><em><strong>artikel terbaru</strong></em></span></div>\n<br /><br />deskripsi...', '2022-03-03', 1, 'research', NULL, 1, NULL, '2022-03-07 04:49:26', '2022-03-07 04:55:16'),
(11, 'test', 't', '2222-02-22', 1, 'research', 'artikel/gB14eibX9MGGrc9zdC6MsiSvT60WpM-metaZWx0aS1tZXNoYXUtMlMyRjJleG1iaHctdW5zcGxhc2guanBn-.jpg', 1, NULL, '2022-03-07 04:55:04', '2022-03-07 04:55:21'),
(12, 'artikel baru', '<div style=\"text-align: center;\"><span style=\"text-decoration: line-through; font-size: 36pt;\"><span style=\"text-decoration: underline;\"><em><strong>baru</strong></em></span></span></div>', '2022-03-17', 1, 'research', 'artikel/3JnBIxSrdJBj2zNJuaSjpsK6N9LyUI-metaZWx0aS1tZXNoYXUtMlMyRjJleG1iaHctdW5zcGxhc2guanBn-.jpg', 0, NULL, '2022-03-07 04:57:03', '2022-03-07 04:57:03');

-- --------------------------------------------------------

--
-- Table structure for table `artikel_comments`
--

CREATE TABLE `artikel_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_artikel` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `waktu` datetime NOT NULL,
  `komentar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subjek` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_terjawab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `jawaban` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `nama`, `email`, `subjek`, `deskripsi`, `status_terjawab`, `jawaban`, `created_at`, `updated_at`) VALUES
(1, 'test', 'falvracoadin@gmail.com', 'test', 'test', '1', 'coba tanyakan ke admin.', '2022-03-06 18:35:01', '2022-03-07 05:10:32'),
(2, 'test', 'test@gmail.com', 'test', 'test', '0', NULL, '2022-03-06 18:36:52', '2022-03-06 18:36:52'),
(3, 'test', 'test@gmail.com', 'tanya', 'saya bertanya ...', '0', NULL, '2022-03-07 04:47:24', '2022-03-07 04:47:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `kategori_artikels`
--

CREATE TABLE `kategori_artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_artikels`
--

INSERT INTO `kategori_artikels` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'research', NULL, NULL),
(6, 'science', '2022-03-03 04:46:22', '2022-03-03 04:46:22');

-- --------------------------------------------------------

--
-- Table structure for table `kategori_portofolios`
--

CREATE TABLE `kategori_portofolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kategori_portofolios`
--

INSERT INTO `kategori_portofolios` (`id`, `kategori`, `created_at`, `updated_at`) VALUES
(1, 'research', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kelola_banners`
--

CREATE TABLE `kelola_banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_app` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelola_banners`
--

INSERT INTO `kelola_banners` (`id`, `nama_app`, `deskripsi`, `file`, `created_at`, `updated_at`) VALUES
(1, 'home', 'deskripsi home 2', 'banner/oA2NTR8erm5zLwvS3fmQ9fGuJNJphG-metaZWx0aS1tZXNoYXUtMlMyRjJleG1iaHctdW5zcGxhc2guanBn-.jpg', NULL, '2022-03-07 05:17:36'),
(2, 'portofolio', 'deskripsi portofolio 2', '', NULL, '2022-03-07 05:04:02');

-- --------------------------------------------------------

--
-- Table structure for table `kelola_servis`
--

CREATE TABLE `kelola_servis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_servis` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hapus` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelola_servis`
--

INSERT INTO `kelola_servis` (`id`, `nama_servis`, `deskripsi`, `hapus`, `created_at`, `updated_at`) VALUES
(1, 'servis 3', 'deskripsi servis 3', 0, NULL, '2022-03-07 05:05:30'),
(2, 'servis old', 'deskripsi servis new', 0, '2022-03-04 00:03:45', '2022-03-04 00:04:10'),
(3, 'servis 4', 'servis 4', 0, '2022-03-07 05:05:42', '2022-03-07 05:05:42'),
(4, 'servis 5', 'ini adalah servis 5', 0, '2022-03-07 05:11:59', '2022-03-07 05:11:59');

-- --------------------------------------------------------

--
-- Table structure for table `kelola_staff`
--

CREATE TABLE `kelola_staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_staff` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `posisi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kelola_staff`
--

INSERT INTO `kelola_staff` (`id`, `nama_staff`, `deskripsi`, `posisi`, `file`, `show`, `created_at`, `updated_at`) VALUES
(1, 'staff 2', 'deskripsi staff 2aaaaaaaaa aaaaaaaaaaaa \n a aaaaaaaaaaaaaaaa aa \n aaaaaaaaaaaaaaa a aaaaaaaaaaaa adf \n asdfasdf asdfsdf sdfsdf asdfasdf sadg', 'manajer 1', 'staff/yOfXnzSoyVcLAhdqlLI8YVEPfSVZmh-metaaGFvLXdhbmctcFZxNllobURQdGstdW5zcGxhc2guanBn-.jpg', 1, NULL, '2022-03-06 00:58:02'),
(2, 'staff 2', 'deskripsi staff 2aaaaaa aaaaa aaaaaaaa aaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaaaa aaaaaaaaaaaaaaa \n adf asdfasdf a sdfsdf sdfsdf \n asdfasdf sadg ', 'manajer 1', 'staff/hzLLItPtScciHDXx6xunCuwf2XJdGq-metabmF0dXJlLWc4NDhjODU2YjJfMTkyMC5qcGc=-.jpg', 1, NULL, '2022-03-06 01:01:24'),
(8, 'coba', 'coba', 'coba', 'staff/5QUfveOFoKkIwRGGVpcayVGBI1FzaW-metabmF0dXJlLWc4NDhjODU2YjJfMTkyMC5qcGc=-.jpg', 1, '2022-03-06 01:16:24', '2022-03-06 01:16:24'),
(9, 'staff 10', 'saya staff 10', 'bos', 'staff/T0phsX6KDy1otAWoT4CqKszy3ll9mU-metaZWx0aS1tZXNoYXUtMlMyRjJleG1iaHctdW5zcGxhc2guanBn-.jpg', 1, '2022-03-07 05:11:31', '2022-03-07 05:11:31');

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
(63, '2014_10_12_000000_create_users_table', 1),
(64, '2014_10_12_100000_create_password_resets_table', 1),
(65, '2019_08_19_000000_create_failed_jobs_table', 1),
(66, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(67, '2022_02_16_134933_create_kelola_banners_table', 1),
(68, '2022_02_16_135003_create_kelola_servis_table', 1),
(69, '2022_02_16_135029_create_portofolios_table', 1),
(70, '2022_02_16_135050_create_kelola_staff_table', 1),
(71, '2022_02_16_140337_create_artikels_table', 1),
(72, '2022_02_16_140417_create_artikel_comments_table', 1),
(73, '2022_02_16_140455_create_contact_us_table', 1),
(74, '2022_02_20_123626_create_kategori_portofolios_table', 1),
(75, '2022_02_21_101416_create_kategori_artikels_table', 1),
(76, '2022_03_08_005750_create_reset_password_requests_table', 2),
(77, '2022_03_09_074206_create_visits_table', 2);

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
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `portofolios`
--

CREATE TABLE `portofolios` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_portofolio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` date NOT NULL,
  `kategori` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` tinyint(1) NOT NULL DEFAULT 1,
  `tipe` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portofolios`
--

INSERT INTO `portofolios` (`id`, `nama_portofolio`, `deskripsi`, `date`, `kategori`, `file`, `show`, `tipe`, `created_at`, `updated_at`) VALUES
(1, 'portofolio 1', 'deskripsi 1', '2022-02-01', 'research', '', 0, 'working-paper', NULL, '2022-03-02 22:03:57'),
(2, 'portofolio 2', '<p>deskripsi 2</p>', '2022-02-15', 'research', 'portofolio/FHPaJ1eHRRjIxVLniNHnMp9e1OiUrL-metabmF0dXJlLWc4NDhjODU2YjJfMTkyMC5qcGc=-.jpg', 1, 'latest-brief', NULL, '2022-03-02 22:27:07'),
(3, 'portofolio 1', 'deskripsi 1', '2022-02-01', 'research', '', 0, 'latest-report', NULL, '2022-03-07 05:15:09'),
(4, 'port 8001', '<p>adsfasdf adcasd</p>', '2022-02-21', 'research', 'portofolio/MN1B9NuOXVY1NyQg6P2ApabUmwnBbR-metabmF0dXJlLWc4NDhjODU2YjJfMTkyMC5qcGc=-.jpg', 1, 'working-paper', '2022-03-02 22:54:48', '2022-03-03 00:17:00'),
(5, 'portofolio baru', 'baru', '2222-02-22', 'research', 'portofolio/LhiEhHEdYC0Hqw8uaNrBYmFNXLqa0j-metaZWx0aS1tZXNoYXUtMlMyRjJleG1iaHctdW5zcGxhc2guanBn-.jpg', 0, 'latest-brief', '2022-03-07 05:05:00', '2022-03-07 05:05:12'),
(6, 'test', 'test', '2222-02-22', 'research', 'portofolio/SZiOld1qRWaAiuNfFKyXhnm23J9bgq-metaZWx0aS1tZXNoYXUtMlMyRjJleG1iaHctdW5zcGxhc2guanBn-.jpg', 0, 'working-paper', '2022-03-07 05:14:38', '2022-03-07 05:14:44'),
(7, 'test', 'test', '2222-02-22', 'research', 'portofolio/eD2bo9nKtOcBpMGf3r7qEraSSRjmhj-metaZWx0aS1tZXNoYXUtMlMyRjJleG1iaHctdW5zcGxhc2guanBn-.jpg', 1, 'working-paper', '2022-03-07 05:15:32', '2022-03-07 05:15:32');

-- --------------------------------------------------------

--
-- Table structure for table `reset_password_requests`
--

CREATE TABLE `reset_password_requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status_reset` tinyint(1) NOT NULL DEFAULT 0,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reset_password_requests`
--

INSERT INTO `reset_password_requests` (`id`, `ip_address`, `token`, `status_reset`, `email`, `created_at`, `updated_at`) VALUES
(2, '127.0.0.1', 'hfdSON0LFFNvuJtvwlsTJKwcBaEDE6EHJEe1vCd4x1fzSxQLRtHouPu83J5JdeLQwO2nGfmPnMVLIaZICxPoZ8YlxGTykMS3ydRZPKvnMZV4opnONlrnGwqtGELkTkWuGTeO8J7QGKJV9kcgNMvDo191fWCZ2NKR0Qeya6BF3uTnpEkqvbHZafNSuoR4jSNecu1GcUjNGgRKdfxNicZaCDL6BQLBawYZ0UnF1rZx6Yhal4BrVKWoZJy4tg1oy9c', 1, 'insed85@gmail.com', '2022-03-10 19:47:08', '2022-03-10 20:12:27');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'insed85@gmail.com', NULL, '$2y$10$33n5Ts1sW9oNG8E5l2JZPOBjBbaPLAAJZHiSzM5x34rnrHW6k5C1K', NULL, NULL, '2022-03-10 20:12:27');

-- --------------------------------------------------------

--
-- Table structure for table `visits`
--

CREATE TABLE `visits` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tahun` smallint(6) NOT NULL,
  `bulan` tinyint(4) NOT NULL,
  `tanggal` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visits`
--

INSERT INTO `visits` (`id`, `ip_address`, `tahun`, `bulan`, `tanggal`) VALUES
(1, '127.0.0.1', 2022, 3, 11);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikels_id_staff_foreign` (`id_staff`);

--
-- Indexes for table `artikel_comments`
--
ALTER TABLE `artikel_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artikel_comments_id_artikel_foreign` (`id_artikel`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `kategori_artikels`
--
ALTER TABLE `kategori_artikels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kategori_artikels_kategori_unique` (`kategori`);

--
-- Indexes for table `kategori_portofolios`
--
ALTER TABLE `kategori_portofolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelola_banners`
--
ALTER TABLE `kelola_banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelola_servis`
--
ALTER TABLE `kelola_servis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kelola_staff`
--
ALTER TABLE `kelola_staff`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `portofolios`
--
ALTER TABLE `portofolios`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_password_requests`
--
ALTER TABLE `reset_password_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visits`
--
ALTER TABLE `visits`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `artikel_comments`
--
ALTER TABLE `artikel_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kategori_artikels`
--
ALTER TABLE `kategori_artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `kategori_portofolios`
--
ALTER TABLE `kategori_portofolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelola_banners`
--
ALTER TABLE `kelola_banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kelola_servis`
--
ALTER TABLE `kelola_servis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelola_staff`
--
ALTER TABLE `kelola_staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `portofolios`
--
ALTER TABLE `portofolios`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reset_password_requests`
--
ALTER TABLE `reset_password_requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visits`
--
ALTER TABLE `visits`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `artikels`
--
ALTER TABLE `artikels`
  ADD CONSTRAINT `artikels_id_staff_foreign` FOREIGN KEY (`id_staff`) REFERENCES `kelola_staff` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `artikel_comments`
--
ALTER TABLE `artikel_comments`
  ADD CONSTRAINT `artikel_comments_id_artikel_foreign` FOREIGN KEY (`id_artikel`) REFERENCES `artikels` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
