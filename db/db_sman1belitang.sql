-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: May 03, 2018 at 01:50 PM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sman1belitang`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_galeri`
--

DROP TABLE IF EXISTS `tbl_galeri`;
CREATE TABLE IF NOT EXISTS `tbl_galeri` (
  `id_galeri` int(100) NOT NULL AUTO_INCREMENT,
  `nama_galeri` text,
  `foto_galeri` text,
  `tgl_galeri` datetime DEFAULT NULL,
  PRIMARY KEY (`id_galeri`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_galeri`
--

INSERT INTO `tbl_galeri` (`id_galeri`, `nama_galeri`, `foto_galeri`, `tgl_galeri`) VALUES
(2, 'xx asdfsdg', 'img/galeri/default.jpg', '2018-04-19 17:41:57');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_isi`
--

DROP TABLE IF EXISTS `tbl_isi`;
CREATE TABLE IF NOT EXISTS `tbl_isi` (
  `id_isi` int(10) NOT NULL AUTO_INCREMENT,
  `nama_isi` text,
  `judul_isi` text,
  `foto_isi` text,
  `ket_isi` text,
  `url_isi` text,
  `tgl_isi` datetime DEFAULT NULL,
  PRIMARY KEY (`id_isi`)
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_isi`
--

INSERT INTO `tbl_isi` (`id_isi`, `nama_isi`, `judul_isi`, `foto_isi`, `ket_isi`, `url_isi`, `tgl_isi`) VALUES
(1, 'profile', 'Sejarah Singkat', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>alsdjfsdg lsdjgds g</p>\r\n</body>\r\n</html>\r\n', 'sejarah-singkat', '2018-04-19 07:09:28'),
(2, 'profile', 'Kepala Sekolah', 'img/data_menu/1.jpg', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<div>\r\n<h3>Prioyitno, S.Pd.M.M.</h3>\r\n<strong>- Kepala Sekolah -</strong>\r\n\r\n<p>Pemimpin menjadi suri tauladan yang lebih kuat saat mereka belajar, bukan saat mereka mengajar. (Elizabeth Moss)</p>\r\n</div>\r\n</body>\r\n</html>\r\n', 'kepala-sekolah', '2018-05-02 19:09:29'),
(3, 'profile', 'Tujuan', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>&nbsp; Meningkatkan kecerdasan, pengetahuan, kepribadian, imtaq, akhlak mulia, serta ketrampilan berbasis teknologi informasi.</p>\r\n</body>\r\n</html>\r\n', 'tujuan', '2018-05-02 19:16:04'),
(4, 'profile', 'Sarana & Prasarana', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>Sarana &amp; Prasarana</p>\r\n</body>\r\n</html>\r\n', 'sarana-&-prasarana', '2018-04-19 11:11:59'),
(5, 'profile', 'Strategi', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>sdf</p>\r\n</body>\r\n</html>\r\n', 'strategi', '2018-04-19 11:34:26'),
(6, 'profile', 'Mars SMA Negeri 1 Belitang', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>Mars</p>\r\n</body>\r\n</html>\r\n', 'mars-sma-negeri-1-belitang', '2018-04-19 11:55:16'),
(7, 'profile', 'Struktur Organisasi', 'img/data_menu/default.jpg', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>sdjfhdsl</p>\r\n</body>\r\n</html>\r\n', 'struktur-organisasi', '2018-04-19 12:13:40'),
(8, 'guru', 'Direktori Guru', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'direktori-guru', '2018-04-19 13:27:55'),
(9, 'guru', 'Silabus', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'silabus', '2018-04-19 13:40:44'),
(10, 'guru', 'Materi Uji', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'materi-uji', '2018-04-19 14:02:54'),
(11, 'guru', 'Materi Ajar', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'materi-ajar', '2018-04-19 14:29:03'),
(12, 'siswa', 'Direktori Siswa', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'direktori-siswa', '2018-04-20 08:08:32'),
(13, 'siswa', 'Tata Tertib Siswa', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'tata-tertib-siswa', '2018-04-20 09:18:42'),
(14, 'siswa', 'Ekstrakurikuler', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'ekstrakurikuler', '2018-04-20 11:00:50'),
(15, 'siswa', 'OSIS', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'osis', '2018-04-20 13:58:59'),
(16, 'siswa', 'Web Club', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'web-club', '2018-04-20 14:09:07'),
(17, 'siswa', 'Beasiswa', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'beasiswa', '2018-04-20 14:22:16'),
(18, 'alumni', 'Direktori Alumni', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'direktori-alumni', '2018-04-20 14:26:15'),
(19, 'alumni', 'Info Alumni', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'info-alumni', '2018-04-20 14:32:23'),
(20, 'kurikulum', 'Prog.Kerja WK.Kurikulum', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'prog-kerja-wk-kurikulum', '2018-04-20 14:38:36'),
(21, 'kurikulum', 'Rencana Kegiatan', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'rencana-kegiatan', '2018-04-20 14:43:45'),
(22, 'buku_tamu', 'Buku Tamu', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'buku-tamu-20', '2018-04-20 14:47:43'),
(23, 'info', 'Universitas Swasta', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'universitas-swasta', '2018-04-20 14:53:51'),
(24, 'info', 'Universitas Negeri', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'universitas-negeri', '2018-04-20 15:04:00'),
(25, 'info', 'Agenda', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'agenda', '2018-04-20 15:11:09'),
(26, 'profile', 'Visi', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p><strong>Visi :</strong> Menjadi SMA Prima yang berpacu meraih Prestasi Luhur Budi Pekerti.</p>\r\n</body>\r\n</html>\r\n', 'visi', '2018-05-02 19:20:28'),
(27, 'profile', 'Misi', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p><strong>Misi :</strong> Membudayakan sikap disiplin. Menumbuhkan penghayatan ajaran ajaran agama dan budaya. Meningkatkan prestasi akademik. Membekali keterampilan dan kecakapan hidup. Mewujudkan fisik sekolah dan warga sekolah berpenampilan menarik.</p>\r\n</body>\r\n</html>\r\n', 'misi', '2018-05-02 19:21:11'),
(28, 'profile', 'Denah Sekolah', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'denah-sekolah', '2018-05-02 19:39:20'),
(29, 'profile', 'Arti dan Makna Logo SMA Negeri 1 Belitang', NULL, '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body></body>\r\n</html>\r\n', 'arti-dan-makna-logo-sma-negeri-1-belitang', '2018-05-02 19:39:53'),
(30, 'guru', 'Profile Guru', NULL, NULL, NULL, '2018-05-02 00:00:00'),
(31, 'guru', 'Profile Staf', NULL, NULL, NULL, '2018-05-02 00:00:00'),
(32, 'guru', 'Perangkat Pembelajaran', NULL, NULL, NULL, '2018-05-02 00:00:00'),
(33, 'guru', 'Kegiatan Pembelajaran', NULL, NULL, NULL, '2018-05-02 00:00:00'),
(34, 'siswa', 'Panca Prasetya Peserta Didik', NULL, NULL, NULL, '2018-05-02 00:00:00'),
(35, 'siswa', 'MPK', NULL, NULL, NULL, '2018-05-02 00:00:00'),
(36, 'siswa', 'ROHIS', NULL, NULL, NULL, '2018-05-02 00:00:00'),
(37, 'siswa', 'PMR', NULL, NULL, NULL, '2018-05-02 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kat`
--

DROP TABLE IF EXISTS `tbl_kat`;
CREATE TABLE IF NOT EXISTS `tbl_kat` (
  `id_kat` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kat` text,
  `judul_kat` text,
  `foto_kat` text,
  `ket_kat` text,
  `url_kat` text,
  `tgl_kat` datetime DEFAULT NULL,
  `dibaca` int(100) DEFAULT NULL,
  PRIMARY KEY (`id_kat`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kat`
--

INSERT INTO `tbl_kat` (`id_kat`, `nama_kat`, `judul_kat`, `foto_kat`, `ket_kat`, `url_kat`, `tgl_kat`, `dibaca`) VALUES
(1, 'berita', 'SMA NEGERI 1 BELITANG', 'img/berita/1.jpg', 'isi berita', 'SMA-NEGERI-1-BELITANG', '2018-04-16 00:00:00', 1),
(5, 'pedoman_ppdb', 'xxx sdgfdsgdf', 'img/pedoman_ppdb/default.jpg', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>ajlshf uasf ajsf&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>asfijasfsa</p>\r\n</body>\r\n</html>\r\n', 'pedoman-ppdb', '2018-04-18 00:00:00', NULL),
(9, 'siswa', 'sdgds', 'img/siswa/20170201_183147.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>sdgdsg</p>\r\n</body>\r\n</html>\r\n', 'sdgds', '2018-04-18 14:17:05', 2),
(10, 'guru_staff', 'sdljhgsd', 'img/guru_staff/20170201_183147.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>jlhlj l</p>\r\n\r\n<p>jbj</p>\r\n</body>\r\n</html>\r\n', 'sdljhgsd', '2018-04-18 14:26:11', NULL),
(4, 'berita', 'yahoo sdgkds sdogd', 'img/berita/20170201_1831471.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>kasdlf aioslf&nbsp;</p>\r\n\r\n<p>ajlsfd JASF&nbsp;</p>\r\n\r\n<p>kasdlf aioslf&nbsp;</p>\r\n\r\n<p>ajlsfd JASF</p>\r\n\r\n<p>kasdlf aioslf&nbsp;</p>\r\n\r\n<p>ajlsfd JASF</p>\r\n\r\n<p>kasdlf aioslf&nbsp;</p>\r\n\r\n<p>ajlsfd JASF</p>\r\n\r\n<p>kasdlf aioslf&nbsp;</p>\r\n\r\n<p>ajlsfd JASF</p>\r\n\r\n<p>kasdlf aioslf&nbsp;</p>\r\n\r\n<p>ajlsfd JASF</p>\r\n</body>\r\n</html>\r\n', 'yahoo-sdgkds-sdog', '2018-04-18 13:24:58', NULL),
(6, 'ekskul', 'sdkj sudg', 'img/ekskul/20170201_183147.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>bjvjkbbjl uvj&nbsp;</p>\r\n</body>\r\n</html>\r\n', 'sdkj-sudg', '2018-04-18 13:54:21', NULL),
(7, 'prestasi', 'jlxfngj sdf', 'img/prestasi/default.jpg', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>dsljfnd d</p>\r\n</body>\r\n</html>\r\n', 'jlxfngj', '2018-04-18 14:06:40', NULL),
(11, 'osis', 'sdjg sdg', 'img/osis/default.jpg', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>sdjg</p>\r\n\r\n<p>sdgdsg</p>\r\n</body>\r\n</html>\r\n', 'sdjg-sdg', '2018-04-18 14:29:05', NULL),
(12, 'fasilitas', 'sdjg sljdg', 'img/fasilitas/20170201_183147.png', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>sdgljdsg</p>\r\n</body>\r\n</html>\r\n', 'sdjg-sljdg', '2018-04-18 14:29:41', NULL),
(13, 'berita', 'sldj', 'img/berita/default.jpg', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>sdgds</p>\r\n</body>\r\n</html>\r\n', 'sldj', '2018-04-21 11:01:20', NULL),
(16, 'panca_prasetya_peserta_didik', 'Panca Prasetya Peserta Didik', 'img/v_kat/Baner_1_Gerbang_.jpg', '<html>\r\n<head>\r\n	<title></title>\r\n</head>\r\n<body>\r\n<p>asjkf</p>\r\n</body>\r\n</html>\r\n', 'panca-prasetya-peserta-didik', '2018-05-03 19:06:29', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kata_sambutan`
--

DROP TABLE IF EXISTS `tbl_kata_sambutan`;
CREATE TABLE IF NOT EXISTS `tbl_kata_sambutan` (
  `id_kata_sambutan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` text,
  `jabatan` varchar(100) DEFAULT NULL,
  `foto_kata_sambutan` text,
  `kata_sambutan` text,
  `tgl_kata_sambutan` datetime DEFAULT NULL,
  PRIMARY KEY (`id_kata_sambutan`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kata_sambutan`
--

INSERT INTO `tbl_kata_sambutan` (`id_kata_sambutan`, `nama_lengkap`, `jabatan`, `foto_kata_sambutan`, `kata_sambutan`, `tgl_kata_sambutan`) VALUES
(1, 'Prioyitno, S.Pd.M.M.', 'Kepala Sekolah', 'img/kata_sambutan/1.jpg', 'Pemimpin menjadi suri tauladan yang lebih kuat saat mereka belajar, bukan saat mereka mengajar. (Elizabeth Moss)', '2018-04-16 00:00:00'),
(2, 'Sumarno, S.Pd.', 'Waka Kurikulum', 'img/kata_sambutan/2.jpg', '“Tujuan pendidikan adalah mempersiapkan generasi muda Untuk mendidik diri mereka sendiri seumur hidup mereka.”', '2018-04-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pengumuman`
--

DROP TABLE IF EXISTS `tbl_pengumuman`;
CREATE TABLE IF NOT EXISTS `tbl_pengumuman` (
  `id_pengumuman` int(11) NOT NULL AUTO_INCREMENT,
  `nama_pengumuman` text,
  `foto_pengumuman` text,
  `ket_pengumuman` text,
  `tgl_pengumuman` datetime DEFAULT NULL,
  PRIMARY KEY (`id_pengumuman`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sosmed`
--

DROP TABLE IF EXISTS `tbl_sosmed`;
CREATE TABLE IF NOT EXISTS `tbl_sosmed` (
  `id_sosmed` int(10) NOT NULL AUTO_INCREMENT,
  `nama_sosmed` text,
  `link_sosmed` text,
  `tgl_sosmed` datetime DEFAULT NULL,
  PRIMARY KEY (`id_sosmed`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_sosmed`
--

INSERT INTO `tbl_sosmed` (`id_sosmed`, `nama_sosmed`, `link_sosmed`, `tgl_sosmed`) VALUES
(1, 'facebook', 'https://www.facebook.com/', '2018-04-16 00:00:00'),
(2, 'twitter', 'https://twitter.com/', '2018-04-16 00:00:00'),
(3, 'youtube', 'https://www.youtube.com/', '2018-04-16 00:00:00'),
(4, 'instagram', 'https://www.instagram.com/', '2018-04-16 00:00:00'),
(5, 'skype', 'http://sman1belitang.sch.id/', '2018-04-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tentang`
--

DROP TABLE IF EXISTS `tbl_tentang`;
CREATE TABLE IF NOT EXISTS `tbl_tentang` (
  `id_tentang` int(10) NOT NULL AUTO_INCREMENT,
  `tentang` text,
  `tgl_tentang` datetime DEFAULT NULL,
  PRIMARY KEY (`id_tentang`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tentang`
--

INSERT INTO `tbl_tentang` (`id_tentang`, `tentang`, `tgl_tentang`) VALUES
(1, 'SMA Negeri 1 Belitang', '2018-04-16 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
CREATE TABLE IF NOT EXISTS `tbl_user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` text,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `level` varchar(10) DEFAULT NULL,
  `tgl_daftar` datetime DEFAULT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `nama_lengkap`, `level`, `tgl_daftar`) VALUES
(1, 'admin', 'admin', 'SMA Negeri 1 Belitang', 'admin', '2018-04-16 16:00:11');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
