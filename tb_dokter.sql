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
-- Table structure for table `tb_dokter`
--

CREATE TABLE IF NOT EXISTS `tb_dokter` (
  `id_dokter` int(50) NOT NULL AUTO_INCREMENT,
  `nama_dokter` varchar(200) NOT NULL,
  `no_izin_praktek` varchar(100) NOT NULL,
  `spesialis` varchar(200) NOT NULL,
  `alumni` varchar(300) NOT NULL,
  `no_hp` int(80) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  PRIMARY KEY (`id_dokter`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_dokter`
--

INSERT INTO `tb_dokter` (`id_dokter`, `nama_dokter`, `no_izin_praktek`, `spesialis`, `alumni`, `no_hp`, `alamat`, `date_created`) VALUES
(1, 'Sri Suci Indasari', '1937287381', 'Spesialis Anastesi', 'UIN Alauddin Makassar', 8192838, 'Pallangga', '2018-07-08'),
(3, 'Syifa Lailatul Istiana', '7290391782', 'Spesialis Bedah', 'Universitas Gajah Mada', 2147483647, 'Majene', '2018-07-08'),
(4, 'Sarah Fitra Ramadhani', '928301829037', 'Spesialis Bedah Saraf', 'Universitas Indonesia', 2147483647, 'Malino', '2018-07-08');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
