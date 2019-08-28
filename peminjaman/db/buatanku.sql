-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2019 at 12:16 PM
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

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) NOT NULL,
  `nm_jenis` varchar(255) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nm_jenis`, `gambar`) VALUES
(1, 'Laptop', 'lapotp-vector.jpg'),
(2, 'PC Desktop', 'pc-vector.jpg'),
(3, 'Kabel Converter', 'connector_icon1.jpg'),
(4, 'LCD Proyektor', 'proyektor-vektor1.jpg'),
(5, 'Harddisk', 'harddisk2-vector1.jpg'),
(6, 'Flashdisk', 'flash-vector1.jpg'),
(7, 'Printer', 'printer-vector1.jpg'),
(8, 'Toolkit', 'tools_kit-vector.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `kategori` varchar(20) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `kategori`, `keterangan`) VALUES
(1, 'Elektronik', 'Lain lain'),
(5, 'Pakaian', 'klhegriohbiegr');

-- --------------------------------------------------------

--
-- Table structure for table `nup`
--

CREATE TABLE `nup` (
  `no` int(11) NOT NULL,
  `nnup` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nup`
--

INSERT INTO `nup` (`no`, `nnup`) VALUES
(1, '1'),
(2, '2'),
(3, '2'),
(4, '3'),
(5, '3'),
(6, '4'),
(7, '5'),
(8, '6');

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

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `id_supplier` int(11) NOT NULL,
  `nm_supplier` varchar(255) NOT NULL,
  `telp_supplier` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id_supplier`, `nm_supplier`, `telp_supplier`, `alamat`) VALUES
(1, 'Ko Yudi', '08123456789', 'Jakarta'),
(2, 'Ko Obet', '0852123456', 'Cakung'),
(3, 'Ko Jovi', '08123456789', 'Depok');

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
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `ganti_rugi`
--
ALTER TABLE `ganti_rugi`
  ADD PRIMARY KEY (`id_gt`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `nup`
--
ALTER TABLE `nup`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_pinjam`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`id_supplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `ganti_rugi`
--
ALTER TABLE `ganti_rugi`
  MODIFY `id_gt` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `nup`
--
ALTER TABLE `nup`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_pinjam` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `id_supplier` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
