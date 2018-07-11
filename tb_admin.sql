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
-- Table structure for table `tb_admin`
--

CREATE TABLE IF NOT EXISTS `tb_admin` (
  `id_admin` int(5) NOT NULL AUTO_INCREMENT,
  `adm_nama` varchar(100) NOT NULL,
  `adm_username` varchar(50) NOT NULL,
  `adm_pass` varchar(50) NOT NULL,
  `adm_foto` varchar(100) NOT NULL,
  `adm_level` varchar(30) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `adm_nama`, `adm_username`, `adm_pass`, `adm_foto`, `adm_level`) VALUES
(2, 'Suci sri', 'suci', 'qwerty', 'admin-1527505490.jpg', 'Keuangan'),
(3, 'lisa', 'lisa', '123', 'lisa.jpg', 'Super Admin'),
(4, 'Nurlisah', 'Lisa', '1234', 'admin-1527504468.jpg', 'Dokter'),
(5, 'indah', 'indah', '12345', 'admin-1527579504.jpg', 'Front Office'),
(6, 'Suci', 'suciii', '12345', 'img3.jpg', 'Back Office'),
(7, 'Sri  Suci', 'sri_suciii', 'qwerty', 'img3.jpg', 'Dokter');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
