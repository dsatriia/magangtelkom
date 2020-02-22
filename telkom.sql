-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 22 Feb 2020 pada 17.09
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
(1, 'adminagency01', 'adminagency01', 1, 1, 'Admin Agency 1', 'admin@gmail.comasd', '085372874680', '085372874681', 1, 'Divre 59', 'Sidoarjo', 'Sidoarjo', '2020-02-01 05:14:09'),
(2, 'adminagency02', 'adminagency02', 1, 1, 'Admin Agency 2', 'admin@gmail.comasd', '085372874680', '085372874681', 1, 'Divre 5', 'Sidoarjo', 'Sidoarjo', '2020-02-01 05:14:24'),
(50, 'adminagency99', 'adminagency99', 1, 1, 'Admin Agency 99', 'alamal@gmail.com', '934243', '2343249', 1, 'Divre 5', 'Sidoarjo', 'Sidoarjo', '2020-02-02 19:04:29'),
(60, 'TIDAKADA1', 'TIDAKADA', 0, 0, 'TIDAK ADA', '-', '-', '-', 1, '-', '-', '-', '2020-02-22 08:09:02');

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
(1, 'MEGA CREATIVE PROMOSINDO'),
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
(1, '1231', 'Bayu', 'Sidoarjo', '3515084804990031', 1, '085204178931', 5, '31', 'Sidoarjo', '13', '2020-02-22 10:31:56', 1, 1, 1, 1, '31', 'OK', 'OK', 'Ready', 'Kahuripan', '085733325931', 'Tia'),
(2, '1232', 'Riesta', 'Sidoarjo', '3515084804990032', 1, '085204178932', 29, '32', 'Sidoarjo', '23', '2020-02-22 10:31:56', 1, 1, 1, 1, '2', 'OK', 'NOT OK', 'Belum Ready', 'Kahuripan', '085733325932', 'Anisa'),
(3, '1233', 'Dimas', 'Sidoarjo', '3515084804990033', 2, '085204178933', 4, '33', 'Sidoarjo', '33', '2020-02-22 10:31:56', 1, 1, 1, 1, '3', 'NOT OK', 'NOT OK', 'Belum Ready', 'Kahuripan', '085733325933', 'Widya'),
(4, '1234', 'Sinta', 'Sidoarjo', '3515084804990034', 1, '085204178934', 5, '34', 'Sidoarjo', '43', '2020-02-22 10:37:02', 1, 2, 2, 2, '4', 'OK', 'OK', 'Ready', 'Sidoarjo', '085733325934', 'Tia'),
(5, '1235', 'Tari', 'Sidoarjo', '3515084804990035', 1, '085204178935', 33, '35', 'Sidoarjo', '53', '2020-02-22 10:37:02', 1, 2, 2, 2, '5', 'OK', 'NOT OK', 'Belum Ready', 'Sidoarjo', '085733325935', 'Anisa'),
(6, '1236', 'Dimas', 'Sidoarjo', '3515084804990036', 1, '085204178936', 5, '36', 'Sidoarjo', '64', '2020-02-22 10:37:02', 1, 2, 2, 2, '6', 'NOT OK', 'NOT OK', 'Belum Ready', 'Sidoarjo', '085733325935', 'Widya'),
(7, '1237', 'Alam', 'Sidoarjo', '3515084804990037', 1, '085204178937', 6, '37', 'Sidoarjo', '73', '2020-02-22 10:40:54', 1, 1, 3, 3, '7', 'OK', 'OK', 'Ready', 'Sidoarjo', '085733325937', 'Tia'),
(8, '1238', 'Mabruk', 'Sidoarjo', '3515084804990038', 1, '085204178938', 33, '38', 'Sidoarjo', '83', '2020-02-22 10:40:54', 1, 1, 3, 3, '8', 'OK', 'NOT OK', 'Belum Ready', 'Sidoarjo', '085733325938', 'Anisa'),
(9, '1239', 'Hendra', 'Sidoarjo', '3515084804990039', 1, '085204178939', 30, '39', 'Sidoarjo', '93', '2020-02-22 10:40:54', 1, 1, 3, 3, '9', 'NOT OK', 'NOT OK', 'Belum Ready', 'Sidoarjo', '085733325939', 'Widya'),
(10, '12310', 'Yola', 'Sidoarjo', '3515084804990010', 1, '085204178910', 6, '10', 'Kahuripan', '1', '2020-02-22 10:52:02', 1, 60, 20, 25, '10', 'OK', 'OK', 'Ready', 'Sidoarjo', '085733325910', 'Tia'),
(11, '12311', 'Rena', 'Sidoarjo', '3515084804990011', 1, '085204178911', 0, '11', 'Sidoarjo', '11', '2020-02-22 10:44:36', 1, 60, 20, 25, '11', 'OK', 'NOT OK', 'Belum Ready', 'Sidoarjo', '085733325911', 'Anisa'),
(12, '12312', 'Andi', 'Sidoarjo', '3515084804990012', 1, '085204178912', 0, '12', 'Sidoarjo', '21', '2020-02-22 10:44:36', 1, 60, 20, 25, '12', 'NOT OK', 'NOT OK', 'Belum Ready', 'Sidoarjo', '085733325912', 'Widya'),
(13, '12313', 'Aprilia', 'Sidoarjo', '3515084804990013', 1, '085204178913', 28, '13', 'Sidoarjo', '31', '2020-02-22 10:48:12', 1, 1, 1, 5, '13', 'OK', 'OK', 'Ready', 'Sidoarjo', '085733325913', 'Tia'),
(14, '12314', 'Berliana', 'Sidoarjo', '3515084804990014', 2, '085204178914', 0, '14', 'Sidoarjo', '41', '2020-02-22 10:48:12', 1, 1, 1, 5, '14', 'OK', 'NOT OK', 'Belum Ready', 'Sidoarjo', '085733325914', 'Anisa'),
(15, '12315', 'Sari', 'Sidoarjo', '3515084804990015', 2, '085204178915', 28, '15', 'Sidoarjo', '51', '2020-02-22 10:48:12', 1, 1, 1, 5, '15', 'NOT OK', 'NOT OK', 'Belum Ready', 'Sidoarjo', '085733325915', 'Widya');

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
(3, 'inputer01', 'inputer01', 4, 1, 'Putri Inputer', 3515765487996661, 'ristain@gmail.com', '08523412314343', '0823453235234', 'Divre 7', 'SIDOARJO', 'SIDOARJO', '2020-02-01 16:39:36'),
(4, 'manager01', 'manager01', 8, 2, 'Alam Manager', 3515765487996662, 'rastim@gmail.com', '05341341233', '08123122134', 'Divre 9', 'SIDOARJO', 'SIDOARJO', '2020-02-01 17:09:16'),
(5, 'picwitel01', 'picwitel01', 9, 2, 'Alam PIC Witel', 4553, 'alamp@gmail.com', '087213121243', '081231221145', 'Divre 9', 'SIDOARJO', 'SIDOARJO', '2020-02-01 17:17:50'),
(6, 'kasto01', 'kasto01', 10, 1, 'Al Ka STO', 3424324, 'alamamk@gmail.com', '08341414', '012313', 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-02-01 17:25:11'),
(13, 'manager99', 'manager99', 8, 1, 'manager99', 3843223, 'alamal@gmail.com', '9324234', '3242342', 'Divre 5', 'Sidoarjo', 'Sidoarjo', '2020-02-02 19:04:30');

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
(1, 'teknisi01', 'teknisi01', 5, 1, 'Arista Teknisi', 'rista@gmail.com', '0852341248', '08234532352', 'Divre 8', 'SIDOARJO', 'SIDOARJO', '2020-02-01 16:34:51'),
(3, 'woc01', 'woc01', 7, 2, 'Rista WOC', 'rista@gmail.com', '0852341231', '08234532352', 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 14:44:07'),
(8, 'tl01', 'tl01', 6, 1, 'Putri TL', 'putri@gmail.com', '086545667876', '086535678543', 'Divre 8', 'Sidoarjo', 'Sidoarjo', '2020-02-01 16:47:42'),
(12, 'teknisi99', 'teknisi99', 5, 1, 'teknisi99', 'alamal@gmail.com', '23432', '3243242', 'Divre 5', 'Sidoarjo', 'Sidoarjo', '2020-02-02 19:04:30');

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
(5, 1, 'sf05', 'sf05', 3, 2, 'Alam SF5', 'ristay@gmail.com', '0563634', '0324234', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-02-01 08:02:31'),
(25, 20, 'sf04', 'sf04', 3, 1, 'SF 04', 'sf04@gmail.com', '08423424241', '08312321312', 1, 'Divre 4', 'Sidoarjo', 'Sidoarjo', '2020-02-20 08:01:02'),
(27, 21, 'sf08', 'sf08', 3, 1, 'SF 08', 'sf08@gmail.com', '0822111312', '08434342133', 1, 'Divre 5', 'Sidoarjo', 'Sidoarjo', '2020-02-20 09:25:55');

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
(1, 1, 'spv01', 'spv01', 2, 1, 'Alam SPV', 'risata@gmail.com', '08523412312', '08234512352', 1, 'Divre 9', 'SIDOARJO', 'SIDOARJO', '2020-02-22 08:24:15'),
(2, 60, 'spv02', 'spv02', 2, 2, 'spv02', 'rassti@gmail.com', '05341341231', '01232121221', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-02-20 08:49:27'),
(3, 1, 'spv03', 'spv03', 2, 2, 'spv03', 'alam@gmail.com', '0872131212', '0812312211', 1, 'Divre 5', 'SIDOARJO', 'SIDOARJO', '2020-01-23 14:53:00'),
(20, 60, 'spv04', 'spv04', 2, 1, 'SPV 04', 'spv04@gmail.com', '08645262888', '08645262862', 1, 'Divre 4', 'Sidoarjo', 'Sidoarjo', '2020-02-20 07:48:18'),
(21, 2, 'spv06', 'spv06', 2, 2, 'SPV 06', 'spv06@gmail.com', '0842122112', '0823123231231', 1, 'Divre 4', 'Sidoarjo', 'Sidoarjo', '2020-02-20 09:24:55');

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
(4, 'spv01', 'spv01', 2, 'Alam SPV', 1),
(10, 'woc01', 'woc01', 7, 'Rista WOC', 2),
(11, 'manager01', 'manager01', 8, 'Alam Manager', 2),
(12, 'picwitel01', 'picwitel01', 9, 'Alam PIC Witel', 2),
(13, 'kasto01', 'kasto01', 10, 'Al Ka STO', 1),
(15, 'spv02', 'spv02', 2, 'spv02', 2),
(16, 'spv03', 'spv03', 2, 'spv03', 2),
(18, 'sf02', 'sf02', 3, 'Alam SF', 2),
(19, 'sf03', 'sf03', 3, 'Alam SF', 2),
(20, 'sf04', 'sf04', 3, 'Alam SF', 2),
(21, 'sf05', 'sf05', 3, 'Alam SF', 2),
(22, 'inputer01', 'inputer01', 4, 'Putri Inputer', 1),
(23, 'teknisi01', 'teknisi01', 5, 'Arista Teknisi', 1),
(24, 'tl02', 'tl02', 6, 'Rista TL', 2),
(27, 'adminagency02', 'adminagency02', 1, 'Admin Agency 2', 1),
(29, 'sf01', 'sf01', 3, 'Salesforce 1', 1),
(87, 'tl01', 'tl01', 6, 'Putri TL', 1),
(114, 'spv04', 'spv04', 2, 'SPV 04', 1),
(123, 'adminagency01', 'adminagency01', 1, 'Admin Agency 1', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `admin_agency`
--
ALTER TABLE `admin_agency`
  ADD PRIMARY KEY (`id_admin_agency`),
  ADD UNIQUE KEY `username` (`username`),
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
  ADD UNIQUE KEY `ktp` (`ktp`),
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
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `detail_picwitel ke jabatan` (`akses`),
  ADD KEY `detail_picwitel ke sto` (`id_sto`);

--
-- Indeks untuk tabel `detail_teknis`
--
ALTER TABLE `detail_teknis`
  ADD PRIMARY KEY (`id_teknis`),
  ADD UNIQUE KEY `username` (`username`),
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
  ADD UNIQUE KEY `username` (`username`),
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
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `id_agency` (`id_admin_agency`),
  ADD KEY `detail_sales_supervisor ke agency` (`id_agency`),
  ADD KEY `detail_sales_supervisor ke jabatan` (`akses`),
  ADD KEY `detail_sales_supervisor ke sto` (`id_sto`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `user akses ke jabatan` (`akses`) USING BTREE,
  ADD KEY `user ke sto` (`id_sto`) USING BTREE;

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `admin_agency`
--
ALTER TABLE `admin_agency`
  MODIFY `id_admin_agency` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT untuk tabel `agency`
--
ALTER TABLE `agency`
  MODIFY `id_agency` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `detail_picwitel`
--
ALTER TABLE `detail_picwitel`
  MODIFY `id_picwitel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `detail_teknis`
--
ALTER TABLE `detail_teknis`
  MODIFY `id_teknis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

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
  MODIFY `id_salesforce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT untuk tabel `sto`
--
ALTER TABLE `sto`
  MODIFY `id_sto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id_supervisor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=124;

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
