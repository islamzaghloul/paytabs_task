-- phpMyAdmin SQL Dump
-- version 4.9.5deb2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 05, 2022 at 09:45 PM
-- Server version: 8.0.29-0ubuntu0.20.04.3
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `categories_subcategories`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `id_off` bigint NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `id_off`, `category_name`, `created_at`, `updated_at`) VALUES
(1, 0, 'category b2', '2022-06-01 02:02:29', '2022-06-01 02:03:57'),
(2, 0, 'category A1', '2022-06-01 02:12:31', '2022-06-01 02:12:31'),
(3, 0, 'category A2', '2022-06-01 02:12:52', '2022-06-01 02:12:52'),
(4, 0, 'category B1', '2022-06-01 02:13:10', '2022-06-01 02:13:10'),
(5, 2, 'sub A1', '2022-06-01 02:13:45', '2022-06-01 02:13:45'),
(6, 5, 'sub-sub A1', '2022-06-01 02:14:15', '2022-06-01 02:14:15'),
(7, 6, 'sub-sub-sub A1', '2022-06-01 02:14:34', '2022-06-01 02:14:34'),
(8, 3, 'sub A2', '2022-06-01 02:15:45', '2022-06-01 02:15:45'),
(9, 8, 'sub-sub A2', '2022-06-01 02:16:11', '2022-06-01 02:16:11'),
(10, 9, 'sub-sub-sub A2', '2022-06-01 02:16:29', '2022-06-01 02:16:29'),
(11, 2, 'sub-1 A1', '2022-06-01 02:31:00', '2022-06-01 02:31:00'),
(12, 2, 'sub-2 A1', '2022-06-01 02:31:09', '2022-06-01 02:31:09'),
(13, 7, 'sub-sub-sub-sub A1', '2022-06-04 20:12:18', '2022-06-04 20:12:18'),
(14, 13, 'sub-sub-sub-sub-sub A1', '2022-06-04 20:13:28', '2022-06-04 20:13:28'),
(15, 14, 'sub-sub-sub-sub-5 A1', '2022-06-04 20:14:27', '2022-06-04 20:14:27'),
(16, 15, 'sub-sub-sub-sub-6 A1', '2022-06-04 20:14:50', '2022-06-04 20:14:50'),
(17, 16, 'sub-sub-sub-sub-7 A1', '2022-06-04 20:57:05', '2022-06-04 20:57:05'),
(18, 16, 'sub-sub-sub-sub-7 A1', '2022-06-04 20:57:21', '2022-06-04 20:57:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
