-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2026 at 01:02 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `2526_01 db`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru_bk`
--

CREATE TABLE `guru_bk` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `bidang` varchar(255) DEFAULT NULL,
  `deskripsi` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `guru_bk`
--

INSERT INTO `guru_bk` (`id`, `nama`, `bidang`, `deskripsi`) VALUES
(1, 'Nita Qisthi Hardiyanti, S.Pd', 'Pendampingan Konseling Siswa', 'Membimbing siswa dalam pengembangan karakter dan membantu proses konseling di sekolah.'),
(2, 'Sutisna, S.Sos.I., M.Pd', 'Pembinaan dan Bimbingan Siswa', 'Mendampingi siswa dalam pembinaan disiplin dan pengembangan potensi diri.'),
(3, 'Odih Syaripudin, S.Pd', 'Layanan Konseling Sekolah', 'Memberikan arahan belajar serta membantu siswa dalam penyelesaian masalah sekolah.'),
(4, 'Aliza Tresna Kirana, S.Psi', 'Pengembangan Mental Siswa', 'Membantu siswa dalam kegiatan konseling dan pengembangan mental positif.'),
(5, 'Yunita Dwi Aryani, S.Pd', 'Pembinaan Karakter Siswa', 'Membimbing siswa dalam pembentukan karakter dan meningkatkan rasa percaya diri.'),
(6, 'Novita Iin Yustari, M.Pd', 'Konseling Siswa', 'Mendampingi siswa dalam pengembangan potensi dan layanan konseling sekolah.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru_bk`
--
ALTER TABLE `guru_bk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru_bk`
--
ALTER TABLE `guru_bk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
