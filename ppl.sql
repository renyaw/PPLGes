-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 27 Okt 2022 pada 10.32
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
  `email` varchar(30) NOT NULL,
  `nomor_telp` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`kode_wali`, `nip`, `nama`, `email`, `nomor_telp`, `alamat`) VALUES
('E1', '24060120130821', 'Rohmat Subarjo', 'rohmat@gmail.com', '0812347892138', 'Jalan Kenangan');

-- --------------------------------------------------------

--
-- Struktur dari tabel `irs`
--

CREATE TABLE `irs` (
  `idirs` int(11) NOT NULL,
  `semester_aktif` varchar(1) NOT NULL,
  `status` varchar(15) NOT NULL,
  `jml_sks` varchar(3) NOT NULL,
  `file_sks` longblob NOT NULL,
  `nim` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `irs`
--

INSERT INTO `irs` (`idirs`, `semester_aktif`, `status`, `jml_sks`, `file_sks`, `nim`) VALUES
(1, '5', 'Sudah', '90', '', '24060120130053');

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
  `idkhs` int(11) NOT NULL,
  `smt` varchar(2) NOT NULL,
  `status` varchar(15) NOT NULL,
  `ip_semester` varchar(4) NOT NULL,
  `ip_kumulatif` varchar(4) NOT NULL,
  `file_khs` varchar(100) NOT NULL,
  `sks_kumulatif` varchar(3) NOT NULL,
  `nim` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `khs`
--

INSERT INTO `khs` (`idkhs`, `smt`, `status`, `ip_semester`, `ip_kumulatif`, `file_khs`, `sks_kumulatif`, `nim`) VALUES
(1, '1', 'Aktif', '3.68', '3.68', '', '24', '24060120130152'),
(2, '3', 'Aktif', '3.5', '3.90', '', '50', '24060120130152'),
(3, '5', 'Aktif', '3.90', '3.90', '', '50', '24060120130053'),
(4, '6', 'Aktif', '3.68', '3.90', '', '70', '24060120130053'),
(5, '7', 'Aktif', '3.77', '3.90', '', '90', '24060120130053');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
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
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`nim`, `nama`, `fotoprofile`, `angkatan`, `alamat`, `nomor_telp`, `email`, `kode_kab`, `kode_wali`) VALUES
('24060120130049', 'Abdul Mustajir', NULL, '2021', 'Komplek Tugu Timur', '087888327118', 'Mustajir@gmail.com', '12', 'E1'),
('24060120130050', 'Salma Nora Renada', NULL, '2020', 'Jalan Kenangan Indah', '0812347892138', 'sumbulnada@gmail.com', '13', 'E1'),
('24060120130053', 'Fathan Muhammad Faqih', 'Untitled (2).png', '2020', 'Komplek Tugu Barat Kenangan', '087888322719', 'fathan@gmail.com', '14', 'E1'),
('24060120130059', 'Fathan Muhammad Rohmat', NULL, '2021', 'Komplek Tugu Barat', '087888327118', 'abdul@gmail.com', '12', 'E1'),
('24060120130152', 'Made Rohmat Subarjo', NULL, '2019', 'Komplek Jayabaya', '081315487465', 'made@gmail.com', '13', 'E1');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pkl`
--

CREATE TABLE `pkl` (
  `idpkl` int(11) NOT NULL,
  `nim` varchar(14) NOT NULL,
  `status` varchar(15) NOT NULL,
  `tanggalmulai` date DEFAULT NULL,
  `nilai` varchar(5) DEFAULT NULL,
  `status_konfirmasi` varchar(20) NOT NULL,
  `upload_pkl` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `pkl`
--

INSERT INTO `pkl` (`idpkl`, `nim`, `status`, `tanggalmulai`, `nilai`, `status_konfirmasi`, `upload_pkl`) VALUES
(1, '24060120130050', 'Belum Lulus', NULL, NULL, '1', ''),
(2, '24060120130059', 'Belum Lulus', NULL, NULL, '1', ''),
(3, '24060120130049', 'Belum Lulus', NULL, NULL, '1', '');

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
  `id_skripsi` int(11) NOT NULL,
  `nim` varchar(14) NOT NULL,
  `status` varchar(15) NOT NULL,
  `tgl_sidang` varchar(10) DEFAULT NULL,
  `lama_studi` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `skripsi`
--

INSERT INTO `skripsi` (`id_skripsi`, `nim`, `status`, `tgl_sidang`, `lama_studi`) VALUES
(1, '24060120130050', 'Belum Lulus', NULL, NULL),
(2, '24060120130152', 'Lulus', NULL, NULL),
(3, '24060120130059', 'Belum Lulus', NULL, NULL),
(4, '24060120130049', 'Lulus', NULL, NULL);

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
('24060120130053', 'Fathan', '2', 'fathan123'),
('24060120130821', 'Dosen', '3', 'dosen123'),
('24060120130892', 'Departemen', '4', 'depart123'),
('24060120136721', 'Admin', '1', 'admin123');

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
  ADD PRIMARY KEY (`idirs`),
  ADD KEY `nim` (`nim`);

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
  ADD PRIMARY KEY (`idkhs`),
  ADD KEY `fk_nim` (`nim`);

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
  ADD PRIMARY KEY (`idpkl`),
  ADD KEY `fk_nim_mhs` (`nim`);

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
  ADD KEY `fk_nim_mhsw` (`nim`);

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
  MODIFY `id_irs` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `khs`
--
ALTER TABLE `khs`
  MODIFY `id_khs` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `pkl`
--
ALTER TABLE `pkl`
  MODIFY `idpkl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `skripsi`
--
ALTER TABLE `skripsi`
  MODIFY `id_skripsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
-- Ketidakleluasaan untuk tabel `khs`
--
ALTER TABLE `khs`
  ADD CONSTRAINT `fk_nim` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);

--
-- Ketidakleluasaan untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD CONSTRAINT `fk_kab` FOREIGN KEY (`kode_kab`) REFERENCES `kabupaten` (`kode_kab`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_prov` FOREIGN KEY (`kode_prov`) REFERENCES `provinsi` (`kode_prov`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `kode_wali` FOREIGN KEY (`kode_wali`) REFERENCES `dosen` (`kode_wali`);

--
-- Ketidakleluasaan untuk tabel `pkl`
--
ALTER TABLE `pkl`
  ADD CONSTRAINT `fk_nim_mhs` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);

--
-- Ketidakleluasaan untuk tabel `skripsi`
--
ALTER TABLE `skripsi`
  ADD CONSTRAINT `fk_nim_mhsw` FOREIGN KEY (`nim`) REFERENCES `mahasiswa` (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
