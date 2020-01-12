-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2020 at 02:20 AM
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
  `nama` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `data_pelanggan`
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
  `tgl_input` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `agency` varchar(25) NOT NULL,
  `id_partner` varchar(20) NOT NULL,
  `no_sc` varchar(25) NOT NULL,
  `spv` varchar(25) NOT NULL,
  `status_validasi` varchar(7) NOT NULL,
  `kategori_progress_psb` varchar(25) NOT NULL,
  `keterangan_progress_psb` varchar(50) NOT NULL,
  `alamat_rill_pelanggan` varchar(50) NOT NULL,
  `cp_rill_pelanggan` varchar(25) NOT NULL,
  `nama_teknisi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_pelanggan`
--

INSERT INTO `data_pelanggan` (`id`, `track_id`, `nama_pelanggan`, `alamat`, `ktp`, `sto`, `second_cp`, `paket`, `tagging_rill`, `odp`, `odp_ke_pelanggan`, `tgl_input`, `agency`, `id_partner`, `no_sc`, `spv`, `status_validasi`, `kategori_progress_psb`, `keterangan_progress_psb`, `alamat_rill_pelanggan`, `cp_rill_pelanggan`, `nama_teknisi`) VALUES
(1, '6543', 'Alam mma', 'Bambe, Driyorejo Gresik', '1234561', 0, '123456', '1', '123456', 'Warugunung', '10', '2020-01-11 08:50:24', 'AgensiPertama', '654123', '123456', '654', 'OK', 'Normal', 'Lancar', 'Surabaya', '', ''),
(3, '6544', 'Alam mma', 'Bambe, Driyorejo Gresik', '1234567', 0, '123456', '1', '123456', 'Warugunung', '10', '2020-01-11 08:00:53', 'AgensiPertama', '654123', '123456', '654', 'OK', 'Normal', 'Lancar', 'Surabaya', '', ''),
(4, '9887', 'Dimas', 'jj', '8', 0, 'jj', 'j', 'j', 'j', 'j', '2020-01-13 17:00:00', 'j', 'j', '9', 'j', 'j', 'j', 'j', '', '', ''),
(6, '89798', 'Bayu', '9', '9', 9, '9', '9', '99', '9', '9', '2020-01-14 17:00:00', '9', '9', '9', '99', '9', '9', '9', '', '', ''),
(7, '98', '899', '9', '9', 9, '9', '9', '9', '99', '9', '2020-01-01 17:00:00', '9', '9', '9', '9', '9', '99', '9', '', '', ''),
(8, '6', '66', '6', '6', 6, '6', '6', '6', '66', '6', '2020-01-11 09:14:39', '6', '6', '6', '6', '6', '6', '6', '', '', ''),
(10, '8', '8', '8', '8', 88, '8', '8', '8', '8', '88', '2020-01-11 09:25:15', '8', '8', '8', '8', '8', '88', '8', '', '', ''),
(13, '9b', '9', '9', '9', 99, '9', '9', '9', '9', '9', '2020-01-11 09:30:06', '9', '9', '99', '9', '9', '9', '9', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `salesforce`
--

CREATE TABLE `salesforce` (
  `id_salesforce` int(11) NOT NULL,
  `nama` int(11) NOT NULL,
  `id_supervisor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sto`
--

CREATE TABLE `sto` (
  `id` int(11) NOT NULL,
  `area` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id_supervisor` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `id_agency` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(3) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `akses` int(1) NOT NULL,
  `nama` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `akses`, `nama`) VALUES
(3, 'adminagency01', 'adminagency01', 1, 'Alam Agency'),
(4, 'spv01', 'spv01', 2, 'Alam Spv'),
(5, 'sf01', 'sf01', 3, 'Alam Sf'),
(6, 'inputer01', 'inputer01', 4, 'Alam inputer'),
(7, 'teknisi01', 'teknisi01', 5, 'Alam Teknisi'),
(9, 'tl01', 'tl01', 6, 'Alam Tl'),
(10, 'woc01', 'woc01', 7, 'Alam Woc'),
(11, 'manager01', 'manager01', 8, 'Alam Manager'),
(12, 'picwitel01', 'picwitel01', 9, 'Alam Picwitel'),
(13, 'kasto01', 'kasto01', 10, 'Alam Kasto');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agency`
--
ALTER TABLE `agency`
  ADD PRIMARY KEY (`id_agency`);

--
-- Indexes for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQUE_track_id` (`track_id`);

--
-- Indexes for table `salesforce`
--
ALTER TABLE `salesforce`
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
  ADD KEY `spv ke agency` (`id_agency`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agency`
--
ALTER TABLE `agency`
  MODIFY `id_agency` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `data_pelanggan`
--
ALTER TABLE `data_pelanggan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `sto`
--
ALTER TABLE `sto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id_supervisor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

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
