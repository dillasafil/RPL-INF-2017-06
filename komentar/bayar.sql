-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 19, 2017 at 03:14 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl`
--

-- --------------------------------------------------------

--
-- Table structure for table `bayar`
--

CREATE TABLE `bayar` (
  `nama` varchar(50) NOT NULL,
  `plat` varchar(10) NOT NULL,
  `rekening` bigint(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `bayar` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bayar`
--

INSERT INTO `bayar` (`nama`, `plat`, `rekening`, `id`, `bayar`) VALUES
('iin', 'apaaja', 46789, '57689', 3000),
('dilla', 'ab 456', 123456, 'ID12', 3000),
('syuhada', 'bl 67557 b', 673632, 'PRKR001', 1000),
('kak iin', 'KK 9870 AD', 919191, 'PRKR002', 1000),
('Rindang', 'PP 1000 AJ', 6768665, 'PRKR001', 3000),
('Yuhaniz', 'D 1234 KK', 89877475, 'PRKR001', 1500),
('nadia', 'bl 3433 mm', 264318263921, 'PRKR002', 3000),
('Riska', 'BL 899 KL', 856547354468, 'PRKR003', 500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bayar`
--
ALTER TABLE `bayar`
  ADD PRIMARY KEY (`rekening`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
