-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 06:36 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stunting`
--

-- --------------------------------------------------------

--
-- Table structure for table `stunting`
--

CREATE TABLE `stunting` (
  `id_stunting` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `ibu` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `kelamin` varchar(50) NOT NULL,
  `tinggi` varchar(255) NOT NULL,
  `berat` varchar(255) NOT NULL,
  `beratbadan` varchar(255) NOT NULL,
  `imt` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stunting`
--

INSERT INTO `stunting` (`id_stunting`, `id_user`, `ibu`, `nama`, `nik`, `umur`, `kelamin`, `tinggi`, `berat`, `beratbadan`, `imt`) VALUES
(1, 1, 'admin', 'Sambo', '453464534', '4', 'Laki-Laki', '47.0', '4.5', '', '10'),
(3, 41, 'Rini', 'Hamdani', '23423523', '0', 'Laki-Laki', '48.5', '3.4', '', '30'),
(4, 41, 'Rini', 'Firdaus', '23423523', '1', 'Laki-Laki', '45.0', '2.0', '', '30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `foto` varchar(150) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nohp` varchar(255) NOT NULL,
  `level` enum('Admin','Masyarakat') NOT NULL,
  `blokir` enum('N','Y') NOT NULL,
  `id_session` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `foto`, `password`, `email`, `alamat`, `nohp`, `level`, `blokir`, `id_session`) VALUES
(1, 'admin', NULL, '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', '', '', 'Admin', 'N', ''),
(41, 'Rini', NULL, 'b86872751de1e13c142d050acfd09842', 'rini@gmail.com', 'Jl. Lembaga, Senggoro', '097678667576', 'Masyarakat', 'N', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stunting`
--
ALTER TABLE `stunting`
  ADD PRIMARY KEY (`id_stunting`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `stunting`
--
ALTER TABLE `stunting`
  MODIFY `id_stunting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
