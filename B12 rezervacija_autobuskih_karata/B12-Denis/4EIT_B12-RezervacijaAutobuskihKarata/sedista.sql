-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2023 at 08:55 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autobus`
--

-- --------------------------------------------------------

--
-- Table structure for table `sedista`
--

CREATE TABLE `sedista` (
  `ID` int(11) NOT NULL,
  `BrojSedista` int(11) NOT NULL,
  `Rezervacija` bit(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sedista`
--

INSERT INTO `sedista` (`ID`, `BrojSedista`, `Rezervacija`) VALUES
(1, 2, b'0'),
(2, 3, b'0'),
(3, 4, b'0'),
(4, 5, b'0'),
(5, 6, b'0'),
(6, 7, b'0'),
(7, 8, b'0'),
(8, 9, b'0'),
(9, 10, b'0'),
(10, 11, b'0'),
(11, 12, b'0'),
(12, 13, b'1'),
(13, 14, b'0'),
(14, 15, b'1'),
(15, 16, b'0'),
(16, 17, b'0'),
(17, 18, b'0'),
(18, 19, b'0'),
(19, 20, b'0'),
(20, 21, b'0'),
(21, 22, b'0'),
(22, 23, b'0'),
(23, 24, b'0'),
(24, 25, b'0'),
(25, 26, b'0'),
(26, 27, b'1'),
(27, 28, b'0'),
(28, 29, b'0'),
(29, 30, b'0'),
(30, 31, b'0'),
(31, 32, b'0'),
(32, 33, b'0'),
(33, 34, b'1'),
(34, 35, b'1'),
(35, 36, b'0'),
(36, 37, b'0'),
(37, 38, b'0'),
(38, 39, b'0'),
(39, 40, b'0'),
(40, 41, b'0'),
(41, 42, b'0'),
(42, 43, b'0'),
(43, 44, b'0'),
(44, 45, b'0'),
(45, 46, b'0'),
(46, 47, b'1'),
(47, 48, b'0'),
(48, 49, b'0'),
(49, 50, b'0'),
(50, 51, b'1'),
(51, 52, b'0'),
(52, 53, b'0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `sedista`
--
ALTER TABLE `sedista`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `sedista`
--
ALTER TABLE `sedista`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
