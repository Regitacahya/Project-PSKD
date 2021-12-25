-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2021 at 03:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pskd02`
--

-- --------------------------------------------------------

--
-- Table structure for table `registrasi_user`
--

CREATE TABLE `registrasi_user` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `aktif` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registrasi_user`
--

INSERT INTO `registrasi_user` (`username`, `password`, `email`, `alamat`, `nama`, `role`, `aktif`, `token`) VALUES
('Admin', 'admin', 'Admin', 'Admin', 'Admin', '', '', ''),
('regitacahyawulan', '12345.Mm', 'cregita3@gmail.com', 'Jln.Sukowati, Gg.kalasan Rt 03/Rw 03 karangasri Ngawi KAB. NGAWI - NGAWI JAWA TIMUR ID 63218', 'Regita Cahya', '0', '0', '7fa617bf6049a1a5193bc4e030b1cc02eec81c1873a75d66a21a6e49f929d046');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registrasi_user`
--
ALTER TABLE `registrasi_user`
  ADD PRIMARY KEY (`username`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
