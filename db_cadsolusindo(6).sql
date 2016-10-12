-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 03, 2016 at 05:08 AM
-- Server version: 10.1.9-MariaDB
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
-- Table structure for table `tbl_data_interview_pelamar`
--

CREATE TABLE `tbl_data_interview_pelamar` (
  `id_interview` int(11) NOT NULL,
  `jadwal_pelamar_interview` date DEFAULT NULL,
  `hadir` varchar(5) DEFAULT NULL,
  `hasil_interview` text,
  `interviewer` varchar(50) DEFAULT NULL,
  `no_aplikasi` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data_pelamar`
--

CREATE TABLE `tbl_data_pelamar` (
  `id_data_pelamar` int(11) NOT NULL,
  `id_users` int(11) DEFAULT NULL,
  `tanggal_melamar` date DEFAULT NULL,
  `id_lowongan` int(11) DEFAULT NULL,
  `no_aplikasi` varchar(4) DEFAULT NULL,
  `status_aplikasi` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_hasil_tes_pelamar`
--

CREATE TABLE `tbl_hasil_tes_pelamar` (
  `id_hasil_tes` int(11) NOT NULL,
  `logika` varchar(100) DEFAULT NULL,
  `bahasa_inggris` varchar(100) DEFAULT NULL,
  `tester` varchar(50) NOT NULL,
  `no_aplikasi` varchar(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi_organisasi`
--

CREATE TABLE `tbl_informasi_organisasi` (
  `id_organisasi` int(11) NOT NULL,
  `organisasi` varchar(100) NOT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `dari` varchar(50) DEFAULT NULL,
  `sampai` varchar(50) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi_pendidikan_terakhir`
--

CREATE TABLE `tbl_informasi_pendidikan_terakhir` (
  `id_pendidikan_terakhir` int(11) NOT NULL,
  `tingkat` varchar(10) DEFAULT NULL,
  `nama_institusi` varchar(100) DEFAULT NULL,
  `jurusan` varchar(100) DEFAULT NULL,
  `tahun_kelulusan` varchar(10) DEFAULT NULL,
  `nilai_akhir` varchar(10) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi_pengalaman_kerja`
--

CREATE TABLE `tbl_informasi_pengalaman_kerja` (
  `id_pengalaman_kerja` int(11) NOT NULL,
  `perusahaan` varchar(100) DEFAULT NULL,
  `jabatan` varchar(100) DEFAULT NULL,
  `dari` varchar(50) DEFAULT NULL,
  `sampai` varchar(50) DEFAULT NULL,
  `id_users` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_informasi_personal`
--

CREATE TABLE `tbl_informasi_personal` (
  `id_informasi_personal` int(11) NOT NULL,
  `id_users` int(11) DEFAULT NULL,
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
  `cv` varchar(250) NOT NULL,
  `ijazah` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_kategori_lowongan`
--

CREATE TABLE `tbl_master_kategori_lowongan` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_master_lowongan`
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

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_users` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(200) DEFAULT NULL,
  `level_user` varchar(20) DEFAULT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `email`, `username`, `password`, `level_user`, `last_login`) VALUES
(1, 'admin@cad-solusindo.com', 'admin', 'e10adc3949ba59abbe56e057f20f883e', 'Administrator', '2016-07-16 18:12:32');

--
-- Indexes for dumped tables
--

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
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `tbl_informasi_pendidikan_terakhir`
--
ALTER TABLE `tbl_informasi_pendidikan_terakhir`
  ADD PRIMARY KEY (`id_pendidikan_terakhir`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `tbl_informasi_pengalaman_kerja`
--
ALTER TABLE `tbl_informasi_pengalaman_kerja`
  ADD PRIMARY KEY (`id_pengalaman_kerja`),
  ADD KEY `id_users` (`id_users`);

--
-- Indexes for table `tbl_informasi_personal`
--
ALTER TABLE `tbl_informasi_personal`
  ADD PRIMARY KEY (`id_informasi_personal`),
  ADD UNIQUE KEY `id_users` (`id_users`);

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
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_users`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_data_interview_pelamar`
--
ALTER TABLE `tbl_data_interview_pelamar`
  MODIFY `id_interview` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_data_pelamar`
--
ALTER TABLE `tbl_data_pelamar`
  MODIFY `id_data_pelamar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_hasil_tes_pelamar`
--
ALTER TABLE `tbl_hasil_tes_pelamar`
  MODIFY `id_hasil_tes` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_informasi_organisasi`
--
ALTER TABLE `tbl_informasi_organisasi`
  MODIFY `id_organisasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `tbl_informasi_pendidikan_terakhir`
--
ALTER TABLE `tbl_informasi_pendidikan_terakhir`
  MODIFY `id_pendidikan_terakhir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `tbl_informasi_pengalaman_kerja`
--
ALTER TABLE `tbl_informasi_pengalaman_kerja`
  MODIFY `id_pengalaman_kerja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `tbl_informasi_personal`
--
ALTER TABLE `tbl_informasi_personal`
  MODIFY `id_informasi_personal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tbl_master_kategori_lowongan`
--
ALTER TABLE `tbl_master_kategori_lowongan`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_master_lowongan`
--
ALTER TABLE `tbl_master_lowongan`
  MODIFY `id_lowongan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
