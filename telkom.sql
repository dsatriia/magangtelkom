-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 01 Feb 2020 pada 20.47
-- Versi server: 10.4.11-MariaDB
-- Versi PHP: 7.4.1

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
-- Struktur dari tabel `admin_agency`
--

CREATE TABLE `admin_agency` (
  `id_admin_agency` int(11) NOT NULL,
  `username` varchar(40) CHARACTER SET latin7 COLLATE latin7_general_cs NOT NULL,
  `password` varchar(40) CHARACTER SET latin7 COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL,
  `id_sto` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(40) NOT NULL,
  `telpon` varchar(15) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `id_agency` int(11) NOT NULL,
  `regional` varchar(20) NOT NULL,
  `witel` varchar(20) NOT NULL DEFAULT 'SIDOARJO',
  `datel` varchar(20) NOT NULL DEFAULT 'SIDOARJO',
  `tanggal_aktif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin7;

--
-- Dumping data untuk tabel `admin_agency`
--

INSERT INTO `admin_agency` (`id_admin_agency`, `username`, `password`, `akses`, `id_sto`, `nama`, `email`, `telpon`, `hp`, `id_agency`, `regional`, `witel`, `datel`, `tanggal_aktif`) VALUES
(0, 'TIDAK ADA', 'TIDAK ADA', 0, 0, 'TIDAK ADA', '-', '-', '-', 0, '-', '-', '-', '2020-02-01 06:44:08'),
(1, 'adminagency01', 'adminagency01', 1, 1, 'Admin Agency 1', 'admin@gmail.comasd', '085372874680', '085372874681', 1, 'Divre 59', 'Sidoarjo', 'Sidoarjo', '2020-02-01 05:14:09'),
(2, 'adminagency02', 'adminagency02', 1, 1, 'Admin Agency 2', 'admin@gmail.comasd', '085372874680', '085372874681', 1, 'Divre 5', 'Sidoarjo', 'Sidoarjo', '2020-02-01 05:14:24'),
(50, 'adminagency99', 'adminagency99', 1, 1, 'Admin Agency 99', 'alamal@gmail.com', '934243', '2343249', 1, 'Divre 5', 'Sidoarjo', 'Sidoarjo', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `agency`
--

CREATE TABLE `agency` (
  `id_agency` int(11) NOT NULL,
  `nama_agency` varchar(50) CHARACTER SET latin7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `agency`
--

INSERT INTO `agency` (`id_agency`, `nama_agency`) VALUES
(0, 'TIDAK ADA'),
(1, 'MEGA CREATIVE PROMOSINDO'),
(2, 'A'),
(3, 'B'),
(4, 'C'),
(5, 'D'),
(6, 'E'),
(7, 'F'),
(8, 'G'),
(9, 'H'),
(10, 'I'),
(11, 'J'),
(12, 'K'),
(13, 'L'),
(14, 'M'),
(15, 'N'),
(16, 'O');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_pelanggan`
--

CREATE TABLE `data_pelanggan` (
  `id` int(15) NOT NULL,
  `track_id` varchar(15) COLLATE latin7_general_cs NOT NULL,
  `nama_pelanggan` varchar(25) CHARACTER SET latin7 NOT NULL,
  `alamat` varchar(50) CHARACTER SET latin7 NOT NULL,
  `ktp` varchar(20) CHARACTER SET latin7 NOT NULL,
  `id_sto` int(11) NOT NULL,
  `second_cp` varchar(25) CHARACTER SET latin7 NOT NULL,
  `id_paket` int(11) NOT NULL DEFAULT 0,
  `tagging_rill` varchar(25) CHARACTER SET latin7 NOT NULL,
  `odp` varchar(25) CHARACTER SET latin7 NOT NULL,
  `odp_ke_pelanggan` varchar(25) CHARACTER SET latin7 NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `id_agency` int(11) NOT NULL DEFAULT 0,
  `id_admin_agency` int(11) NOT NULL,
  `id_supervisor` int(11) NOT NULL DEFAULT 0,
  `id_salesforce` int(11) NOT NULL DEFAULT 0,
  `no_sc` varchar(25) CHARACTER SET latin7 NOT NULL,
  `status_validasi` varchar(7) CHARACTER SET latin7 NOT NULL,
  `kategori_progress_psb` varchar(25) CHARACTER SET latin7 NOT NULL,
  `keterangan_progress_psb` varchar(50) CHARACTER SET latin7 NOT NULL,
  `alamat_rill_pelanggan` varchar(50) CHARACTER SET latin7 NOT NULL,
  `cp_rill_pelanggan` varchar(25) CHARACTER SET latin7 NOT NULL,
  `nama_teknisi` varchar(25) CHARACTER SET latin7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`id`, `track_id`, `nama_pelanggan`, `alamat`, `ktp`, `id_sto`, `second_cp`, `id_paket`, `tagging_rill`, `odp`, `odp_ke_pelanggan`, `tgl_input`, `id_agency`, `id_admin_agency`, `id_supervisor`, `id_salesforce`, `no_sc`, `status_validasi`, `kategori_progress_psb`, `keterangan_progress_psb`, `alamat_rill_pelanggan`, `cp_rill_pelanggan`, `nama_teknisi`) VALUES
(1, '1231', 'Rama Uhui', 'Sidoarjo', '3515', 2, '09876', 4, '10', 'Sidoarjo', '1', '2020-01-28 06:22:18', 1, 1, 1, 1, '45', 'OK', 'Normal', 'Belum Ready', 'Kahuripan', '67890', 'Rena'),
(2, '1232', 'Riesti', 'Sidoarjo', '9876', 2, '56789', 13, '5', 'Sidoarjo', '8', '2020-02-01 06:14:58', 1, 2, 2, 2, '98', 'OK', 'Normal', 'Belum Ready', 'Sidoarjo', '3456', 'Putri'),
(3, '1233', 'Dimasss', 'Sidoarjo', '23', 1, '45563', 14, '76', 'Sidoarjo', '6', '2020-01-28 06:18:47', 1, 1, 3, 3, '9', 'NOT OK', 'Normal', 'Ready', 'Sidoarjo', '87863', 'Widya'),
(4, '1234', 'Yudi', 'Sidoarjo', '453242', 1, '634532', 14, '6', 'Sidoarjo', '5', '2020-01-23 15:37:26', 1, 0, 4, 4, '98', 'OK', 'Normal', 'Ready', 'Sidoarjo', '53452', 'Al'),
(6, '1236', 'Dimsa', 'Sidoarjo', '35151123121', 1, '08656246234', 28, '10', 'Sidoarjo', '10', '2020-02-01 06:13:00', 1, 1, 3, 4, '9', 'OK', 'Normal', 'Ready', 'Sidoarjo', '0821938121', 'Alam'),
(7, '1237', 'Tari', 'Sidoarjo', '3518940580345', 1, '0894923434', 12, '5', 'Sidoarjo', '5', '2020-02-01 09:54:04', 1, 1, 1, 5, '100', 'OK', '', '', '', '', ''),
(224, '5352', 'Yudia', 'Sidoarjo', '6864', 1, '634532', 14, 'ttt', 'Sidoatjo', 'sdsadsaf', '0000-00-00 00:00:00', 1, 1, 3, 3, '98', 'ok', 'Normal', 'Ready', 'Sidoarjo', '53452', 'Al'),
(225, '68654', 'Yudia', 'Sidoarjo', '684', 1, '634532', 14, 'ttt', 'Sidoatjo', 'sdsadsaf', '0000-00-00 00:00:00', 1, 1, 3, 3, '98', 'ok', 'Normal', 'Ready', 'Sidoarjo', '53452', 'Al'),
(226, '6876', 'Yudia', 'Sidoarjo', '45634', 1, '634532', 14, 'ttt', 'Sidoatjo', 'sdsadsaf', '0000-00-00 00:00:00', 1, 1, 3, 3, '98', 'ok', 'Normal', 'Ready', 'Sidoarjo', '53452', 'Al'),
(227, '3534436', 'Yudia', 'Sidoarjo', '80', 1, '634532', 14, 'ttt', 'Sidoatjo', 'sdsadsaf', '0000-00-00 00:00:00', 1, 1, 3, 3, '98', 'ok', 'Normal', 'Ready', 'Sidoarjo', '53452', 'Al'),
(228, '346346', 'Yudia', 'Sidoarjo', '23423423', 1, '634532', 14, 'ttt', 'Sidoatjo', 'sdsadsaf', '0000-00-00 00:00:00', 1, 1, 3, 3, '98', 'ok', 'Normal', 'Ready', 'Sidoarjo', '53452', 'Al'),
(229, '3463499', 'Alam Import', 'Sidoarjo', '23423413', 1, '634532', 14, 'ttt', 'Sidoatjo', 'sdsadsaf', '0000-00-00 00:00:00', 1, 1, 3, 3, '98', 'ok', 'Normal', 'Ready', 'Sidoarjo', '53452', 'Al'),
(230, '3463459', 'Alam Impor', 'Sidoarjo', '233413', 1, '634532', 14, 'ttt', 'Sidoatjo', 'sdsadsaf', '0000-00-00 00:00:00', 1, 1, 3, 3, '98', 'ok', 'Normal', 'Ready', 'Sidoarjo', '53452', 'Al'),
(231, '34634519', 'Alam Importt', 'Sidoarjo', '2334113', 1, '634532', 14, 'ttt', 'Sidoatjo', 'sdsadsaf', '0000-00-00 00:00:00', 1, 1, 3, 3, '98', 'ok', 'Normal', 'Ready', 'Sidoarjo', '53452', 'Al'),
(232, '34134519', 'Alam Importty', 'Sidoarjo', '2234113', 1, '634532', 14, 'ttt', 'Sidoatjo', 'sdsadsaf', '0000-00-00 00:00:00', 1, 1, 3, 3, '98', 'ok', 'Normal', 'Ready', 'Sidoarjo', '53452', 'Al'),
(233, '34134518', 'Alam Importtx', 'Sidoarjo', '2234112', 1, '634532', 14, 'ttt', 'Sidoatjo', 'sdsadsaf', '0000-00-00 00:00:00', 1, 1, 3, 3, '98', 'ok', 'Normal', 'Ready', 'Sidoarjo', '53452', 'Al');

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
  `nama` varchar(40) CHARACTER SET latin7 NOT NULL,
  `nik` bigint(15) NOT NULL,
  `email` varchar(45) CHARACTER SET latin7 NOT NULL,
  `telpon` varchar(15) CHARACTER SET latin7 NOT NULL,
  `hp` varchar(15) CHARACTER SET latin7 NOT NULL,
  `regional` varchar(20) CHARACTER SET latin7 NOT NULL,
  `witel` varchar(20) CHARACTER SET latin7 NOT NULL DEFAULT 'SIDOARJO',
  `datel` varchar(20) CHARACTER SET latin7 NOT NULL DEFAULT 'SIDOARJO',
  `tanggal_aktif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `detail_picwitel`
--

INSERT INTO `detail_picwitel` (`id_picwitel`, `username`, `password`, `akses`, `id_sto`, `nama`, `nik`, `email`, `telpon`, `hp`, `regional`, `witel`, `datel`, `tanggal_aktif`) VALUES
(3, 'inputer01', 'inputer01', 4, 1, 'Rista Inputer', 3515765487996661, 'ristain@gmail.com', '08523412314343', '0823453235234', 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 16:36:18'),
(4, 'manager01', 'manager01', 8, 2, 'Rista Manager', 3515765487996662, 'rastim@gmail.com', '05341341233', '08123122134', 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 16:36:18'),
(5, 'picwitel01', 'picwitel01', 9, 1, 'Alam PIC Witel', 4553, 'alamp@gmail.com', '087213121243', '081231221145', 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 16:36:18'),
(6, 'kasto01', 'kasto01', 10, 2, 'Alam Ka STO', 3424324, 'alamamk@gmail.com', '08341414', '012313', 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 16:36:18'),
(7, 'inputer02', 'inputer02', 4, 1, 'Alam', 8324832, 'alam@gmail.com', '032489324', '032483244', 'Divre 8', 'SIDOARJO', 'SIDOARJO', '2020-02-01 13:33:47'),
(8, 'manager99', 'manager99', 8, 1, 'manager99', 3843223, 'alamal@gmail.com', '9324234', '3242342', 'Divre 5', 'Sidoarjo', 'Sidoarjo', '0000-00-00 00:00:00');

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
  `nama` varchar(40) CHARACTER SET latin7 NOT NULL,
  `email` varchar(40) CHARACTER SET latin7 NOT NULL,
  `telpon` varchar(15) CHARACTER SET latin7 NOT NULL,
  `hp` varchar(15) CHARACTER SET latin7 NOT NULL,
  `regional` varchar(20) CHARACTER SET latin7 NOT NULL,
  `witel` varchar(20) CHARACTER SET latin7 NOT NULL DEFAULT 'SIDOARJO',
  `datel` varchar(20) CHARACTER SET latin7 NOT NULL DEFAULT 'SIDOARJO',
  `tanggal_aktif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `detail_teknis`
--

INSERT INTO `detail_teknis` (`id_teknis`, `username`, `password`, `akses`, `id_sto`, `nama`, `email`, `telpon`, `hp`, `regional`, `witel`, `datel`, `tanggal_aktif`) VALUES
(1, 'teknisi01', 'teknisi01', 5, 1, 'Alam Teknisi', 'rista@gmail.com', '0852341248', '08234532352', 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 14:44:07'),
(2, 'tl01', 'tl01', 6, 2, 'Rista TL', 'rasti@gmail.com', '053413412', '023432434', 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 14:44:07'),
(3, 'woc01', 'woc01', 7, 2, 'Rista WOC', 'rista@gmail.com', '0852341231', '08234532352', 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 14:44:07'),
(5, 'teknisi99', 'teknisi99', 5, 1, 'teknisi99', 'alamal@gmail.com', '23432', '3243242', 'Divre 5', 'Sidoarjo', 'Sidoarjo', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jabatan`
--

CREATE TABLE `jabatan` (
  `id_jabatan` int(11) NOT NULL,
  `nama_jabatan` varchar(15) CHARACTER SET latin7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `jabatan`
--

INSERT INTO `jabatan` (`id_jabatan`, `nama_jabatan`) VALUES
(0, 'TIDAK ADA'),
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
  `nama_paket` varchar(30) CHARACTER SET latin7 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `paket`
--

INSERT INTO `paket` (`id_paket`, `nama_paket`) VALUES
(0, 'TIDAK ADA'),
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
  `nama` varchar(40) CHARACTER SET latin7 NOT NULL,
  `email` varchar(40) CHARACTER SET latin7 NOT NULL,
  `telpon` varchar(15) CHARACTER SET latin7 NOT NULL,
  `hp` varchar(15) CHARACTER SET latin7 NOT NULL,
  `id_agency` int(11) NOT NULL,
  `regional` varchar(20) CHARACTER SET latin7 NOT NULL,
  `witel` varchar(20) CHARACTER SET latin7 NOT NULL DEFAULT 'SIDOARJO',
  `datel` varchar(20) CHARACTER SET latin7 NOT NULL DEFAULT 'SIDOARJO',
  `tanggal_aktif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `salesforce`
--

INSERT INTO `salesforce` (`id_salesforce`, `id_supervisor`, `username`, `password`, `akses`, `id_sto`, `nama`, `email`, `telpon`, `hp`, `id_agency`, `regional`, `witel`, `datel`, `tanggal_aktif`) VALUES
(1, 1, 'sf01', 'sf01', 3, 1, 'Alam SF1', 'rista@gmail.com', '0852341231', '08234532352', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-02-01 08:02:31'),
(2, 2, 'sf02', 'sf02', 3, 2, 'Alam SF2', 'rasti@gmail.com', '0534134123', '0812312213', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-02-01 08:02:31'),
(3, 3, 'sf03', 'sf03', 3, 1, 'Alam SF3', 'alam@gmail.com', '0872131212', '0812312211', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-02-01 08:02:31'),
(4, 4, 'sf04', 'sf04', 3, 1, 'Alam SF4', 'alamam@gmail.com', '086523123', '087234223', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-24 06:08:58'),
(5, 1, 'sf05', 'sf05', 3, 2, 'Alam SF5', 'ristay@gmail.com', '0563634', '0324234', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-02-01 08:02:31'),
(8, 3, 'sf06', 'sf06', 3, 1, 'Salesforce 06', 'alamalma@gmail.com', '073483243', '023847322', 1, 'Divre 6', 'SDA', 'SDA', '2020-02-01 13:39:09');

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
(0, 'TIDAK ADA', 'TIDAK ADA'),
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
  `nama` varchar(40) CHARACTER SET latin7 NOT NULL,
  `email` varchar(40) CHARACTER SET latin7 NOT NULL,
  `telpon` varchar(15) CHARACTER SET latin7 NOT NULL,
  `hp` varchar(15) CHARACTER SET latin7 NOT NULL,
  `id_agency` int(11) NOT NULL,
  `regional` varchar(20) CHARACTER SET latin7 NOT NULL,
  `witel` varchar(20) CHARACTER SET latin7 NOT NULL DEFAULT 'SIDOARJO',
  `datel` varchar(20) CHARACTER SET latin7 NOT NULL DEFAULT 'SIDOARJO',
  `tanggal_aktif` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `supervisor`
--

INSERT INTO `supervisor` (`id_supervisor`, `id_admin_agency`, `username`, `password`, `akses`, `id_sto`, `nama`, `email`, `telpon`, `hp`, `id_agency`, `regional`, `witel`, `datel`, `tanggal_aktif`) VALUES
(1, 1, 'spv01', 'spv01', 2, 1, 'Alam SPV', 'risata@gmail.com', '08523412312', '08234512352', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 14:53:00'),
(2, 2, 'spv02', 'spv02', 2, 2, 'spv02', 'rassti@gmail.com', '05341341231', '01232121221', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 14:53:00'),
(3, 1, 'spv03', 'spv03', 2, 2, 'spv03', 'alam@gmail.com', '0872131212', '0812312211', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 14:53:00'),
(4, 0, 'spv04', 'spv04', 2, 2, 'spv04', 'ristap@gmail.com', '097486756', '0634535', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 15:29:28'),
(10, 1, 'spv05', 'spv05', 2, 1, 'Supervisor 05', 'alam@gmail.com', '02348324', '02343242', 1, 'Divre 9', 'Sda', 'Sda', '2020-02-01 13:15:15'),
(12, 1, 'supervisor99', 'supervisor99', 2, 1, 'supervisor99', 'alamal@gmail.com', '934243', '2343249', 1, 'Divre 5', 'Sidoarjo', 'Sidoarjo', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `akses` int(1) NOT NULL,
  `nama` varchar(25) CHARACTER SET latin7 NOT NULL,
  `id_sto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `akses`, `nama`, `id_sto`) VALUES
(3, 'adminagency01', 'adminagency011', 1, 'Admin Agency 29', 1),
(4, 'spv01', 'spv01', 2, 'Alam SPV', 2),
(9, 'tl01', 'tl01', 6, 'Rista TL', 2),
(10, 'woc01', 'woc01', 7, 'Rista WOC', 2),
(11, 'manager01', 'manager01', 8, 'Rista Manager', 2),
(12, 'picwitel01', 'picwitel01', 9, 'Rista PIC Witel', 2),
(13, 'kasto01', 'kasto01', 10, 'Rista Ka  STO', 2),
(15, 'spv02', 'spv02', 2, 'spv02', 2),
(16, 'spv03', 'spv03', 2, 'spv03', 2),
(17, 'spv04', 'spv04', 2, 'spv04', 2),
(18, 'sf02', 'sf02', 3, 'Alam SF', 2),
(19, 'sf03', 'sf03', 3, 'Alam SF', 2),
(20, 'sf04', 'sf04', 3, 'Alam SF', 2),
(21, 'sf05', 'sf05', 3, 'Alam SF', 2),
(22, 'inputer01', 'inputer01', 4, 'Inputer 1', 2),
(23, 'teknisi01', 'teknisi01', 5, 'Alam Teknisi', 2),
(24, 'tl02', 'tl02', 6, 'Rista TL', 2),
(27, 'adminagency02', 'adminagency02', 1, 'Admin Agency 2', 1),
(29, 'sf01', 'sf01', 3, 'Salesforce 1', 1),
(80, 'w', 'w', 3, 'w', 1),
(82, 'spv05', 'spv05', 2, 'Supervisor 05', 1),
(84, 'inputer02', 'inputer02', 1, 'Alam', 2),
(85, 'sf06', 'sf06', 3, 'Salesforce 06', 1),
(86, 'adminagency99', 'adminagency99', 1, 'Admin Agency 99', 1),
(87, 'supervisor99', 'supervisor99', 2, 'supervisor99', 1),
(88, 'teknisi99', 'teknisi99', 5, 'teknisi99', 1),
(89, 'manager99', 'manager99', 8, 'manager99', 1),
(90, 'salesforce50', 'salesforce50', 3, 'salesforce50', 1),
(91, 'salesforce51', 'salesforce51', 3, 'salesforce51', 1),
(92, 'salesforce52', 'salesforce52', 3, 'salesforce52', 1),
(93, 'salesforce53', 'salesforce53', 3, 'salesforce53', 1),
(94, 'salesforce54', 'salesforce54', 3, 'salesforce54', 1),
(95, 'salesforce50', 'salesforce50', 3, 'salesforce50', 1),
(96, 'salesforce51', 'salesforce51', 3, 'salesforce51', 1),
(97, 'salesforce52', 'salesforce52', 3, 'salesforce52', 1),
(98, 'salesforce53', 'salesforce53', 3, 'salesforce53', 1),
(99, 'salesforce54', 'salesforce54', 3, 'salesforce54', 1),
(100, 'salesforce50', 'salesforce50', 3, 'salesforce50', 1),
(101, 'salesforce51', 'salesforce51', 3, 'salesforce51', 1),
(102, 'salesforce52', 'salesforce52', 3, 'salesforce52', 1),
(103, 'salesforce53', 'salesforce53', 3, 'salesforce53', 1),
(104, 'salesforce54', 'salesforce54', 3, 'salesforce54', 1),
(105, 'salesforce50', 'salesforce50', 3, 'salesforce50', 1),
(106, 'salesforce51', 'salesforce51', 3, 'salesforce51', 1),
(107, 'salesforce52', 'salesforce52', 3, 'salesforce52', 1),
(108, 'salesforce53', 'salesforce53', 3, 'salesforce53', 1),
(109, 'salesforce54', 'salesforce54', 3, 'salesforce54', 1),
(110, 'salesforce50', 'salesforce50', 3, 'salesforce50', 1),
(111, 'salesforce51', 'salesforce51', 3, 'salesforce51', 1),
(112, 'salesforce52', 'salesforce52', 3, 'salesforce52', 1),
(113, 'salesforce53', 'salesforce53', 3, 'salesforce53', 1),
(114, 'salesforce54', 'salesforce54', 3, 'salesforce54', 1),
(115, 'salesforce50', 'salesforce50', 3, 'salesforce50', 1),
(116, 'salesforce51', 'salesforce51', 3, 'salesforce51', 1),
(117, 'salesforce52', 'salesforce52', 3, 'salesforce52', 1),
(118, 'salesforce53', 'salesforce53', 3, 'salesforce53', 1),
(119, 'salesforce54', 'salesforce54', 3, 'salesforce54', 1),
(120, 'salesforce55', 'salesforce55', 3, 'salesforce55', 1),
(121, 'salesforce50', 'salesforce50', 3, 'salesforce50', 1),
(122, 'salesforce51', 'salesforce51', 3, 'salesforce51', 1),
(123, 'salesforce52', 'salesforce52', 3, 'salesforce52', 1),
(124, 'salesforce53', 'salesforce53', 3, 'salesforce53', 1),
(125, 'salesforce54', 'salesforce54', 3, 'salesforce54', 1),
(126, 'salesforce55', 'salesforce55', 3, 'salesforce55', 1),
(127, 'salesforce50', 'salesforce50', 3, 'salesforce50', 1),
(128, 'salesforce51', 'salesforce51', 3, 'salesforce51', 1),
(129, 'salesforce52', 'salesforce52', 3, 'salesforce52', 1),
(130, 'salesforce53', 'salesforce53', 3, 'salesforce53', 1),
(131, 'salesforce54', 'salesforce54', 3, 'salesforce54', 1),
(132, 'salesforce55', 'salesforce55', 3, 'salesforce55', 1),
(133, 'salesforce50', 'salesforce50', 3, 'salesforce50', 1),
(134, 'salesforce51', 'salesforce51', 3, 'salesforce51', 1),
(135, 'salesforce52', 'salesforce52', 3, 'salesforce52', 1),
(136, 'salesforce53', 'salesforce53', 3, 'salesforce53', 1),
(137, 'salesforce54', 'salesforce54', 3, 'salesforce54', 1),
(138, 'salesforce55', 'salesforce55', 3, 'salesforce55', 1),
(139, 'salesforce56', 'salesforce56', 3, 'salesforce56', 1),
(140, 'salesforce50', 'salesforce50', 3, 'salesforce50', 1),
(141, 'salesforce51', 'salesforce51', 3, 'salesforce51', 1),
(142, 'salesforce52', 'salesforce52', 3, 'salesforce52', 1),
(143, 'salesforce53', 'salesforce53', 3, 'salesforce53', 1),
(144, 'salesforce54', 'salesforce54', 3, 'salesforce54', 1),
(145, 'salesforce55', 'salesforce55', 3, 'salesforce55', 1),
(146, 'salesforce56', 'salesforce56', 3, 'salesforce56', 1),
(147, 'salesforce50', 'salesforce50', 3, 'salesforce50', 1),
(148, 'salesforce51', 'salesforce51', 3, 'salesforce51', 1),
(149, 'salesforce52', 'salesforce52', 3, 'salesforce52', 1),
(150, 'salesforce53', 'salesforce53', 3, 'salesforce53', 1),
(151, 'salesforce54', 'salesforce54', 3, 'salesforce54', 1),
(152, 'salesforce55', 'salesforce55', 3, 'salesforce55', 1),
(153, 'salesforce56', 'salesforce56', 3, 'salesforce56', 1),
(154, 'salesforce50', 'salesforce50', 3, 'salesforce50', 1),
(155, 'salesforce51', 'salesforce51', 3, 'salesforce51', 1),
(156, 'salesforce52', 'salesforce52', 3, 'salesforce52', 1),
(157, 'salesforce53', 'salesforce53', 3, 'salesforce53', 1),
(158, 'salesforce54', 'salesforce54', 3, 'salesforce54', 1),
(159, 'salesforce55', 'salesforce55', 3, 'salesforce55', 1),
(160, 'salesforce56', 'salesforce56', 3, 'salesforce56', 1),
(161, 'salesforce50', 'salesforce50', 3, 'salesforce50', 1),
(162, 'salesforce51', 'salesforce51', 3, 'salesforce51', 1),
(163, 'salesforce52', 'salesforce52', 3, 'salesforce52', 1),
(164, 'salesforce53', 'salesforce53', 3, 'salesforce53', 1),
(165, 'salesforce54', 'salesforce54', 3, 'salesforce54', 1),
(166, 'salesforce55', 'salesforce55', 3, 'salesforce55', 1),
(167, 'salesforce56', 'salesforce56', 3, 'salesforce56', 1),
(168, 'salesforce50', 'salesforce50', 3, 'salesforce50', 1),
(169, 'salesforce51', 'salesforce51', 3, 'salesforce51', 1),
(170, 'salesforce52', 'salesforce52', 3, 'salesforce52', 1),
(171, 'salesforce53', 'salesforce53', 3, 'salesforce53', 1),
(172, 'salesforce54', 'salesforce54', 3, 'salesforce54', 1),
(173, 'salesforce55', 'salesforce55', 3, 'salesforce55', 1),
(174, 'salesforce56', 'salesforce56', 3, 'salesforce56', 1),
(175, 'salesforce50', 'salesforce50', 3, 'salesforce50', 1),
(176, 'salesforce51', 'salesforce51', 3, 'salesforce51', 1),
(177, 'salesforce52', 'salesforce52', 3, 'salesforce52', 1),
(178, 'salesforce53', 'salesforce53', 3, 'salesforce53', 1),
(179, 'salesforce54', 'salesforce54', 3, 'salesforce54', 1),
(180, 'salesforce55', 'salesforce55', 3, 'salesforce55', 1),
(181, 'salesforce56', 'salesforce56', 3, 'salesforce56', 1);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_agency`
--
ALTER TABLE `admin_agency`
  ADD PRIMARY KEY (`id_admin_agency`),
  ADD KEY `admin_agency ke agency` (`id_agency`) USING BTREE,
  ADD KEY `admin_agency akses ke jabatan` (`akses`) USING BTREE,
  ADD KEY `admin_agency ke sto` (`id_sto`) USING BTREE;

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
  ADD KEY `pelanggan ke paket` (`id_paket`),
  ADD KEY `data pelanggan ke admin_agency` (`id_admin_agency`);

--
-- Indeks untuk tabel `detail_picwitel`
--
ALTER TABLE `detail_picwitel`
  ADD PRIMARY KEY (`id_picwitel`),
  ADD KEY `detail_picwitel ke jabatan` (`akses`),
  ADD KEY `detail_picwitel ke sto` (`id_sto`);

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
-- AUTO_INCREMENT untuk tabel `admin_agency`
--
ALTER TABLE `admin_agency`
  MODIFY `id_admin_agency` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT untuk tabel `agency`
--
ALTER TABLE `agency`
  MODIFY `id_agency` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=419;

--
-- AUTO_INCREMENT untuk tabel `detail_picwitel`
--
ALTER TABLE `detail_picwitel`
  MODIFY `id_picwitel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT untuk tabel `detail_teknis`
--
ALTER TABLE `detail_teknis`
  MODIFY `id_teknis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  MODIFY `id_salesforce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT untuk tabel `sto`
--
ALTER TABLE `sto`
  MODIFY `id_sto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id_supervisor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=182;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `admin_agency`
--
ALTER TABLE `admin_agency`
  ADD CONSTRAINT `admin_agency_ibfk_2` FOREIGN KEY (`id_agency`) REFERENCES `agency` (`id_agency`),
  ADD CONSTRAINT `admin_agency_ibfk_3` FOREIGN KEY (`akses`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `admin_agency_ibfk_4` FOREIGN KEY (`id_sto`) REFERENCES `sto` (`id_sto`);

--
-- Ketidakleluasaan untuk tabel `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD CONSTRAINT `data_pelanggan_ibfk_1` FOREIGN KEY (`id_paket`) REFERENCES `paket` (`id_paket`),
  ADD CONSTRAINT `data_pelanggan_ibfk_2` FOREIGN KEY (`id_sto`) REFERENCES `sto` (`id_sto`),
  ADD CONSTRAINT `data_pelanggan_ibfk_3` FOREIGN KEY (`id_agency`) REFERENCES `agency` (`id_agency`),
  ADD CONSTRAINT `data_pelanggan_ibfk_4` FOREIGN KEY (`id_admin_agency`) REFERENCES `admin_agency` (`id_admin_agency`),
  ADD CONSTRAINT `pelanggan ke sf` FOREIGN KEY (`id_salesforce`) REFERENCES `salesforce` (`id_salesforce`),
  ADD CONSTRAINT `pelanggan ke spv` FOREIGN KEY (`id_supervisor`) REFERENCES `supervisor` (`id_supervisor`);

--
-- Ketidakleluasaan untuk tabel `detail_picwitel`
--
ALTER TABLE `detail_picwitel`
  ADD CONSTRAINT `detail_picwitel_ibfk_1` FOREIGN KEY (`akses`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `detail_picwitel_ibfk_2` FOREIGN KEY (`id_sto`) REFERENCES `sto` (`id_sto`);

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
  ADD CONSTRAINT `spv ke agency` FOREIGN KEY (`id_admin_agency`) REFERENCES `admin_agency` (`id_admin_agency`),
  ADD CONSTRAINT `supervisor_ibfk_2` FOREIGN KEY (`id_agency`) REFERENCES `agency` (`id_agency`),
  ADD CONSTRAINT `supervisor_ibfk_3` FOREIGN KEY (`akses`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `supervisor_ibfk_4` FOREIGN KEY (`id_sto`) REFERENCES `sto` (`id_sto`);

--
-- Ketidakleluasaan untuk tabel `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`akses`) REFERENCES `jabatan` (`id_jabatan`),
  ADD CONSTRAINT `user_ibfk_2` FOREIGN KEY (`id_sto`) REFERENCES `sto` (`id_sto`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
