-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 20 Des 2019 pada 06.47
-- Versi Server: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kendaraan`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE IF NOT EXISTS `tbl_admin` (
`id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `nama`, `alamat`, `username`, `password`) VALUES
(1, 'admin', 'samata', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_kendaraan`
--

CREATE TABLE IF NOT EXISTS `tbl_kendaraan` (
`id` int(11) NOT NULL,
  `merek` varchar(30) NOT NULL,
  `no_pol` varchar(10) NOT NULL,
  `warna` varchar(10) NOT NULL,
  `kapasitas` varchar(20) NOT NULL,
  `thn_kendaraan` varchar(10) NOT NULL,
  `foto` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data untuk tabel `tbl_kendaraan`
--

INSERT INTO `tbl_kendaraan` (`id`, `merek`, `no_pol`, `warna`, `kapasitas`, `thn_kendaraan`, `foto`) VALUES
(12, 'TOYOTA', 'DD 7128', 'PUTIH', '25', '2016', 'a9626c79114aff8c976a95e982abec64.jpg'),
(13, 'TOYOTA', 'DD 8322', 'PUTIH', '25', '2016', 'edb56e82aa08f4c749e11e615e75bd30.jpg'),
(14, 'TOYOTA', 'DD 7065 AB', 'SILVER', '25', '2016', 'cd200eaa4a0cb1ff10677e1ec7e3c687.jpg'),
(15, 'TOYOTA', 'DD 7135', 'SILVER', '25', '2016', 'e51a6a19d32a73fc480c0533423320f7.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_syarat`
--

CREATE TABLE IF NOT EXISTS `tbl_syarat` (
`id` int(10) NOT NULL,
  `jenis` varchar(30) NOT NULL,
  `syarat` varchar(255) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_syarat`
--

INSERT INTO `tbl_syarat` (`id`, `jenis`, `syarat`) VALUES
(1, 'kendaraan', 'Mobil ini hanya bisa dipinjam untuk acara kedinasan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_transaksi`
--

CREATE TABLE IF NOT EXISTS `tbl_transaksi` (
`id` int(11) NOT NULL,
  `no_transaksi` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `id_kendaraan` varchar(30) NOT NULL,
  `keperluan` varchar(255) NOT NULL,
  `tujuan` varchar(30) NOT NULL,
  `tgl_mulai` date NOT NULL,
  `tgl_selesai` date NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `tbl_transaksi`
--

INSERT INTO `tbl_transaksi` (`id`, `no_transaksi`, `nama`, `instansi`, `id_kendaraan`, `keperluan`, `tujuan`, `tgl_mulai`, `tgl_selesai`, `status`) VALUES
(1, '01', 'Andi', 'UINAM', 'DP 2371 RD', 'kegiatan Sisfo Fair', 'Makassar', '2019-10-11', '2019-10-19', 'menunggu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `instansi` varchar(50) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data untuk tabel `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `email`, `nama`, `alamat`, `instansi`, `no_hp`, `username`, `password`, `status`) VALUES
(1, 'admin@admin', 'Andi', 'alalal', 'alal', '12u', 'asdasd', 'asdsada', 1),
(2, 'herwansyah155@gmail.com', 'herwan syah', 'pinrang', 'UINAM', '085200403050', 'herwansyah', 'oke', 1),
(3, 'herwansyah155@gmail.com', 'Alif Balala', 'asdasd', 'hkjdfs', '454365467', 'puskesmas', 'dfsfdgd', 1),
(4, 'herwansyah155@gmail.com', 'Alif Balala', 'asdasd', 'hkjdfs', '454365467', 'puskesmas', 'dfsfdgd', 0),
(5, 'admin@admin', 'erwre', 'gedgrr', 'jyhjgy', '08989898', 'werwer', 'qwerty', 1),
(6, 'mar.ah@gmail.com', 'Mar''ah', 'Shaleh', 'Gjdhjjad', '08567263726372', 'marah', '15101996', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_syarat`
--
ALTER TABLE `tbl_syarat`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_kendaraan`
--
ALTER TABLE `tbl_kendaraan`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_syarat`
--
ALTER TABLE `tbl_syarat`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_transaksi`
--
ALTER TABLE `tbl_transaksi`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
