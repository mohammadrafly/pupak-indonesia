-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 16, 2023 at 09:56 AM
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
-- Table structure for table `pupukobat`
--

CREATE TABLE `pupukobat` (
  `id_pupuk` int(5) UNSIGNED NOT NULL,
  `nama_pupuk` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `berat` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `jenis_pupuk` varchar(255) NOT NULL,
  `picture` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pupukobat`
--

INSERT INTO `pupukobat` (`id_pupuk`, `nama_pupuk`, `deskripsi`, `berat`, `harga`, `jenis_pupuk`, `picture`, `created_at`, `updated_at`) VALUES
(9, 'Pupuk Kompos', 'Kompos termasuk pupuk organik karena terbuat dari sisa bahan yang berasal dari tanaman, hewan, dan limbah organik yang telah mengalami proses dekomposisi dan fermentasi. Tanaman yang sering dijadikan sebagai bahan kompos adalah jerami, sekam padi, sabut kelapa, dan sayuran busuk', '5 Kg', '25000', 'Pupuk', '1673849650_33bc9723ed1f050e37d0.jpg', '2023-01-16 06:14:10', '2023-01-16 02:01:59'),
(10, 'Pupuk Urea', 'Pupuk Urea adalah pupuk yang mengandung nitrogen yang tinggi. Urea dibuat dari amonia dan asam karbondioksida. Urea merupakan salah satu jenis pupuk anorganik yang paling banyak digunakan di dunia.Urea sangat penting digunakan dalam pertanian karena nitrogen yang terkandung di dalamnya sangat diperlukan tanaman untuk pertumbuhan vegetatif. Namun, perlu diingat bahwa pemberian urea harus dosis yang tepat dan sesuai dengan kebutuhan tanaman agar tidak menyebabkan kerusakan pada tanaman', '50 Kg', '280000', 'Pupuk', '1673849711_f1c1ea3744c8bf64703d.jpg', '2023-01-16 06:15:11', '2023-01-16 06:15:11'),
(11, 'Pupuk ZA', 'Beberapa contoh pupuk ZA yang sering digunakan di antaranya :\r\n•	Pupuk boron (B) : digunakan untuk meningkatkan pertumbuhan akar dan pembuahan buah.\r\n•	Pupuk besi (Fe) : digunakan untuk mengatasi masalah warna daun yang pucat dan meningkatkan pertumbuhan tanaman.\r\n•	Pupuk tembaga (Cu) : digunakan untuk meningkatkan pertumbuhan daun dan akar, serta meningkatkan resistensi terhadap penyakit.\r\n•	Pupuk mangan (Mn) : digunakan untuk meningkatkan pertumbuhan daun dan akar, serta meningkatkan resistensi terhadap penyakit.\r\n', '50 Kg', '368000', 'Pupuk', '1673849837_14a97f1bb35a8990d9fc.jpg', '2023-01-16 06:17:17', '2023-01-16 06:17:17'),
(13, 'Pupuk NPK', 'Pupuk NPK adalah singkatan dari Nitrogen (N), Fosfor (P), dan Kalium (K) yang merupakan unsur hara utama yang diperlukan oleh tanaman. Pupuk NPK dapat berupa pupuk sintetis atau campuran dari beberapa jenis pupuk yang mengandung unsur Nitrogen, Fosfor, dan Kalium. Nitrogen (N) diperlukan untuk pertumbuhan vegetatif tanaman, seperti pembentukan daun dan batang. Fosfor (P) diperlukan untuk pembentukan akar, pembuahan, dan pembentukan biji. Kalium (K) diperlukan untuk pertumbuhan akar, pembuahan, dan pembentukan buah', '5 Kg', '110000', 'Pupuk', '1673850032_d843f38550c1212daa46.png', '2023-01-16 06:20:32', '2023-01-16 06:20:32'),
(14, 'Obat Carbofuran', 'Carbofuran adalah jenis pestisida yang digunakan untuk mengendalikan berbagai jenis hama pada tanaman pertanian seperti tanaman jagung. Pestisida ini bekerja dengan cara menghambat sistem saraf hama sehingga hama tersebut mati. Namun, carbofuran termasuk pestisida yang sangat berbahaya karena dapat menyebabkan kerusakan pada lingkungan dan kesehatan manusia. Karena itu, penggunaannya dilarang di beberapa negara karena menyebabkan kerusakan lingkungan dan merusak habitat satwa liar. Sebaiknya untuk menjaga lingkungan dan kesehatan manusia, digunakan pestisida yang aman dan sesuai dengan petunjuk pada label produk', '1 Kg', '23000', 'Obat', '1673850084_2ff4128bbe5eda906c20.jpg', '2023-01-16 06:21:24', '2023-01-16 06:21:24'),
(15, 'Obat Chlorpyrifos', 'Chlorpyrifos adalah jenis insektisida yang digunakan untuk mengendalikan berbagai jenis hama pada tanaman pertanian seperti padi. Insektisida ini bekerja dengan cara menghambat sistem saraf hama sehingga hama tersebut mati. Namun, Chlorpyrifos termasuk insektisida yang cukup berbahaya karena dapat menyebabkan kerusakan pada lingkungan dan kesehatan manusia. Beberapa penelitian menunjukkan bahwa insektisida ini dapat menyebabkan kerusakan pada sistem saraf manusia, khususnya pada anak-anak dan janin yang sedang tumbuh. Karena itu, penggunaannya dilarang atau dibatasi di beberapa negara. Sebaiknya untuk menjaga lingkungan dan kesehatan manusia, digunakan insektisida yang aman dan sesuai dengan petunjuk pada label produk.', '100ml', '30000', 'Obat', '1673850132_22131f2e8db26bfaa299.jpg', '2023-01-16 06:22:12', '2023-01-16 06:22:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pupukobat`
--
ALTER TABLE `pupukobat`
  ADD PRIMARY KEY (`id_pupuk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pupukobat`
--
ALTER TABLE `pupukobat`
  MODIFY `id_pupuk` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
