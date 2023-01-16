-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2023 at 09:57 AM
-- Server version: 5.7.33
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pupak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tanaman_group`
--

CREATE TABLE `tanaman_group` (
  `id` int(5) UNSIGNED NOT NULL,
  `id_tanaman` int(5) NOT NULL,
  `id_pupukobat` int(5) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tanaman_group`
--

INSERT INTO `tanaman_group` (`id`, `id_tanaman`, `id_pupukobat`, `created_at`, `updated_at`) VALUES
(3, 3, 8, '2023-01-15 19:57:37', '2023-01-15 19:57:37'),
(4, 4, 8, '2023-01-15 19:57:37', '2023-01-15 19:57:37'),
(5, 5, 8, '2023-01-15 19:57:37', '2023-01-15 19:57:37'),
(6, 6, 8, '2023-01-15 19:57:37', '2023-01-15 19:57:37'),
(7, 7, 8, '2023-01-15 19:57:37', '2023-01-15 19:57:37'),
(8, 8, 8, '2023-01-15 19:57:37', '2023-01-15 19:57:37'),
(9, 9, 8, '2023-01-15 19:57:37', '2023-01-15 19:57:37'),
(10, 10, 8, '2023-01-15 19:57:37', '2023-01-15 19:57:37'),
(11, 3, 9, '2023-01-16 06:14:10', '2023-01-16 06:14:10'),
(12, 4, 9, '2023-01-16 06:14:10', '2023-01-16 06:14:10'),
(13, 5, 9, '2023-01-16 06:14:10', '2023-01-16 06:14:10'),
(14, 6, 9, '2023-01-16 06:14:10', '2023-01-16 06:14:10'),
(15, 7, 9, '2023-01-16 06:14:10', '2023-01-16 06:14:10'),
(16, 8, 9, '2023-01-16 06:14:10', '2023-01-16 06:14:10'),
(17, 9, 9, '2023-01-16 06:14:10', '2023-01-16 06:14:10'),
(18, 10, 9, '2023-01-16 06:14:10', '2023-01-16 06:14:10'),
(19, 1, 10, '2023-01-16 06:15:11', '2023-01-16 06:15:11'),
(20, 1, 11, '2023-01-16 06:17:17', '2023-01-16 06:17:17'),
(21, 2, 11, '2023-01-16 06:17:17', '2023-01-16 06:17:17'),
(22, 11, 11, '2023-01-16 06:17:17', '2023-01-16 06:17:17'),
(23, 12, 12, '2023-01-16 06:20:02', '2023-01-16 06:20:02'),
(24, 13, 12, '2023-01-16 06:20:02', '2023-01-16 06:20:02'),
(25, 12, 13, '2023-01-16 06:20:32', '2023-01-16 06:20:32'),
(26, 13, 13, '2023-01-16 06:20:32', '2023-01-16 06:20:32'),
(27, 2, 14, '2023-01-16 06:21:24', '2023-01-16 06:21:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tanaman_group`
--
ALTER TABLE `tanaman_group`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_tanaman` (`id_tanaman`),
  ADD KEY `id_pupukobat` (`id_pupukobat`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tanaman_group`
--
ALTER TABLE `tanaman_group`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
