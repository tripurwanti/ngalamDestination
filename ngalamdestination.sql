-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2018 at 02:38 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ngalamdestination`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(14) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto_profil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `username`, `password`, `foto_profil`) VALUES
(1, 'Maurendra Retawan Waluyo', 'maurendra', '202cb962ac59075b964b07152d234b70', 'client31.png');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(50) NOT NULL,
  `id_data_wisata` varchar(50) NOT NULL,
  `id_user` int(14) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_wisata`
--

CREATE TABLE `data_wisata` (
  `id` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `nomor_telp` varchar(15) NOT NULL,
  `htm` int(50) NOT NULL,
  `address` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `foto_profil` varchar(50) NOT NULL,
  `jam_operasional` varchar(50) NOT NULL,
  `last_update` varchar(50) NOT NULL,
  `location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_wisata`
--

INSERT INTO `data_wisata` (`id`, `nama`, `description`, `nomor_telp`, `htm`, `address`, `category`, `foto_profil`, `jam_operasional`, `last_update`, `location`) VALUES
('NTR-1', 'Pantai Balekambang', 'Pantai yang terletak di Desa Srigonco, Kecamatan Bantur, Kabupaten Malang ini khas dengan adanya pulau kecil yang menjorok ke lautan. Pulau yang diberi nama Ismoyo dan mirip sekali dengan Tanah Lot ini memiliki jembatan yang ujungnya berada di daratan. Bisa diakses dari Kota Malang dengan mobil atau motor ini tidak berhenti di sana saja. Di dalam pulau kecil yang dihubungkan jembatan juga terdapat pura kecil untuk pemujaan. Biasanya saat bulan Muharam tiba, akan ada banyak orang berziarah ke sini sembari menikmati keindahan pantai berpasir putih dengan gelombang air laut yang cukup besar.\r\n\r\nSelain menikmati pantai dan juga keindahan pulau, Pantai Balekambang masih memiliki permainan luncur gantung atau flying fox. Wisatawan yang punya nyali besar bisa mencoba wahana ini dengan meluncur dari pulau kecil dan mendarat di pantai di daratan seberang.\r\n\r\nTiket masuk		: 15.000/orang (parkir motor : 5000; parkir mobil : 10000)\r\n', '-', 15000, 'Desa Srigonco, Kecamatan Bantur, Kabupaten Malang', 'Natural', 'Balekambang-1.jpg', 'Setiap hari, 24 jam (parkir sampai jam 17.00)', '01 May 2018', 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7893.929547019338!2d112.5337063!3d-8.4051205!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e78a94f026115f7%3A0x832b7afc3f082b05!2sPantai+Balekambang!5e0!3m2!1sid!2sid!4v1525133095033'),
('NTR-2', 'Coban Rondo', 'Terletak di Jalan Coban Rondo, Desa Pandesari, Kecamatan Pujun, Kabupaten Malang, Air Terjun Coban Rondo menghadirkan pemandangan yang menakjubkan. Wisatawan yang datang ke sini bisa menikmati keindahan air terjun dengan latar belakang pemandangan alam hijau yang memikat.\r\n\r\nSelain menghadirkan air terjun, kawasan taman wisata ini juga memberikan beberapa fasilitas pendukung. Wisatawan yang ingin menikmati alam bisa melakukan kegiatan mancakrida, kamping, bermain kano, paralayang, hingga arung jeram dengan mengikuti aliran air yang sangat deras.\r\n\r\nUntuk bisa mengakses kawasan ini, pengunjung bisa mengambil rute dari Kota Malang menuju Kota Batu. Selanjutnya perjalanan dilanjutkan menuju kawasan kaki gunung melalui jalan berkelok.\r\n\r\nTiket masuk		: Hari Biasa Rp15.000/orang; Hari Libur Rp18.000/orang', '-', 15000, 'Jl. Coban Rondo, Pandesari, Pujon, Malang', 'Natural', 'Coban_rondo_2.jpg', 'Setiap hari, 07.00 – 17.00', '01 May 2018', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.09629006622!2d112.4751303147787!3d-7.884993994319378!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7887009890ac2f%3A0x9f46ac987d3e2274!2sAir+Terjun+Coban+Rondo!5e0!3m2!1sid!2sid!4v15251334');

-- --------------------------------------------------------

--
-- Table structure for table `favorite_user`
--

CREATE TABLE `favorite_user` (
  `id_favorite` int(50) NOT NULL,
  `id_user` int(14) NOT NULL,
  `id_data_wisata` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foto_wisata`
--

CREATE TABLE `foto_wisata` (
  `id` varchar(50) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `id_foto` int(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto_wisata`
--

INSERT INTO `foto_wisata` (`id`, `foto`, `id_foto`) VALUES
('NTR-1', 'Balekambang-2.jpg', 1),
('NTR-1', 'Balekambang-3.jpg', 2),
('NTR-1', 'Balekambang-5.jpg', 3),
('NTR-1', 'Balekambang-6.jpg', 4),
('NTR-2', 'Coban_rondo_1.jpg', 5),
('NTR-2', 'Coban_rondo_5.jpg', 6),
('NTR-2', 'Coban_rondo_4.jpg', 7),
('NTR-2', 'Coban_rondo_3.jpg', 8);

-- --------------------------------------------------------

--
-- Table structure for table `history_user`
--

CREATE TABLE `history_user` (
  `id_history` int(50) NOT NULL,
  `id_user` int(14) NOT NULL,
  `id_data_wisata` varchar(50) NOT NULL,
  `time_visit` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(14) NOT NULL,
  `username` varchar(50) NOT NULL,
  `fullname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `foto_profil` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `fullname`, `email`, `password`, `foto_profil`) VALUES
(1, 'maurendra', 'Maurendra Retawan Waluyo', 'mrendra25@gmail.com', '202cb962ac59075b964b07152d234b70', 'admin.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_user`
--

CREATE TABLE `wishlist_user` (
  `id_wishlist` int(50) NOT NULL,
  `id_user` int(14) NOT NULL,
  `id_data_wisata` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_data_wisata` (`id_data_wisata`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `data_wisata`
--
ALTER TABLE `data_wisata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorite_user`
--
ALTER TABLE `favorite_user`
  ADD PRIMARY KEY (`id_favorite`),
  ADD KEY `id_data_wisata` (`id_data_wisata`),
  ADD KEY `id_user` (`id_user`);

--
-- Indexes for table `foto_wisata`
--
ALTER TABLE `foto_wisata`
  ADD PRIMARY KEY (`id_foto`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `history_user`
--
ALTER TABLE `history_user`
  ADD PRIMARY KEY (`id_history`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_data_wisata` (`id_data_wisata`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wishlist_user`
--
ALTER TABLE `wishlist_user`
  ADD PRIMARY KEY (`id_wishlist`),
  ADD KEY `id_user` (`id_user`),
  ADD KEY `id_data_wisata` (`id_data_wisata`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorite_user`
--
ALTER TABLE `favorite_user`
  MODIFY `id_favorite` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `foto_wisata`
--
ALTER TABLE `foto_wisata`
  MODIFY `id_foto` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `history_user`
--
ALTER TABLE `history_user`
  MODIFY `id_history` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wishlist_user`
--
ALTER TABLE `wishlist_user`
  MODIFY `id_wishlist` int(50) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_1` FOREIGN KEY (`id_data_wisata`) REFERENCES `data_wisata` (`id`),
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `favorite_user`
--
ALTER TABLE `favorite_user`
  ADD CONSTRAINT `favorite_user_ibfk_1` FOREIGN KEY (`id_data_wisata`) REFERENCES `data_wisata` (`id`),
  ADD CONSTRAINT `favorite_user_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `foto_wisata`
--
ALTER TABLE `foto_wisata`
  ADD CONSTRAINT `foto_wisata_ibfk_1` FOREIGN KEY (`id`) REFERENCES `data_wisata` (`id`);

--
-- Constraints for table `history_user`
--
ALTER TABLE `history_user`
  ADD CONSTRAINT `history_user_ibfk_1` FOREIGN KEY (`id_data_wisata`) REFERENCES `data_wisata` (`id`),
  ADD CONSTRAINT `history_user_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);

--
-- Constraints for table `wishlist_user`
--
ALTER TABLE `wishlist_user`
  ADD CONSTRAINT `wishlist_user_ibfk_1` FOREIGN KEY (`id_data_wisata`) REFERENCES `data_wisata` (`id`),
  ADD CONSTRAINT `wishlist_user_ibfk_2` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
