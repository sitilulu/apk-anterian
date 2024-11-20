-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2024 at 08:33 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahsakit`
--

-- --------------------------------------------------------

--
-- Table structure for table `antrian`
--

CREATE TABLE `antrian` (
  `id` int(11) NOT NULL,
  `name_pasien` varchar(100) NOT NULL,
  `nomor_antrian` int(11) NOT NULL,
  `waktu_kedatangan` datetime NOT NULL,
  `status` enum('Belum Dilayani','Selesai') NOT NULL DEFAULT 'Belum Dilayani'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `antrian`
--

INSERT INTO `antrian` (`id`, `name_pasien`, `nomor_antrian`, `waktu_kedatangan`, `status`) VALUES
(5, 'hilwa', 4, '2024-11-08 22:51:00', 'Selesai'),
(6, 'Bapa Rudy', 11, '2024-11-07 22:53:00', 'Selesai'),
(8, 'tania', 4, '2024-11-02 23:06:00', 'Selesai'),
(14, 'hilwa', 2, '2024-11-19 22:44:00', 'Belum Dilayani');

-- --------------------------------------------------------

--
-- Table structure for table `tb_users`
--

CREATE TABLE `tb_users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tb_users`
--

INSERT INTO `tb_users` (`id`, `username`, `email`) VALUES
(1, 'sl.ilma_', 'sitiluluilma883@gmail.com'),
(2, 'sl.ilma_', 'sitiluluilma883@gmail.com'),
(3, 'ubi02', 'tanianovi@gmail.com'),
(4, 'ubi02', 'tanianovi@gmail.com'),
(5, 'secaccilma', 'ilma@gmail.com'),
(6, 'secaccilma', 'ilma@gmail.com'),
(7, 'hilwa', 'hilwa@gmail.com'),
(8, 'hilwa', 'hilwa@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `antrian`
--
ALTER TABLE `antrian`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tb_users`
--
ALTER TABLE `tb_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `antrian`
--
ALTER TABLE `antrian`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `tb_users`
--
ALTER TABLE `tb_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
