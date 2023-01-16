-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2023 at 09:51 AM
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

INSERT INTO `tanaman` (`id_tanaman`, `nama_tanaman`, `jenis_tanaman`, `picture`, `created_at`, `updated_at`) VALUES
(1, 'Padi', 'Padi', '1673761311_690a6448789f439d0fb3.jpg', '2023-01-15 05:41:51', '2023-01-15 05:41:51'),
(2, 'Jagung', 'Pangan', '1673808378_5999681cfddf0f55deb4.jpg', '2023-01-15 18:46:18', '2023-01-15 18:46:18'),
(3, 'Kubis', 'Sayuran', '', '2023-01-15 19:54:51', '2023-01-15 19:54:51'),
(4, 'Tomat', 'Sayuran', '', '2023-01-15 19:55:00', '2023-01-15 19:55:00'),
(5, 'Paprika', 'Sayuran', '', '2023-01-15 19:55:14', '2023-01-15 19:55:14'),
(6, 'Bawang', 'Sayuran', '', '2023-01-15 19:55:25', '2023-01-15 19:55:25'),
(7, 'Pisang', 'Buah Buahan', '', '2023-01-15 19:55:37', '2023-01-15 19:55:37'),
(8, 'Jeruk', 'Buah Buahan', '', '2023-01-15 19:55:46', '2023-01-15 19:55:46'),
(9, 'Jambu', 'Buah Buahan', '', '2023-01-15 19:56:00', '2023-01-15 19:56:00'),
(10, 'Anggur', 'Buah Buahan', '', '2023-01-15 19:56:11', '2023-01-15 19:56:11'),
(11, 'Kacang Kacangan', 'Buah Buahan', '', '2023-01-16 06:15:58', '2023-01-16 06:15:58'),
(12, 'Perkebunan', 'Perkebunan', '', '2023-01-16 06:18:48', '2023-01-16 06:18:48'),
(13, 'Sayuran', 'Sayuran', '', '2023-01-16 06:18:54', '2023-01-16 06:18:54');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
