-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2018 at 05:44 AM
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
(2, 'Suci sri', 'suci', 'qwerty', 'admin-1527505490.jpg', 'Back Office'),
(3, 'lisa', 'lisa', '123', 'lisa.jpg', 'Super Admin'),
(4, 'Nurlisah', 'Lisa', '1234', 'admin-1527504468.jpg', 'Dokter'),
(5, 'indah', 'indah', '12345', 'admin-1527579504.jpg', 'Front Office');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_jalan`
--

INSERT INTO `tb_jalan` (`id_jalan`, `id_pasien`, `tgl`, `poli`, `dokter`, `diagnosa`) VALUES
(1, 3, '2018-07-10', 'Anak-Anak', 'Sri Suci Indasari', 'sakitki'),
(2, 4, '2018-07-10', 'Poli Jiwa', 'Syifa Lailatul Istiana', 'kjhk'),
(3, 4, '2018-07-10', 'Anak-Anak', 'Sarah Fitra Ramadhani', 'kjhkhh'),
(4, 3, '2018-07-13', 'Mawarku', 'Sri Suci Indasari', 'ds');

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
-- Table structure for table `tb_kategori`
--

CREATE TABLE IF NOT EXISTS `tb_kategori` (
  `id_kategori` int(50) NOT NULL AUTO_INCREMENT,
  `nama_kategori` varchar(200) NOT NULL,
  `deskripsi_kategori` text NOT NULL,
  PRIMARY KEY (`id_kategori`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_kategori`
--

INSERT INTO `tb_kategori` (`id_kategori`, `nama_kategori`, `deskripsi_kategori`) VALUES
(3, 'Berat', 'berat');

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
(2, 'A001', 'Yamaha', '-');

-- --------------------------------------------------------

--
-- Table structure for table `tb_nginap`
--

CREATE TABLE IF NOT EXISTS `tb_nginap` (
  `id_nginap` int(11) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `ruangan` varchar(1000) NOT NULL,
  `kelas` varchar(1000) NOT NULL,
  `no_kamar` varchar(1000) NOT NULL,
  `dokter` varchar(1000) NOT NULL,
  `diagnosa` varchar(1000) NOT NULL,
  `biaya` int(200) DEFAULT NULL,
  PRIMARY KEY (`id_nginap`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tb_nginap`
--

INSERT INTO `tb_nginap` (`id_nginap`, `id_pasien`, `tgl`, `ruangan`, `kelas`, `no_kamar`, `dokter`, `diagnosa`, `biaya`) VALUES
(1, 3, '2018-07-13', 'A', '1', 'Pilih Kamar', 'Sri Suci Indasari', 'a', NULL),
(2, 5, '2018-07-13', 'B', '1', 'Mawarku', 'Syifa Lailatul Istiana', 'hidhaskjd', NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `tb_pasien`
--

INSERT INTO `tb_pasien` (`id_pasien`, `no_regis`, `nama_pasien`, `jenis_kelamin`, `goldar`, `tempatlahir`, `tanggal_lahir`, `nama_ibu`, `alamat`, `agama`, `no_hp`, `pekerjaan`, `status_menikah`) VALUES
(3, '003', 'Nurlisah b', 'Perempuan', 'O', 'Nusa', '1999-06-04', 'Subaedah', 'Desa Nusa Kec Kahu', 'Islam', '085241746695', 'Mahasisiwa', 'Belum Menikah'),
(4, '001/B/2018', 'a', 'Laki-laki', 'B', 'Makassar kahu', '0029-04-04', 'a', 'a', 'Kristen', 'a', 'a', 'Menikah'),
(5, 'A002', 'Margono', 'Laki-laki', 'B', 'Solo', '2018-07-08', 'a', 'a', 'Islam', '085241746695', 'Mahasisiwa', 'Belum Menikah');

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_pjawab`
--

CREATE TABLE IF NOT EXISTS `tb_pjawab` (
  `id_pjawab` int(60) NOT NULL AUTO_INCREMENT,
  `kode_pjawab` varchar(60) NOT NULL,
  `nama_pjawab` varchar(200) NOT NULL,
  `catatan_pjawab` text NOT NULL,
  PRIMARY KEY (`id_pjawab`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_pjawab`
--

INSERT INTO `tb_pjawab` (`id_pjawab`, `kode_pjawab`, `nama_pjawab`, `catatan_pjawab`) VALUES
(1, 'jjkansd', 'mklmxkmas', 'mknssd');

-- --------------------------------------------------------

--
-- Table structure for table `tb_poli`
--

CREATE TABLE IF NOT EXISTS `tb_poli` (
  `id_poli` int(11) NOT NULL AUTO_INCREMENT,
  `nama_poli` varchar(200) NOT NULL,
  `kode_poli` varchar(2000) NOT NULL,
  PRIMARY KEY (`id_poli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tb_poli`
--

INSERT INTO `tb_poli` (`id_poli`, `nama_poli`, `kode_poli`) VALUES
(2, 'Anak-Anak', 'P1'),
(3, 'Poli Jiwa', 'p3');

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

-- --------------------------------------------------------

--
-- Table structure for table `tb_ugd`
--

CREATE TABLE IF NOT EXISTS `tb_ugd` (
  `id_ugd` int(11) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(11) NOT NULL,
  `tgl` date NOT NULL,
  `dokter` varchar(100) NOT NULL,
  `diagnosa` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ugd`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tb_ugd`
--

INSERT INTO `tb_ugd` (`id_ugd`, `id_pasien`, `tgl`, `dokter`, `diagnosa`) VALUES
(1, 4, '2018-07-10', 'Sarah Fitra Ramadhani', 'Bocor kepala');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
