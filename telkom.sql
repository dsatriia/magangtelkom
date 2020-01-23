-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jan 2020 pada 18.21
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
  `nama_agency` varchar(50) COLLATE latin7_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `agency`
--

INSERT INTO `agency` (`id_agency`, `nama_agency`) VALUES
(0, 'BELUM ADA AGENCY'),
(1, 'MEGA CREATIVE PROMOSINDO');

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
  `id_sto` int(11) NOT NULL,
  `second_cp` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `id_paket` int(11) NOT NULL DEFAULT '0',
  `tagging_rill` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `odp` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `odp_ke_pelanggan` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_agency` int(11) NOT NULL DEFAULT '0',
  `id_supervisor` int(11) NOT NULL DEFAULT '0',
  `id_salesforce` int(11) NOT NULL DEFAULT '0',
  `no_sc` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `status_validasi` varchar(7) COLLATE latin7_general_cs NOT NULL,
  `kategori_progress_psb` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `keterangan_progress_psb` varchar(50) COLLATE latin7_general_cs NOT NULL,
  `alamat_rill_pelanggan` varchar(50) COLLATE latin7_general_cs NOT NULL,
  `cp_rill_pelanggan` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `nama_teknisi` varchar(25) COLLATE latin7_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`id`, `track_id`, `nama_pelanggan`, `alamat`, `ktp`, `id_sto`, `second_cp`, `id_paket`, `tagging_rill`, `odp`, `odp_ke_pelanggan`, `tgl_input`, `id_agency`, `id_supervisor`, `id_salesforce`, `no_sc`, `status_validasi`, `kategori_progress_psb`, `keterangan_progress_psb`, `alamat_rill_pelanggan`, `cp_rill_pelanggan`, `nama_teknisi`) VALUES
(1, '1231', 'Bayu', 'Sidoarjo', '3515', 2, '09876', 17, '10', 'Sidoarjo', '1', '2020-01-23 10:21:32', 1, 1, 1, '45', 'OK', 'Normal', 'Ready', 'Sidoarjo', '67890', 'Rena'),
(2, '1232', 'Riesta', 'Sidoarjo', '9876', 2, '56789', 13, '5', 'Sidoarjo', '8', '2020-01-23 15:14:32', 1, 2, 2, '98', 'OK', 'Normal', 'Belum Ready', 'Sidoarjo', '3456', 'Putri'),
(3, '1233', 'Dimas', 'Sidoarjo', '23', 1, '45563', 14, '76', 'Sidoarjo', '6', '2020-01-23 10:23:21', 1, 3, 3, '9', 'NOT OK', 'Normal', 'Ready', 'Sidoarjo', '87863', 'Widya'),
(4, '1234', 'Yudi', 'Sidoarjo', '453242', 1, '634532', 14, '6', 'Sidoarjo', '5', '2020-01-23 15:37:26', 1, 4, 4, '98', 'OK', 'Normal', 'Ready', 'Sidoarjo', '53452', 'Al'),
(5, '1235', 'Tris', 'Sidoarjo', '3515567', 1, '0656246234', 30, '10', 'Sidoarjo', '14', '2020-01-23 15:39:27', 1, 1, 5, '98', 'OK', 'Normal', 'Ready', 'Sidoarjo', '02193812545', 'Tya');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_picwitel`
--

