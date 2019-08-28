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
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `spek_barang` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `kondisi` varchar(255) NOT NULL,
  `status_barang` int(11) NOT NULL,
  `sumber_dana` varchar(255) NOT NULL,
  `id_supplier` int(11) NOT NULL,
  `tanggal_beli` date NOT NULL,
  `gambar_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `id_jenis`, `spek_barang`, `harga`, `kondisi`, `status_barang`, `sumber_dana`, `id_supplier`, `tanggal_beli`, `gambar_barang`) VALUES
(2, 1, 'ACER Aspire One', '30000', 'baik', 0, '', 1, '2019-07-09', 'LostSagaShot_170620_114635.jpg'),
(3, 2, 'Epson 5300', '50000', 'baik', 1, '', 1, '2019-07-26', '12657336_142480999466513_3108370430186816240_o.jpg'),
(4, 1, 'HP', '5000000', 'baik', 0, '', 1, '2019-07-10', '144Hz_Widescreen_LED_Gaming_Monitor.png'),
(5, 2, 'LG', '5000', 'baik', 0, '', 2, '2019-06-25', 'user8-128x128.jpg'),
(7, 1, 'Epson 5300', '5000', 'baik', 1, '', 2, '0000-00-00', 'SLIDER_MOBILE_720_x_960_px.jpg'),
(8, 2, 'ASUS', '5000000', 'hilang', 0, '', 2, '2019-07-09', 'LostSagaShot_170620_114538.jpg'),
(9, 3, 'USB to VGA', '50000', 'baik', 0, '', 2, '2019-07-11', 'Bola_Futsal_Nike_Menor_X_Ball_Racer_Blue_Metallic_SC3039-410_Original.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
