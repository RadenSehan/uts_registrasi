-- phpMyAdmin SQL Dump
-- version 6.0.0-dev+20230710.8f395ec35e
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2023 at 10:15 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_konser`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_form`
--

CREATE TABLE `tb_form` (
  `id` int(3) NOT NULL,
  `nama_lengkap` varchar(40) NOT NULL,
  `alamat` varchar(40) NOT NULL,
  `email` varchar(40) NOT NULL,
  `konser` varchar(30) NOT NULL,
  `foto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_form`
--

INSERT INTO `tb_form` (`id`, `nama_lengkap`, `alamat`, `email`, `konser`, `foto`) VALUES
(1, 'Afiqo Ilman', 'Ngoro, Mojokerto', 'afiqol@gmail.com', 'Dewa 19 - 20 Mei 2024', 'ghost-of-tsushima-art-uhdpaper.com-4K-5.1587.jpg'),
(2, 'Rizki Bintang', 'Sukodono, Sidoarjo', 'rbintang@gmail.com', 'Tulus - 17 Mei 2024', 'iso-9001-2015.jpg'),
(3, 'Ajis Doa Ibu', 'Tandes, Surabaya', 'ajizizir@gmail.com', 'Weird Genius - 23 Mei 2024', 'pexels-krivec-ales-547115.jpg'),
(4, 'Ais Ahmad', 'Pakal, Surabaya', 'aisahamad@gmail.com', 'Dewa 19 - 20 Mei 2024', 'bggreenyellow.jpg'),
(5, 'Raden Sehan', 'Gayungan, Surabaya', 'radensehan@gmail.com', 'SLANK - 2 Juni 2024', '2T3qqti-minimalist-backgrounds.png'),
(6, 'Sodeq', 'Pare, Kab. Kediri', 'sodeq@gmail.com', 'Tulus - 17 Mei 2024', 'bg merah putih.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tb_kegiatan`
--

CREATE TABLE `tb_kegiatan` (
  `id` int(3) NOT NULL,
  `kegiatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_kegiatan`
--

INSERT INTO `tb_kegiatan` (`id`, `kegiatan`) VALUES
(1, 'Tulus - 17 Mei 2024'),
(2, 'Dewa 19 - 20 Mei 2024'),
(3, 'Weird Genius - 23 Mei 2024'),
(4, 'Sheila On 7 - 27 Mei 2024'),
(5, 'Raisa Live in Concert - 29 Mei 2024'),
(6, 'SLANK - 2 Juni 2024'),
(7, 'Rhoma Kelapa - 11 Mei 2024');

-- --------------------------------------------------------

--
-- Table structure for table `tb_login_admin`
--

CREATE TABLE `tb_login_admin` (
  `id` int(3) NOT NULL,
  `admin` varchar(30) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_login_admin`
--

INSERT INTO `tb_login_admin` (`id`, `admin`, `password`) VALUES
(1, 'admin1', 'admin1'),
(2, 'admin2', 'admin2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_form`
--
ALTER TABLE `tb_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_login_admin`
--
ALTER TABLE `tb_login_admin`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_form`
--
ALTER TABLE `tb_form`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tb_kegiatan`
--
ALTER TABLE `tb_kegiatan`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tb_login_admin`
--
ALTER TABLE `tb_login_admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
