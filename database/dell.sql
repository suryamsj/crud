-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 28, 2019 at 10:34 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dell`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` int(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jk` varchar(25) NOT NULL,
  `Alamat` varchar(30) NOT NULL,
  `TLahir` date NOT NULL,
  `KDMK` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `nama`, `jk`, `Alamat`, `TLahir`, `KDMK`) VALUES
(18107001, 'Muhammad Surya Jayadiprana', 'Laki - Laki', 'DKI Jakarta', '2000-04-12', 'A03'),
(18107002, 'Sherina', 'Perempuan', 'DKI Jakarta', '2000-06-28', 'A01'),
(18107003, 'Ince Clara Mituduan', 'Perempuan', 'Semarang', '2000-08-14', 'A01'),
(18107004, 'Cindy Natasya', 'Perempuan', 'Karawang', '2000-09-07', 'A02'),
(18107005, 'Fitra Fatimah Putri', 'Perempuan', 'Bekasii', '2000-01-01', 'A01'),
(18107006, 'Muhammad Wisnu Anggana', 'Laki - Laki', 'Ciamis', '2001-06-18', 'A05'),
(18107007, 'Aldi Mulia', 'Laki - Laki', 'DKI Jakarta', '2000-05-05', 'A03'),
(18107008, 'Aldi Kamaludin', 'Laki - Laki', 'DKI Jakarta', '2000-12-14', 'A01'),
(18107009, 'Muhammad Farhan Ramadhan', 'Laki - Laki', 'Bogor', '2000-01-25', 'A04'),
(18107010, 'Andhika Prayoga', 'Laki - Laki', 'DKI Jakarta', '2000-04-19', 'A03'),
(18107011, 'Revinita Amalia', 'Perempuan', 'DKI Jakarta', '2001-05-19', 'A06'),
(18107012, 'Putri Titian', 'Perempuan', 'Bandung', '1998-07-10', 'A02'),
(18107013, 'Erza Scarlet', 'Perempuan', 'Sumedang', '2000-03-28', 'A06'),
(18107014, 'Natsu Dragneel', 'Laki - Laki', 'Bali', '2000-12-12', 'A03'),
(18107015, 'Monkey D Dragon', 'Laki - Laki', 'East Blue', '1999-04-10', 'A04'),
(18107016, 'Monkey D Luffy', 'Laki - Laki', 'East Blue', '2000-05-15', 'A01'),
(18107017, 'Monkey D Garp', 'Laki - Laki', 'East Blue', '1999-12-09', 'A04'),
(18107018, 'Monkey D Ace', 'Laki - Laki', 'Marineford', '1998-10-15', 'A06'),
(18107019, 'Roronoa Zoro', 'Laki - Laki', 'Wano', '2000-02-29', 'A01');

-- --------------------------------------------------------

--
-- Table structure for table `matakuliah`
--

CREATE TABLE `matakuliah` (
  `KDMK` varchar(10) NOT NULL,
  `nm_mk` varchar(30) NOT NULL,
  `sks` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matakuliah`
--

INSERT INTO `matakuliah` (`KDMK`, `nm_mk`, `sks`) VALUES
('A01', 'Basis Data', 3),
('A02', 'Sistem Operasi', 4),
('A03', 'Logika Informatika', 4),
('A04', 'Bahasa Indonesia', 3),
('A05', 'Bahasa Arab', 2),
('A06', 'Bahasa Inggris', 3),
('A07', 'Metode Numerik', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `matakuliah`
--
ALTER TABLE `matakuliah`
  ADD PRIMARY KEY (`KDMK`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
