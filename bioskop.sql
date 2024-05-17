-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2023 at 02:50 AM
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
-- Database: `bioskop`
--

-- --------------------------------------------------------

--
-- Table structure for table `film`
--

CREATE TABLE `film` (
  `id_film` int(11) NOT NULL,
  `judul` varchar(255) DEFAULT NULL,
  `durasi` int(11) DEFAULT NULL,
  `gambar` varchar(50) NOT NULL,
  `harga` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `film`
--

INSERT INTO `film` (`id_film`, `judul`, `durasi`, `gambar`, `harga`) VALUES
(1, 'AVENGERS', 120, 'avengers.jpg', 120000),
(2, 'STUPID CLOWN', 90, 'Komedi.jpg', 300000),
(3, 'After We Married', 150, 'Romantic2.jpg', 75000),
(4, 'PENNYWISE', 105, 'horor.jpg', 300000),
(5, 'IRONMAN V', 180, 'ironman.jpg', 500000),
(6, 'SPIDERMAN AWESOME 3', 90, 'spiderman.jpg', 450000),
(7, 'AVENGERS AWKWARD', 60, 'CaptainAmerika.jpg', 150000),
(8, 'THE BACK DOLL', 85, 'Horor1.jpg', 120000),
(9, 'A HALLWAY', 120, 'Horor3.jpg', 200000),
(10, 'I WILL KILL YOU', 180, 'Horor4.jpg', 250000),
(11, 'DEMON HUNTER STRIKE', 120, 'Horor5.jpg', 150000),
(12, 'AFTER SEX', 100, 'Romantic4.jpg', 135000),
(13, 'WITH ME?', 90, 'Romantic3.jpg', 230000),
(14, 'DO YOU LOVE ME?', 85, 'Romantic1.jpg', 145000),
(15, 'WE AGE TOGETHER', 75, 'Romantic5.jpg', 50000),
(16, 'OUR LOVE', 110, 'Romantic6.jpg', 100000),
(17, 'THIS IS FOR YOU', 75, 'Romantic8.jpg', 75000),
(18, 'THE MONKEY', 95, 'Toti.jpg', 450000),
(19, 'W H A T ?', 65, 'komedi7.jpg', 75000),
(20, 'BLACK SPIDERMAN', 95, 'Spiderman5.jpg', 600000),
(21, 'SPIDERMAN 3', 85, 'Spiderman10.jpg', 230000),
(22, 'THE CAT', 60, 'Komedi66.jpg', 125000),
(23, 'CAT IS CAT', 45, 'komedi7.jpg', 75000),
(24, 'THE KILLER', 120, 'Horor100.jpg', 325000),
(25, 'THE CAMERA', 75, 'kamera.jpg', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `jenis` varchar(255) DEFAULT NULL,
  `id_genre` int(11) NOT NULL,
  `id_film` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`jenis`, `id_genre`, `id_film`) VALUES
('ACTION', 1, 1),
('COMEDY', 2, 2),
('ROMANCE', 3, 3),
('HOROR', 4, 4),
('ACTION', 5, 5),
('ACTION', 6, 6),
('COMEDY', 7, 7),
('HOROR', 8, 8),
('HOROR', 9, 9),
('HOROR', 10, 10),
('HOROR', 11, 11),
('ROMANCE', 12, 12),
('ROMANCE', 13, 13),
('ROMANCE', 14, 14),
('ROMANCE', 15, 15),
('ROMANCE', 16, 16),
('ROMANCE', 17, 17),
('COMEDY', 18, 18),
('COMEDY', 19, 19),
('ACTION', 20, 20),
('ACTION', 21, 21),
('COMEDY', 22, 22),
('COMEDY', 23, 23),
('HOROR', 24, 24),
('ACTION', 25, 25);

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `jobdesk` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama`, `jobdesk`) VALUES
(1, 'ADRIAN', 'ADMIN XXI'),
(2, 'TOTI', 'ADMIN XXI'),
(3, 'MARCO', 'ADMIN XXI'),
(4, 'Alice Williams', 'HRD'),
(5, 'Charlie Brown', 'Penjualan Tiket');

-- --------------------------------------------------------

--
-- Table structure for table `penonton`
--

CREATE TABLE `penonton` (
  `id_penonton` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `penonton`
--

INSERT INTO `penonton` (`id_penonton`) VALUES
(113),
(262),
(1353),
(1870),
(2005),
(2526),
(3209),
(3331),
(3408),
(3951),
(4025),
(4203),
(4754),
(5121),
(5328),
(5794),
(5918),
(6095),
(6438),
(6476),
(6673),
(7124),
(7219),
(8190),
(8541),
(8575),
(9358),
(9622),
(9897),
(9956);

-- --------------------------------------------------------

--
-- Table structure for table `teater`
--

CREATE TABLE `teater` (
  `nama_teater` varchar(255) NOT NULL,
  `no_kursi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teater`
--

INSERT INTO `teater` (`nama_teater`, `no_kursi`) VALUES
('Teater A', 'A1'),
('Teater B', 'B5'),
('Teater C', 'C3'),
('Teater D', 'D7'),
('Teater E', 'E2');

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  `id_pegawai` int(11) NOT NULL,
  `id_penonton` int(11) NOT NULL,
  `harga` int(11) DEFAULT NULL,
  `nama_teater` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `film`
--
ALTER TABLE `film`
  ADD PRIMARY KEY (`id_film`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id_genre`),
  ADD KEY `id_film` (`id_film`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `penonton`
--
ALTER TABLE `penonton`
  ADD PRIMARY KEY (`id_penonton`);

--
-- Indexes for table `teater`
--
ALTER TABLE `teater`
  ADD PRIMARY KEY (`nama_teater`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `id_film` (`id_film`),
  ADD KEY `id_pegawai` (`id_pegawai`),
  ADD KEY `id_penonton` (`id_penonton`),
  ADD KEY `nama_teater` (`nama_teater`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `film`
--
ALTER TABLE `film`
  MODIFY `id_film` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `id_genre` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `penonton`
--
ALTER TABLE `penonton`
  MODIFY `id_penonton` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483648;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7778;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `genre`
--
ALTER TABLE `genre`
  ADD CONSTRAINT `genre_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`);

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `tiket_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`id_film`),
  ADD CONSTRAINT `tiket_ibfk_2` FOREIGN KEY (`id_pegawai`) REFERENCES `pegawai` (`id_pegawai`),
  ADD CONSTRAINT `tiket_ibfk_3` FOREIGN KEY (`id_penonton`) REFERENCES `penonton` (`id_penonton`),
  ADD CONSTRAINT `tiket_ibfk_4` FOREIGN KEY (`nama_teater`) REFERENCES `teater` (`nama_teater`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
