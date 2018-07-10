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
-- Table structure for table `tb_obat`
--

CREATE TABLE IF NOT EXISTS `tb_obat` (
  `id_obat` int(20) NOT NULL AUTO_INCREMENT,
  `kode_obat` varchar(50) NOT NULL,
  `nama_obat` varchar(200) NOT NULL,
  `kategori_obat` varchar(50) NOT NULL,
  `jenis_obat` varchar(30) NOT NULL,
  `merek_obat` varchar(200) NOT NULL,
  `expired` date NOT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_obat`
--

INSERT INTO `tb_obat` (`id_obat`, `kode_obat`, `nama_obat`, `kategori_obat`, `jenis_obat`, `merek_obat`, `expired`) VALUES
(1, 'Siaajaj', 'Paracetamol', 'Laki-laki', 'O', 'jhk', '0000-00-00'),
(2, 'kjklas', 'Paracetamol', 'Bebas', 'AB', 'kjils', '0000-00-00'),
(3, 'nonu', 'nnn', 'Keras', 'Serbuk', 'ijij', '2018-07-26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
