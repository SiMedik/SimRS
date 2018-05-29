-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 09:38 AM
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`id_admin`, `adm_nama`, `adm_username`, `adm_pass`, `adm_foto`, `adm_level`) VALUES
(2, 'Suci sri', 'suci', 'qwerty', 'admin-1527505490.jpg', 'Keuangan'),
(3, 'lisa', 'lisa', '123', 'lisa.jpg', 'Super Admin'),
(4, 'Nurlisah', 'Lisa', '1234', 'admin-1527504468.jpg', 'Dokter'),
(5, 'indah', 'indah', '12345', 'admin-1527579504.jpg', 'Front Office');

-- --------------------------------------------------------

--
-- Table structure for table `tb_departemen`
--

CREATE TABLE IF NOT EXISTS `tb_departemen` (
  `id_depa` int(11) NOT NULL AUTO_INCREMENT,
  `nama_depa` varchar(200) NOT NULL,
  `alamat_depa` text NOT NULL,
  PRIMARY KEY (`id_depa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_departemen`
--

INSERT INTO `tb_departemen` (`id_depa`, `nama_depa`, `alamat_depa`) VALUES
(1, 'uin alaudiin', 'samata gowa');

-- --------------------------------------------------------

--
-- Table structure for table `tb_gedung`
--

CREATE TABLE IF NOT EXISTS `tb_gedung` (
  `id_gedung` int(11) NOT NULL AUTO_INCREMENT,
  `nama_gedung` varchar(200) NOT NULL,
  `alamat_gedung` text NOT NULL,
  `lantai` int(11) NOT NULL,
  PRIMARY KEY (`id_gedung`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_gedung`
--

INSERT INTO `tb_gedung` (`id_gedung`, `nama_gedung`, `alamat_gedung`, `lantai`) VALUES
(1, 'Fak saitek dan', 'samata gowa', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tb_inap`
--

CREATE TABLE IF NOT EXISTS `tb_inap` (
  `id_inap` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kamar` varchar(100) NOT NULL,
  `kode_kamar` varchar(100) NOT NULL,
  PRIMARY KEY (`id_inap`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_inap`
--

INSERT INTO `tb_inap` (`id_inap`, `nama_kamar`, `kode_kamar`) VALUES
(1, 'Mawarku', '001 ab');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE IF NOT EXISTS `tb_jabatan` (
  `id_jabatan` int(11) NOT NULL AUTO_INCREMENT,
  `nama_jabatan` varchar(200) NOT NULL,
  `tingkat_jabatan` varchar(2000) NOT NULL,
  `kode_jabatan` varchar(2000) NOT NULL,
  PRIMARY KEY (`id_jabatan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_jabatan`
--

INSERT INTO `tb_jabatan` (`id_jabatan`, `nama_jabatan`, `tingkat_jabatan`, `kode_jabatan`) VALUES
(1, 'direktur', 'II a', 'a001');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenjang`
--

CREATE TABLE IF NOT EXISTS `tb_jenjang` (
  `id_jenjang` int(11) NOT NULL AUTO_INCREMENT,
  `kode_jenjang` varchar(2000) NOT NULL,
  `nama_jenjang` varchar(200) NOT NULL,
  PRIMARY KEY (`id_jenjang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_jenjang`
--

INSERT INTO `tb_jenjang` (`id_jenjang`, `kode_jenjang`, `nama_jenjang`) VALUES
(4, '001', 'tinggi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pasien`
--

CREATE TABLE IF NOT EXISTS `tb_pasien` (
  `id_pasien` int(11) NOT NULL AUTO_INCREMENT,
  `no_regis` varchar(2000) NOT NULL,
  `nama_pasien` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `goldar` varchar(2) NOT NULL,
  `tempatlahir` varchar(30) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `nama_ibu` varchar(50) NOT NULL,
  `alamat` varchar(70) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `pekerjaan` varchar(15) NOT NULL,
  `status_menikah` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `no_regis`, `nama_pasien`, `jenis_kelamin`, `goldar`, `tempatlahir`, `tanggal_lahir`, `nama_ibu`, `alamat`, `agama`, `no_hp`, `pekerjaan`, `status_menikah`) VALUES
(3, '4ad', 'Nurlisah', 'Perempuan', 'O', 'Nusa', '1999-06-04', 'Subaedah', 'Desa Nusa Kec Kahu', 'Islam', '085241746695', 'Mahasisiwa', 'Belum Menikah'),
(4, '001/B/2018', 'a', 'Laki-laki', 'B', 'Makassar kahu', '0029-04-04', 'a', 'a', 'Kristen', 'a', 'a', 'Menikah');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poli`
--

CREATE TABLE IF NOT EXISTS `tb_poli` (
  `id_poli` int(11) NOT NULL AUTO_INCREMENT,
  `nama_poli` varchar(200) NOT NULL,
  `kode_poli` varchar(2000) NOT NULL,
  PRIMARY KEY (`id_poli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_poli`
--

INSERT INTO `tb_poli` (`id_poli`, `nama_poli`, `kode_poli`) VALUES
(2, 'Anak', 'P 2');

-- --------------------------------------------------------

--
-- Table structure for table `tb_spesialis`
--

CREATE TABLE IF NOT EXISTS `tb_spesialis` (
  `id_spesialis` int(11) NOT NULL AUTO_INCREMENT,
  `nama_dokter` varchar(200) NOT NULL,
  `spesialis` varchar(200) NOT NULL,
  PRIMARY KEY (`id_spesialis`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_spesialis`
--

INSERT INTO `tb_spesialis` (`id_spesialis`, `nama_dokter`, `spesialis`) VALUES
(1, 'Nurlisah', 'Gizi');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
