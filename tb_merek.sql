-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 04:09 AM
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
-- Table structure for table `tb_merek`
--

CREATE TABLE IF NOT EXISTS `tb_merek` (
  `id_merek` int(60) NOT NULL AUTO_INCREMENT,
  `kode` varchar(200) NOT NULL,
  `nama_merek` varchar(200) NOT NULL,
  `catatan_merek` text NOT NULL,
  PRIMARY KEY (`id_merek`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_merek`
--

INSERT INTO `tb_merek` (`id_merek`, `kode`, `nama_merek`, `catatan_merek`) VALUES
(2, 'bujbbuu', 'Klklkd', 'ndinsinads');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
