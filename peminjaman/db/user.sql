-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 12:17 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `buatanku`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telp` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `foto` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `telp`, `alamat`, `foto`, `username`, `password`, `level`) VALUES
(1, 'Panji Ramadhan', 'panjihadjarati@modernland.co.id', '08123456789', 'Jakarta', 'user8-128x128.jpg', 'panji', '827ccb0eea8a706c4c34a16891f84e7b', 'peminjam'),
(2, 'Aritio', 'aritio@gmail.com', '08123456789', 'Jakarta', 'user2-160x160.jpg', 'aritio', '827ccb0eea8a706c4c34a16891f84e7b', 'admin'),
(5, 'Tamara', 'antek.piranha@gmail.com', '08123456789', 'Jakarta', 'user6-128x128.jpg', 'tamara', '827ccb0eea8a706c4c34a16891f84e7b', 'manager'),
(6, 'Farah Oktaviana', 'farah@modernland.co.id', '-', '-', 'user4-128x128.jpg', 'farah', '827ccb0eea8a706c4c34a16891f84e7b', 'peminjam'),
(7, 'Jovi Aldi', 'jovi@modernland.co.id', '-', '-', 'avatar04.png', 'jovi', '827ccb0eea8a706c4c34a16891f84e7b', 'peminjam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
