-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2020 at 09:57 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

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
-- Table structure for table `agency`
--

CREATE TABLE `agency` (
  `id_agency` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data for table `agency`
--

INSERT INTO `agency` (`id_agency`, `nama`, `username`, `password`, `akses`) VALUES
(0, 'BELUM ADA AGENCY', 'BELUM ADA AGENCY', 'BELUM ADA AGENCY', 0),
(3, 'Admin Agency 01', 'adminagency01', 'adminagency01', 1),
(4, 'Admin Agency 02', 'adminagency02', 'adminagency02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `data_pelanggan`
--

CREATE TABLE `data_pelanggan` (
  `id` int(15) NOT NULL,
  `track_id` varchar(15) COLLATE latin7_general_cs NOT NULL,
  `nama_pelanggan` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `alamat` varchar(50) COLLATE latin7_general_cs NOT NULL,
  `ktp` varchar(20) COLLATE latin7_general_cs NOT NULL,
  `sto` int(11) NOT NULL,
  `second_cp` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `paket` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `tagging_rill` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `odp` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `odp_ke_pelanggan` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `no_sc` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `status_validasi` varchar(7) COLLATE latin7_general_cs NOT NULL,
  `kategori_progress_psb` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `keterangan_progress_psb` varchar(50) COLLATE latin7_general_cs NOT NULL,
  `alamat_rill_pelanggan` varchar(50) COLLATE latin7_general_cs NOT NULL,
  `cp_rill_pelanggan` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `nama_teknisi` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `id_partner` int(11) NOT NULL DEFAULT 0,
  `id_spv` int(11) NOT NULL DEFAULT 0,
  `id_agency` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data for table `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`id`, `track_id`, `nama_pelanggan`, `alamat`, `ktp`, `sto`, `second_cp`, `paket`, `tagging_rill`, `odp`, `odp_ke_pelanggan`, `tgl_input`, `no_sc`, `status_validasi`, `kategori_progress_psb`, `keterangan_progress_psb`, `alamat_rill_pelanggan`, `cp_rill_pelanggan`, `nama_teknisi`, `id_partner`, `id_spv`, `id_agency`) VALUES
(27, '1', 'Bayu', '1', '1', 1, '1', '1', '10', '1', '1', '2020-01-13 12:00:23', '9', '99', 'baik', 'oke', 'Gresik', '02193812', 'Alam', 0, 0, 0),
(28, '2', '2', '2', '2', 2, '2', '2', '5', '2', '2', '2020-01-13 23:36:06', '100', 'OK', 'Kendala', 'Ready', '5', '5', '5', 3, 3, 3),
(29, '3', 'Ristaaa', '3', '3', 3, '3', '3', '8', '3', '3', '2020-01-14 05:15:09', '11', 'OK', '8', '8', '7', '7', '7', 3, 3, 3),
(30, '9', 'Alam', '9', '954', 9, '9', '9', '11', 'gresik', '9', '2020-01-14 08:30:56', '', '', 'a', 'ready', 'Jati', '2', 'Rista', 2, 3, 3),
(31, '9213', 'Dimas', 'Sidoarjo', '23', 0, 'lk', 'lk', 'lk', 'lk', '9', '2020-01-14 02:35:02', '', '', 'W', 'W', 'w', '4', '', 5, 7, 4),
(32, '11', 'a', 'a', '10', 0, 'a', 'a', 'a', 'a', 'a', '2020-01-14 02:35:24', '', '', '', '', '', '', '', 5, 7, 4),
(33, '12', 'Rista', 'Kahuripan', '123456', 3, '5', '5', '10', '5', '11', '2020-01-18 02:47:22', '', '', '', '', '', '', '', 4, 6, 3),
(34, '8321', 'Alam No Agency', 'Gresik', '9213721', 2, '08721732', '3', '4', 'Surabaya', '20', '2020-01-14 03:13:49', '77', '', '', '', '', '', '', 6, 8, 0),
(36, '9238', 'alammmm', 'alsdk', '93229', 1, '34938', '123', '92342', 'gresik', '10', '2020-01-18 02:42:11', '', '', '', '', '', '', '', 2, 3, 3),
(37, '92138', 'Ristaaaa', 'Sidoarjo', '12939', 1, '81283921', '9', '29', 'surabaya', '20', '2020-01-18 02:45:24', '', '', '', '', '', '', '', 3, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `inputer`
--

CREATE TABLE `inputer` (
  `id_inputer` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT 4
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data for table `inputer`
--

INSERT INTO `inputer` (`id_inputer`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'Inputer 01', 'inputer01', 'inputer01', 4),
(2, 'Inputer 02', 'inputer02', 'inputer02', 4);

-- --------------------------------------------------------

--
-- Table structure for table `kasto`
--

CREATE TABLE `kasto` (
  `id_kasto` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT 10
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data for table `kasto`
--

INSERT INTO `kasto` (`id_kasto`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'Ka STO 01', 'kasto01', 'kasto01', 10),
(2, 'Ka STO 02', 'kasto02', 'kasto02', 10);

-- --------------------------------------------------------

--
-- Table structure for table `manager`
--

CREATE TABLE `manager` (
  `id_manager` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT 8
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data for table `manager`
--

INSERT INTO `manager` (`id_manager`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'Manager 01', 'manager01', 'manager01', 8),
(2, 'Manager 02', 'manager02', 'manager02', 8);

-- --------------------------------------------------------

--
-- Table structure for table `picwitel`
--

CREATE TABLE `picwitel` (
  `id_picwitel` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT 9
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data for table `picwitel`
--

INSERT INTO `picwitel` (`id_picwitel`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'PIC Witel 01', 'picwitel01', 'picwitel01', 9),
(2, 'PIC Witel 02', 'picwitel02', 'picwitel02', 9);

-- --------------------------------------------------------

--
-- Table structure for table `salesforce`
--

CREATE TABLE `salesforce` (
  `id_salesforce` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT 3,
  `id_supervisor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data for table `salesforce`
--

INSERT INTO `salesforce` (`id_salesforce`, `nama`, `username`, `password`, `akses`, `id_supervisor`) VALUES
(0, 'BELUM ADA SF', 'BELUM ADA SF', 'BELUM ADA SF', 0, 0),
(2, 'Sales Force 01', 'sf01', 'sf01', 3, 3),
(3, 'Sales Force 02', 'sf02', 'sf02', 3, 3),
(4, 'Sales Force 03', 'sf03', 'sf03', 3, 6),
(5, 'Sales Force 04', 'sf04', 'sf04', 3, 7),
(6, 'Sales Force 05', 'sf05', 'sf05', 3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `sto`
--

CREATE TABLE `sto` (
  `id` int(11) NOT NULL,
  `area` varchar(15) COLLATE latin7_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id_supervisor` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT 2,
  `id_agency` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id_supervisor`, `nama`, `username`, `password`, `akses`, `id_agency`) VALUES
(0, 'BELUM ADA SPV', 'BELUM ADA SPV', 'BELUM ADA SPV', 0, 0),
(3, 'Supervisor 01', 'spv01', 'spv01', 2, 3),
(6, 'Supervisor 02', 'spv02', 'spv02', 2, 3),
(7, 'Supervisor 03', 'spv03', 'spv03', 2, 4),
(8, 'Supervisor 04', 'spv04', 'spv04', 2, 0);

-- --------------------------------------------------------

--
-- Table structure for table `teknisi`
--

CREATE TABLE `teknisi` (
  `id_teknisi` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT 5
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data for table `teknisi`
--

INSERT INTO `teknisi` (`id_teknisi`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'Teknisi 01', 'teknisi01', 'teknisi01', 5),
(2, 'Teknisi 02', 'teknisi02', 'teknisi02', 5);

-- --------------------------------------------------------

--
-- Table structure for table `tl`
--

CREATE TABLE `tl` (
  `id_tl` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT 6
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data for table `tl`
--

INSERT INTO `tl` (`id_tl`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'TL 01', 'tl01', 'tl01', 6),
(2, 'TL 02', 'tl02', 'tl02', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(25) COLLATE latin7_general_cs NOT NULL,
  `akses` int(1) NOT NULL,
  `nama` varchar(25) COLLATE latin7_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data for table `user`
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
-- Table structure for table `woc`
--

CREATE TABLE `woc` (
  `id_woc` int(11) NOT NULL,
  `nama` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `username` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `password` varchar(100) COLLATE latin7_general_cs NOT NULL,
  `akses` int(11) NOT NULL DEFAULT 7
) ENGINE=InnoDB DEFAULT CHARSET=latin7 COLLATE=latin7_general_cs;

--
-- Dumping data for table `woc`
--

INSERT INTO `woc` (`id_woc`, `nama`, `username`, `password`, `akses`) VALUES
(1, 'WOC 01', 'woc01', 'woc01', 7),
(2, 'WOC 02', 'woc02', 'woc02', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id_agency`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE_track_id` (`track_id`),
  ADD KEY `pelanggan ke spv` (`id_spv`),
  ADD KEY `pelanggan ke agency` (`id_agency`),
  ADD KEY `pelanggan ke sf` (`id_partner`);

--
-- Indexes for table `inputer`
--
ALTER TABLE `inputer`
  ADD PRIMARY KEY (`id_inputer`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `kasto`
--
ALTER TABLE `kasto`
  ADD PRIMARY KEY (`id_kasto`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `manager`
--
ALTER TABLE `manager`
  ADD PRIMARY KEY (`id_manager`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `picwitel`
--
ALTER TABLE `picwitel`
  ADD PRIMARY KEY (`id_picwitel`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `salesforce`
--
ALTER TABLE `salesforce`
  ADD PRIMARY KEY (`id_salesforce`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `sf ke spv` (`id_supervisor`);

--
-- Indexes for table `sto`
--
ALTER TABLE `sto`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id_supervisor`),
  ADD UNIQUE KEY `username` (`username`),
  ADD KEY `spv ke agency` (`id_agency`);

--
-- Indexes for table `teknisi`
--
ALTER TABLE `teknisi`
  ADD PRIMARY KEY (`id_teknisi`);

--
-- Indexes for table `tl`
--
ALTER TABLE `tl`
  ADD PRIMARY KEY (`id_tl`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `woc`
--
ALTER TABLE `woc`
  ADD PRIMARY KEY (`id_woc`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `id_agency` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `inputer`
--
ALTER TABLE `inputer`
  MODIFY `id_inputer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kasto`
--
ALTER TABLE `kasto`
  MODIFY `id_kasto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `manager`
--
ALTER TABLE `manager`
  MODIFY `id_manager` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `picwitel`
--
ALTER TABLE `picwitel`
  MODIFY `id_picwitel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `salesforce`
--
ALTER TABLE `salesforce`
  MODIFY `id_salesforce` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sto`
--
ALTER TABLE `sto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id_supervisor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `teknisi`
--
ALTER TABLE `teknisi`
  MODIFY `id_teknisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tl`
--
ALTER TABLE `tl`
  MODIFY `id_tl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `woc`
--
ALTER TABLE `woc`
  MODIFY `id_woc` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD CONSTRAINT `pelanggan ke agency` FOREIGN KEY (`id_agency`) REFERENCES `agency` (`id_agency`),
  ADD CONSTRAINT `pelanggan ke sf` FOREIGN KEY (`id_partner`) REFERENCES `salesforce` (`id_salesforce`),
  ADD CONSTRAINT `pelanggan ke spv` FOREIGN KEY (`id_spv`) REFERENCES `supervisor` (`id_supervisor`);

--
-- Constraints for table `salesforce`
--
ALTER TABLE `salesforce`
  ADD CONSTRAINT `sf ke spv` FOREIGN KEY (`id_supervisor`) REFERENCES `supervisor` (`id_supervisor`);

--
-- Constraints for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD CONSTRAINT `spv ke agency` FOREIGN KEY (`id_agency`) REFERENCES `agency` (`id_agency`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
