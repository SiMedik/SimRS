-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 04:08 AM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_medik`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_inventori`
--

CREATE TABLE IF NOT EXISTS `tb_inventori` (
  `id_inventori` int(60) NOT NULL AUTO_INCREMENT,
  `kode_inventori` varchar(100) NOT NULL,
  `nama_inventori` varchar(200) NOT NULL,
  `catatan_inventori` text NOT NULL,
  PRIMARY KEY (`id_inventori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_inventori`
--

INSERT INTO `tb_inventori` (`id_inventori`, `kode_inventori`, `nama_inventori`, `catatan_inventori`) VALUES
(1, 'bb', 'fhf', 'vh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
