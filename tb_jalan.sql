-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 11, 2018 at 07:10 AM
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
-- Table structure for table `tb_jalan`
--

CREATE TABLE IF NOT EXISTS `tb_jalan` (
  `id_jalan` int(11) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `poli` varchar(100) NOT NULL,
  `dokter` varchar(100) NOT NULL,
  `diagnosa` varchar(200) NOT NULL,
  PRIMARY KEY (`id_jalan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_jalan`
--

INSERT INTO `tb_jalan` (`id_jalan`, `id_pasien`, `tgl`, `poli`, `dokter`, `diagnosa`) VALUES
(1, 3, '2018-07-10', 'Anak-Anak', 'Sri Suci Indasari', 'sakitki'),
(2, 4, '2018-07-10', 'Poli Jiwa', 'Syifa Lailatul Istiana', 'kjhk'),
(3, 4, '2018-07-10', 'Anak-Anak', 'Sarah Fitra Ramadhani', 'kjhkhh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
