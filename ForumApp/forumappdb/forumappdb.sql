-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2019 at 06:44 PM
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
-- Database: `forumappdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id_rating` int(11) NOT NULL,
  `vote` float NOT NULL,
  `tanggal` datetime NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_thread` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id_rating`, `vote`, `tanggal`, `id_user`, `id_thread`) VALUES
(1, 3, '2019-04-19 00:00:00', 1, 1),
(2, 3, '2019-04-12 00:00:00', 1, 1),
(3, 0, '2019-04-19 18:09:30', 1, 2),
(4, 0, '2019-04-19 18:10:00', 1, 1),
(5, 3, '2019-04-19 18:26:41', 1, 3),
(6, 3, '2019-04-19 18:38:01', 1, 5);

-- --------------------------------------------------------

--
-- Table structure for table `reply`
--

CREATE TABLE `reply` (
  `id_reply` int(11) NOT NULL,
  `balasan` varchar(255) NOT NULL,
  `tanggal` datetime NOT NULL,
  `id` int(11) NOT NULL,
  `id_thread` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reply`
--

INSERT INTO `reply` (`id_reply`, `balasan`, `tanggal`, `id`, `id_thread`) VALUES
(3, 'cuma komen aja dulu', '2019-04-18 17:26:58', 1, 1),
(4, 'ok aja', '2019-04-19 10:03:52', 1, 3),
(5, 'tes aja dulu', '2019-04-19 10:07:47', 1, 2),
(6, 'komen lagi', '2019-04-19 10:13:59', 1, 3),
(7, 'komenin aja', '2019-04-19 10:45:55', 1, 2),
(8, 'okok', '2019-04-19 10:47:23', 1, 1),
(9, 'tes komen\n', '2019-04-19 10:49:33', 1, 2),
(10, 'coba lagi\n', '2019-04-19 10:54:35', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `thread`
--

CREATE TABLE `thread` (
  `id_thread` int(11) NOT NULL,
  `judul` varchar(50) NOT NULL,
  `isi` varchar(255) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `thread`
--

INSERT INTO `thread` (`id_thread`, `judul`, `isi`, `id`, `email`, `tanggal`) VALUES
(1, 'Ini Judulnya', 'Dan disini Isinya', 1, 'jie.piranha@gmail.com', '0000-00-00 00:00:00'),
(2, 'Ini Judulnya lagi', 'Dan disini Isinya lagi', 2, 'panjihadjarati@modernland.co.id', '0000-00-00 00:00:00'),
(3, 'Ini Judulnya lagi nih', 'Dan disini Isinya lagi nih', 1, 'jie.piranha@gmail.com', '0000-00-00 00:00:00'),
(4, 'Judul Tes', 'Isinya juga tes', 1, 'jie.piranha@gmail.com', '0000-00-00 00:00:00'),
(5, 'Judul tes 2', 'Isinya juga tes 2', 1, 'jie.piranha@gmail.com', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `telp`, `foto`) VALUES
(1, 'Panji Ramadhan', 'jie.piranha@gmail.com', '9c7cc2cde1939666d314378b18857721', '0852123789', '31Mar2019181957.jpg'),
(2, 'Panji Hadjarati', 'panjihadjarati@modernland.co.id', '9c7cc2cde1939666d314378b18857721', '0852123987', '31Mar2019182104.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`id_rating`);

--
-- Indexes for table `reply`
--
ALTER TABLE `reply`
  ADD PRIMARY KEY (`id_reply`);

--
-- Indexes for table `thread`
--
ALTER TABLE `thread`
  ADD PRIMARY KEY (`id_thread`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `id_rating` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reply`
--
ALTER TABLE `reply`
  MODIFY `id_reply` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `thread`
--
ALTER TABLE `thread`
  MODIFY `id_thread` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
