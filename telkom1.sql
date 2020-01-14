-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 14 Jan 2020 pada 03.16
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
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `agency`
--

INSERT INTO `agency` (`id_agency`, `nama`, `username`, `password`, `akses`) VALUES
(0, 'BELUM ADA AGENCY', 'BELUM ADA AGENCY', 'BELUM ADA AGENCY', 0),
(3, 'Admin Agency 01', 'adminagency01', 'adminagency01', 1),
(4, 'Admin Agency 02', 'adminagency02', 'adminagency02', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pelanggan`
--

CREATE TABLE `data_pelanggan` (
  `id` int(15) NOT NULL,
  `track_id` varchar(15) NOT NULL,
  `nama_pelanggan` varchar(25) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `ktp` varchar(20) NOT NULL,
  `sto` int(11) NOT NULL,
  `second_cp` varchar(25) NOT NULL,
  `paket` varchar(25) NOT NULL,
  `tagging_rill` varchar(25) NOT NULL,
  `odp` varchar(25) NOT NULL,
  `odp_ke_pelanggan` varchar(25) NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `no_sc` varchar(25) NOT NULL,
  `status_validasi` varchar(7) NOT NULL,
  `kategori_progress_psb` varchar(25) NOT NULL,
  `keterangan_progress_psb` varchar(50) NOT NULL,
  `alamat_rill_pelanggan` varchar(50) NOT NULL,
  `cp_rill_pelanggan` varchar(25) NOT NULL,
  `nama_teknisi` varchar(25) NOT NULL,
  `id_partner` int(11) NOT NULL DEFAULT '0',
  `id_spv` int(11) NOT NULL DEFAULT '0',
  `id_agency` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`id`, `track_id`, `nama_pelanggan`, `alamat`, `ktp`, `sto`, `second_cp`, `paket`, `tagging_rill`, `odp`, `odp_ke_pelanggan`, `tgl_input`, `no_sc`, `status_validasi`, `kategori_progress_psb`, `keterangan_progress_psb`, `alamat_rill_pelanggan`, `cp_rill_pelanggan`, `nama_teknisi`, `id_partner`, `id_spv`, `id_agency`) VALUES
(27, '1', 'Bayu', '1', '1', 1, '1', '1', '10', '1', '1', '2020-01-13 12:00:23', '9', '99', 'baik', 'oke', 'Gresik', '02193812', 'Alam', 0, 0, 0),
(28, '2', '2', '2', '2', 2, '2', '2', '5', '2', '2', '2020-01-13 23:36:06', '100', 'OK', 'Kendala', 'Ready', '5', '5', '5', 3, 3, 3),
(29, '3', 'Rista', '3', '3', 3, '3', '3', '8', '3', '3', '2020-01-13 15:34:14', '11', 'OK', '8', '8', '7', '7', '7', 3, 6, 3),
(30, '9', 'Alam', '9', '9', 9, '9', '9', '11', '9', '9', '2020-01-14 00:33:59', '', '', 'a', 'ready', 'Jati', '2', 'Rista', 3, 6, 3),
(31, '9213', 'Dimas', 'Sidoarjo', '23', 0, 'lk', 'lk', 'lk', 'lk', '9', '2020-01-13 23:47:26', '', '', 'W', 'W', 'w', '4', '', 3, 3, 3),
(32, '11', 'a', 'a', '10', 0, 'a', 'a', 'a', 'a', 'a', '2020-01-13 23:39:32', '', '', '', '', '', '', '', 3, 3, 3),
(33, '12a', 'Rista', 'Kahuripan', '123456', 3, '5', '5', '5', '5', '5', '2020-01-13 23:40:51', '', '', '', '', '', '', '', 3, 3, 3);

-- --------------------------------------------------------

--
-- Struktur dari tabel `inputer`
--

CREATE TABLE `inputer` (
  `id_inputer` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '4'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `inputer`
--

INSERT INTO `inputer` (`id_inputer`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'Inputer 01', 'inputer01', 'inputer01', 4),
(2, 'Inputer 02', 'inputer02', 'inputer02', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `kasto`
--

CREATE TABLE `kasto` (
  `id_kasto` int(11) NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '10'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `kasto`
--

INSERT INTO `kasto` (`id_kasto`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'Ka STO 01', 'kasto01', 'kasto01', 10),
(2, 'Ka STO 02', 'kasto02', 'kasto02', 10);

-- --------------------------------------------------------

--
-- Struktur dari tabel `manager`
--

CREATE TABLE `manager` (
  `id_manager` int(11) NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '8'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `manager`
--

INSERT INTO `manager` (`id_manager`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'Manager 01', 'manager01', 'manager01', 8),
(2, 'Manager 02', 'manager02', 'manager02', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `picwitel`
--

CREATE TABLE `picwitel` (
  `id_picwitel` int(11) NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '9'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `picwitel`
--

INSERT INTO `picwitel` (`id_picwitel`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'PIC Witel 01', 'picwitel01', 'picwitel01', 9),
(2, 'PIC Witel 02', 'picwitel02', 'picwitel02', 9);

-- --------------------------------------------------------

--
-- Struktur dari tabel `salesforce`
--

CREATE TABLE `salesforce` (
  `id_salesforce` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '3',
  `id_supervisor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `salesforce`
--

INSERT INTO `salesforce` (`id_salesforce`, `nama`, `username`, `password`, `akses`, `id_supervisor`) VALUES
(0, 'BELUM ADA SF', 'BELUM ADA SF', 'BELUM ADA SF', 0, 0),
(2, 'Sales Force 01', 'sf01', 'sf01', 3, 3),
(3, 'Sales Force 02', 'sf02', 'sf02', 3, 3),
(4, 'Sales Force 03', 'sf03', 'sf03', 3, 6),
(5, 'Sales Force 04', 'sf04', 'sf04', 3, 7);

-- --------------------------------------------------------

--
-- Struktur dari tabel `sto`
--

CREATE TABLE `sto` (
  `id` int(11) NOT NULL,
  `area` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `supervisor`
--

CREATE TABLE `supervisor` (
  `id_supervisor` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '2',
  `id_agency` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `supervisor`
--

INSERT INTO `supervisor` (`id_supervisor`, `nama`, `username`, `password`, `akses`, `id_agency`) VALUES
(0, 'BELUM ADA SPV', 'BELUM ADA SPV', 'BELUM ADA SPV', 0, 0),
(3, 'Supervisor 01', 'spv01', 'spv01', 2, 3),
(6, 'Supervisor 02', 'spv02', 'spv02', 2, 3),
(7, 'Supervisor 03', 'spv03', 'spv03', 2, 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `teknisi`
--

CREATE TABLE `teknisi` (
  `id_teknisi` int(11) NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '5'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `teknisi`
--

INSERT INTO `teknisi` (`id_teknisi`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'Teknisi 01', 'teknisi01', 'teknisi01', 5),
(2, 'Teknisi 02', 'teknisi02', 'teknisi02', 5);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tl`
--

CREATE TABLE `tl` (
  `id_tl` int(11) NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `username` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '6'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tl`
--

INSERT INTO `tl` (`id_tl`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'TL 01', 'tl01', 'tl01', 6),
(2, 'TL 02', 'tl02', 'tl02', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `akses` int(1) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(12, 'picwitel01', 'picwitel01', 9, 'Rista PIC Witel'),
(13, 'kasto01', 'kasto01', 10, 'Rista Ka  STO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `woc`
--

CREATE TABLE `woc` (
  `id_woc` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `akses` int(11) NOT NULL DEFAULT '7'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `woc`
--

INSERT INTO `woc` (`id_woc`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'WOC 01', 'woc01', 'woc01', 7),
(2, 'WOC 02', 'woc02', 'woc02', 7);

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
  MODIFY `id_agency` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `inputer`
--
ALTER TABLE `inputer`
  MODIFY `id_inputer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `kasto`
--
ALTER TABLE `kasto`
  MODIFY `id_kasto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `manager`
--
ALTER TABLE `manager`
  MODIFY `id_manager` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `picwitel`
--
ALTER TABLE `picwitel`
  MODIFY `id_picwitel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id_supervisor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `teknisi`
--
ALTER TABLE `teknisi`
  MODIFY `id_teknisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `tl`
--
ALTER TABLE `tl`
  MODIFY `id_tl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
