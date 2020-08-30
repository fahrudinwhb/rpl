-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2015 at 03:31 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_dataikan`
--

CREATE TABLE IF NOT EXISTS `tb_dataikan` (
`id_ikan` int(11) NOT NULL,
  `tanggal_masuk` date NOT NULL,
  `nama_ikan` varchar(50) NOT NULL,
  `berat` double NOT NULL,
  `harga_jual` double NOT NULL,
  `deskripsi` varchar(5000) NOT NULL,
  `fotoikan` varchar(200) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'tersedia'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1002 ;

--
-- Dumping data for table `tb_dataikan`
--

INSERT INTO `tb_dataikan` (`id_ikan`, `tanggal_masuk`, `nama_ikan`, `berat`, `harga_jual`, `deskripsi`, `fotoikan`, `status`) VALUES
(2, '2015-12-04', 'Tuna1', 50, 150000000, '                                        ', 'logo.jpg', 'Tersedia'),
(4, '2015-12-06', 'lele', 0, 7000, '                                        ', 'logo.jpg', 'Habis'),
(1001, '2015-12-07', 'Patin', 2200, 5000, 'enak               ', 'gg.png', 'Tersedia');

-- --------------------------------------------------------

--
-- Table structure for table `tb_komentar`
--

CREATE TABLE IF NOT EXISTS `tb_komentar` (
`id_komentar` int(11) NOT NULL,
  `id_ikan` int(11) NOT NULL,
  `id_akun` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `isi_komentar` varchar(5000) NOT NULL,
  `tanggal_komentar` date NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `tb_komentar`
--

INSERT INTO `tb_komentar` (`id_komentar`, `id_ikan`, `id_akun`, `username`, `isi_komentar`, `tanggal_komentar`) VALUES
(6, 2, 43, 'bagus', 'wenak mantap', '2015-12-09'),
(7, 2, 43, 'bagus', 'wenak mantap', '2015-12-09'),
(8, 4, 43, 'bagus', 'mantap', '2015-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE IF NOT EXISTS `tb_penjualan` (
`id_penjualan` int(11) NOT NULL,
  `id_ikan` int(11) NOT NULL,
  `nama_ikan` varchar(100) NOT NULL,
  `berat` double NOT NULL,
  `harga` double NOT NULL,
  `total` double NOT NULL,
  `tanggal_penjualan` date NOT NULL,
  `fotoikan` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `id_ikan`, `nama_ikan`, `berat`, `harga`, `total`, `tanggal_penjualan`, `fotoikan`) VALUES
(4, 4, 'lele', 5, 7000, 35000, '2015-12-09', '');

-- --------------------------------------------------------

--
-- Table structure for table `tb_suplayer`
--

CREATE TABLE IF NOT EXISTS `tb_suplayer` (
`id_suplayer` int(11) NOT NULL,
  `id_ikan` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE IF NOT EXISTS `tb_user` (
  `status` varchar(10) DEFAULT 'member',
`id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `hp` varchar(50) NOT NULL,
  `sex` varchar(50) NOT NULL,
  `foto` varchar(100) NOT NULL DEFAULT 'images/avatar.png'
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=46 ;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`status`, `id`, `nama`, `username`, `email`, `password`, `tanggal`, `hp`, `sex`, `foto`) VALUES
('admin', 41, 'admin', 'admin', 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '2015-11-19', '085749367338', 'Laki-laki', '226627_203358976369650_6601657_n.jpg'),
('member', 43, 'bagus', 'bagus', 'baguspb03@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2015-12-23', '085749367338', 'Laki-laki', 'avatar.png'),
('member', 44, 'Bagus', 'bagus1', 'baguspb03@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2015-12-14', '085749367338', 'Laki-laki', 'avatar.png'),
('member', 45, 'galeh', 'galeh', 'galeh@gmail.com', 'c4ca4238a0b923820dcc509a6f75849b', '2015-12-02', '085749367338', 'Laki-laki', 'avatar.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_dataikan`
--
ALTER TABLE `tb_dataikan`
 ADD PRIMARY KEY (`id_ikan`);

--
-- Indexes for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
 ADD PRIMARY KEY (`id_komentar`), ADD KEY `id_ikan` (`id_ikan`), ADD KEY `id_akun` (`id_akun`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
 ADD PRIMARY KEY (`id_penjualan`), ADD KEY `id_ikan` (`id_ikan`);

--
-- Indexes for table `tb_suplayer`
--
ALTER TABLE `tb_suplayer`
 ADD PRIMARY KEY (`id_suplayer`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_dataikan`
--
ALTER TABLE `tb_dataikan`
MODIFY `id_ikan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1002;
--
-- AUTO_INCREMENT for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
MODIFY `id_komentar` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
MODIFY `id_penjualan` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tb_suplayer`
--
ALTER TABLE `tb_suplayer`
MODIFY `id_suplayer` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=46;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `tb_komentar`
--
ALTER TABLE `tb_komentar`
ADD CONSTRAINT `tb_komentar_ibfk_1` FOREIGN KEY (`id_ikan`) REFERENCES `tb_dataikan` (`id_ikan`),
ADD CONSTRAINT `tb_komentar_ibfk_2` FOREIGN KEY (`id_akun`) REFERENCES `tb_user` (`id`);

--
-- Constraints for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
ADD CONSTRAINT `tb_penjualan_ibfk_1` FOREIGN KEY (`id_ikan`) REFERENCES `tb_dataikan` (`id_ikan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
