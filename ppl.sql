-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2022 at 03:42 PM
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

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`kode_wali`, `nip`, `nama`, `email`, `nomor_telp`, `alamat`) VALUES
('E1', '24060120130821', 'Rohmat Subarjo', 'rohmat@gmail.com', '0812347892138', 'Jalan Kenangan');

-- --------------------------------------------------------

--
-- Table structure for table `irs`
--

CREATE TABLE `irs` (
  `id_irs` int(20) NOT NULL,
  `semester_aktif` varchar(1) NOT NULL,
  `status` varchar(15) NOT NULL,
  `jml_sks` varchar(3) NOT NULL,
  `file_sks` longblob NOT NULL,
  `nim` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `irs`
--

INSERT INTO `irs` (`id_irs`, `semester_aktif`, `status`, `jml_sks`, `file_sks`, `nim`) VALUES
(1, '5', 'Aktif', '90', '', '24060120130053');

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
  `id_khs` int(20) NOT NULL,
  `smt` varchar(2) NOT NULL,
  `status` varchar(15) NOT NULL,
  `status_konfirmasi` varchar(20) NOT NULL,
  `ip_semester` varchar(4) NOT NULL,
  `ip_kumulatif` varchar(4) NOT NULL,
  `file_khs` longblob NOT NULL,
  `sks_kumulatif` varchar(3) NOT NULL,
  `nim` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khs`
--

INSERT INTO `khs` (`id_khs`, `smt`, `status`, `status_konfirmasi`, `ip_semester`, `ip_kumulatif`, `file_khs`, `sks_kumulatif`, `nim`) VALUES
(1, '1', 'Aktif', '0', '3.68', '3.68', '', '24', '24060120130152'),
(2, '3', 'Aktif', '0', '3.5', '3.90', '', '50', '24060120130152'),
(3, '5', 'Aktif', '0', '3.90', '3.90', '', '50', '24060120130053'),
(4, '6', 'Aktif', '0', '3.68', '3.90', '', '70', '24060120130053'),
(5, '7', 'Aktif', '0', '3.77', '3.90', '', '90', '24060120130053');

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
  `jalur_masuk` varchar(20) NOT NULL,
  `kode_kab` varchar(4) NOT NULL,
  `kode_wali` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `angkatan`, `alamat`, `nomor_telp`, `email`, `jalur_masuk`, `kode_kab`, `kode_wali`) VALUES
('24060120130049', 'Abdul Mustajir', '2021', 'Komplek Tugu Timur', '087888327118', 'Mustajir@gmail.com', 'SBMPTN', '12', 'E1'),
('24060120130050', 'Salma Nora Renada', '2020', 'Jalan Kenangan Indah', '0812347892138', 'sumbulnada@gmail.com', 'SNMPTN', '13', 'E1'),
('24060120130053', 'Fathan Muhammad Faqih', '2020', 'Komplek Tugu', '087888327118', 'fathan@gmail.com', 'SBMPTN', '12', 'E1'),
('24060120130059', 'Fathan Muhammad Rohmat', '2021', 'Komplek Tugu Barat', '087888327118', 'abdul@gmail.com', 'SNMPTN', '12', 'E1'),
('24060120130152', 'Made Rohmat Subarjo', '2019', 'Komplek Jayabaya', '081315487465', 'made@gmail.com', 'SBMPTN', '13', 'E1');

-- --------------------------------------------------------

--
-- Table structure for table `pkl`
--

CREATE TABLE `pkl` (
  `id_pkl` int(20) NOT NULL,
  `nim` varchar(14) NOT NULL,
  `status` varchar(15) NOT NULL,
  `status_konfirmasi` varchar(20) NOT NULL,
  `upload_pkl` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pkl`
--

INSERT INTO `pkl` (`id_pkl`, `nim`, `status`, `status_konfirmasi`, `upload_pkl`) VALUES
(1, '24060120130050', 'Belum Lulus', '1', ''),
(2, '24060120130059', 'Belum Lulus', '1', ''),
(3, '24060120130049', 'Belum Lulus', '1', '');

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
  `id_skripsi` int(20) NOT NULL,
  `nim` varchar(14) NOT NULL,
  `status` varchar(15) NOT NULL,
  `tgl_lulus` varchar(10) DEFAULT NULL,
  `lama_studi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skripsi`
--

INSERT INTO `skripsi` (`id_skripsi`, `nim`, `status`, `tgl_lulus`, `lama_studi`) VALUES
(1, '24060120130050', 'Belum Lulus', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `nip_nim` varchar(14) NOT NULL,
  `username` varchar(45) NOT NULL,
  `status` varchar(1) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`nip_nim`, `username`, `status`, `password`) VALUES
('24060120130053', 'Fathan', '2', 'fathan123'),
('24060120130821', 'Dosen', '3', 'dosen123'),
('24060120130892', 'Departemen', '4', 'depart123'),
('24060120136721', 'Admin', '1', 'admin123');

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
  ADD PRIMARY KEY (`id_irs`),
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
  ADD PRIMARY KEY (`id_khs`),
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
  ADD PRIMARY KEY (`id_pkl`),
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
  ADD PRIMARY KEY (`id_skripsi`),
  ADD KEY `fk_nim_mhsw` (`nim`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nip_nim`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `irs`
--
ALTER TABLE `irs`
  MODIFY `id_irs` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `khs`
--
ALTER TABLE `khs`
  MODIFY `id_khs` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pkl`
--
ALTER TABLE `pkl`
  MODIFY `id_pkl` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `skripsi`
--
ALTER TABLE `skripsi`
  MODIFY `id_skripsi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
