-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 12:33 PM
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
  `status` varchar(1) NOT NULL DEFAULT '0',
  `jml_sks` varchar(3) NOT NULL,
  `file_sks` longblob NOT NULL,
  `nim` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `irs`
--

INSERT INTO `irs` (`id_irs`, `semester_aktif`, `status`, `jml_sks`, `file_sks`, `nim`) VALUES
(1, '5', '0', '90', '', '24060120130053');

-- --------------------------------------------------------

--
-- Table structure for table `kabupaten`
--

CREATE TABLE `kabupaten` (
  `kode_kab` varchar(4) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `kode_prov` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kabupaten`
--

INSERT INTO `kabupaten` (`kode_kab`, `nama`, `kode_prov`) VALUES
('101', 'Bogor', '1'),
('102', 'Bandung', '1'),
('103', 'Kuningan', '1'),
('104', 'Majalengka', '1'),
('201', 'Batang', '2'),
('202', 'Demak', '2'),
('203', 'Semarang', '2'),
('204', 'Jepara', '2'),
('205', 'Kudus', '2'),
('301', 'Ngawi', '3'),
('302', 'Siduarjo', '3'),
('303', 'Tulungagung', '3'),
('304', 'Malang', '3'),
('305', 'Nganjuk', '3'),
('401', 'Badung', '4'),
('402', 'Bangli', '4'),
('403', 'Gianyar', '4'),
('404', 'Karangasem', '4'),
('405', 'Klungkung', '4'),
('501', 'Jakarta Selatan', '5'),
('502', 'Jakarta Utara', '5'),
('503', 'Jakarta Timur', '5'),
('504', 'Jakarta Barat', '5'),
('505', 'Jakarta Pusat', '5');

-- --------------------------------------------------------

--
-- Table structure for table `khs`
--

CREATE TABLE `khs` (
  `id_khs` int(20) NOT NULL,
  `smt` varchar(2) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '0',
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
(1, '1', 'n', '0', '3.68', '3.68', '', '24', '24060121130049'),
(2, '3', 'A', '0', '3.5', '3.90', '', '50', '24060120130152'),
(3, '5', 'A', '0', '3.90', '3.90', '', '50', '24060120130050'),
(4, '6', 'A', '0', '3.68', '3.90', '', '70', '24060120130059'),
(6, '1', 'A', '', '3.70', '1.85', 0x4b61727475205554532e706466, '24', '24060120130053');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(14) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `fotoprofile` varchar(100) DEFAULT NULL,
  `angkatan` varchar(4) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nomor_telp` varchar(15) NOT NULL,
  `email` varchar(30) NOT NULL,
  `jalur_masuk` varchar(20) NOT NULL,
  `kode_prov` varchar(2) NOT NULL,
  `kode_kab` varchar(4) NOT NULL,
  `kode_wali` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `fotoprofile`, `angkatan`, `alamat`, `nomor_telp`, `email`, `jalur_masuk`, `kode_prov`, `kode_kab`, `kode_wali`) VALUES
('24060120130053', 'Fathan Muhammad Faqih', 'Untitled (2).png', '2020', 'Komplek Tugu', '087870847121', 'fathan@gmail.com', 'SNMPTN', '4', '403', 'E1'),
('24060121130049', 'Abdul Mustajir', NULL, '2021', 'Komplek tugu Timur', '08788824691', 'mustajir@gmail.com', 'SBMPTN', '1', '101', 'E1');

-- --------------------------------------------------------

--
-- Table structure for table `pkl`
--

CREATE TABLE `pkl` (
  `id_pkl` int(20) NOT NULL,
  `nim` varchar(14) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT '0',
  `tanggal_mulai` varchar(20) NOT NULL,
  `nilai` varchar(2) DEFAULT NULL,
  `status_konfirmasi` varchar(20) NOT NULL,
  `upload_pkl` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pkl`
--

INSERT INTO `pkl` (`id_pkl`, `nim`, `status`, `tanggal_mulai`, `nilai`, `status_konfirmasi`, `upload_pkl`) VALUES
(1, '24060120130053', 'lulus', '25/10/2022', 'A', '1', ''),
(2, '24060120130059', 'belum lulus', '25/10/2022', 'A', '1', ''),
(3, '24060121130049', 'lulus', '', '', '1', '');

-- --------------------------------------------------------

--
-- Table structure for table `provinsi`
--

CREATE TABLE `provinsi` (
  `kode_prov` varchar(2) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provinsi`
--

INSERT INTO `provinsi` (`kode_prov`, `nama`) VALUES
('1', 'Jawa Barat'),
('2', 'Jawa Tengah'),
('3', 'Jawa Timur'),
('4', 'Bali'),
('5', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `skripsi`
--

CREATE TABLE `skripsi` (
  `id_skripsi` int(20) NOT NULL,
  `nim` varchar(14) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '0',
  `nilai` varchar(2) DEFAULT NULL,
  `tgl_sidang` varchar(10) DEFAULT NULL,
  `lama_studi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skripsi`
--

INSERT INTO `skripsi` (`id_skripsi`, `nim`, `status`, `nilai`, `tgl_sidang`, `lama_studi`) VALUES
(1, '24060120130050', '0', NULL, NULL, NULL);

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
  ADD UNIQUE KEY `nim_2` (`nim`),
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
  ADD UNIQUE KEY `nim` (`nim`),
  ADD KEY `fk_nim` (`nim`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `kode_wali` (`kode_wali`),
  ADD KEY `fk_prov` (`kode_prov`),
  ADD KEY `fk_kab` (`kode_kab`);

--
-- Indexes for table `pkl`
--
ALTER TABLE `pkl`
  ADD PRIMARY KEY (`id_pkl`),
  ADD UNIQUE KEY `nim` (`nim`),
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
  ADD UNIQUE KEY `nim` (`nim`),
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
  MODIFY `id_khs` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `pkl`
--
ALTER TABLE `pkl`
  MODIFY `id_pkl` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
