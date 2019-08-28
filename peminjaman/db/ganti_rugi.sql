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
-- Table structure for table `ganti_rugi`
--

CREATE TABLE `ganti_rugi` (
  `id_gt` int(11) NOT NULL,
  `id_pinjam` int(11) NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `tgl` date NOT NULL,
  `tgl_bayar_gt` date NOT NULL,
  `status_gt` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ganti_rugi`
--

INSERT INTO `ganti_rugi` (`id_gt`, `id_pinjam`, `kondisi`, `tgl`, `tgl_bayar_gt`, `status_gt`) VALUES
(1, 1, 'rusak', '2019-07-01', '2019-07-01', 1),
(2, 3, 'rusak', '2019-07-02', '2019-07-02', 1),
(4, 6, 'rusak', '2019-07-11', '2019-07-11', 1),
(5, 19, 'hilang', '2019-07-26', '2019-07-26', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ganti_rugi`
--
ALTER TABLE `ganti_rugi`
  ADD PRIMARY KEY (`id_gt`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ganti_rugi`
--
ALTER TABLE `ganti_rugi`
  MODIFY `id_gt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
