-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 16 Jul 2016 pada 14.14
-- Versi Server: 10.1.9-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cadsolusindo`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `level_user` varchar(20) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `name`, `username`, `password`, `level_user`, `last_login`) VALUES
(1, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Administrator', '2016-07-16 18:12:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_interview_pelamar`
--

CREATE TABLE `tbl_data_interview_pelamar` (
  `id_interview` int(11) NOT NULL,
  `jadwal_pelamar_interview` date DEFAULT NULL,
  `hadir` varchar(5) DEFAULT NULL,
  `hasil_interview` text,
  `interviewer` varchar(50) DEFAULT NULL,
  `no_aplikasi` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_data_interview_pelamar`
--

INSERT INTO `tbl_data_interview_pelamar` (`id_interview`, `jadwal_pelamar_interview`, `hadir`, `hasil_interview`, `interviewer`, `no_aplikasi`) VALUES
(1, '2016-06-16', 'Ya', '<p>Good Excelent<br></p>', 'Saya', '0001'),
(3, '2016-07-07', 'Tidak', '<p>tidak hadir<br></p>', '-', '0002'),
(4, '2016-06-24', 'Ya', '<p>OK<br></p>', 'Indah', '0006');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_data_pelamar`
--

CREATE TABLE `tbl_data_pelamar` (
  `id_data_pelamar` int(11) NOT NULL,
  `tanggal_melamar` date DEFAULT NULL,
  `id_lowongan` int(11) DEFAULT NULL,
  `no_aplikasi` varchar(4) DEFAULT NULL,
  `status_aplikasi` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_data_pelamar`
--

INSERT INTO `tbl_data_pelamar` (`id_data_pelamar`, `tanggal_melamar`, `id_lowongan`, `no_aplikasi`, `status_aplikasi`) VALUES
(1, '2016-06-13', 1, '0001', 'Diterima'),
(2, '2016-06-15', 1, '0002', 'Gagal'),
(3, '2016-06-23', 2, '0003', 'Dalam Proses'),
(4, '2016-06-24', 3, '0004', 'Belum Diproses'),
(5, '2016-06-24', 3, '0005', 'Belum Diproses'),
(6, '2016-06-24', 1, '0006', 'Diterima'),
(7, '2016-06-26', 2, '0007', 'Belum Diproses');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_hasil_tes_pelamar`
--

CREATE TABLE `tbl_hasil_tes_pelamar` (
  `id_hasil_tes` int(11) NOT NULL,
  `logika` varchar(100) DEFAULT NULL,
  `bahasa_inggris` varchar(100) DEFAULT NULL,
  `tester` varchar(50) NOT NULL,
  `no_aplikasi` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_hasil_tes_pelamar`
--

INSERT INTO `tbl_hasil_tes_pelamar` (`id_hasil_tes`, `logika`, `bahasa_inggris`, `tester`, `no_aplikasi`) VALUES
(1, '100', '90', 'Saya', '0001'),
(3, '0', '0', '-', '0002'),
(4, '80', '80', 'Indah', '0006');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_informasi_organisasi`
--

CREATE TABLE `tbl_informasi_organisasi` (
  `id_organisasi` int(11) NOT NULL,
  `organisasi` varchar(100) NOT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `dari` varchar(50) DEFAULT NULL,
  `sampai` varchar(50) DEFAULT NULL,
  `no_aplikasi` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_informasi_organisasi`
--

INSERT INTO `tbl_informasi_organisasi` (`id_organisasi`, `organisasi`, `jabatan`, `dari`, `sampai`, `no_aplikasi`) VALUES
(1, '', 'Jabatan 1', '2010', '2011', '0001'),
(2, '', 'Jabatan 2', '2011', '2012', '0001'),
(3, '', '', '', '', '0001'),
(4, 'Organisasi1', '', '', '', '0002'),
(5, '', '', '', '', '0002'),
(6, '', '', '', '', '0002'),
(7, 'Laslas', 'Ada', '2012', '2012', '0003'),
(8, '', '', '', '', '0003'),
(9, '', '', '', '', '0003'),
(10, 'kasdjkl', 'ljasdla1', '2011', '2012', '0004'),
(11, '', '', '', '', '0004'),
(12, '', '', '', '', '0004'),
(13, 'kahsdgagshqyoieq', 'awihdnas', '2012', '2012', '0005'),
(14, '', '', '', '', '0005'),
(15, '', '', '', '', '0005'),
(16, 'lkhsadkhas', 'khsaasd,', '2012', '2012', '0006'),
(17, '', '', '', '', '0006'),
(18, '', '', '', '', '0006'),
(19, '', '', '', '', '0007'),
(20, '', '', '', '', '0007'),
(21, '', '', '', '', '0007');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_informasi_pendidikan_terakhir`
--

CREATE TABLE `tbl_informasi_pendidikan_terakhir` (
  `id_pendidikan_terakhir` int(11) NOT NULL,
  `tingkat` varchar(10) DEFAULT NULL,
  `nama_institusi` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `tahun_kelulusan` varchar(10) DEFAULT NULL,
  `nilai_akhir` varchar(10) DEFAULT NULL,
  `no_aplikasi` varchar(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_informasi_pendidikan_terakhir`
--

INSERT INTO `tbl_informasi_pendidikan_terakhir` (`id_pendidikan_terakhir`, `tingkat`, `nama_institusi`, `jurusan`, `tahun_kelulusan`, `nilai_akhir`, `no_aplikasi`) VALUES
(1, 'SMA / SMK', 'InstitusiA', 'jurusanA', '2010', '28.00', '0001'),
(2, 'D3', 'InstitusiB', 'JurusanB', '2011', '3.8', '0001'),
(3, 'S1', '', '', '', '', '0001'),
(4, 'S2', '', '', '', '', '0001'),
(5, 'S3', '', '', '', '', '0001'),
(6, 'SMA / SMK', 'SMA', 'IPA', '2010', '32.2', '0002'),
(7, 'D3', '', '', '', '', '0002'),
(8, 'S1', '', '', '', '', '0002'),
(9, 'S2', '', '', '', '', '0002'),
(10, 'S3', '', '', '', '', '0002'),
(11, 'SMA / SMK', 'SMA LA', 'Tes', '2010', '20.3', '0003'),
(12, 'D3', '', '', '', '', '0003'),
(13, 'S1', '', '', '', '', '0003'),
(14, 'S2', '', '', '', '', '0003'),
(15, 'S3', '', '', '', '', '0003'),
(16, 'SMA / SMK', 'kasdkljas', 'lkjalksjd', '2010', '20', '0004'),
(17, 'D3', '', '', '', '', '0004'),
(18, 'S1', '', '', '', '', '0004'),
(19, 'S2', '', '', '', '', '0004'),
(20, 'S3', '', '', '', '', '0004'),
(21, 'SMA / SMK', 'kasdklasj', 'lkjaslkdj', '1010', '20', '0005'),
(22, 'D3', '', '', '', '', '0005'),
(23, 'S1', '', '', '', '', '0005'),
(24, 'S2', '', '', '', '', '0005'),
(25, 'S3', '', '', '', '', '0005'),
(26, 'SMA / SMK', 'khsadlhalkd', 'lkashlhdqkqh', '2012', '2031', '0006'),
(27, 'D3', '', '', '', '', '0006'),
(28, 'S1', '', '', '', '', '0006'),
(29, 'S2', '', '', '', '', '0006'),
(30, 'S3', '', '', '', '', '0006'),
(31, 'SMA / SMK', 'ajsdk', 'khaklsdh', '2010', '20', '0007'),
(32, 'D3', '', '', '', '', '0007'),
(33, 'S1', '', '', '', '', '0007'),
(34, 'S2', '', '', '', '', '0007'),
(35, 'S3', '', '', '', '', '0007');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_informasi_pengalaman_kerja`
--

CREATE TABLE `tbl_informasi_pengalaman_kerja` (
  `id_pengalaman_kerja` int(11) NOT NULL,
  `perusahaan` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `dari` varchar(50) DEFAULT NULL,
  `sampai` varchar(50) DEFAULT NULL,
  `no_aplikasi` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_informasi_pengalaman_kerja`
--

INSERT INTO `tbl_informasi_pengalaman_kerja` (`id_pengalaman_kerja`, `perusahaan`, `jabatan`, `dari`, `sampai`, `no_aplikasi`) VALUES
(1, 'Perusahaan 1', 'Jabatan 1', '2010', '2011', '0001'),
(2, 'Perusahaan 2', 'Jabatan 2', '2011', '2012', '0001'),
(3, '', '', '', '', '0001'),
(4, '', '', '', '', '0002'),
(5, '', '', '', '', '0002'),
(6, '', '', '', '', '0002'),
(7, 'Tidak ada', 'Ada', '2012', '2012', '0003'),
(8, '', '', '', '', '0003'),
(9, '', '', '', '', '0003'),
(10, 'kasjdkjsa', 'ljasdla1', '2011', '2012', '0004'),
(11, '', '', '', '', '0004'),
(12, '', '', '', '', '0004'),
(13, 'kasdiosah', 'awihdnas', '2012', '2012', '0005'),
(14, '', '', '', '', '0005'),
(15, '', '', '', '', '0005'),
(16, 'ashdklsah', 'khsaasd,', '2012', '2012', '0006'),
(17, '', '', '', '', '0006'),
(18, '', '', '', '', '0006'),
(19, '', '', '', '', '0007'),
(20, '', '', '', '', '0007'),
(21, '', '', '', '', '0007');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_informasi_personal`
--

CREATE TABLE `tbl_informasi_personal` (
  `id_informasi_personal` int(11) NOT NULL,
  `no_aplikasi` varchar(4) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `no_ktp` varchar(50) DEFAULT NULL,
  `tempat_lahir` varchar(50) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `jenis_kelamin` varchar(15) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `alamat_domisili` varchar(200) DEFAULT NULL,
  `rt_domisili` varchar(5) DEFAULT NULL,
  `rw_domisili` varchar(5) DEFAULT NULL,
  `kota_domisili` varchar(15) DEFAULT NULL,
  `kodepos_domisili` varchar(10) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `no_telepon` varchar(20) DEFAULT NULL,
  `no_handphone` varchar(36) DEFAULT NULL,
  `kerabat_yang_dapat_dihubungi` varchar(100) DEFAULT NULL,
  `hubungan_kerabat_yang_dapat_dihubungi` varchar(100) DEFAULT NULL,
  `no_telepon_kerabat_yang_dapat_dihubungi` varchar(36) DEFAULT NULL,
  `status_perkawinan` varchar(10) DEFAULT NULL,
  `pendidikan_terakhir` varchar(5) DEFAULT NULL,
  `foto` varchar(250) NOT NULL,
  `cv` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_informasi_personal`
--

INSERT INTO `tbl_informasi_personal` (`id_informasi_personal`, `no_aplikasi`, `nama`, `no_ktp`, `tempat_lahir`, `tanggal_lahir`, `jenis_kelamin`, `agama`, `alamat_domisili`, `rt_domisili`, `rw_domisili`, `kota_domisili`, `kodepos_domisili`, `email`, `no_telepon`, `no_handphone`, `kerabat_yang_dapat_dihubungi`, `hubungan_kerabat_yang_dapat_dihubungi`, `no_telepon_kerabat_yang_dapat_dihubungi`, `status_perkawinan`, `pendidikan_terakhir`, `foto`, `cv`) VALUES
(1, '0001', 'wawan', '01.2391.023910.9300', 'Jakarta', '1991-01-01', 'Pria', 'Islam', 'Jl. abcde', '010', '003', 'Jakarta', '11410', 'wawan@wawan.wan', '02190910321', '0812312312312', 'wawan1', 'saudara', '089123131312312', 'Lajang', 'D3', 'wawan.jpg', ''),
(2, '0002', 'ririn', '12.3123.131203.1031', 'Jakarta', '1991-11-25', 'Wanita', 'Islam', 'Jl. Jalan', '01', '003', 'Jakarta', '11410', 'ririn@gmail.com', '0216401231', '0812032139', 'ririn1', 'saudara', '0811111111', 'Lajang', 'SMA', '', ''),
(3, '0003', 'Tesla', '19.2390.123091.7309', 'Jakarta', '1990-06-06', 'Wanita', 'Islam', 'Jl. Jalan bos', '20', '02', 'Jakarta', '11211', 'tesla@tes.la', '', '081230909231', 'Talse', 'Tilsa', '09123091023', 'Lajang', 'SMA', '', ''),
(4, '0004', 'jkjklja', '56.5678.990989.9765', 'Jakarta', '2016-06-28', 'Wanita', 'Islam', 'JL. asd', '012', '021', 'jakarat', '121', 'tes@tes.tes', '01921029', '08291028192', 'kjkjkljads', 'ljljsad', '0910291', 'Lajang', 'SMA', '', ''),
(5, '0005', 'alsjdkl', '01.9238.901283.0912', 'Jakarta', '2016-06-24', 'Pria', 'Islam', 'Jl. jas', '012', '01', 'jasjda', '121', 'tes@tes.tes', '01210909', '019201909102', 'jadkja', 'ljsakljd', '121212', 'Lajang', 'SMA', '', ''),
(6, '0006', 'udin', '10.2893.183901.8309', 'jakarta', '2016-06-24', 'Pria', 'Islam', 'Jl. Ku', '20', '01', 'jakarta', '21021', 'tes@tes.tes', '01239218', '0981023981', 'jaljdlka', 'lkhsalkdalk', '0971031', 'Lajang', 'SMA', 'udin-2016-06-24.jpg', 'udin-2016-06-24.pdf'),
(7, '0007', 'sajdhasjd', '12.8390.128093.8129', 'Jakarta', '2016-06-26', 'Pria', 'Islam', 'Jl.a shdasjldjaslj', '0123', '12', 'jaksjakd', '12312', 'tes@tes.tes', '01210909', '019201909102', 'jadkja', 'ljljsad', '0910291', 'Lajang', 'SMA', 'sajdhasjd-2016-06-26.png', 'sajdhasjd-2016-06-26.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_kategori_lowongan`
--

CREATE TABLE `tbl_master_kategori_lowongan` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_master_kategori_lowongan`
--

INSERT INTO `tbl_master_kategori_lowongan` (`id_kategori`, `nama_kategori`) VALUES
(1, 'HRD'),
(2, 'Finance'),
(3, 'Commercial');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tbl_master_lowongan`
--

CREATE TABLE `tbl_master_lowongan` (
  `id_lowongan` int(11) NOT NULL,
  `judul_lowongan` varchar(100) DEFAULT NULL,
  `isi_lowongan` text,
  `tanggal_posting` date DEFAULT NULL,
  `status_terbit` int(1) DEFAULT NULL,
  `pelamar` int(11) DEFAULT NULL,
  `dibuat_oleh` varchar(50) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tbl_master_lowongan`
--

INSERT INTO `tbl_master_lowongan` (`id_lowongan`, `judul_lowongan`, `isi_lowongan`, `tanggal_posting`, `status_terbit`, `pelamar`, `dibuat_oleh`, `id_kategori`) VALUES
(1, 'Admin HRD', 'Dicari admin HRD<br>', '2016-06-01', 1, 3, 'admin', 1),
(2, 'Admin Finance', 'Dibutuhkan admin finance', '2016-06-12', 1, 2, 'admin', 2),
(3, 'Admin Commercial', 'Dibutuhkan admin commercial<br>', '2016-06-12', 1, 2, 'admin', 3),
(4, 'Legal Officer', '<p>Dibutuhkan Legal Officer<br></p>', '2016-06-22', 0, 0, 'admin 2016-06-22 15:47:16', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_data_interview_pelamar`
--
ALTER TABLE `tbl_data_interview_pelamar`
  ADD PRIMARY KEY (`id_interview`);

--
-- Indexes for table `tbl_data_pelamar`
--
ALTER TABLE `tbl_data_pelamar`
  ADD PRIMARY KEY (`id_data_pelamar`),
  ADD KEY `id_lowongan` (`id_lowongan`),
  ADD KEY `no_aplikasi` (`no_aplikasi`);

--
-- Indexes for table `tbl_hasil_tes_pelamar`
--
ALTER TABLE `tbl_hasil_tes_pelamar`
  ADD PRIMARY KEY (`id_hasil_tes`);

--
-- Indexes for table `tbl_informasi_organisasi`
--
ALTER TABLE `tbl_informasi_organisasi`
  ADD PRIMARY KEY (`id_organisasi`),
  ADD KEY `no_aplikasi` (`no_aplikasi`);

--
-- Indexes for table `tbl_informasi_pendidikan_terakhir`
--
ALTER TABLE `tbl_informasi_pendidikan_terakhir`
  ADD PRIMARY KEY (`id_pendidikan_terakhir`),
  ADD KEY `no_aplikasi` (`no_aplikasi`);

--
-- Indexes for table `tbl_informasi_pengalaman_kerja`
--
ALTER TABLE `tbl_informasi_pengalaman_kerja`
  ADD PRIMARY KEY (`id_pengalaman_kerja`),
  ADD KEY `no_aplikasi` (`no_aplikasi`);

--
-- Indexes for table `tbl_informasi_personal`
--
ALTER TABLE `tbl_informasi_personal`
  ADD PRIMARY KEY (`id_informasi_personal`),
  ADD UNIQUE KEY `no_aplikasi` (`no_aplikasi`);

--
-- Indexes for table `tbl_master_kategori_lowongan`
--
ALTER TABLE `tbl_master_kategori_lowongan`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `tbl_master_lowongan`
--
ALTER TABLE `tbl_master_lowongan`
  ADD PRIMARY KEY (`id_lowongan`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_data_interview_pelamar`
--
ALTER TABLE `tbl_data_interview_pelamar`
  MODIFY `id_interview` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_data_pelamar`
--
ALTER TABLE `tbl_data_pelamar`
  MODIFY `id_data_pelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_hasil_tes_pelamar`
--
ALTER TABLE `tbl_hasil_tes_pelamar`
  MODIFY `id_hasil_tes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_informasi_organisasi`
--
ALTER TABLE `tbl_informasi_organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_informasi_pendidikan_terakhir`
--
ALTER TABLE `tbl_informasi_pendidikan_terakhir`
  MODIFY `id_pendidikan_terakhir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tbl_informasi_pengalaman_kerja`
--
ALTER TABLE `tbl_informasi_pengalaman_kerja`
  MODIFY `id_pengalaman_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tbl_informasi_personal`
--
ALTER TABLE `tbl_informasi_personal`
  MODIFY `id_informasi_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_master_kategori_lowongan`
--
ALTER TABLE `tbl_master_kategori_lowongan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_master_lowongan`
--
ALTER TABLE `tbl_master_lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tbl_data_pelamar`
--
ALTER TABLE `tbl_data_pelamar`
  ADD CONSTRAINT `tbl_data_pelamar_ibfk_1` FOREIGN KEY (`no_aplikasi`) REFERENCES `tbl_informasi_personal` (`no_aplikasi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_data_pelamar_ibfk_2` FOREIGN KEY (`id_lowongan`) REFERENCES `tbl_master_lowongan` (`id_lowongan`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_informasi_organisasi`
--
ALTER TABLE `tbl_informasi_organisasi`
  ADD CONSTRAINT `tbl_informasi_organisasi_ibfk_1` FOREIGN KEY (`no_aplikasi`) REFERENCES `tbl_informasi_personal` (`no_aplikasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_informasi_pendidikan_terakhir`
--
ALTER TABLE `tbl_informasi_pendidikan_terakhir`
  ADD CONSTRAINT `tbl_informasi_pendidikan_terakhir_ibfk_1` FOREIGN KEY (`no_aplikasi`) REFERENCES `tbl_informasi_personal` (`no_aplikasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_informasi_pengalaman_kerja`
--
ALTER TABLE `tbl_informasi_pengalaman_kerja`
  ADD CONSTRAINT `tbl_informasi_pengalaman_kerja_ibfk_1` FOREIGN KEY (`no_aplikasi`) REFERENCES `tbl_informasi_personal` (`no_aplikasi`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tbl_master_lowongan`
--
ALTER TABLE `tbl_master_lowongan`
  ADD CONSTRAINT `tbl_master_lowongan_ibfk_1` FOREIGN KEY (`id_kategori`) REFERENCES `tbl_master_kategori_lowongan` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
