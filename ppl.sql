-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 02:21 PM
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
('E1', '0092038705', 'Rohmat Subarjo', 'rohmat@gmail.com', '0812347892138', 'Jalan Kenangan'),
('E2', '0092038883', 'Aulia Dina', 'auliadin@gmail.com', '085666728012', 'Jalan Yuk'),
('E3', '0092086435', 'Joyo Cahyono', 'joyo@gmail.com', '085567887034', 'Jalan Jalan'),
('E4', '0092038992', 'Adhiarja Kresna', 'adikresna@gmail.com', '085627918276', 'Jalan Hidup');

-- --------------------------------------------------------

--
-- Table structure for table `irs`
--

CREATE TABLE `irs` (
  `id_irs` int(20) NOT NULL,
  `semester_aktif` varchar(1) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '0',
  `jml_sks` varchar(3) NOT NULL,
  `file_sks` varchar(100) NOT NULL,
  `nim` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `irs`
--

INSERT INTO `irs` (`id_irs`, `semester_aktif`, `status`, `jml_sks`, `file_sks`, `nim`) VALUES
(1, '7', '1', '110', '', '24060119120004'),
(2, '7', '1', '110', '', '24060119120034'),
(3, '7', '1', '110', '', '24060119120112'),
(4, '7', '1', '110', '', '24060119140098'),
(5, '7', '1', '110', '', '24060119140108'),
(6, '5', '0', '95', '', '24060120120022'),
(7, '5', '0', '96', '', '24060120120045'),
(8, '5', '0', '93', '', '24060120120113'),
(9, '5', '0', '94', '', '24060120130047'),
(10, '5', '0', '95', '', '24060120130053'),
(11, '5', '0', '93', '', '24060120130093'),
(12, '5', '1', '101', '', '24060120130112');

-- --------------------------------------------------------

--
-- Table structure for table `irstemp`
--

CREATE TABLE `irstemp` (
  `id_irs` int(20) NOT NULL DEFAULT 0,
  `semester_aktif` varchar(1) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '0',
  `jml_sks` varchar(3) NOT NULL,
  `file_sks` varchar(100) NOT NULL,
  `nim` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `irstemp`
--

INSERT INTO `irstemp` (`id_irs`, `semester_aktif`, `status`, `jml_sks`, `file_sks`, `nim`) VALUES
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
  `status` varchar(10) DEFAULT NULL,
  `status_konfirmasi` varchar(20) NOT NULL,
  `ip_semester` varchar(4) NOT NULL,
  `ip_kumulatif` varchar(4) NOT NULL,
  `file_khs` varchar(100) DEFAULT NULL,
  `sks_kumulatif` varchar(3) NOT NULL,
  `nim` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khs`
--

INSERT INTO `khs` (`id_khs`, `smt`, `status`, `status_konfirmasi`, `ip_semester`, `ip_kumulatif`, `file_khs`, `sks_kumulatif`, `nim`) VALUES
(8, '9', 'Aktif', '1', '3.4', '3.51', NULL, '159', '24060118120005'),
(9, '9', 'Aktif', '1', '3,1', '3,24', NULL, '149', '24060118120035'),
(10, '9', 'Cuti', '1', '3,7', '3,65', NULL, '156', '24060119120004'),
(11, '9', 'Mangkir', '1', '2,4', '2,94', NULL, '153', '24060119120034');

-- --------------------------------------------------------

--
-- Table structure for table `khstemp`
--

CREATE TABLE `khstemp` (
  `id_khs` int(20) NOT NULL DEFAULT 0,
  `smt` varchar(2) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `status_konfirmasi` varchar(20) NOT NULL,
  `ip_semester` varchar(4) NOT NULL,
  `ip_kumulatif` varchar(4) NOT NULL,
  `file_khs` varchar(100) DEFAULT NULL,
  `sks_kumulatif` varchar(3) NOT NULL,
  `nim` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `khstemp`
--

INSERT INTO `khstemp` (`id_khs`, `smt`, `status`, `status_konfirmasi`, `ip_semester`, `ip_kumulatif`, `file_khs`, `sks_kumulatif`, `nim`) VALUES
(1, '1', 'aktif', '0', '3.68', '3.68', '', '24', '24060121130049'),
(2, '3', 'aktif', '0', '3.5', '3.90', '', '50', '24060120130152'),
(3, '5', 'aktif', '0', '3.90', '3.90', '', '50', '24060120130050'),
(4, '6', 'aktif', '0', '3.68', '3.90', '', '70', '24060120130059'),
(7, '1', 'Aktif', '', '3.50', '1.75', 'Kartu UTS.pdf', '20', '24060120130053');

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
('24060118120005', 'Akmal Mulyono', NULL, '2018', 'Jalan Bebek', '081374682115', 'akmal@gmail.com', 'SNMPTN', '4', '403', 'E1'),
('24060118120035', 'Elvi Caharin', NULL, '2018', 'Jalan Cempaka', '081374682543', 'elvi@gmail.com', 'SNMPTN', '5', '503', 'E4'),
('24060119120004', 'Wahyu Poernomo', NULL, '2019', 'Jalan Terang', '085777861233', 'wahyu@gmail.com', 'SNMPTN', '4', '401', 'E1'),
('24060119120034', 'Kezia Gunawan', NULL, '2019', 'Jalan Belok', '085777860507', 'kezia@gmail.com', 'SNMPTN', '5', '501', 'E3'),
('24060119120108', 'Andreas Saksono', NULL, '2018', 'Jalan Teman', '085777861111', 'andre@gmail.com', 'SNMPTN', '2', '201', 'E3'),
('24060119120112', 'Nurul Hanida', NULL, '2019', 'Jalan Hidup', '085777861064', 'nurunida@gmail.com', 'SNMPTN', '2', '201', 'E2'),
('24060119130117', 'Wulan Pratuti', NULL, '2018', 'Jalan Buyar', '085777864329', 'wulan@gmail.com', 'SBMPTN', '5', '504', 'E2'),
('24060119130186', 'Zulfikar Sadiyah', NULL, '2018', 'Jalan Sukses', '085777864444', 'zulfi@gmail.com', 'SBMPTN', '3', '302', 'E1'),
('24060119140005', 'Adesta Wargono', NULL, '2018', 'Jalan Teman', '085777864098', 'adesta@gmail.com', 'Mandiri', '2', '201', 'E4'),
('24060119140098', 'Jonathan Timotus', NULL, '2019', 'Jalan Jongkok', '085777861198', 'jona@gmail.com', 'Mandiri', '3', '305', 'E2'),
('24060119140108', 'Rafi Darmawan', NULL, '2019', 'Jalan Lurus', '085777861445', 'rafi@gmail.com', 'Mandiri', '2', '203', 'E2'),
('24060119140197', 'Angela Soandato', NULL, '2018', 'Jalan Dalam', '085777864012', 'angela@gmail.com', 'Mandiri', '5', '501', 'E1'),
('24060120120022', 'Kevin Ginanjar', NULL, '2020', 'Jalan Besar', '08119765398', 'keving@gmail.com', 'SNMPTN', '3', '304', 'E3'),
('24060120120045', 'Syifa Hadiatmi', NULL, '2020', 'Jalan Terus', '08119765344', 'syifaami@gmail.com', 'SNMPTN', '2', '202', 'E1'),
('24060120120113', 'April Yanto', NULL, '2020', 'Jalan Kemana', '08119765456', 'yanto@gmail.com', 'SNMPTN', '3', '301', 'E3'),
('24060120130047', 'Fellia Gessangie', NULL, '2020', 'Jalan Inajadulu', '085777861394', 'fellia@gmail.com', 'SBMPTN', '1', '101', 'E2'),
('24060120130053', 'Fathan Muhammad Faqih', '24060121030053.jpg', '2020', 'Komplek Tugu', '087870847121', 'fathan@gmail.com', 'SNMPTN', '2', '202', 'E1'),
('24060120130093', 'Raihan Atmadi', NULL, '2020', 'Jalan Apa', '085777861292', 'raihan@gmail.com', 'SBMPTN', '1', '102', 'E3'),
('24060120130112', 'Amanda Apriyandi', NULL, '2020', 'Jalan Yuk', '085777861222', 'amanda@gmail.com', 'SBMPTN', '2', '201', 'E2'),
('24060121120003', 'Dewi Cantika', NULL, '2021', 'Jalan Besar', '081278653353', 'dewi@gmail.com', 'SNMPTN', '3', '304', 'E4'),
('24060121120098', 'Fajar Rahartono', NULL, '2021', 'Jalan Jalan', '081278653320', 'fajartono@gmail.com', 'SNMPTN', '2', '202', 'E1'),
('24060121120119', 'Bintang Paiman', NULL, '2021', 'Jalan Disana', '081278653447', 'bintang@gmail.com', 'SNMPTN', '1', '103', 'E4'),
('24060121130024', 'Annisa Hadiati', NULL, '2021', 'Jalan Kemana', '08119765455', 'annisa@gmail.com', 'SNMPTN', '3', '301', 'E2'),
('24060121130049', 'Abdul Mustajir', NULL, '2021', 'Komplek tugu Timur', '08788824691', 'mustajir@gmail.com', 'SBMPTN', '1', '101', 'E1'),
('24060121130122', 'Bayu Hadianto', NULL, '2021', 'Jalan Gas', '081278652035', 'bayu@gmail.com', 'SBMPTN', '1', '102', 'E4'),
('24060122120102', 'Syahira Bagya', NULL, '2022', 'Jalan Kecil', '085763456433', 'hira@gmail.com', 'SNMPTN', '3', '301', 'E4'),
('24060122120119', 'Rani Purnami', NULL, '2022', 'Jalan Ini', '085763456735', 'rani@gmail.com', 'SNMPTN', '1', '101', 'E2'),
('24060122130002', 'Zaidan Wadifah', NULL, '2022', 'Jalan Jalan', '085763451234', 'zaidan@gmail.com', 'SBMPTN', '2', '202', 'E1'),
('24060122130100', 'Griya Ida', NULL, '2022', 'Jalan Tirtasari', '085763456000', 'ida@gmail.com', 'SBMPTN', '2', '203', 'E1'),
('24060122130119', 'Bagas Putra', NULL, '2022', 'Jalan Disana', '085763456443', 'putrab@gmail.com', 'SBMPTN', '4', '401', 'E1');

-- --------------------------------------------------------

--
-- Table structure for table `pkl`
--

CREATE TABLE `pkl` (
  `id_pkl` int(20) NOT NULL,
  `nim` varchar(14) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'belum lulus',
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
-- Table structure for table `pkltemp`
--

CREATE TABLE `pkltemp` (
  `id_pkl` int(20) NOT NULL DEFAULT 0,
  `nim` varchar(14) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'belum lulus',
  `tanggal_mulai` varchar(20) NOT NULL,
  `nilai` varchar(2) DEFAULT NULL,
  `status_konfirmasi` varchar(20) NOT NULL,
  `upload_pkl` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pkltemp`
--

INSERT INTO `pkltemp` (`id_pkl`, `nim`, `status`, `tanggal_mulai`, `nilai`, `status_konfirmasi`, `upload_pkl`) VALUES
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
  `status` varchar(15) NOT NULL DEFAULT 'belum lulus',
  `nilai` varchar(2) DEFAULT NULL,
  `tgl_sidang` varchar(10) DEFAULT NULL,
  `lama_studi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skripsi`
--

INSERT INTO `skripsi` (`id_skripsi`, `nim`, `status`, `nilai`, `tgl_sidang`, `lama_studi`) VALUES
(1, '24060120130050', 'belum lulus', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `skripsitemp`
--

CREATE TABLE `skripsitemp` (
  `id_skripsi` int(20) NOT NULL DEFAULT 0,
  `nim` varchar(14) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'belum lulus',
  `nilai` varchar(2) DEFAULT NULL,
  `tgl_sidang` varchar(10) DEFAULT NULL,
  `lama_studi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skripsitemp`
--

INSERT INTO `skripsitemp` (`id_skripsi`, `nim`, `status`, `nilai`, `tgl_sidang`, `lama_studi`) VALUES
(1, '24060120130050', 'belum lulus', NULL, NULL, NULL);

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
  ADD UNIQUE KEY `nim` (`nim`);

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
  MODIFY `id_irs` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `khs`
--
ALTER TABLE `khs`
  MODIFY `id_khs` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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

--
-- Constraints for table `khs`
--
ALTER TABLE `khs`
  ADD CONSTRAINT `fk_nimkhs` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
