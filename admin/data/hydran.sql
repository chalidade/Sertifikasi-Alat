-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 22, 2018 at 06:28 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.28-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hydran`
--

-- --------------------------------------------------------

--
-- Table structure for table `hydrant`
--

CREATE TABLE `hydrant` (
  `no_hidran` int(3) NOT NULL,
  `lokasi` text NOT NULL,
  `jenis` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hydrant`
--

INSERT INTO `hydrant` (`no_hidran`, `lokasi`, `jenis`) VALUES
(1, 'Taman', 'kapal'),
(2, 'ruangan 1', 'ruangan'),
(3, 'Ruangan 2', 'kapal'),
(4, 'Ruangan 3', 'ruangan'),
(5, 'Taman', 'kapal');

-- --------------------------------------------------------

--
-- Table structure for table `kondisi`
--

CREATE TABLE `kondisi` (
  `no` int(3) NOT NULL,
  `inspeksi` varchar(50) NOT NULL,
  `keadaan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kondisi`
--

INSERT INTO `kondisi` (`no`, `inspeksi`, `keadaan`) VALUES
(1, '21/01/2018 1', '1'),
(2, '22/04/2018 05:16:08pm', '1'),
(3, '18/02/2017', '0'),
(4, '10 /11/2017', '0'),
(5, '15/03/2017', '1');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `no` int(3) NOT NULL,
  `id` varchar(3) NOT NULL,
  `tgl` varchar(50) NOT NULL,
  `insp` varchar(50) NOT NULL,
  `satu` varchar(2) NOT NULL,
  `dua` varchar(2) NOT NULL,
  `tiga` varchar(2) NOT NULL,
  `empat` varchar(2) NOT NULL,
  `lima` varchar(2) NOT NULL,
  `enam` varchar(2) NOT NULL,
  `tujuh` varchar(2) NOT NULL,
  `ketsatu` varchar(250) NOT NULL,
  `ketdua` varchar(250) NOT NULL,
  `kettiga` varchar(250) NOT NULL,
  `ketempat` varchar(250) NOT NULL,
  `kelima` varchar(250) NOT NULL,
  `kenam` varchar(250) NOT NULL,
  `ketujuh` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`no`, `id`, `tgl`, `insp`, `satu`, `dua`, `tiga`, `empat`, `lima`, `enam`, `tujuh`, `ketsatu`, `ketdua`, `kettiga`, `ketempat`, `kelima`, `kenam`, `ketujuh`) VALUES
(14, '1', '22/04/2018 04:59:12pm', 'Agus', '1', '1', '1', '1', '1', '1', '1', ' ', ' ', ' ', ' ', ' ', ' ', ' '),
(15, '2', '22/04/2018 05:16:08pm', 'Agus', '1', '1', '1', '1', '1', '1', '1', ' ', ' ', ' ', ' ', ' ', ' ', ' ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_nip` int(3) NOT NULL,
  `name` text NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hydrant`
--
ALTER TABLE `hydrant`
  ADD PRIMARY KEY (`no_hidran`);

--
-- Indexes for table `kondisi`
--
ALTER TABLE `kondisi`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_nip`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `no` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
