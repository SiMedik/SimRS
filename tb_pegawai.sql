-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2018 at 04:00 AM
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
-- Table structure for table `tb_pegawai`
--

CREATE TABLE IF NOT EXISTS `tb_pegawai` (
  `id_pegawai` int(11) NOT NULL AUTO_INCREMENT,
  `foto` varchar(1000) NOT NULL,
  `nama_pegawai` varchar(200) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `tempat_lahir` varchar(200) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `nik` varchar(200) NOT NULL,
  `nip` varchar(200) NOT NULL,
  `agama` varchar(200) NOT NULL,
  `pendidikan_terakhir` varchar(200) NOT NULL,
  `jabatan` varchar(200) NOT NULL,
  `pangkat` varchar(200) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_pegawai`
--

INSERT INTO `tb_pegawai` (`id_pegawai`, `foto`, `nama_pegawai`, `jk`, `tempat_lahir`, `tgl_lahir`, `nik`, `nip`, `agama`, `pendidikan_terakhir`, `jabatan`, `pangkat`, `alamat`, `no_hp`) VALUES
(1, 'pegawai-1528031667.jpg', 'Nurlisah s', 'Perempuan', 'nusa', '1999-06-04', '12345678', '89345678', 'Islam', 'SMA Sederajat', 'Pilih jabatan', 'Pilih Pangkat', 'Desa Nusa Kec Kahu', '085241746695');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
