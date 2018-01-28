-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2016 at 04:40 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `simdes`
--

-- --------------------------------------------------------

--
-- Table structure for table `det_keluarga`
--

CREATE TABLE IF NOT EXISTS `det_keluarga` (
  `id_keluarga` varchar(20) NOT NULL,
  `no_ktp` varchar(20) NOT NULL,
  KEY `id_warga` (`no_ktp`,`id_keluarga`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `det_keluarga`
--

INSERT INTO `det_keluarga` (`id_keluarga`, `no_ktp`) VALUES
('5656', '100000'),
('33333', '111222'),
('2222', '164'),
('67898798', '454546');

-- --------------------------------------------------------

--
-- Table structure for table `keluarga`
--

CREATE TABLE IF NOT EXISTS `keluarga` (
  `id_keluarga` varchar(20) NOT NULL,
  `kepala_keluarga` varchar(50) NOT NULL,
  `alamat` text NOT NULL,
  `dusun` varchar(30) NOT NULL,
  `rt` varchar(2) DEFAULT NULL,
  `rw` varchar(2) DEFAULT NULL,
  `ekonomi` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id_keluarga`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `keluarga`
--

INSERT INTO `keluarga` (`id_keluarga`, `kepala_keluarga`, `alamat`, `dusun`, `rt`, `rw`, `ekonomi`) VALUES
('33333', 'Riska', 'Ciandur', 'Ciandur', '01', '02', 'Sangat_Kaya'),
('2222', 'isma', 'kadu jawr', 'Ciandur', '01', '01', 'Sangat_Kaya'),
('5656', 'dudi', 'ciandur', 'Ciandur', '01', '01', 'Sangat_Kaya'),
('67898798', 'budi', 'kidul', 'Ciandur', '01', '01', 'Sangat_Kaya');

--
-- Triggers `keluarga`
--
DROP TRIGGER IF EXISTS `hapus_detail_klg`;
DELIMITER //
CREATE TRIGGER `hapus_detail_klg` AFTER DELETE ON `keluarga`
 FOR EACH ROW begin

delete  from det_keluarga where det_keluarga.id_keluarga = old.id_keluarga;

end
//
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE IF NOT EXISTS `surat` (
  `id_surat` int(8) NOT NULL AUTO_INCREMENT,
  `jenis_surat` varchar(4) NOT NULL,
  `no_surat` varchar(50) NOT NULL,
  `nama_surat` varchar(50) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `isi_surat` text,
  `tanda_tangan` varchar(50) NOT NULL,
  `id_warga` varchar(20) NOT NULL,
  `nama_warga` varchar(50) NOT NULL,
  PRIMARY KEY (`id_surat`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `jenis_surat`, `no_surat`, `nama_surat`, `tanggal`, `isi_surat`, `tanda_tangan`, `id_warga`, `nama_warga`) VALUES
(47, 'SK', '470/4/437.105.08/2016', 'Surat Keterangan Pendatang', '2016-11-28', '{"nama":"isma","t_lahir":"pandeglang,  23-11-2016","j_kel":"Laki - laki","w_negara":"indonesia","pendidikan":"s","agama":"Islam","pekerjaan":"p","s_nikah":"nikah","no_ktp":"164","alamat":"kadu jawr RT 01 RW 01 Dusun Ciandur","ket":"cigelis"}', '{"pejabat":"Drs. H. AGUS RACHMAT","nip":"NIP.19680', '164', 'isma');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `level` enum('Administrator','Desa_Girijaya','Desa_Ciandur','Desa_Kadudampit','Desa_Langensari','Desa_Majau','Desa_Medalsari','Desa_Mekarwangi','Desa_Parigi','Desa_Saketi','Desa_Sindanghayu','Desa_Sodong','Desa_Sukalangu','Desa_Talagasari','Desa_Wanagiri') NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'Administrator'),
(2, 'ciandur', 'ciandur', 'Desa_Ciandur'),
(3, 'girijaya', 'girijaya', 'Desa_Girijaya'),
(4, 'kadudampit', 'kadudampit', 'Desa_Kadudampit'),
(5, 'langensari', 'langensari', 'Desa_Langensari'),
(6, 'majau', 'majau', 'Desa_Majau'),
(7, 'medalsari', 'medalsari', 'Desa_Medalsari'),
(8, 'mekarwangi', 'mekarwangi', 'Desa_Mekarwangi'),
(9, 'parigi', 'parigi', 'Desa_Parigi'),
(10, 'saketi', 'saketi', 'Desa_Saketi'),
(11, 'sindanghayu', 'sindanghayu', 'Desa_Sindanghayu'),
(12, 'sodong', 'sodong', 'Desa_Sodong'),
(13, 'sukalangu', 'sukalangu', 'Desa_Sukalangu'),
(14, 'talagasari', 'talagasari', 'Desa_Talagasari'),
(15, 'wanagiri', 'wanagiri', 'Desa_Wanagiri');

-- --------------------------------------------------------

--
-- Stand-in structure for view `v_detail_warga`
--
CREATE TABLE IF NOT EXISTS `v_detail_warga` (
`id_keluarga` varchar(20)
,`no_ktp` varchar(20)
,`nama` varchar(50)
,`agama` varchar(20)
,`t_lahir` varchar(20)
,`tgl_lahir` varchar(10)
,`j_kel` varchar(11)
,`gol_darah` varchar(2)
,`w_negara` varchar(20)
,`pendidikan` varchar(10)
,`pekerjaan` varchar(30)
,`s_nikah` varchar(20)
,`alamat` text
,`rt` varchar(2)
,`rw` varchar(2)
,`dusun` varchar(30)
);
-- --------------------------------------------------------

--
-- Table structure for table `warga`
--

CREATE TABLE IF NOT EXISTS `warga` (
  `no_ktp` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `t_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date DEFAULT NULL,
  `j_kel` enum('L','W') NOT NULL,
  `gol_darah` varchar(2) NOT NULL,
  `w_negara` varchar(20) NOT NULL,
  `pendidikan` varchar(10) DEFAULT NULL,
  `pekerjaan` varchar(30) NOT NULL,
  `s_nikah` varchar(20) DEFAULT NULL,
  `dusun` varchar(33) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  PRIMARY KEY (`no_ktp`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `warga`
--

INSERT INTO `warga` (`no_ktp`, `nama`, `agama`, `t_lahir`, `tgl_lahir`, `j_kel`, `gol_darah`, `w_negara`, `pendidikan`, `pekerjaan`, `s_nikah`, `dusun`, `status`) VALUES
('164', 'isma', 'Islam', 'pandeglang', '2016-11-23', 'L', 'A', 'indonesia', 's', 'p', 'nikah', '', '1'),
('222222', 'risma hidayat', 'Islam', 'pandeglang', '2016-11-19', 'W', 'B', 'indonesia', 'sukarelawa', 'tani', 'belum_nikah', '', '1'),
('100000', 'dudi', 'Islam', 'pandeglang', '2016-11-11', 'L', 'AB', 'indonesia', 'sma', 'tani', 'nikah', '', '1'),
('454546', 'budi', 'Islam', 'cigeulis', '2016-11-02', 'L', 'A', 'indonesia', 's1', 'tani', 'belum_nikah', '', '1'),
('55587000', 'bunga', 'Islam', 'pandeglang', '2016-11-02', 'L', 'A', 'indonesia', 's1', 'buruh', 'belum_nikah', 'Ciandur', '1');

-- --------------------------------------------------------

--
-- Structure for view `v_detail_warga`
--
DROP TABLE IF EXISTS `v_detail_warga`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `v_detail_warga` AS select `a`.`id_keluarga` AS `id_keluarga`,`c`.`no_ktp` AS `no_ktp`,`c`.`nama` AS `nama`,`c`.`agama` AS `agama`,`c`.`t_lahir` AS `t_lahir`,date_format(`c`.`tgl_lahir`,'%d-%m-%Y') AS `tgl_lahir`,if((`c`.`j_kel` = 'L'),'Laki - laki','Wanita') AS `j_kel`,`c`.`gol_darah` AS `gol_darah`,`c`.`w_negara` AS `w_negara`,`c`.`pendidikan` AS `pendidikan`,`c`.`pekerjaan` AS `pekerjaan`,`c`.`s_nikah` AS `s_nikah`,`a`.`alamat` AS `alamat`,`a`.`rt` AS `rt`,`a`.`rw` AS `rw`,`a`.`dusun` AS `dusun` from ((`keluarga` `a` join `det_keluarga` `b`) join `warga` `c`) where ((`a`.`id_keluarga` = `b`.`id_keluarga`) and (`b`.`no_ktp` = `c`.`no_ktp`) and (`c`.`status` = '1'));

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
