-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 19, 2022 at 04:49 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ppl`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `kode_wali` varchar(14) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `nomor_telp` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `irs`
--

CREATE TABLE `irs` (
  `semester_aktif` varchar(1) NOT NULL,
  `status` varchar(15) NOT NULL,
  `jml_sks` varchar(3) NOT NULL,
  `file_sks` longblob NOT NULL,
  `nim` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `kode_kab` varchar(4) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `kode_prov` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `khs`
--

CREATE TABLE `khs` (
  `smt` varchar(2) NOT NULL,
  `status` varchar(15) NOT NULL,
  `ip_semester` varchar(4) NOT NULL,
  `ip_kumulatif` varchar(4) NOT NULL,
  `file_khs` longblob NOT NULL,
  `sks_kumulatif` varchar(3) NOT NULL,
  `nim` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(14) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `angkatan` varchar(4) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor_telp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `kode_kab` varchar(4) NOT NULL,
  `kode_wali` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `pkl`
--

CREATE TABLE `pkl` (
  `nim` varchar(14) NOT NULL,
  `status` varchar(15) NOT NULL,
  `status_konfirmasi` varchar(20) NOT NULL,
  `upload_pkl` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `kode_prov` varchar(2) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `skripsi`
--

CREATE TABLE `skripsi` (
  `nim` varchar(2) NOT NULL,
  `status` varchar(15) NOT NULL,
  `tgl_lulus` varchar(10) NOT NULL,
  `lama_studi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nip/nim` varchar(14) NOT NULL,
  `username` varchar(45) NOT NULL,
  `status` varchar(1) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`kode_wali`);

--
-- Indexes for table `irs`
--
ALTER TABLE `irs`
  ADD PRIMARY KEY (`semester_aktif`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`kode_kab`),
  ADD KEY `kode_prov` (`kode_prov`);

--
-- Indexes for table `khs`
--
ALTER TABLE `khs`
  ADD PRIMARY KEY (`smt`),
  ADD KEY `fk_nim` (`nim`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `kode_kab` (`kode_kab`),
  ADD KEY `kode_wali` (`kode_wali`);

--
-- Indexes for table `pkl`
--
ALTER TABLE `pkl`
  ADD KEY `fk_nim_mhs` (`nim`);

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`kode_prov`);

--
-- Indexes for table `skripsi`
--
ALTER TABLE `skripsi`
  ADD KEY `fk_nim_mhsw` (`nim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nip/nim`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `irs`
--
ALTER TABLE `irs`
  ADD CONSTRAINT `nim` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);

--
-- Constraints for table `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD CONSTRAINT `kode_prov` FOREIGN KEY (`kode_prov`) REFERENCES `provinsi` (`kode_prov`);

--
-- Constraints for table `khs`
--
ALTER TABLE `khs`
  ADD CONSTRAINT `fk_nim` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);

--
-- Constraints for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `kode_wali` FOREIGN KEY (`kode_wali`) REFERENCES `dosen` (`kode_wali`);

--
-- Constraints for table `pkl`
--
ALTER TABLE `pkl`
  ADD CONSTRAINT `fk_nim_mhs` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);

--
-- Constraints for table `skripsi`
--
ALTER TABLE `skripsi`
  ADD CONSTRAINT `fk_nim_mhsw` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
