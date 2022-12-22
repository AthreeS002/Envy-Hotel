-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 22, 2022 at 06:32 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(30) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Envy', 'thisisadmin', 'myadmin123');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `nama_kamar` varchar(20) NOT NULL,
  `tipe` varchar(20) NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`nama_kamar`, `tipe`, `harga`, `status`, `foto`) VALUES
('Budget 1', 'Budget', 300000, 'Unbooked', 'images/pindah/budget1.png'),
('Budget 2', 'Budget', 400000, 'Booked', 'images/pindah/budget2.png'),
('Budget 3', 'Budget', 500000, 'Unbooked', 'images/pindah/budget3.png'),
('Standard 1', 'Standard', 597000, 'Unbooked', 'images/pindah/standard1.png'),
('Standard 2', 'Standard', 630000, 'Unbooked', 'images/pindah/standard2.png'),
('Standard 3', 'Standard', 670000, 'Unbooked', 'images/pindah/standard3.png'),
('VIP 1', 'VIP', 789000, 'Unbooked', 'images/pindah/vip1.png'),
('VIP 2', 'VIP', 890000, 'Unbooked', 'images/pindah/vip2.png'),
('VIP 3', 'VIP', 987000, 'Unbooked', 'images/pindah/vip3.png');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `username` varchar(16) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `nin` double NOT NULL,
  `password` varchar(16) NOT NULL,
  `tanggallahir` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `telepon` int(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`username`, `email`, `nama`, `nin`, `password`, `tanggallahir`, `gender`, `alamat`, `telepon`, `foto`, `status`) VALUES
('puput', 'puput@gmail.com', 'puput', 7851, 'Puput1234', '2022-11-27', 'Laki-laki', 'Solo', 8712736, 'images/foto/20215911012.png', 'Booked'),
('ad_adli', 'adli12@gmail.com', 'Ahmad Adli AS', 123456, 'Binatokisaki123', '2002-12-07', 'Laki-laki', 'Solo', 89657, 'images/foto/202211923533.png', 'Unbooked'),
('haiadli', 'haiadli@gmail.com', 'adlii', 897456, 'Binatokisaki123', '2002-12-06', 'Laki-laki', 'Solo', 789454, 'images/foto/202212001646.png', 'Unbooked');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(30) NOT NULL,
  `nama_kamar` varchar(10) NOT NULL,
  `nin` double NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `harga` int(11) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `nama_kamar`, `nin`, `checkin`, `checkout`, `harga`, `status`) VALUES
(36, 'Budget 3', 123456, '2022-12-21', '2022-12-30', 4500000, 'Done'),
(37, 'Budget 2', 7851, '2022-12-23', '2022-12-30', 2800000, 'Checkin'),
(38, 'Budget 1', 7894564, '2022-12-22', '2022-12-23', 300000, 'Cancelled'),
(39, 'Budget 1', 897456, '2022-12-23', '2022-12-24', 300000, 'Cancelled');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`nama_kamar`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`nin`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `nin` (`nin`),
  ADD KEY `transaksi_ibfk_1` (`nama_kamar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`nama_kamar`) REFERENCES `kamar` (`nama_kamar`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
