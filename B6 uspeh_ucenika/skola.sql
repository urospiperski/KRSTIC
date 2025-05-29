-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2023 at 09:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skola`
--

-- --------------------------------------------------------

--
-- Table structure for table `uspeh`
--

CREATE TABLE `uspeh` (
  `Razred` int(11) DEFAULT NULL,
  `Odlican` int(11) DEFAULT NULL,
  `Vrlodobar` int(11) DEFAULT NULL,
  `Dobar` int(11) DEFAULT NULL,
  `Dovoljan` int(11) DEFAULT NULL,
  `Nedovoljan` int(11) DEFAULT NULL,
  `ProsOcena` decimal(5,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `uspeh`
--

INSERT INTO `uspeh` (`Razred`, `Odlican`, `Vrlodobar`, `Dobar`, `Dovoljan`, `Nedovoljan`, `ProsOcena`) VALUES
(11, 4, 10, 3, 2, 0, '3.22'),
(22, 6, 7, 3, 4, 0, '4.21'),
(33, 2, 4, 6, 4, 0, '4.53'),
(41, 12, 4, 4, 4, 4, '2.80');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
