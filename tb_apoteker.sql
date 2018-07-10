-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2018 at 02:34 AM
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
-- Table structure for table `tb_apoteker`
--

CREATE TABLE IF NOT EXISTS `tb_apoteker` (
  `id_apoteker` int(20) NOT NULL AUTO_INCREMENT,
  `nama_apoteker` varchar(300) NOT NULL,
  `alamat_apoteker` varchar(300) NOT NULL,
  `no_hp` int(15) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`id_apoteker`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_apoteker`
--

INSERT INTO `tb_apoteker` (`id_apoteker`, `nama_apoteker`, `alamat_apoteker`, `no_hp`, `jenis_kelamin`, `date_created`) VALUES
(1, 'Ibnu', 'Makassar', 565766467, 'Laki-Laki', '2018-07-08'),
(2, 'jjlijaid', 'kjmais', 98987, 'Laki-Laki', '2018-07-11'),
(3, 'jbjbkj', 'ttftfy', 87897, 'Perempuan', '2018-07-07');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
