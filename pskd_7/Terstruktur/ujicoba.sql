-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2021 at 07:13 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `akademik`
--

-- --------------------------------------------------------

--
-- Table structure for table `ujicoba`
--

CREATE TABLE `ujicoba` (
  `teks1` varchar(225) NOT NULL,
  `teks2` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ujicoba`
--

INSERT INTO `ujicoba` (`teks1`, `teks2`) VALUES
('Pada bulan Oktober 2021 ini, suhu udara kota Solo terasa \r\nlebih panas dari hari-hari biasanya. Menurut laporan Dinas \r\nMeteorologi Kota Solo, suhu tertinggi kota Solo adalah 33 \r\nderajat Celcius pada Hari Rabu, 17 Oktober ya', 'Pada bulan Oktober 2021 ini, suhu udara kota Solo terasa \r\nlebih panas dari hari-hari biasanya. Menurut laporan Dinas \r\nMeteorologi Kota Solo, suhu tertinggi kota Bandung adalah \r\n32 derajat Celcius pada Hari Rabu, 17 Oktober'),
('3521bce8625a47f934dbca88c9505eb2', 'e069fa5cd13d7b5300c7118ab391cfe8');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
