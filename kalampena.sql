-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 25, 2019 at 01:26 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kalampena`
--

-- --------------------------------------------------------

--
-- Table structure for table `formguru`
--

CREATE TABLE `formguru` (
  `namaguru` varchar(99) NOT NULL,
  `alamatguru` varchar(255) NOT NULL,
  `kelurahanguru` varchar(30) NOT NULL,
  `kecamatanguru` varchar(30) NOT NULL,
  `kabkotaguru` varchar(30) NOT NULL,
  `provinsiguru` varchar(30) NOT NULL,
  `alamatskrg` varchar(255) NOT NULL,
  `kelurahanskrg` varchar(30) NOT NULL,
  `kecamatanskrg` varchar(30) NOT NULL,
  `kabkotaskrg` varchar(30) NOT NULL,
  `provinsiskrg` varchar(30) NOT NULL,
  `nohpguru` varchar(13) NOT NULL,
  `emailguru` varchar(99) NOT NULL,
  `pendidikanguru` varchar(10) NOT NULL,
  `angkapengalaman` int(2) NOT NULL,
  `pengalaman` varchar(99) NOT NULL,
  `jenjang` varchar(20) NOT NULL,
  `bidangstudi` varchar(20) NOT NULL,
  `fotoktp` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formguru`
--

INSERT INTO `formguru` (`namaguru`, `alamatguru`, `kelurahanguru`, `kecamatanguru`, `kabkotaguru`, `provinsiguru`, `alamatskrg`, `kelurahanskrg`, `kecamatanskrg`, `kabkotaskrg`, `provinsiskrg`, `nohpguru`, `emailguru`, `pendidikanguru`, `angkapengalaman`, `pengalaman`, `jenjang`, `bidangstudi`, `fotoktp`) VALUES
('', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `formsiswa`
--

CREATE TABLE `formsiswa` (
  `nama` varchar(99) NOT NULL,
  `nm_ortu` varchar(99) NOT NULL,
  `kerja` varchar(99) NOT NULL,
  `pend_bpk` varchar(99) NOT NULL,
  `pend_ibu` varchar(99) NOT NULL,
  `alamat` varchar(99) NOT NULL,
  `kelurahan` varchar(99) NOT NULL,
  `kecamatan` varchar(99) NOT NULL,
  `kab` varchar(99) NOT NULL,
  `kodepos` varchar(5) NOT NULL,
  `nohp` varchar(13) NOT NULL,
  `email` varchar(99) NOT NULL,
  `pendidikan` varchar(255) NOT NULL,
  `nm_sekolah` varchar(99) NOT NULL,
  `harapan` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `formsiswa`
--

INSERT INTO `formsiswa` (`nama`, `nm_ortu`, `kerja`, `pend_bpk`, `pend_ibu`, `alamat`, `kelurahan`, `kecamatan`, `kab`, `kodepos`, `nohp`, `email`, `pendidikan`, `nm_sekolah`, `harapan`) VALUES
('', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `formguru`
--
ALTER TABLE `formguru`
  ADD PRIMARY KEY (`emailguru`);

--
-- Indexes for table `formsiswa`
--
ALTER TABLE `formsiswa`
  ADD PRIMARY KEY (`email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
