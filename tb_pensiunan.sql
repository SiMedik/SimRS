-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 06:36 AM
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
-- Table structure for table `tb_pensiunan`
--

CREATE TABLE IF NOT EXISTS `tb_pensiunan` (
  `id_pensiunan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pensiunan` varchar(200) NOT NULL,
  `tgl_pensiun` date NOT NULL,
  `catatan` text NOT NULL,
  PRIMARY KEY (`id_pensiunan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_pensiunan`
--

INSERT INTO `tb_pensiunan` (`id_pensiunan`, `nama_pensiunan`, `tgl_pensiun`, `catatan`) VALUES
(2, 'Nurlisah s', '0291-04-06', '                                        udshjkA                      \r\n                                                                            ');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
