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
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_pinjam` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_barang` int(11) NOT NULL,
  `tgl_pinjam` date NOT NULL,
  `tgl_kembali` date NOT NULL,
  `status` int(11) NOT NULL,
  `kembali` int(11) NOT NULL,
  `ket` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_pinjam`, `id_user`, `id_barang`, `tgl_pinjam`, `tgl_kembali`, `status`, `kembali`, `ket`) VALUES
(1, 1, 5, '2019-07-01', '2019-07-01', 2, 2, 'Dibawa OB'),
(2, 1, 3, '2019-07-01', '2019-07-05', 2, 1, 'ok'),
(3, 1, 2, '2019-07-02', '2019-07-02', 2, 2, 'Ok'),
(6, 5, 7, '2019-07-03', '2019-07-11', 2, 1, ''),
(7, 2, 5, '2019-07-03', '2019-07-12', 2, 1, 'ok'),
(8, 6, 8, '2019-07-04', '2019-07-04', 2, 1, 'Hilang'),
(9, 7, 4, '2019-07-04', '2019-07-12', 2, 1, 'Ok'),
(10, 1, 3, '2019-07-11', '2019-07-11', 2, 1, 'Ok'),
(11, 7, 3, '2019-07-11', '2019-07-25', 2, 1, 'Ok'),
(12, 1, 9, '2019-07-11', '2019-07-25', 2, 1, 'Ok'),
(13, 1, 8, '2019-07-12', '2019-07-25', 2, 1, 'Ok'),
(14, 7, 4, '2019-07-25', '2019-07-25', 2, 1, 'Ok'),
(19, 1, 8, '2019-07-26', '2019-07-26', 2, 1, 'ok'),
(20, 7, 2, '2019-07-26', '2019-07-26', 2, 2, 'Ob'),
(21, 1, 3, '2019-07-26', '0000-00-00', 1, 0, ''),
(22, 1, 7, '2019-07-26', '0000-00-00', 1, 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