CREATE TABLE `detail_picwitel` (
  `id_picwitel` int(11) NOT NULL,
  `username` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL,
  `id_sto` int(11) NOT NULL,
  `nama` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `nik` bigint(15) NOT NULL,
  `email` varchar(45) COLLATE latin7_general_cs NOT NULL,
  `telpon` varchar(15) COLLATE latin7_general_cs NOT NULL,
  `hp` varchar(15) COLLATE latin7_general_cs NOT NULL,
  `regional` varchar(20) COLLATE latin7_general_cs NOT NULL,
  `witel` varchar(20) COLLATE latin7_general_cs NOT NULL DEFAULT 'SIDOARJO',
  `datel` varchar(20) COLLATE latin7_general_cs NOT NULL DEFAULT 'SIDOARJO',
  `tanggal_aktif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `detail_picwitel`
--

INSERT INTO `detail_picwitel` (`id_picwitel`, `username`, `password`, `akses`, `id_sto`, `nama`, `nik`, `email`, `telpon`, `hp`, `regional`, `witel`, `datel`, `tanggal_aktif`) VALUES
(3, 'inputer01', 'inputer01', 4, 1, 'Rista Inputer', 3515765487996661, 'ristain@gmail.com', '08523412314343', '0823453235234', 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 16:36:18'),
(4, 'manager01', 'manager01', 8, 2, 'Rista Manager', 3515765487996662, 'rastim@gmail.com', '05341341233', '08123122134', 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 16:36:18'),
(5, 'picwitel01', 'picwitel01', 9, 1, 'Alam PIC Witel', 4553, 'alamp@gmail.com', '087213121243', '081231221145', 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 16:36:18'),
(6, 'kasto01', 'kasto01', 10, 2, 'Alam Ka STO', 3424324, 'alamamk@gmail.com', '08341414', '012313', 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 16:36:18');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_sales_admin_agency`
--

CREATE TABLE `detail_sales_admin_agency` (
  `id_admin_agency` int(11) NOT NULL,
  `username` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL,
  `id_sto` int(11) NOT NULL,
  `nama` varchar(30) COLLATE latin7_general_cs NOT NULL,
  `email` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `telpon` varchar(15) COLLATE latin7_general_cs NOT NULL,
  `hp` varchar(15) COLLATE latin7_general_cs NOT NULL,
  `id_agency` int(11) NOT NULL,
  `regional` varchar(20) COLLATE latin7_general_cs NOT NULL,
  `witel` varchar(20) COLLATE latin7_general_cs NOT NULL DEFAULT 'SIDOARJO',
  `datel` varchar(20) COLLATE latin7_general_cs NOT NULL DEFAULT 'SIDOARJO',
  `tanggal_aktif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `detail_sales_admin_agency`
--

INSERT INTO `detail_sales_admin_agency` (`id_admin_agency`, `username`, `password`, `akses`, `id_sto`, `nama`, `email`, `telpon`, `hp`, `id_agency`, `regional`, `witel`, `datel`, `tanggal_aktif`) VALUES
(0, 'TIDAK MEMILIKI ADMIN AGENCY', 'TIDAK MEMILIKI ADMIN AGENCY', 1, 2, 'TIDAK MEMILIKI ADMIN AGENCY', 'TIDAK MEMILIKI ADMIN AGENCY', '43232', '342424', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 15:01:07'),
(1, 'adminagency01', 'adminagency01', 1, 1, 'Alam Agency', 'rista@gmail.com', '0852341231', '08234532352', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 14:36:09'),
(2, 'adminagency02', 'adminagency02', 1, 2, 'Admin Agency 02', 'rasti@gmail.com', '05341341', '056765345', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 14:37:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `detail_teknis`
--

CREATE TABLE `detail_teknis` (
  `id_teknis` int(11) NOT NULL,
  `username` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL,
  `id_sto` int(11) NOT NULL,
  `nama` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `email` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `telpon` varchar(15) COLLATE latin7_general_cs NOT NULL,
  `hp` varchar(15) COLLATE latin7_general_cs NOT NULL,
  `regional` varchar(20) COLLATE latin7_general_cs NOT NULL,
  `witel` varchar(20) COLLATE latin7_general_cs NOT NULL DEFAULT 'SIDOARJO',
  `datel` varchar(20) COLLATE latin7_general_cs NOT NULL DEFAULT 'SIDOARJO',
  `tanggal_aktif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `detail_teknis`
--

INSERT INTO `detail_teknis` (`id_teknis`, `username`, `password`, `akses`, `id_sto`, `nama`, `email`, `telpon`, `hp`, `regional`, `witel`, `datel`, `tanggal_aktif`) VALUES
(1, 'teknisi01', 'teknisi01', 5, 1, 'Alam Teknisi', 'rista@gmail.com', '0852341248', '08234532352', 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 14:44:07'),
(2, 'tl01', 'tl01', 6, 2, 'Rista TL', 'rasti@gmail.com', '053413412', '023432434', 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 14:44:07'),
(3, 'woc01', 'woc01', 7, 2, 'Rista WOC', 'rista@gmail.com', '0852341231', '08234532352', 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 14:44:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(15) COLLATE latin7_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(1, 'Admin Agency'),
(2, 'Supervisor'),
(3, 'Sales Force'),
(4, 'Inputer'),
(5, 'Teknisi'),
(6, 'TL'),
(7, 'WOC'),
(8, 'Manager'),
(9, 'PIC Witel'),
(10, 'Ka STO');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `nama_paket` varchar(30) COLLATE latin7_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`) VALUES
(0, 'BELUM ADA PAKET'),
(1, 'PRESTIGE_40_470RB'),
(2, 'PRESTIGE_20_515RB'),
(3, 'PRESTIGE_50_825RB'),
(4, 'PRESTIGE_100_1.250JT'),
(5, 'PRESTIGE_200_1.990JT'),
(6, 'PRESTIGE_300_2.990JT'),
(7, 'FIT_MOVIE_10_360RB'),
(8, 'FIT_MOVIE_20_395RB'),
(9, 'FIT_MOVIE_30_480RB'),
(10, 'FIT_MOVIE_40_560RB'),
(11, 'FIT_MOVIE_50_625RB'),
(12, 'FIT_SPORTS_10_360RB'),
(13, 'FIT_SPORTS_20_395RB'),
(14, 'FIT_SPORTS_30_480RB'),
(15, 'FIT_SPORTS_40_560RB'),
(16, 'FIT_SPORTS_50_625RB'),
(17, 'FIT_DIGITAL_10_360RB'),
(18, 'FIT_DIGITAL_20_395RB'),
(19, 'FIT_DIGITAL_30_480RB'),
(20, 'FIT_DIGITAL_40_560RB'),
(21, 'FIT_DIGITAL_50_625RB'),
(22, 'GAMER_10_380RB'),
(23, 'GAMER_20_480RB'),
(24, 'GAMER_30_680RB'),
(25, 'GAMER_40_780RB'),
(26, 'GAMER_50_NORMAL'),
(27, 'GAMER_100_NORMAL'),
(28, 'STREAMIX_10_320RB'),
(29, 'STREAMIX_20_385RB'),
(30, 'STREAMIX_50_615RB'),
(31, 'STREAMIX_100_975RB'),
(32, 'PHOENIX_10_280RB'),
(33, 'PHOENIX_20_345RB'),
(34, 'PHOENIX_50_575RB'),
(35, 'PHOENIX_100_935RB');

-- --------------------------------------------------------

--
-- Struktur dari tabel `salesforce`
--

CREATE TABLE `salesforce` (
  `id_salesforce` int(11) NOT NULL,
  `id_supervisor` int(11) NOT NULL,
  `username` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL,
  `id_sto` int(11) NOT NULL,
  `nama` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `email` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `telpon` varchar(15) COLLATE latin7_general_cs NOT NULL,
  `hp` varchar(15) COLLATE latin7_general_cs NOT NULL,
  `id_agency` int(11) NOT NULL,
  `regional` varchar(20) COLLATE latin7_general_cs NOT NULL,
  `witel` varchar(20) COLLATE latin7_general_cs NOT NULL DEFAULT 'SIDOARJO',
  `datel` varchar(20) COLLATE latin7_general_cs NOT NULL DEFAULT 'SIDOARJO',
  `tanggal_aktif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `salesforce`
--

INSERT INTO `salesforce` (`id_salesforce`, `id_supervisor`, `username`, `password`, `akses`, `id_sto`, `nama`, `email`, `telpon`, `hp`, `id_agency`, `regional`, `witel`, `datel`, `tanggal_aktif`) VALUES
(1, 1, 'sf01', 'sf01', 3, 1, 'Alam SF', 'rista@gmail.com', '0852341231', '08234532352', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 16:11:34'),
(2, 2, 'sf02', 'sf02', 3, 2, 'Alam SF', 'rasti@gmail.com', '0534134123', '0812312213', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 16:11:35'),
(3, 3, 'sf03', 'sf03', 3, 1, 'Alam SF', 'alam@gmail.com', '0872131212', '0812312211', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 16:11:35'),
(4, 4, 'sf04', 'sf04', 3, 1, 'Alam SF', 'alamam@gmail.com', '086523123', '087234223', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 16:11:35'),
(5, 1, 'sf05', 'sf05', 3, 2, 'Alam SF', 'ristay@gmail.com', '0563634', '0324234', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 15:34:44');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sto`
--

CREATE TABLE `sto` (
  `id_sto` int(11) NOT NULL,
  `area` varchar(20) CHARACTER SET latin1 NOT NULL,
  `alamat` varchar(40) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `sto`
--

INSERT INTO `sto` (`id_sto`, `area`, `alamat`) VALUES
(1, 'Krian', 'Krian no 10'),
(2, 'Jati', 'Jati no 20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `supervisor`
--

CREATE TABLE `supervisor` (
  `id_supervisor` int(11) NOT NULL,
  `id_admin_agency` int(11) NOT NULL,
  `username` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL,
  `id_sto` int(11) NOT NULL,
  `nama` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `email` varchar(40) COLLATE latin7_general_cs NOT NULL,
  `telpon` varchar(15) COLLATE latin7_general_cs NOT NULL,
  `hp` varchar(15) COLLATE latin7_general_cs NOT NULL,
  `id_agency` int(11) NOT NULL,
  `regional` varchar(20) COLLATE latin7_general_cs NOT NULL,
  `witel` varchar(20) COLLATE latin7_general_cs NOT NULL DEFAULT 'SIDOARJO',
  `datel` varchar(20) COLLATE latin7_general_cs NOT NULL DEFAULT 'SIDOARJO',
  `tanggal_aktif` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `supervisor`
--

INSERT INTO `supervisor` (`id_supervisor`, `id_admin_agency`, `username`, `password`, `akses`, `id_sto`, `nama`, `email`, `telpon`, `hp`, `id_agency`, `regional`, `witel`, `datel`, `tanggal_aktif`) VALUES
(1, 1, 'spv01', 'spv01', 2, 1, 'Alam SPV', 'risata@gmail.com', '08523412312', '08234512352', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 14:53:00'),
(2, 2, 'spv02', 'spv02', 2, 2, 'spv02', 'rassti@gmail.com', '05341341231', '01232121221', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 14:53:00'),
(3, 1, 'spv03', 'spv03', 2, 2, 'spv03', 'alam@gmail.com', '0872131212', '0812312211', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 14:53:00'),
(4, 0, 'spv04', 'spv04', 2, 2, 'spv04', 'ristap@gmail.com', '097486756', '0634535', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 15:29:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `akses` int(1) NOT NULL,
  `nama` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `id_sto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `akses`, `nama`, `id_sto`) VALUES
(2, 'kasto02', 'kasto02', 10, 'Rista Ka  STO', 2),
(3, 'adminagency01', 'adminagency01', 1, 'Alam Agency', 2),
(4, 'spv01', 'spv01', 2, 'Alam SPV', 2),
(5, 'sf01', 'sf01', 3, 'Alam SF', 2),
(6, 'inputer01', 'inputer01', 4, 'Alam Inputer', 2),
(7, 'teknisi01', 'teknisi01', 5, 'Alam Teknisi', 2),
(9, 'tl01', 'tl01', 6, 'Rista TL', 2),
(10, 'woc01', 'woc01', 7, 'Rista WOC', 2),
(11, 'manager01', 'manager01', 8, 'Rista Manager', 2),
(12, 'picwitel01', 'picwitel01', 9, 'Rista PIC Witel', 2),
(13, 'kasto01', 'kasto01', 10, 'Rista Ka  STO', 2),
(14, 'adminagency02', 'adminagency02', 1, 'Admin Agency 02', 2),
(15, 'spv02', 'spv02', 2, 'spv02', 2),
(16, 'spv03', 'spv03', 2, 'spv03', 2),
(17, 'spv04', 'spv04', 2, 'spv04', 2),
(18, 'sf02', 'sf02', 3, 'Alam SF', 2),
(19, 'sf03', 'sf03', 3, 'Alam SF', 2),
(20, 'sf04', 'sf04', 3, 'Alam SF', 2),
(21, 'sf05', 'sf05', 3, 'Alam SF', 2),
(22, 'inputer02', 'inputer02', 4, 'Alam Inputer', 2),
(23, 'teknisi02', 'teknisi02', 5, 'Alam Teknisi', 2),
(24, 'tl02', 'tl02', 6, 'Rista TL', 2),
(25, 'woc02', 'woc02', 7, 'Rista WOC', 2),
(26, 'manager02', 'manager02', 8, 'Rista Manager', 2),
(27, 'picwitel02', 'picwitel02', 9, 'Rista PIC Witel', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id_agency`);

--
-- Indeks untuk tabel `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE_track_id` (`track_id`),
  ADD KEY `pelanggan ke sto` (`id_sto`) USING BTREE,
  ADD KEY `pelanggan ke agency` (`id_agency`) USING BTREE,
  ADD KEY `pelanggan ke detail_sales_salesforce` (`id_salesforce`) USING BTREE,
  ADD KEY `pelanggan ke detail_sales_supervisor` (`id_supervisor`) USING BTREE,
  ADD KEY `pelanggan ke paket` (`id_paket`);

--
-- Indeks untuk tabel `detail_picwitel`
--
ALTER TABLE `detail_picwitel`
  ADD PRIMARY KEY (`id_picwitel`),
  ADD KEY `detail_picwitel ke jabatan` (`akses`),
  ADD KEY `detail_picwitel ke sto` (`id_sto`);

--
-- Indeks untuk tabel `detail_sales_admin_agency`
--
ALTER TABLE `detail_sales_admin_agency`
  ADD PRIMARY KEY (`id_admin_agency`),
  ADD KEY `detail_sales_admin_agency ke agency` (`id_agency`),
  ADD KEY `detail_sales_admin_agency akses ke jabatan` (`akses`),
  ADD KEY `detail_sales_admin_agency ke sto` (`id_sto`);

--
-- Indeks untuk tabel `detail_teknis`
--
ALTER TABLE `detail_teknis`
  ADD PRIMARY KEY (`id_teknis`),
  ADD KEY `detail_teknis ke jabatan` (`akses`),
  ADD KEY `detail_teknis ke sto` (`id_sto`);

--
-- Indeks untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  ADD PRIMARY KEY (`id_jabatan`);

--
-- Indeks untuk tabel `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`);

--
-- Indeks untuk tabel `salesforce`
--
ALTER TABLE `salesforce`
  ADD PRIMARY KEY (`id_salesforce`),
  ADD KEY `sf ke spv` (`id_supervisor`),
  ADD KEY `detail_sales_salesforce ke agency` (`id_agency`),
  ADD KEY `detail_sales_salesforce ke jabatan` (`akses`),
  ADD KEY `detail_sales_salesforce ke sto` (`id_sto`);

--
-- Indeks untuk tabel `sto`
--
ALTER TABLE `sto`
  ADD PRIMARY KEY (`id_sto`);

--
-- Indeks untuk tabel `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id_supervisor`),
  ADD KEY `id_agency` (`id_admin_agency`),
  ADD KEY `detail_sales_supervisor ke agency` (`id_agency`),
  ADD KEY `detail_sales_supervisor ke jabatan` (`akses`),
  ADD KEY `detail_sales_supervisor ke sto` (`id_sto`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user akses ke jabatan` (`akses`) USING BTREE,
  ADD KEY `user ke sto` (`id_sto`) USING BTREE;

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
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `detail_picwitel`
--
ALTER TABLE `detail_picwitel`
  MODIFY `id_picwitel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `detail_sales_admin_agency`
--
ALTER TABLE `detail_sales_admin_agency`
  MODIFY `id_admin_agency` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `detail_teknis`
--
ALTER TABLE `detail_teknis`
  MODIFY `id_teknis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `jabatan`
--
ALTER TABLE `jabatan`
  MODIFY `id_jabatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `salesforce`
--
ALTER TABLE `salesforce`
  MODIFY `id_salesforce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT untuk tabel `sto`
--
ALTER TABLE `sto`
  MODIFY `id_sto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id_supervisor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD CONSTRAINT `data_pelanggan_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`),
  ADD CONSTRAINT `data_pelanggan_ibfk_2` FOREIGN KEY (`id_sto`) REFERENCES `sto` (`id_sto`),
  ADD CONSTRAINT `data_pelanggan_ibfk_3` FOREIGN KEY (`id_agency`) REFERENCES `agency` (`id_agency`),
  ADD CONSTRAINT `pelanggan ke sf` FOREIGN KEY (`id_salesforce`) REFERENCES `salesforce` (`id_salesforce`),
  ADD CONSTRAINT `pelanggan ke spv` FOREIGN KEY (`id_supervisor`) REFERENCES `supervisor` (`id_supervisor`);

--
-- Ketidakleluasaan untuk tabel `detail_picwitel`
--
ALTER TABLE `detail_picwitel`
  ADD CONSTRAINT `detail_picwitel_ibfk_1` FOREIGN KEY (`akses`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `detail_picwitel_ibfk_2` FOREIGN KEY (`id_sto`) REFERENCES `sto` (`id_sto`);

--
-- Ketidakleluasaan untuk tabel `detail_sales_admin_agency`
--
ALTER TABLE `detail_sales_admin_agency`
  ADD CONSTRAINT `detail_sales_admin_agency_ibfk_2` FOREIGN KEY (`id_agency`) REFERENCES `agency` (`id_agency`),
  ADD CONSTRAINT `detail_sales_admin_agency_ibfk_3` FOREIGN KEY (`akses`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `detail_sales_admin_agency_ibfk_4` FOREIGN KEY (`id_sto`) REFERENCES `sto` (`id_sto`);

--
-- Ketidakleluasaan untuk tabel `detail_teknis`
--
ALTER TABLE `detail_teknis`
  ADD CONSTRAINT `detail_teknis_ibfk_1` FOREIGN KEY (`akses`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `detail_teknis_ibfk_2` FOREIGN KEY (`id_sto`) REFERENCES `sto` (`id_sto`);

--
-- Ketidakleluasaan untuk tabel `salesforce`
--
ALTER TABLE `salesforce`
  ADD CONSTRAINT `salesforce_ibfk_2` FOREIGN KEY (`id_agency`) REFERENCES `agency` (`id_agency`),
  ADD CONSTRAINT `salesforce_ibfk_3` FOREIGN KEY (`akses`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `salesforce_ibfk_4` FOREIGN KEY (`id_sto`) REFERENCES `sto` (`id_sto`),
  ADD CONSTRAINT `sf ke spv` FOREIGN KEY (`id_supervisor`) REFERENCES `supervisor` (`id_supervisor`);

--
-- Ketidakleluasaan untuk tabel `supervisor`
--
ALTER TABLE `supervisor`
  ADD CONSTRAINT `spv ke agency` FOREIGN KEY (`id_admin_agency`) REFERENCES `detail_sales_admin_agency` (`id_admin_agency`),
  ADD CONSTRAINT `supervisor_ibfk_2` FOREIGN KEY (`id_agency`) REFERENCES `agency` (`id_agency`),
  ADD CONSTRAINT `supervisor_ibfk_3` FOREIGN KEY (`akses`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `supervisor_ibfk_4` FOREIGN KEY (`id_sto`) REFERENCES `sto` (`id_sto`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`akses`) REFERENCES `jabatan` (`id_jabatan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
