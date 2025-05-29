-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2023 at 08:51 PM
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
-- Database: `biblioteka`
--

-- --------------------------------------------------------

--
-- Table structure for table `autori`
--

CREATE TABLE `autori` (
  `autor_id` int(11) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `datum_rodjenja` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `autori`
--

INSERT INTO `autori` (`autor_id`, `ime`, `prezime`, `datum_rodjenja`) VALUES
(1, 'J.K.', 'Rowling', '1965-07-31'),
(2, 'Stephen', 'King', '1947-09-21'),
(3, 'Harper', 'Lee', '1926-04-28'),
(4, 'Jane', 'Austen', '1775-12-16'),
(5, 'F. Scott', 'Fitzgerald', '1896-09-24'),
(6, 'J.R.R.', 'Tolkien', '1892-01-03');

-- --------------------------------------------------------

--
-- Table structure for table `izdavaci`
--

CREATE TABLE `izdavaci` (
  `izdavac_id` int(11) NOT NULL,
  `naziv` varchar(255) NOT NULL,
  `adresa` varchar(255) DEFAULT NULL,
  `broj_telefona` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `izdavaci`
--

INSERT INTO `izdavaci` (`izdavac_id`, `naziv`, `adresa`, `broj_telefona`) VALUES
(1, 'Bloomsbury Publishing', '50 Bedford Square, London', '+44 20 7631 5600'),
(2, 'Scribner', '1230 Avenue of the Americas, New York', '+1 212-632-4900'),
(3, 'J. B. Lippincott & Co.', '227 South Sixth Street, Philadelphia', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `knjiga_pozajmljivaci`
--

CREATE TABLE `knjiga_pozajmljivaci` (
  `knjiga_id` int(11) NOT NULL,
  `pozajmljivac_id` int(11) NOT NULL,
  `datum_pozajmljivanja` date DEFAULT NULL,
  `datum_vracanja` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `knjiga_pozajmljivaci`
--

INSERT INTO `knjiga_pozajmljivaci` (`knjiga_id`, `pozajmljivac_id`, `datum_pozajmljivanja`, `datum_vracanja`) VALUES
(1, 1, '2023-02-27', '2023-03-13'),
(2, 2, '2023-02-27', '2023-03-13'),
(3, 3, '2023-02-27', '2023-03-13'),
(4, 4, '2023-02-27', '2023-03-13'),
(5, 5, '2023-02-27', '2023-03-13'),
(6, 6, '2023-02-27', '2023-03-13');

-- --------------------------------------------------------

--
-- Table structure for table `knjige`
--

CREATE TABLE `knjige` (
  `knjiga_id` int(11) NOT NULL,
  `naslov` varchar(255) NOT NULL,
  `autor_id` int(11) NOT NULL,
  `izdavac_id` int(11) NOT NULL,
  `zanr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `knjige`
--

INSERT INTO `knjige` (`knjiga_id`, `naslov`, `autor_id`, `izdavac_id`, `zanr`) VALUES
(1, 'Harry Potter i kamen mudrosti', 1, 1, 'Fantazija'),
(2, 'Sjaj', 2, 2, 'Horor'),
(3, 'Ubiti pticu rugalicu', 3, 3, 'Klasicna'),
(4, 'Gordost i predrasude', 4, 3, 'Romansa'),
(5, 'Veliki Getsbi', 5, 2, 'Klasicna'),
(6, 'Gospodar prstenova', 6, 1, 'Fantazija');

-- --------------------------------------------------------

--
-- Table structure for table `pozajmljivaci`
--

CREATE TABLE `pozajmljivaci` (
  `pozajmljivac_id` int(11) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `prezime` varchar(255) NOT NULL,
  `adresa` varchar(255) DEFAULT NULL,
  `broj_telefona` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pozajmljivaci`
--

INSERT INTO `pozajmljivaci` (`pozajmljivac_id`, `ime`, `prezime`, `adresa`, `broj_telefona`) VALUES
(1, 'John', 'Doe', '123 Main St., Anytown, USA', '555-1234'),
(2, 'Jane', 'Doe', '456 Maple Ave., Anytown, USA', '555-5678'),
(3, 'Bob', 'Smith', '789 Oak St., Anytown, USA', '555-9012'),
(4, 'Sara', 'Johnson', '246 Elm St., Anytown, USA', '555-3456'),
(5, 'Mike', 'Brown', '135 Pine St., Anytown, USA', '555-7890'),
(6, 'Mary', 'Jones', '579 Cedar St., Anytown, USA', '555-2345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autori`
--
ALTER TABLE `autori`
  ADD PRIMARY KEY (`autor_id`);

--
-- Indexes for table `izdavaci`
--
ALTER TABLE `izdavaci`
  ADD PRIMARY KEY (`izdavac_id`);

--
-- Indexes for table `knjiga_pozajmljivaci`
--
ALTER TABLE `knjiga_pozajmljivaci`
  ADD PRIMARY KEY (`knjiga_id`,`pozajmljivac_id`),
  ADD KEY `pozajmljivac_id` (`pozajmljivac_id`);

--
-- Indexes for table `knjige`
--
ALTER TABLE `knjige`
  ADD PRIMARY KEY (`knjiga_id`),
  ADD KEY `autor_id` (`autor_id`),
  ADD KEY `izdavac_id` (`izdavac_id`);

--
-- Indexes for table `pozajmljivaci`
--
ALTER TABLE `pozajmljivaci`
  ADD PRIMARY KEY (`pozajmljivac_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `knjiga_pozajmljivaci`
--
ALTER TABLE `knjiga_pozajmljivaci`
  ADD CONSTRAINT `knjiga_pozajmljivaci_ibfk_1` FOREIGN KEY (`knjiga_id`) REFERENCES `knjige` (`knjiga_id`),
  ADD CONSTRAINT `knjiga_pozajmljivaci_ibfk_2` FOREIGN KEY (`pozajmljivac_id`) REFERENCES `pozajmljivaci` (`pozajmljivac_id`);

--
-- Constraints for table `knjige`
--
ALTER TABLE `knjige`
  ADD CONSTRAINT `knjige_ibfk_1` FOREIGN KEY (`autor_id`) REFERENCES `autori` (`autor_id`),
  ADD CONSTRAINT `knjige_ibfk_2` FOREIGN KEY (`izdavac_id`) REFERENCES `izdavaci` (`izdavac_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
