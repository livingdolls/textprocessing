-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 19, 2020 at 02:37 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stki`
--

-- --------------------------------------------------------

--
-- Table structure for table `korpus`
--

CREATE TABLE `korpus` (
  `id` int(11) NOT NULL,
  `judul` text NOT NULL,
  `isi` text NOT NULL,
  `dokumen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `korpus`
--

INSERT INTO `korpus` (`id`, `judul`, `isi`, `dokumen`) VALUES
(3, 'Limbah Plastik', 'Limbah plastik sudah menjadi salah satu kasus limbah yang hingga sampai saat ini memerlukan penindakan lebih, karena disebabkan sifatnya yang membutuhkan waktu lama serta susah untuk didaur ulang.\r\n\r\nBermacam aksi oleh pemerintah sudah dicoba untuk mengurangi jumlah limbah plastik semacam pengurangan kandungan plastik dalam sesuatu produk, kantong plastik belanja yang berbayar, pemakaian plastik yang lebih ramah area serta lain sebagainya.', 'L1'),
(4, 'Belajar Untuk Menjadi Pelajar Berkarakter', 'Pembelajaran menjadi salah satu fasilitas yang dapat berpengaruh besar dalam membentuk sumber energi manusia bermutu. Lewat pembelajaran, bisa terbentuk generasi berkarakter yang sanggup mengaktualisasikan diri jadi ujung tombak kemajuan peradaban.\r\n\r\nSebagaimana tercantum dalam Pembukaan Undang- Undang Dasar 1945, tujuan nasional pembelajaran merupakan buat mencerdaskan kehidupan bangsa yang pada kesimpulannya hendak menopang kesejahteraan rakyat.', 'B1');

-- --------------------------------------------------------

--
-- Table structure for table `tb_filtering`
--

CREATE TABLE `tb_filtering` (
  `id_fl` int(11) NOT NULL,
  `judul` text NOT NULL,
  `term` text NOT NULL,
  `dokumen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_stemming`
--

CREATE TABLE `tb_stemming` (
  `id_st` int(11) NOT NULL,
  `judul` text NOT NULL,
  `term` text NOT NULL,
  `dokumen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tokenisasi`
--

CREATE TABLE `tb_tokenisasi` (
  `judul` text NOT NULL,
  `term` text NOT NULL,
  `dokumen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `korpus`
--
ALTER TABLE `korpus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_filtering`
--
ALTER TABLE `tb_filtering`
  ADD PRIMARY KEY (`id_fl`);

--
-- Indexes for table `tb_stemming`
--
ALTER TABLE `tb_stemming`
  ADD PRIMARY KEY (`id_st`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `korpus`
--
ALTER TABLE `korpus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tb_filtering`
--
ALTER TABLE `tb_filtering`
  MODIFY `id_fl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=442;

--
-- AUTO_INCREMENT for table `tb_stemming`
--
ALTER TABLE `tb_stemming`
  MODIFY `id_st` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=442;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
