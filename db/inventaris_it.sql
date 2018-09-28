-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 26, 2018 at 04:42 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventaris_it`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `no_barang` int(4) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `jenis_barang` varchar(40) NOT NULL,
  `hargabeli_brg` varchar(10) NOT NULL,
  `kuantitas` int(5) NOT NULL,
  `brg_AddedBy` int(4) NOT NULL,
  `brg_EntryDate` datetime NOT NULL,
  `tgl_beli` date NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `no_barang`, `barcode`, `nama_barang`, `jenis_barang`, `hargabeli_brg`, `kuantitas`, `brg_AddedBy`, `brg_EntryDate`, `tgl_beli`, `keterangan`) VALUES
(1, 0, '8453697043', 'HP Mouse Assistance', 'Tetikus', '125000', 6, 0, '2018-09-26 16:35:58', '2018-09-15', 'Nice mice.');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `jenis_barang` varchar(250) NOT NULL,
  `kat_AddedBy` varchar(4) NOT NULL,
  `kat_EntryDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `jenis_barang`, `kat_AddedBy`, `kat_EntryDate`) VALUES
(1, 'Monitor', 'ari', '2018-09-26');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `uid` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak` varchar(7) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `softDelete` int(1) NOT NULL,
  `uAddedBy` int(4) NOT NULL,
  `uTanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uid`, `username`, `password`, `hak`, `status`, `softDelete`, `uAddedBy`, `uTanggal`) VALUES
(1, 1000, 'ari', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin', 1, 0, 1000, '2018-08-10'),
(5, 1001, 'admin', '8cb2237d0679ca88db6464eac60da96345513964', 'admin', 1, 0, 1000, '2018-08-23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD UNIQUE KEY `no_barang` (`no_barang`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
