-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 21 Jan 2020 pada 07.21
-- Versi server: 10.1.35-MariaDB
-- Versi PHP: 7.1.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `telkom`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `agency`
--

CREATE TABLE `agency` (
  `id_agency` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `agency`
--

INSERT INTO `agency` (`id_agency`, `nama`, `username`, `password`, `akses`) VALUES
(0, 'BELUM ADA AGENCY', 'BELUM ADA AGENCY', 'BELUM ADA AGENCY', 0),
(1, 'Admin Agency 01', 'adminagency01', 'adminagency01', 1),
(2, 'Admin Agency 02', 'adminagency02', 'adminagency02', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pelanggan`
--

CREATE TABLE `data_pelanggan` (
  `id` int(15) NOT NULL,
  `track_id` varchar(15) COLLATE latin7_general_cs NOT NULL,
  `nama_pelanggan` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `alamat` varchar(50) COLLATE latin7_general_cs NOT NULL,
  `ktp` varchar(20) COLLATE latin7_general_cs NOT NULL,
  `sto` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `second_cp` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `paket` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `tagging_rill` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `odp` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `odp_ke_pelanggan` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_sc` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `status_validasi` varchar(7) COLLATE latin7_general_cs NOT NULL,
  `kategori_progress_psb` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `keterangan_progress_psb` varchar(50) COLLATE latin7_general_cs NOT NULL,
  `alamat_rill_pelanggan` varchar(50) COLLATE latin7_general_cs NOT NULL,
  `cp_rill_pelanggan` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `nama_teknisi` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `id_partner` int(11) NOT NULL DEFAULT '0',
  `id_spv` int(11) NOT NULL DEFAULT '0',
  `id_agency` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`id`, `track_id`, `nama_pelanggan`, `alamat`, `ktp`, `sto`, `second_cp`, `paket`, `tagging_rill`, `odp`, `odp_ke_pelanggan`, `tgl_input`, `no_sc`, `status_validasi`, `kategori_progress_psb`, `keterangan_progress_psb`, `alamat_rill_pelanggan`, `cp_rill_pelanggan`, `nama_teknisi`, `id_partner`, `id_spv`, `id_agency`) VALUES
(1, '9001', 'Alam', 'Surabaya', '1234567890123401', 'Sidoarjo', '085456789001', '1', '10', 'Gresik', '20', '2020-01-19 17:04:04', '1', 'OK', 'Normal', 'Ready', 'Gresik', '085756789001', 'Arista', 1, 1, 1),
(2, '9002', 'Rista', 'Gresik', '1234567890123402', 'Surabaya', '085456789002', '2', '20', 'Surabaya', '15', '2020-01-19 17:06:33', '2', 'OK', 'Normal', 'Ready', 'Sidoarjo', '085756789002', 'Alamm', 2, 1, 1),
(3, '9003', 'Dimsa', 'Gresik', '1234567890123403', 'Gresik', '085456789003', '3', '30', 'Gresik', '25', '2020-01-19 17:06:44', '3', 'OK', 'Normal', 'Belum Ready', 'Surabaya', '085756789003', 'Alamm', 3, 2, 1),
(4, '9004', 'Alam AM', 'Sidoarjo', '1234567890123404', 'Gresik', '085456789014', '4', '40', 'Sidoarjo', '15', '2020-01-19 17:04:12', '4', 'NOT OK', 'Normal', 'Ready', 'Driyorejo', '085756789004', 'Arista', 4, 3, 2),
(5, '9005', 'Aprilia', 'Sidoarjo', '1234567890123405', 'Sidoarjo', '085456789005', '5', '50', 'Kahuripan', '5', '2020-01-19 17:06:53', '5', 'NOT OK', 'Normal', 'Belum Ready', 'Kahuripan', '085756789005', 'Alamm', 5, 4, 0),
(6, '9006', 'Alam Dua', 'Gresik', '1234567890123406', 'Surabaya', '085456789006', '6', '60', 'Surabaya', '15', '2020-01-19 17:04:21', '6', 'OK', 'Normal', 'Belum Ready', 'Sidoarjo', '085756789006', 'Arista', 1, 1, 1),
(7, '9007', 'Rista Dua', 'Kahuripan', '1234567890123407', 'Kahuripan', '085456789007', '7', '70', 'Kahuripan', '10', '2020-01-19 17:07:01', '7', 'NOT OK', 'Normal', 'Ready', 'Sidoarjo', '085756789007', 'Alamm', 2, 1, 1),
(8, '9008', 'Dimsa Dua', 'Surabaya', '1234567890123408', 'Surabaya', '085456789008', '8', '80', 'Surabaya', '10', '2020-01-19 17:07:09', '8', 'OK', 'Normal', 'Ready', 'Sidoarjo', '085756789008', 'Alamm', 3, 2, 1),
(9, '9009', 'Alam AM Dua', 'Driyorejo', '1234567890123409', 'Driyorejo', '085456789009', '9', '90', 'Bambe', '9', '2020-01-19 17:04:45', '9', 'OK', 'Normal', 'Belum Ready', 'Sidoarjo', '085756789009', 'Nanda', 4, 3, 2),
(10, '9010', 'Aprilia Dua', 'Sidoarjo', '1234567890123410', 'Surabaya', '085456789010', '10', '100', 'Kahuripan', '15', '2020-01-19 17:03:53', '10', 'NOT OK', 'Normal', 'Belum Ready', 'Sidoarjo', '085756789010', 'Arista', 5, 4, 0),
(11, '9011', 'Aprilia', 'Sidoarjo', '1234567890123411', 'Sidoarjo', '085456789011', '11', '110', 'Sidoarjo', '12', '2020-01-19 17:05:02', '11', 'OK', 'Normal', 'Ready', 'Sidoarjo', '085756789011', 'Nanda', 3, 2, 1),
(12, '9012', 'Putri', 'Sidoarjo', '1234567890123412', 'Sidoarjo', '085456789012', '12', '120', 'Sidoarjo', '15', '2020-01-19 16:59:04', '12', 'OK', 'Normal', 'Ready', 'Sidoarjo', '085756789012', 'Dimas', 1, 1, 1),
(13, '9013', 'Ariesta', 'Sidoarjo', '1234567890123413', 'Sidoarjo', '085456789013', '13', '130', 'Sidoarjo', '16', '2020-01-19 17:05:23', '13', 'OK', 'Normal', 'Ready', 'Sidoarjo', '085756789013', 'Nanda', 2, 1, 1),
(14, '9014', 'Al', 'Sidoarjo', '1234567890123414', 'Sidoarjo', '085456789014', '14', '140', 'Sidoarjo', '14', '2020-01-19 17:00:21', '14', 'OK', 'Normal', 'Ready', 'Sidoarjo', '085756789010', 'Maliga', 2, 1, 1),
(15, '9015', 'Mabruk', 'Sidoarjo', '1234567890123415', 'Sidoarjo', '085456789015', '15', '150', 'Sidoarjo', '15', '2020-01-19 17:01:01', '15', 'OK', 'Normal', 'Ready', 'Sidoarjo', '085756789015', 'Rahma', 4, 3, 2),
(16, '9016', 'Dimas', 'Sidoarjo', '1234567890123416', 'Sidoarjo', '085456789016', '16', '160', 'Sidoarjo', '16', '2020-01-19 17:01:22', '16', 'OK', 'Normal', 'Ready', 'Sidoarjo', '085756789016', 'Maliga', 4, 3, 2),
(17, '9017', 'Satria', 'Sidoarjo', '1234567890123417', 'Sidoarjo', '085456789017', '17', '170', 'Sidoarjo', '17', '2020-01-19 17:05:39', '17', 'OK', 'Normal', 'Ready', 'Sidoarjo', '085756789017', 'Nanda', 4, 3, 2),
(18, '9018', 'Bintang', 'Sidoarjo', '1234567890123418', 'Sidoarjo', '085456789018', '18', '180', 'Sidoarjo', '18', '2020-01-19 17:07:23', '18', 'OK', 'Normal', 'Ready', 'Sidoarjo', '085756789018', 'Alamm', 4, 3, 2),
(19, '9019', 'Prakasa', 'Sidoarjo', '1234567890123419', 'Sidoarjo', '085456789019', '19', '190', 'Sidoarjo', '19', '2020-01-19 17:02:36', '19', 'NOT OK', 'Normal', 'Belum Ready', 'Sidoarjo', '085756789019', 'Dimas', 5, 4, 0),
(20, '9020', 'Yola', 'Sidoarjo', '1234567890123420', 'Sidoarjo', '085456789020', '20', '200', 'Sidoarjo', '20', '2020-01-19 17:03:05', '20', 'OK', 'Normal', 'Ready', 'Sidoarjo', '085756789020', 'Maliga', 5, 4, 0),
(21, '9021', 'Yolanda', 'Sidoarjo', '1234567890123421', 'Sidoarjo', '085456789021', '21', '210', 'Sidoarjo', '21', '2020-01-19 17:03:36', '21', 'OK', 'Normal', 'Ready', 'Sidoarjo', '085756789021', 'Okta', 5, 4, 0),
(22, '9022', 'Rangga', 'Sidoarjo', '1234567890123422', 'Sidoarjo', '08545678902', '22', '220', 'Sidoarjo', '22', '2020-01-21 02:23:52', '', '', '', '', '', '', '', 1, 1, 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `inputer`
--

CREATE TABLE `inputer` (
  `id_inputer` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '4'
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `inputer`
--

INSERT INTO `inputer` (`id_inputer`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'Inputer 01', 'inputer01', 'inputer01', 4),
(2, 'Inputer 02', 'inputer02', 'inputer02', 4),
(13, 'Inputer 03', 'inputer03', 'inputer03', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasto`
--

CREATE TABLE `kasto` (
  `id_kasto` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `kasto`
--

INSERT INTO `kasto` (`id_kasto`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'Ka STO 01', 'kasto01', 'kasto01', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `manager`
--

CREATE TABLE `manager` (
  `id_manager` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '8'
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `manager`
--

INSERT INTO `manager` (`id_manager`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'Manager 01', 'manager01', 'manager01', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `picwitel`
--

CREATE TABLE `picwitel` (
  `id_picwitel` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '9'
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `picwitel`
--

INSERT INTO `picwitel` (`id_picwitel`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'PIC Witel 01', 'picwitel01', 'picwitel01', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `salesforce`
--

CREATE TABLE `salesforce` (
  `id_salesforce` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '3',
  `id_supervisor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `salesforce`
--

INSERT INTO `salesforce` (`id_salesforce`, `nama`, `username`, `password`, `akses`, `id_supervisor`) VALUES
(0, 'BELUM ADA SF', 'BELUM ADA SF', 'BELUM ADA SF', 0, 0),
(1, 'Sales Force 01', 'sf01', 'sf01', 3, 1),
(2, 'Sales Force 02', 'sf02', 'sf02', 3, 1),
(3, 'Sales Force 03', 'sf03', 'sf03', 3, 2),
(4, 'Sales Force 04', 'sf04', 'sf04', 3, 3),
(5, 'Sales Force 05', 'sf05', 'sf05', 3, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sto`
--

CREATE TABLE `sto` (
  `id` int(11) NOT NULL,
  `area` varchar(15) COLLATE latin7_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supervisor`
--

CREATE TABLE `supervisor` (
  `id_supervisor` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '2',
  `id_agency` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `supervisor`
--

INSERT INTO `supervisor` (`id_supervisor`, `nama`, `username`, `password`, `akses`, `id_agency`) VALUES
(0, 'BELUM ADA SPV', 'BELUM ADA SPV', 'BELUM ADA SPV', 0, 0),
(1, 'Supervisor 01', 'spv01', 'spv01', 2, 1),
(2, 'Supervisor 02', 'spv02', 'spv02', 2, 1),
(3, 'Supervisor 03', 'spv03', 'spv03', 2, 2),
(4, 'Supervisor 04', 'spv04', 'spv04', 2, 0);

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknisi`
--

CREATE TABLE `teknisi` (
  `id_teknisi` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `teknisi`
--

INSERT INTO `teknisi` (`id_teknisi`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'Teknisi 01', 'teknisi01', 'teknisi01', 5),
(2, 'Teknisi 02', 'teknisi02', 'teknisi02', 5),
(4, 'Teknisi 03', 'teknisi03', 'teknisi03', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tl`
--

CREATE TABLE `tl` (
  `id_tl` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '6'
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `tl`
--

INSERT INTO `tl` (`id_tl`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'TL 01', 'tl01', 'tl01', 6),
(2, 'TL 02', 'tl02', 'tl02', 6),
(3, 'TL 03', 'tl03', 'tl03', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `akses` int(1) NOT NULL,
  `nama` varchar(25) COLLATE latin7_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `akses`, `nama`) VALUES
(3, 'adminagency01', 'adminagency01', 1, 'Alam Agency'),
(4, 'spv01', 'spv01', 2, 'Alam SPV'),
(5, 'sf01', 'sf01', 3, 'Alam SF'),
(6, 'inputer01', 'inputer01', 4, 'Alam Inputer'),
(7, 'teknisi01', 'teknisi01', 5, 'Alam Teknisi'),
(9, 'tl01', 'tl01', 6, 'Rista TL'),
(10, 'woc01', 'woc01', 7, 'Rista WOC'),
(11, 'manager01', 'manager01', 8, 'Rista Manager'),
(12, 'picwitel01', 'picwitel01', 9, 'Rista PIC Witel');

-- --------------------------------------------------------

--
-- Struktur dari tabel `woc`
--

CREATE TABLE `woc` (
  `id_woc` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '7'
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `woc`
--

INSERT INTO `woc` (`id_woc`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'WOC 01', 'woc01', 'woc01', 7),
(2, 'WOC 02', 'woc02', 'woc02', 7),
(3, 'WOC 03', 'woc03', 'woc03', 7);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id_agency`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE_track_id` (`track_id`),
  ADD KEY `pelanggan ke spv` (`id_spv`),
  ADD KEY `pelanggan ke agency` (`id_agency`),
  ADD KEY `pelanggan ke sf` (`id_partner`);

--
-- Indeks untuk tabel `inputer`
--
ALTER TABLE `inputer`
  ADD PRIMARY KEY (`id_inputer`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `kasto`
--
ALTER TABLE `kasto`
  ADD PRIMARY KEY (`id_kasto`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id_manager`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `picwitel`
--
ALTER TABLE `picwitel`
  ADD PRIMARY KEY (`id_picwitel`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `salesforce`
--
ALTER TABLE `salesforce`
  ADD PRIMARY KEY (`id_salesforce`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `sf ke spv` (`id_supervisor`);

--
-- Indeks untuk tabel `sto`
--
ALTER TABLE `sto`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id_supervisor`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `spv ke agency` (`id_agency`);

--
-- Indeks untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indeks untuk tabel `tl`
--
ALTER TABLE `tl`
  ADD PRIMARY KEY (`id_tl`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `woc`
--
ALTER TABLE `woc`
  ADD PRIMARY KEY (`id_woc`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `agency`
--
ALTER TABLE `agency`
  MODIFY `id_agency` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `inputer`
--
ALTER TABLE `inputer`
  MODIFY `id_inputer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT untuk tabel `kasto`
--
ALTER TABLE `kasto`
  MODIFY `id_kasto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `manager`
--
ALTER TABLE `manager`
  MODIFY `id_manager` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `picwitel`
--
ALTER TABLE `picwitel`
  MODIFY `id_picwitel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `salesforce`
--
ALTER TABLE `salesforce`
  MODIFY `id_salesforce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sto`
--
ALTER TABLE `sto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id_supervisor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  MODIFY `id_teknisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `tl`
--
ALTER TABLE `tl`
  MODIFY `id_tl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `woc`
--
ALTER TABLE `woc`
  MODIFY `id_woc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD CONSTRAINT `pelanggan ke agency` FOREIGN KEY (`id_agency`) REFERENCES `agency` (`id_agency`),
  ADD CONSTRAINT `pelanggan ke sf` FOREIGN KEY (`id_partner`) REFERENCES `salesforce` (`id_salesforce`),
  ADD CONSTRAINT `pelanggan ke spv` FOREIGN KEY (`id_spv`) REFERENCES `supervisor` (`id_supervisor`);

--
-- Ketidakleluasaan untuk tabel `salesforce`
--
ALTER TABLE `salesforce`
  ADD CONSTRAINT `sf ke spv` FOREIGN KEY (`id_supervisor`) REFERENCES `supervisor` (`id_supervisor`);

--
-- Ketidakleluasaan untuk tabel `supervisor`
--
ALTER TABLE `supervisor`
  ADD CONSTRAINT `spv ke agency` FOREIGN KEY (`id_agency`) REFERENCES `agency` (`id_agency`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
