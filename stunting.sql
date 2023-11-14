-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Nov 2023 pada 15.58
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

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
-- Struktur dari tabel `data_latih`
--

CREATE TABLE `data_latih` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `jenis_kelamin` varchar(25) DEFAULT NULL,
  `berat` double DEFAULT NULL,
  `tinggi` double DEFAULT NULL,
  `hasil` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `data_latih`
--

INSERT INTO `data_latih` (`id`, `nama`, `jenis_kelamin`, `berat`, `tinggi`, `hasil`) VALUES
(64, 'Batita 1', 'Laki-Laki', 14.7, 95, 'Gizi Baik'),
(65, 'Batita 2', 'Perempuan', 17, 100, 'Resiko Gizi Lebih'),
(66, 'Batita 3', 'Laki-Laki', 13.4, 89, 'Gizi Baik'),
(67, 'Batita 4', 'Laki-Laki', 13.9, 98, 'Gizi Baik'),
(68, 'Batita 5', 'Laki-Laki', 11.8, 89, 'Gizi Baik'),
(69, 'Batita 6', 'Perempuan', 11.7, 88, 'Gizi Baik'),
(70, 'Batita 7', 'Laki-Laki', 11.4, 87, 'Gizi Baik'),
(71, 'Batita 8', 'Perempuan', 8.8, 78, 'Gizi Baik'),
(72, 'Batita 9', 'Laki-Laki', 11.6, 85, 'Gizi Baik'),
(73, 'Batita 10', 'Perempuan', 10.5, 80, 'Gizi Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mst_batita`
--

CREATE TABLE `mst_batita` (
  `id` int(11) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `berat` double NOT NULL,
  `tinggi` double NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `usia_diagnosa` varchar(100) NOT NULL,
  `diagnosa` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `mst_batita`
--

INSERT INTO `mst_batita` (`id`, `nama`, `jenis_kelamin`, `berat`, `tinggi`, `tanggal_lahir`, `usia_diagnosa`, `diagnosa`) VALUES
(12, 'admin', 'Laki-Laki', 14.7, 100, '2023-02-08', '0 tahun, 9 bulan, 6 hari', 'Gizi Baik');

-- --------------------------------------------------------

--
-- Struktur dari tabel `stunting`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `stunting`
--

INSERT INTO `stunting` (`id_stunting`, `id_user`, `ibu`, `nama`, `nik`, `umur`, `kelamin`, `tinggi`, `berat`, `beratbadan`, `imt`) VALUES
(1, 1, 'admin', 'Sambo', '453464534', '4', 'Laki-Laki', '47.0', '4.5', '', '10'),
(3, 41, 'Rini', 'Hamdani', '23423523', '0', 'Laki-Laki', '48.5', '3.4', '', '30');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `foto`, `password`, `email`, `alamat`, `nohp`, `level`, `blokir`, `id_session`) VALUES
(1, 'admin', NULL, '21232f297a57a5a743894a0e4a801fc3', 'admin@gmail.com', '', '', 'Admin', 'N', ''),
(41, 'Rini', NULL, 'b86872751de1e13c142d050acfd09842', 'rini@gmail.com', 'Jl. Lembaga, Senggoro', '097678667576', 'Masyarakat', 'N', '');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `data_latih`
--
ALTER TABLE `data_latih`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `mst_batita`
--
ALTER TABLE `mst_batita`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indeks untuk tabel `stunting`
--
ALTER TABLE `stunting`
  ADD PRIMARY KEY (`id_stunting`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `data_latih`
--
ALTER TABLE `data_latih`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT untuk tabel `mst_batita`
--
ALTER TABLE `mst_batita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `stunting`
--
ALTER TABLE `stunting`
  MODIFY `id_stunting` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
