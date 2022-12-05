-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 05 Des 2022 pada 08.31
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

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
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `kode_wali` varchar(14) NOT NULL,
  `nip` varchar(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `fotoprofiled` varchar(100) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `nomor_telp` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`kode_wali`, `nip`, `nama`, `fotoprofiled`, `email`, `nomor_telp`, `alamat`) VALUES
('E1', '0092038705', 'Rohmat Subarjo', 'rohmatsubarjo.png', 'rohmat@gmail.com', '0812347892138', 'Jalan Kenangan'),
('E2', '0092038883', 'Aulia Dina', 'auliadina.png', 'auliadin@gmail.com', '085666728012', 'Jalan Yuk'),
('E3', '0092086435', 'Joyo Cahyono', 'joyocahyono.png', 'joyo@gmail.com', '085567887034', 'Jalan Jalan'),
('E4', '0092038992', 'Adhiarja Kresna', 'adhiarjakresna.png', 'adikresna@gmail.com', '085627918276', 'Jalan Hidup');

-- --------------------------------------------------------

--
-- Struktur dari tabel `irs`
--

CREATE TABLE `irs` (
  `id_irs` int(20) NOT NULL,
  `semester_aktif` int(2) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '0',
  `jml_sks` int(11) NOT NULL,
  `file_sks` varchar(100) NOT NULL,
  `nim` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `irs`
--

INSERT INTO `irs` (`id_irs`, `semester_aktif`, `status`, `jml_sks`, `file_sks`, `nim`) VALUES
(1, 7, '1', 21, '', '24060119120004'),
(2, 7, '1', 22, '', '24060119120034'),
(4, 7, '1', 21, '', '24060119140098'),
(5, 7, '1', 18, '', '24060119140108'),
(6, 5, '0', 21, '', '24060120120022'),
(7, 5, '0', 18, '', '24060120120045'),
(8, 5, '0', 21, '', '24060120120113'),
(9, 5, '0', 18, '', '24060120130047'),
(10, 5, '0', 21, '', '24060120130053'),
(11, 5, '1', 22, '', '24060120130093'),
(13, 9, '0', 24, '', '24060118120005'),
(15, 9, '0', 18, '', '24060118120035'),
(16, 9, '1', 21, '', '24060118120073'),
(20, 9, '1', 18, '', '24060118140133'),
(21, 3, '1', 24, '', '24060121120003'),
(22, 3, '1', 21, '', '24060121120098'),
(23, 3, '1', 24, '', '24060121120119'),
(24, 3, '0', 21, '', '24060121130024'),
(26, 3, '0', 21, '', '24060121130122'),
(27, 1, '1', 24, '', '24060122120102'),
(28, 1, '1', 24, '', '24060122120119'),
(29, 1, '1', 24, '', '24060122130002'),
(30, 1, '1', 24, '', '24060122130100'),
(31, 1, '1', 24, '', '24060122130119'),
(34, 9, '1', 21, '', '24060119130117'),
(35, 9, '1', 20, '', '24060119130186'),
(36, 9, '1', 21, '', '24060118140024'),
(39, 9, '1', 21, '', '24060119140005'),
(40, 9, '1', 21, '', '24060119140197');

-- --------------------------------------------------------

--
-- Struktur dari tabel `irstemp`
--

CREATE TABLE `irstemp` (
  `id_irs` int(20) NOT NULL,
  `semester_aktif` int(2) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '0',
  `jml_sks` int(11) NOT NULL,
  `file_sks` varchar(100) NOT NULL,
  `nim` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `irstemp`
--

INSERT INTO `irstemp` (`id_irs`, `semester_aktif`, `status`, `jml_sks`, `file_sks`, `nim`) VALUES
(1, 6, '0', 20, 'IRS_MHS.pdf', '24060118130132'),
(3, 6, '0', 22, 'KTP Laporan.pdf', '24060120130053'),
(4, 6, '0', 19, 'Modul Praktikum IMK 03 user persona.pdf', '24060120130053');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kabupaten`
--

CREATE TABLE `kabupaten` (
  `kode_kab` varchar(4) NOT NULL,
  `nama` varchar(15) NOT NULL,
  `kode_prov` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `kabupaten`
--

INSERT INTO `kabupaten` (`kode_kab`, `nama`, `kode_prov`) VALUES
('000', 'Belum Ada', '0'),
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
-- Struktur dari tabel `khs`
--

CREATE TABLE `khs` (
  `id_khs` int(20) NOT NULL,
  `smt` varchar(2) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `status_konfirmasi` varchar(20) NOT NULL DEFAULT '0',
  `ip_semester` varchar(4) NOT NULL,
  `ip_kumulatif` varchar(4) NOT NULL,
  `file_khs` varchar(100) DEFAULT NULL,
  `sks_kumulatif` int(11) NOT NULL,
  `nim` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `khs`
--

INSERT INTO `khs` (`id_khs`, `smt`, `status`, `status_konfirmasi`, `ip_semester`, `ip_kumulatif`, `file_khs`, `sks_kumulatif`, `nim`) VALUES
(13, '9', 'Aktif', '1', '3.7', '3.65', NULL, 157, '24060118120005'),
(14, '9', 'Aktif', '1', '3.1', '3.16', NULL, 151, '24060118120035'),
(15, '9', 'Aktif', '1', '3.6', '3.72', NULL, 155, '24060118120073'),
(16, '7', 'Mangkir', '1', '2.1', '2.32', NULL, 127, '24060118130064'),
(17, '7', 'Aktif', '1', '3.6', '3.48', NULL, 130, '24060119120004'),
(18, '7', 'Aktif', '1', '3.2', '3.61', NULL, 134, '24060119120034'),
(20, '7', 'Cuti', '0', '3.4', '3.28', NULL, 128, '24060119120112'),
(21, '5', 'Aktif', '1', '4.0', '4.00', NULL, 98, '24060120120022'),
(22, '5', 'Aktif', '1', '3.8', '3.77', NULL, 95, '24060120120045'),
(24, '5', 'Aktif', '1', '3.3', '3.56', NULL, 93, '24060120130047'),
(25, '5', 'Aktif', '1', '2.3', '2.55', NULL, 90, '24060120130053'),
(27, '7', 'Cuti', '1', '2.8', '3.02', NULL, 120, '24060118130132'),
(28, '9', 'Aktif', '1', '3.1', '3.43', NULL, 142, '24060118140024'),
(29, '9', 'Aktif', '1', '2.4', '2.98', NULL, 141, '24060118140133'),
(30, '9', 'Mangkir', '1', '1.2', '1.54', NULL, 136, '24060119120108'),
(31, '9', 'Aktif', '1', '3.9', '3.98', NULL, 150, '24060119130117'),
(32, '9', 'Aktif', '1', '3.1', '3.56', NULL, 149, '24060119130186'),
(33, '9', 'Aktif', '0', '3.7', '3.86', NULL, 148, '24060119140005'),
(34, '9', 'Aktif', '0', '3.1', '3.25', NULL, 145, '24060119140197'),
(35, '7', 'Aktif', '1', '3.4', '3.65', NULL, 121, '24060119140098'),
(36, '7', 'Aktif', '1', '2.9', '3.06', NULL, 125, '24060119140108'),
(37, '5', 'Aktif', '1', '3.2', '3.42', NULL, 98, '24060120120113'),
(38, '2', 'Mangkir', '1', '3.6', '3.62', NULL, 48, '24060120130093'),
(39, '5', 'Aktif', '1', '3.8', '3.74', NULL, 90, '24060120130112'),
(40, '3', 'Aktif', '1', '3.8', '3.64', NULL, 53, '24060121120003'),
(41, '3', 'Aktif', '1', '2.6', '2.88', NULL, 49, '24060121120098'),
(42, '3', 'Aktif', '1', '3.5', '3.45', NULL, 50, '24060121120119'),
(43, '3', 'Aktif', '1', '2.7', '3.22', NULL, 47, '24060121130024'),
(44, '1', 'Mangkir', '1', '3.5', '3.5', NULL, 24, '24060121130049'),
(45, '3', 'Aktif', '1', '1.9', '2.76', NULL, 47, '24060121130122'),
(46, '1', 'Aktif', '1', '3.6', '3.60', NULL, 21, '24060122120102'),
(47, '1', 'Aktif', '1', '3.9', '3.90', NULL, 21, '24060122120119'),
(48, '1', 'Aktif', '1', '4.0', '4.00', NULL, 24, '24060122130002'),
(49, '1', 'Aktif', '1', '4.0', '4.00', NULL, 21, '24060122130100'),
(50, '1', 'Aktif', '1', '3.4', '3.40', NULL, 21, '24060122130119');

-- --------------------------------------------------------

--
-- Struktur dari tabel `khstemp`
--

CREATE TABLE `khstemp` (
  `id_khs` int(20) DEFAULT 0,
  `smt` varchar(2) NOT NULL,
  `status` varchar(10) DEFAULT NULL,
  `status_konfirmasi` varchar(20) NOT NULL,
  `ip_semester` varchar(4) NOT NULL,
  `ip_kumulatif` varchar(4) NOT NULL,
  `file_khs` varchar(100) DEFAULT NULL,
  `sks_kumulatif` int(11) NOT NULL,
  `nim` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `khstemp`
--

INSERT INTO `khstemp` (`id_khs`, `smt`, `status`, `status_konfirmasi`, `ip_semester`, `ip_kumulatif`, `file_khs`, `sks_kumulatif`, `nim`) VALUES
(NULL, '1', 'aktif', '0', '3.68', '3.68', '', 24, '24060121130049'),
(NULL, '3', 'aktif', '0', '3.5', '3.90', '', 50, '24060120130152'),
(NULL, '5', 'aktif', '0', '3.90', '3.90', '', 50, '24060120130050'),
(NULL, '6', 'aktif', '0', '3.68', '3.90', '', 70, '24060120130059'),
(0, '5', 'aktif', '0', '3.95', '3.60', NULL, 90, '24060118120005'),
(NULL, '5', 'Aktif', '', '3.4', '2.85', 'CV Made.pdf', 111, '24060120130053');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `nim` varchar(14) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `fotoprofile` varchar(100) DEFAULT NULL,
  `angkatan` varchar(4) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `nomor_telp` varchar(15) DEFAULT NULL,
  `email` varchar(30) NOT NULL,
  `jalur_masuk` varchar(20) NOT NULL,
  `kode_prov` varchar(2) NOT NULL,
  `kode_kab` varchar(4) NOT NULL,
  `kode_wali` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `fotoprofile`, `angkatan`, `alamat`, `nomor_telp`, `email`, `jalur_masuk`, `kode_prov`, `kode_kab`, `kode_wali`) VALUES
('24060118120005', 'Akmal Mulyono', NULL, '2018', 'Jalan Bebek', '081374682115', 'akmal@gmail.com', 'SNMPTN', '4', '403', 'E1'),
('24060118120035', 'Elvi Caharin', NULL, '2018', 'Jalan Cempaka', '081374682543', 'elvi@gmail.com', 'SNMPTN', '5', '503', 'E4'),
('24060118120073', 'Intan Poeryani', NULL, '2018', 'Jalan Teman', '085777861261', 'intan@gmail.com', 'SNMPTN', '2', '201', 'E3'),
('24060118130064', 'Marshanda Caswati', NULL, '2018', 'Jalan Buyar', '085777864329', 'marsha@gmail.com', 'SBMPTN', '5', '504', 'E2'),
('24060118130132', 'Galang Irwanto', NULL, '2018', 'Jalan Sukses', '085777864216', 'galang@gmail.com', 'SBMPTN', '3', '302', 'E1'),
('24060118140024', 'Farrel Edianto', NULL, '2018', 'Jalan Teman', '085777864098', 'farrel@gmail.com', 'Mandiri', '2', '201', 'E4'),
('24060118140133', 'Citra Rahayu', NULL, '2018', 'Jalan Dalam', '085777864143', 'citra@gmail.com', 'Mandiri', '5', '501', 'E1'),
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
('24060120140143', 'Taskia', 'nawib.png', '2019', NULL, NULL, 'taskia@gmail.com', 'SNMPTN', '0', '000', 'E2'),
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
-- Struktur dari tabel `pkl`
--

CREATE TABLE `pkl` (
  `id_pkl` int(20) NOT NULL,
  `nim` varchar(14) NOT NULL,
  `stat` varchar(15) NOT NULL DEFAULT 'belum lulus',
  `tanggal_mulai` varchar(20) NOT NULL,
  `nilai` varchar(2) DEFAULT NULL,
  `status_konfirmasi` varchar(20) NOT NULL DEFAULT '0',
  `upload_pkl` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pkl`
--

INSERT INTO `pkl` (`id_pkl`, `nim`, `stat`, `tanggal_mulai`, `nilai`, `status_konfirmasi`, `upload_pkl`) VALUES
(7, '24060120130053', '1', '', NULL, '0', 'Modul Praktikum IMK 03 user persona.pdf'),
(8, '24060119120004', 'lulus', '27/10/2021', 'A', '1', NULL),
(9, '24060119120034', 'lulus', '27/10/2021', 'A', '1', NULL),
(10, '24060119120108', 'lulus', '27/10/2021', 'B', '1', NULL),
(11, '24060119120112', 'lulus', '27/10/2021', 'B', '1', NULL),
(12, '24060119130117', 'belum lulus', '27/10/2021', NULL, '1', NULL),
(13, '24060119130186', 'belum lulus', '27/10/2021', NULL, '1', NULL),
(14, '24060120120022', 'belum lulus', '27/10/2022', NULL, '1', NULL),
(15, '24060120120022', 'belum lulus', '27/10/2022', NULL, '1', NULL),
(16, '24060120120113', 'belum lulus', '27/10/2022', NULL, '0', NULL),
(17, '24060120130047', 'belum lulus', '27/10/2022', NULL, '0', NULL),
(18, '24060120130112', 'belum lulus', '27/10/2022', NULL, '1', NULL),
(20, '24060120130053', 'belum lulus', '10/11/2022', NULL, '0', NULL),
(21, '24060118120005', 'belum lulus', '10/11/2022', NULL, '0', NULL),
(22, '24060118130132', 'belum lulus', '10/11/2022', NULL, '0', NULL),
(23, '24060118140133', 'belum lulus', '10/11/2022', NULL, '0', NULL),
(24, '24060119120004', 'belum lulus', '10/11/2022', NULL, '0', NULL),
(25, '24060119130186', 'belum lulus', '10/11/2022', NULL, '0', NULL),
(26, '24060120120045', 'belum lulus', '10/11/2022', NULL, '0', NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pkltemp`
--

CREATE TABLE `pkltemp` (
  `id_pkl` int(20) NOT NULL,
  `nim` varchar(14) NOT NULL,
  `Progress` varchar(15) NOT NULL DEFAULT 'belum lulus',
  `tanggal_mulai` varchar(20) NOT NULL,
  `nilai` varchar(2) DEFAULT NULL,
  `status_konfirmasi` varchar(20) NOT NULL,
  `upload_pkl` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pkltemp`
--

INSERT INTO `pkltemp` (`id_pkl`, `nim`, `Progress`, `tanggal_mulai`, `nilai`, `status_konfirmasi`, `upload_pkl`) VALUES
(8, '24060118120005', '2', '', NULL, '', 'CV Made.pdf'),
(9, '24060118130132', '3', '', NULL, '', 'CV Made.pdf'),
(10, '24060118140133', '2', '', NULL, '', 'CV Made.pdf'),
(11, '24060119120004', '1', '', NULL, '', 'CV Made.pdf'),
(12, '24060119130186', '3', '', NULL, '', 'CV Made.pdf'),
(13, '24060120120045', '1', '', NULL, '', 'CV Made.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE `provinsi` (
  `kode_prov` varchar(2) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`kode_prov`, `nama`) VALUES
('0', 'Belum Ada'),
('1', 'Jawa Barat'),
('2', 'Jawa Tengah'),
('3', 'Jawa Timur'),
('4', 'Bali'),
('5', 'Jakarta');

-- --------------------------------------------------------

--
-- Struktur dari tabel `skripsi`
--

CREATE TABLE `skripsi` (
  `id_skripsi` int(20) NOT NULL,
  `nim` varchar(14) NOT NULL,
  `judul` varchar(200) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'belum lulus',
  `nilai` varchar(2) DEFAULT NULL,
  `tgl_sidang` varchar(10) DEFAULT NULL,
  `file_skripsi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skripsi`
--

INSERT INTO `skripsi` (`id_skripsi`, `nim`, `judul`, `status`, `nilai`, `tgl_sidang`, `file_skripsi`) VALUES
(2, '24060118120005', 'Pengembangan Bahan Ajar Pengantar Teknologi Informasi Berbasis Contextual Teaching and Learning di Jurusan Teknik Elektro Universitas Negeri Malang', 'lulus', 'B', '28/10/2021', NULL),
(3, '24060118120035', 'Pengembangan Sistem Informasi Presensi Kuliah Berbasis NFC di Program Studi Pendidikan Teknik Informatika dan Komputer Universitas Sebelas Maret', 'lulus', 'B', '28/10/2021', NULL),
(4, '24060118120073', 'Pengaruh Sikap Dan Motivasi Terhadap Minat Berwirausaha Mahasiswa Program Studi Manajemen Bisnis Telekomunikasi Dan Informatika Angkatan 2014', 'lulus', 'A', '28/10/2021', NULL),
(5, '24060118130132', 'Perancangan Algoritma Topsis-Improved Rule Matching Untuk Analisis Keamanan Berkendara Menggunakan Sepeda Motor Matic', 'belum lulus', 'D', '28/10/2021', NULL),
(6, '24060119120004', 'Aplikasi Augmented Reality Pada Pemasaran Perumahan Puri Lestari Di Cikarang Berbasis Android', 'belum lulus', NULL, '01/11/2022', NULL),
(7, '24060119120034', 'Pembangunan Game Edukasi Mengenal Alat Musik Tradisional Jawa Barat Menggunakan Metode Game Development Life Cycle', 'belum lulus', NULL, '01/11/2022', NULL),
(8, '24060119120108', 'Implementasi Jaringan Syaraf Tiruan Untuk Pengelompokkan Minat Kompetensi Mahasiswa Stmik Pelita Nusantara Medan', 'belum lulus', NULL, '01/11/2022', NULL),
(9, '24060119120112', 'Pembangunan Game Peduli Lingkungan Menggunakan Metode Agile Game Development', 'belum lulus', NULL, '01/11/2022', NULL),
(10, '24060119130117', 'Analisis Pengaruh Nilai Tes Potensi Akademik Pada Evaluasi Pemrograman Dasar Terhadap Motivasi Dan Kemampuan Pemrograman', 'belum lulus', NULL, NULL, NULL),
(11, '24060119130186', 'Pengenalan Bunga Anggrek Menggunakan Gray Level Co-Occurrence Dan Algoritma K–Nearest Neighbours Berbasis Mobile', 'belum lulus', NULL, NULL, NULL),
(12, '24060119140005', 'Sistem Penjadwalan Wisata Kabupaten Nganjuk Menggunakan Algoritma Best First Search Berbasis Android', 'belum lulus', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `skripsitemp`
--

CREATE TABLE `skripsitemp` (
  `id_skripsi` int(20) NOT NULL,
  `nim` varchar(14) NOT NULL,
  `status` varchar(15) NOT NULL DEFAULT 'belum lulus',
  `Judul` varchar(100) NOT NULL,
  `nilai` varchar(2) DEFAULT NULL,
  `tgl_sidang` varchar(10) DEFAULT NULL,
  `lama_studi` varchar(10) DEFAULT NULL,
  `file_skripsi` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skripsitemp`
--

INSERT INTO `skripsitemp` (`id_skripsi`, `nim`, `status`, `Judul`, `nilai`, `tgl_sidang`, `lama_studi`, `file_skripsi`) VALUES
(1, '24060120130053', 'belum lulus', 'Membeli Sebuah Bebek', NULL, NULL, NULL, 'KTP Laporan.pdf');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `nip_nim` varchar(14) NOT NULL,
  `username` varchar(45) NOT NULL,
  `status` varchar(1) NOT NULL,
  `password` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`nip_nim`, `username`, `status`, `password`) VALUES
('0092038705', 'Dosen', '3', 'dosen123'),
('24060120130053', 'Fathan', '2', 'fathan123'),
('24060120130892', 'Departemen', '4', 'depart123'),
('24060120136721', 'Admin', '1', 'admin123'),
('24060120140143', 'imadearya1', '2', '1234'),
('24060120140150', 'taskiaofc', '2', '1234');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`kode_wali`);

--
-- Indeks untuk tabel `irs`
--
ALTER TABLE `irs`
  ADD PRIMARY KEY (`id_irs`),
  ADD KEY `nim` (`nim`);

--
-- Indeks untuk tabel `irstemp`
--
ALTER TABLE `irstemp`
  ADD PRIMARY KEY (`id_irs`);

--
-- Indeks untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD PRIMARY KEY (`kode_kab`),
  ADD KEY `kode_prov` (`kode_prov`);

--
-- Indeks untuk tabel `khs`
--
ALTER TABLE `khs`
  ADD PRIMARY KEY (`id_khs`),
  ADD KEY `fk_nimkhs` (`nim`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `kode_wali` (`kode_wali`),
  ADD KEY `fk_prov` (`kode_prov`),
  ADD KEY `fk_kab` (`kode_kab`);

--
-- Indeks untuk tabel `pkl`
--
ALTER TABLE `pkl`
  ADD PRIMARY KEY (`id_pkl`),
  ADD KEY `fk_nim_pkl` (`nim`);

--
-- Indeks untuk tabel `pkltemp`
--
ALTER TABLE `pkltemp`
  ADD PRIMARY KEY (`id_pkl`);

--
-- Indeks untuk tabel `provinsi`
--
ALTER TABLE `provinsi`
  ADD PRIMARY KEY (`kode_prov`);

--
-- Indeks untuk tabel `skripsi`
--
ALTER TABLE `skripsi`
  ADD PRIMARY KEY (`id_skripsi`),
  ADD KEY `fk_nim_skrp` (`nim`);

--
-- Indeks untuk tabel `skripsitemp`
--
ALTER TABLE `skripsitemp`
  ADD PRIMARY KEY (`id_skripsi`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`nip_nim`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `irs`
--
ALTER TABLE `irs`
  MODIFY `id_irs` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `irstemp`
--
ALTER TABLE `irstemp`
  MODIFY `id_irs` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `khs`
--
ALTER TABLE `khs`
  MODIFY `id_khs` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT untuk tabel `pkl`
--
ALTER TABLE `pkl`
  MODIFY `id_pkl` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `pkltemp`
--
ALTER TABLE `pkltemp`
  MODIFY `id_pkl` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `skripsi`
--
ALTER TABLE `skripsi`
  MODIFY `id_skripsi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `skripsitemp`
--
ALTER TABLE `skripsitemp`
  MODIFY `id_skripsi` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `irs`
--
ALTER TABLE `irs`
  ADD CONSTRAINT `nim` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);

--
-- Ketidakleluasaan untuk tabel `kabupaten`
--
ALTER TABLE `kabupaten`
  ADD CONSTRAINT `kode_prov` FOREIGN KEY (`kode_prov`) REFERENCES `provinsi` (`kode_prov`);

--
-- Ketidakleluasaan untuk tabel `pkl`
--
ALTER TABLE `pkl`
  ADD CONSTRAINT `fk_nim_pkl` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
