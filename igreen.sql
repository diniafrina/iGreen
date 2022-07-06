-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2019 at 12:09 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `igreen`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `no` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `staffID` varchar(20) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`no`, `username`, `password`, `staffID`, `level`) VALUES
(1, 'admin', 'admin', '1', '1'),
(2, 'user', 'user', '2', '0'),
(1, 'admin', 'admin', '1', '1'),
(2, 'user', 'user', '2', '0');

-- --------------------------------------------------------

--
-- Table structure for table `pembersihan_awam`
--

CREATE TABLE `pembersihan_awam` (
  `IDPembersihan` int(11) NOT NULL,
  `Tahun` int(11) NOT NULL,
  `SubKategori` varchar(50) NOT NULL,
  `JenisSubKategori` varchar(100) NOT NULL,
  `UnitPanjangKeluasan` int(11) NOT NULL,
  `Jenis` varchar(50) NOT NULL,
  `Frekuensi` varchar(50) NOT NULL,
  `NamaJalan` varchar(50) NOT NULL,
  `NamaTaman` varchar(50) NOT NULL,
  `Catatan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembersihan_awam`
--

INSERT INTO `pembersihan_awam` (`IDPembersihan`, `Tahun`, `SubKategori`, `JenisSubKategori`, `UnitPanjangKeluasan`, `Jenis`, `Frekuensi`, `NamaJalan`, `NamaTaman`, `Catatan`) VALUES
(25, 2017, 'Pembersihan longkang', 'Longkang Terbuka (450 mm kurang lebar 100 mm) Panjang (M)', 21, 'Parkir Awam', '1 kali sebulan', 'Jalan Intan', 'Taman Fajar', 'malaysia'),
(27, 2018, 'Pembersihan longkang', 'Longkang Terbuka (Lebar kurang 450 mm) Panjang (M)', 3000, 'Median', '2 kali sebulan', 'Jalan Kluang', 'Taman Intan', 'Carian MPK'),
(28, 2018, 'Pembersihan Jalan', 'Longkang Terbuka (450 mm kurang lebar 100 mm) Panjang (M)', 20191, 'Tanpa Median', '1 kali sebulan', 'Jalan Tun Abd Razak', 'Taman Fajar', 'MPK kluang');

-- --------------------------------------------------------

--
-- Table structure for table `sisa_pepejal`
--

CREATE TABLE `sisa_pepejal` (
  `IDPepejal` int(11) NOT NULL,
  `Tahun` int(12) NOT NULL,
  `SubKategori` varchar(50) NOT NULL,
  `Frekuensi` varchar(30) NOT NULL,
  `Hari` varchar(40) NOT NULL,
  `KawasanSKIM` varchar(50) NOT NULL,
  `Lokasi` varchar(50) NOT NULL,
  `JenisLokasi` varchar(50) NOT NULL,
  `Unit` varchar(40) NOT NULL,
  `Kod` varchar(50) NOT NULL,
  `SaizBin` varchar(40) NOT NULL,
  `Bilangan` int(40) NOT NULL,
  `NamaJalan` varchar(50) NOT NULL,
  `NamaTaman` varchar(50) NOT NULL,
  `Catatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sisa_pepejal`
--

INSERT INTO `sisa_pepejal` (`IDPepejal`, `Tahun`, `SubKategori`, `Frekuensi`, `Hari`, `KawasanSKIM`, `Lokasi`, `JenisLokasi`, `Unit`, `Kod`, `SaizBin`, `Bilangan`, `NamaJalan`, `NamaTaman`, `Catatan`) VALUES
(1, 2019, 'CBK', '2 kali seminggu', 'Isnin', 'JHKG02', 'Komersial Bertingkat', 'Rumah Pangsa', '32123', '23K', '240L', 123, 'Jalan Fajar', 'Taman Fajar', 'majlis perbandaran kluang Johor 86000 Kluang Johor'),
(19, 2018, 'Premis Kediaman', '6 kali seminggu', 'Selasa', 'JHKG01', 'Komersial Bertingkat', 'Komersial Kerbside', '76', 'catat', '240L', 45, 'Jalan Fajar', 'Tmn intan', 'hello worldss'),
(20, 2018, 'Premis Kediaman', '2 kali seminggu', 'Rabu', 'JHKG01', 'Rumah Kediaman', 'Komersial Kerbside', '321', '9Kperbandaran', '1100L', 300, 'Jalan Fajar', 'Taman Fajar', 'Selasa mpk'),
(21, 2018, 'Premis Perniagaan', '2 kali seminggu', 'Selasa', 'JHKG01', 'Rumah Kediaman', 'Rumah Pangsa', '21', 'heehehe 12', '240L', 198, 'Jalan Intan', 'Taman Intan', 'intan'),
(22, 2019, 'Premis Perniagaan', '6 kali seminggu', 'Jumaat', 'JHKG01', 'Rumah Kediaman', 'Rumah Pangsa', '9189', 'MPK 234', 'RORO10M', 19, 'Jalan maju', 'taman angerik', 'Majlis Perbandaran kluang 2010'),
(23, 2020, 'Premis Perniagaan', '6 kali seminggu', 'Isnin', 'JHKG01', 'Komersial Bertingkat', 'Komersial Kerbside', '200', 'MPK 0056', '1100L', 100, 'Jalan Kluang', 'Taman Sri Kluang', 'Catatan MPK'),
(24, 2017, 'CBK', '6 kali seminggu', 'Jumaat', 'JHKG02', 'Komersial Bertingkat', 'Komersial Bulk', '900', '231', '120L', 1234, 'Jalan Baru', 'Tmn Fajar', 'Catatan Hari ini'),
(25, 2018, 'Premis Perniagaan', '6 kali seminggu', 'Rabu', 'JHKG01', 'Komersial Bertingkat', 'Rumah Pangsa', '2999', 'MPK 0019', '1100L', 918, 'Jalan Bendahari', 'Taman Intan', 'MPK Kluang'),
(26, 2019, 'Premis Kediaman', '6 kali seminggu', 'Ahad', 'JHKG01', 'Rumah Kediaman', 'Komersial Bulk', '9001', 'MPK 0919', '1100L', 1010, 'Jalan Dedikasi', 'Taman Intan', 'Catatan MPK 2010'),
(27, 2019, 'CBK', '6 kali seminggu', 'Khamis', 'JHKG02', 'Komersial Bertingkat', 'Rumah Pangsa', '3320', 'MPK 981', '240L', 20101, 'Jalan Makmur', 'Taman Fajar', 'Majlis Daerah Pontian'),
(28, 2020, 'CBK', '2 kali seminggu', 'Selasa', 'JHKG02', 'Rumah Kediaman', 'Komersial Bulk', '9817', 'MPK 2131', '1100L', 9188, 'Jalan Kluang', 'Taman Fajar', 'Dikemaskini oleh admin'),
(29, 2020, 'Premis Perniagaan', '2 kali seminggu', 'Jumaat', 'JHKG01', 'Komersial Bertingkat', 'Institusi', '456', 'MPK 987', 'RORO10M', 2345, 'Jalan Kluang', 'Taman Fajar', 'Kluang Indah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pembersihan_awam`
--
ALTER TABLE `pembersihan_awam`
  ADD PRIMARY KEY (`IDPembersihan`);

--
-- Indexes for table `sisa_pepejal`
--
ALTER TABLE `sisa_pepejal`
  ADD PRIMARY KEY (`IDPepejal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pembersihan_awam`
--
ALTER TABLE `pembersihan_awam`
  MODIFY `IDPembersihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `sisa_pepejal`
--
ALTER TABLE `sisa_pepejal`
  MODIFY `IDPepejal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
