-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2023 at 09:56 PM
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
-- Database: `tvprogram`
--

-- --------------------------------------------------------

--
-- Table structure for table `program`
--

CREATE TABLE `program` (
  `id` int(11) NOT NULL,
  `vremeEmitovanja` time NOT NULL,
  `naziv` varchar(255) NOT NULL,
  `tipTekst` varchar(255) NOT NULL,
  `tipSlika` text NOT NULL,
  `dan` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `program`
--

INSERT INTO `program` (`id`, `vremeEmitovanja`, `naziv`, `tipTekst`, `tipSlika`, `dan`) VALUES
(1, '06:20:00', 'Zvala se Feriha', 'Informativni', 'images/info.png', '2023-03-01'),
(2, '10:30:00', 'Ovcica Sone', 'Crtac', 'images/crtac.png', '2023-03-01'),
(3, '12:00:00', 'Neki novi klinci', 'Rijaliti Show', 'images/rijaliti.png', '2023-03-01'),
(4, '13:00:00', 'Andrija i Andjelka specijal', 'Serija', 'images/serija.png', '2023-03-01'),
(5, '15:00:00', 'Mehanicar', 'Film', 'images/film.png', '2023-03-02'),
(6, '16:00:00', 'Mamurluk', 'Film', 'images/film.png', '2023-03-02'),
(7, '17:00:00', 'Lud, zbunjen, normalan', 'Serija', 'images/serija.png', '2023-03-02'),
(8, '11:00:00', 'eXploziv', 'Informativni', 'images/info.png', '2023-03-03'),
(9, '18:00:00', 'Vesti', 'Informativni', 'images/info.png', '2023-03-03'),
(10, '19:00:00', 'Terminator', 'Film', 'images/film.png', '2023-03-03');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `program`
--
ALTER TABLE `program`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `program`
--
ALTER TABLE `program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
