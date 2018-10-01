-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2+deb7u8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2018 at 04:45 AM
-- Server version: 5.5.60
-- PHP Version: 5.4.45-0+deb7u14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `inventaris_it`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(11) NOT NULL AUTO_INCREMENT,
  `no_barang` varchar(20) NOT NULL,
  `barcode` varchar(50) NOT NULL,
  `nama_barang` varchar(250) NOT NULL,
  `jenis_barang` varchar(40) NOT NULL,
  `hargabeli_brg` varchar(10) NOT NULL,
  `kuantitas` int(5) NOT NULL,
  `brg_AddedBy` varchar(20) NOT NULL,
  `brg_EditedBy` varchar(20) NOT NULL,
  `brg_EntryDate` datetime NOT NULL,
  `tgl_beli` date NOT NULL,
  `keterangan` text NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `no_barang`, `barcode`, `nama_barang`, `jenis_barang`, `hargabeli_brg`, `kuantitas`, `brg_AddedBy`, `brg_EditedBy`, `brg_EntryDate`, `tgl_beli`, `keterangan`) VALUES
(1, 'DVD/1/PC-30', '12222222', 'Samsung CFS DVD v.2.30', 'DVD', '24000000', 25, 'ari', 'admin', '2018-09-27 00:00:00', '2018-09-26', 'Goods.'),
(2, '11', '76453011', 'HP Mouse Assistance', 'Mouse', '300000', 8, 'admin', '', '2018-09-27 00:00:00', '2018-09-18', 'Nice mice.'),
(3, '2770', '67186001362', 'Canon Pixma 2770', 'Printer', '605000', 12, 'ari', '', '2018-09-27 00:00:00', '2018-09-07', 'Old stuff like new.'),
(4, '121212', '463276427836', 'Windows 10 Professional', 'Sistem Operasi', '2600000', 26, 'admin', '', '2018-09-27 00:00:00', '2018-09-01', '...'),
(5, '400', '437862325', 'Epson EB-X7', 'Proyektor', '6599000', 20, 'ari', '', '2018-09-27 00:00:00', '2018-08-27', '...'),
(6, '110', '5983472221', 'Genius KB - 110', 'Keyboard', '97500', 50, 'admin', '', '2018-09-27 00:00:00', '2018-08-15', '...');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE IF NOT EXISTS `kategori` (
  `id_kategori` int(11) NOT NULL AUTO_INCREMENT,
  `jenis_barang` varchar(250) NOT NULL,
  `kat_AddedBy` varchar(20) NOT NULL,
  `kat_EditedBy` varchar(20) NOT NULL,
  `kat_EntryDate` date NOT NULL,
  PRIMARY KEY (`id_kategori`),
  KEY `jenis_barang` (`jenis_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `jenis_barang`, `kat_AddedBy`, `kat_EditedBy`, `kat_EntryDate`) VALUES
(1, 'Proyektor', 'ari', 'admin', '2018-09-27'),
(2, 'Mouse', 'ari', '', '2018-09-27'),
(3, 'Printer', 'admin', 'admin', '2018-09-27'),
(4, 'Monitor', 'admin', '', '2018-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uid` int(3) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `hak` varchar(7) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `softDelete` int(1) NOT NULL,
  `uAddedBy` int(4) NOT NULL,
  `uTanggal` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `uid`, `username`, `password`, `hak`, `status`, `softDelete`, `uAddedBy`, `uTanggal`) VALUES
(1, 1000, 'ari', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'admin', 1, 0, 1000, '2018-08-10'),
(5, 1001, 'admin', '8cb2237d0679ca88db6464eac60da96345513964', 'admin', 1, 0, 1000, '2018-08-23');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
