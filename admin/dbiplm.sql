-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2023 at 08:54 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbiplm`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id_anggota` int(11) NOT NULL,
  `id_iplm` varchar(225) NOT NULL,
  `uplm1` varchar(225) NOT NULL,
  `uplm2` varchar(225) NOT NULL,
  `uplm3` varchar(225) NOT NULL,
  `uplm4` varchar(225) NOT NULL,
  `uplm5` varchar(225) NOT NULL,
  `uplm6` varchar(225) NOT NULL,
  `uplm7` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id_anggota`, `id_iplm`, `uplm1`, `uplm2`, `uplm3`, `uplm4`, `uplm5`, `uplm6`, `uplm7`) VALUES
(1, '2021', '33333', '0,4562', '1,234564', '1,233564', '1,234564', '1,234564', '1,22'),
(13, '2022', '0,144', '0,16', '1,332', '0,9732', '0,5412', '0,875', '0,863');

-- --------------------------------------------------------

--
-- Table structure for table `iplminduk`
--

CREATE TABLE `iplminduk` (
  `id_iplm` int(11) NOT NULL,
  `tahun` varchar(200) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `iplminduk`
--

INSERT INTO `iplminduk` (`id_iplm`, `tahun`, `ket`) VALUES
(2021, '2021', '6399'),
(2022, '2022', '46,321998'),
(2023, '2023', '0'),
(2024, '2024', '0');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `namalengkap` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `level` enum('admin','petugas') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `namalengkap`, `username`, `password`, `level`) VALUES
(1, 'zakkiya fitri', 'adminiplm', 'bc747b5aceb2f24833fd1ae8e7cc4d76', 'admin'),
(2, 'Muh Ragil', 'petugasiplm', '7c8bf26d4c02cff44359e1ffb43ca146', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id_anggota`),
  ADD KEY `id_keluarga` (`id_iplm`) USING BTREE;

--
-- Indexes for table `iplminduk`
--
ALTER TABLE `iplminduk`
  ADD PRIMARY KEY (`id_iplm`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id_anggota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `iplminduk`
--
ALTER TABLE `iplminduk`
  MODIFY `id_iplm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2025;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
